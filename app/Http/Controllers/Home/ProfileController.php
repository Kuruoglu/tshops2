<?php

namespace App\Http\Controllers\Home;

use App\Anons;
use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
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
        $user = User::findOrFail($id);
        $user->update($request->all());
        return back()->with('success', 'Поздравляю вы обновили свой профиль и можете учавствовать в покупках');
    }

    public function orders()
    {
         $orders = Order::with('status', 'anons.user')->where('user_id', Auth::user()->id)->get();
         return view('home.profile.orders', compact('orders'));
    }
    public function anonses()
    {
        $user = User::with('anonses.user')->where('id', Auth::user()->id)->first();

        return view('home.profile.anons', compact('user'));
    }
    public function products()
    {
         $products = Product::where('user_id', Auth::user()->id)->get();

        return view('home.profile.product', compact('products'));
    }
}






