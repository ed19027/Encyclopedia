<?php

namespace App\Http\Controllers;

use App\Species;
use App\Order;
use App\Clasz;
use App\Family;
use App\WatchLater;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSystematic($class)
    {
        return view('systematic', array('class' => Clasz::where('name_latin', $class)->firstOrFail(), 'orders' => Order::all(), 'families' => Family::all()));
    }
    
    public function showFamilies($class, $order)
    {
        return view('families', array('class' => Clasz::where('name_latin', $class)->firstOrFail(), 'order' => Order::where('name_latin', $order)->firstOrFail(), 'families' => Family::all()));
    }
    
    public function showSpecies($class, $family)
    {
        return view('species', array('class' => Clasz::where('name_latin', $class)->firstOrFail(), 'family' => Family::where('name_latin', $family)->firstOrFail(), 'species' => Species::all()));
    }
    
    public function showSpecie($class, $specie)
    {
        $specie_latin = str_replace('-', ' ', $specie);
        
        return view('specie', array('class' => Clasz::where('name_latin', $class)->firstOrFail(), 'specie' => Species::where('name_latin', $specie_latin)->firstOrFail()));
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
        $user_id = auth()->user()->id;
        
        $later = new WhatchLater();  
        $later->specie_id=$request->specie_id;
        $later->user_id=$user_id;
        $later->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($class)
    {
        return view('class', array('class' => Clasz::where('name_latin', $class)->firstOrFail(), 'species' => Species::all()));
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
