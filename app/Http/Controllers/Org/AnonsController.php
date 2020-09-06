<?php
namespace App\Http\Controllers\Org;

use App\Brand;
use App\Anons;
use App\Category;
use App\Mail\NewUserNotification;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AnonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $anonses = Anons::with('user','brand', 'users.orders')->get();
//       dd($anonses);
       return view('org.anons.anons', compact('anonses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('org.anons.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $anons = Anons::create($request->all());
        return redirect()->route('anons.index');
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
        }

//        Mail::to('7395836@gmail.com')->send(new NewUserNotification());

        Mail::send('mails.register', [], function($m){
            $m->from('kudriashova.ag@gmail.com')->to('7395836@gmail.com')->subject('Welcome');
        });
        return redirect()->route('anons.show', $anons);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anons  $anon
     * @return \Illuminate\Http\Response
     */
    public function show(Anons $anon)
    {

//        dd($anon);
        $anons = Anons::with('users', 'orders')->where('id', $anon->id)->first();

        $sum = $anons->orders->sum('price');
//        dd($sum);
        return view('org.anons.show', compact('anons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anons  $anon
     * @return \Illuminate\Http\Response
     */
    public function edit(Anons $anon)
    {
//        dd($anon);
        $anons = Anons::findOrFail($anon->id);
        $categories = Category::all();
        $brands = Brand::all();
//        dd($anons);

        return view('org.anons.edit', compact('anons', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anons  $anon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anons $anon)
    {
        $item = Anons::findOrFail($anon->id);
        $item->update($request->all());
        return redirect()->route('anons.edit', $item);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anons  $anon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anons $anon)
    {

        Anons::findOrFail($anon->id)->delete();
        return redirect()->route('anons.index');
    }
}
