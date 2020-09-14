<?php

namespace App\Http\Controllers\Org;

use App\Anons;
use App\Http\Controllers\Controller;
use App\Order;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function all()
    {
        $anons = Anons::with('orders', 'user')->where('user_id', Auth::user()->id)->get();
        $orders = [];
        foreach ($anons as $ordersAll) {
            foreach ($ordersAll->orders as $order) {
                array_push($orders, $order);
            };
        };
        $statuses = Status::all();
        return view('org.orders', compact('statuses', 'orders'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *  * @param  int  $id
     */
    public function status($id)
    {
        $anons = Anons::with('orders', 'user')->where('user_id', Auth::user()->id)->get();
        $orders = [];
        foreach ($anons as $ordersAll) {
            foreach ($ordersAll->orders as $order) {
                if($order->status_id == $id) {
                    array_push($orders, $order);
                }
            }
        }
        $statuses = Status::all();
        return view('org.orders', compact('orders', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //
    }
}
