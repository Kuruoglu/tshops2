<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $user = User::find(Auth::user()->id);
            return view('home.profile.index', compact('user'));
        }
        else {
            return redirect(route('home'));
        }

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
//        dd($request->all());
        $user = User::findOrFail($id);
        $user->update($request->all());
        return back();
    }

    public function orders()
    {
//        dd('asd');
        if (auth()->check()) {
            $orders = Order::where('user_id', Auth::user()->id)->get();
            return view('home.profile.orders', compact('orders'));
        }
        else {
            return redirect(route('home'));
        }

    }
}






