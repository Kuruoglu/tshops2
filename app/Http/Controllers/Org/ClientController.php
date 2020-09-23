<?php

namespace App\Http\Controllers\Org;

use App\Anons;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
         $anons = Anons::with('orders.user')->where('user_id', auth()->user()->id)->get();
        $clients=[];

        foreach ($anons as $itemAnons) {
            foreach ($itemAnons->orders as $itemOrder) {
               if(!$itemOrder->hasClient($itemOrder->user->id, $clients)) {
                  array_push($clients, $itemOrder->user);
               }
            }
        }

        return view('org.client.client', compact('clients'));
    }

}






