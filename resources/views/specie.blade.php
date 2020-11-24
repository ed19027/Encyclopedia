@extends('layouts.app')
@section('content')
<div class="row ml-0">
    <h4>{{$specie->name_latvian}}</h4>&nbsp<h5>({{$specie->name_latin}})</h5>
    @isset($specie->lsg)
    <svg width="2em" height="1.4em" viewBox="0 0 16 16" class="bi bi-circle-fill pt-1" fill="{{$specie->lsg->color}}" xmlns="http://www.w3.org/2000/svg">
        <title>Iekļauta Latvijas Sarkanās grāmatas {{$specie->lsg->category}}. kategorijā </title>
        <circle cx="8" cy="8" r="8"/>
    </svg>
    @endisset
</div>
<hr class="mt-1">
<div class="container">
    @isset($specie->descrition)
    <div class="row">
        <h5>Apraksts</h5>
        <p>{{$specie->descrition}}</p>
    </div>
    @endisset
    @isset($specie->biology)
    <div class="row">
        <h5>Bioloģija</h5>
        <p>{{$specie->biology}}</p>
    </div>
    @endisset
    @isset($specie->size)
    <div class="row">
        <h5>Garums</h5>
        <div class="col-sm-12 pl-0">
            <p>Īpatņi var sasniegt garumu līdz {{$specie->size}} metriem.</p>
        </div>
    </div>
    @endisset
    @isset($specie->weight)
    <div class="row">
        <h5>Svars</h5>
        <div class="col-sm-12 pl-0">
            <p>Īpatņi var sasniegt svaru līdz {{$specie->weight}} kilogramiem.</p>
        </div>
    </div>
    @endisset
    @isset($specie->reproduction)
    <div class="row">
        <h5>Vairošanās</h5>
        <p>{{$specie->reproduction}}</p>
    </div>
    @endisset
    @isset($specie->prevalence)
    <div class="row">
        <h5>Izplatība</h5>
        <div class="col-sm-12 pl-0">
            <p>{{$specie->prevalence}}</p>
        </div>
    </div>
    @endisset
    @isset($specie->lsg)
    <div class="row">
        <h5>Latvijas Sarkanajā grāmatā</h5>
        <div class="col-sm-12 pl-0">
            <p>{{$specie->lsg->description}}.</p>
        </div>
    </div>
    @endisset
</div>
@endsection