<?php

namespace App\Http\Controllers\Home;

use App\Anons;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AnonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $anons = Anons::with('users', 'orders')->where('id', $id)->first();

        return view('home.anons.show', compact('anons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
//        dd($request->all());

        $anons = Anons::with('users')->find($request->anons_id);
        $user = User::find($request->user_id);
//        dd($anons->users->contains($user));
        if (!$anons->users->contains($user)) {
            $anons->users()->attach($user);
            return back();
        }
        else {
            $anons->users()->detach($user);
           \App\Order::where('user_id', $user->id)->where('anons_id', $anons->id)->delete();
            return back();
        }

//        Mail::to('7395836@gmail.com')->send(new NewUserNotification());

//        Mail::send('mails.register', [], function($m){
//            $m->from('kudriashova.ag@gmail.com')->to('7395836@gmail.com')->subject('Welcome');
//        });
        return redirect()->route('show.anons', $anons);
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
