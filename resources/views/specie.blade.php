@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h4>{{$specie->name_latvian}} dzimta</h4>&nbsp<h5>({{$specie->name_latin}})</h5>
    </div>
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
        <br>
        <h6>Īpatņi var sasniegt garumu līdz {{$specie->size}} metriem</h6>
    </div>
    @endisset
    @isset($specie->weight)
    <div class="row">
        <h5>Svars</h5>
        <p class="d-xm-block">Īpatņi var sasniegt svaru līdz {{$specie->weight}} kilogramiem</p>
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
        <p>{{$specie->prevalence}}</p>
    </div>
    @endisset
</div>
@endsection