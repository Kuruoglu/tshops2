<?php
namespace App\Http\Controllers\Org;

use App\Brand;
use App\Anons;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $anonses = Anons::with('brand', 'user')->get();
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
     * Display the specified resource.
     *
     * @param  \App\Anons  $anon
     * @return \Illuminate\Http\Response
     */
    public function show(Anons $anon)
    {

        dd($anon);
        $anons = Anons::with('users')->where('id', $anon->id);
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
