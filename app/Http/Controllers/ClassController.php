<?php

namespace App\Http\Controllers;

use App\Species;
use App\Order;
use App\Clasz;
use App\Family;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($class)
    {
        return view('systematic', array('class' => Clasz::where('name_latin', $class)->firstOrFail(), 'orders' => Order::all(), 'families' => Family::all()));
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
    public function show($class)
    {
        /*
        $species = Species::where(function ($query) {
            $query->select('name_latin')
                ->from('family')
                ->where('order', 'Anguiliformes')
                ->limit(1);
        }, 'Cyprinidae')->get();
        */
        return view('class', array('class' => Clasz::where('name_latin', $class)->firstOrFail(), 'species' => Species::all()));
        /*
        $species = Species::where(function ($query) {
            $query->select('order')
                ->from('family')
                ->where(function ($query) {
                    $query->select('class')
                        ->from('order')
                        ->where('class', $class)
                }, 'Pro')->get();)
        }, $class)->get();
        */
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
