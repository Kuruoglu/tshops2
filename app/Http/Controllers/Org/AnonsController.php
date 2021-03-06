<?php
namespace App\Http\Controllers\Org;

use App\Brand;
use App\Anons;
use App\Category;
use App\Mail\NewUserNotification;
use App\Order;
use App\Purchase;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\AnonsStoreRequest;


class AnonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anonses = [];
        $purchase = Purchase::all();
       $anons = Anons::with('user','brand', 'users.orders')->where('user_id', Auth::user()->id)->get();
       foreach ($anons as $itemAnons) {
           if(!$itemAnons->hasAnons($itemAnons->id, $purchase)) {
              array_push($anonses, $itemAnons);
           };
       }

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
    public function store(AnonsStoreRequest $request)
    {

//        dd($request->all());
        $anons = Anons::create($request->all());
        return redirect()->route('anons.index');
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
        $orders = Order::where('user_id', $anons->user->id)->where('anons_id', $anons->id)->get();
        $sum = $anons->orders->sum('price');
//        dd($sum);
        return view('org.anons.show', compact('anons', 'orders'));
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
    public function update(AnonsStoreRequest $request, Anons $anon)
    {
        dd($request);
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
