<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Family;
use App\Subfamily;
use App\Genus;
use App\Species;
use App\Order;
use App\Clasz;


class SpeciesController extends Controller
{ 
    // public function index(Request $request) {
    //     $searchTerm = $request->input('searchTerm');
    //     $species = Species::search($searchTerm)->get();
    //     return view('search', array('species' => $species), array('searchTerm' => $searchTerm));
    // }

    public function create()
    {  
        return view('specie_create', array('families' => Family::all()->sortBy('name_latvian')->pluck('name_latvian','id')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name_latin' => 'string|unique:species|max:35',
            'name_latvian' => 'string|unique:species|max:35',
            'description' => 'string|max:4000',
            'biology' => 'string|max:4000',
            'size' => 'numeric',
            'weight' => 'numeric',
            'reproduction' => 'string|max:4000',
            'prevalence' => 'string|max:4000',
            'family_id' => 'required|exists:families,id',
            'lsg_id' => 'exists:lsg,category',
        );        
        $this->validate($request, $rules);  
        
        $specie = new Species();
        $specie->fill($request->all());
        $specie->save();
         
        $specie_latin = str_replace(' ', '-', $specie->name_latin);
        
        return redirect()->action('SpeciesController@show', ['specie' => $specie_latin]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($specie)
    {
        $specie_latin = str_replace('-', ' ', $specie);
        return view('specie', array('specie' => Species::where('name_latin', $specie_latin)->first()));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($specie)
    {
        $specie_latin = str_replace('-', ' ', $specie);
        
        $specie = Species::where('name_latin', $specie_latin)->firstOrFail();
        
        return view('specie_edit', array('families' => Family::all()->sortBy('name_latvian')->pluck('name_latvian','id')), array('specie' => $specie));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $specie)
    {
        $rules = array(
            'name_latin' => 'required|string|max:35',
            'name_latvian' => 'required|string|max:35',
            'description' => 'string|max:4000',
            'biology' => 'string|max:4000',
            'size' => 'numeric',
            'weight' => 'numeric',
            'reproduction' => 'string|max:4000',
            'prevalence' => 'string|max:4000',
            'family_id' => 'required|exists:families,id',
            'lsg_id' => 'required|exists:lsg,category',
        );        
        $this->validate($request, $rules);  
        
        $specie = Species::find($specie);;
        $specie->fill($request->all());
        $specie->save();
        
        
        $specie_latin = str_replace(' ', '-', $specie->name_latin);
        
        return redirect()->action('SpeciesController@show', ['specie' => $specie_latin]);
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
