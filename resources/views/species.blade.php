@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h4>{{$family->name_latvian}} dzimta</h4>&nbsp<h5>({{$family->name_latin}})</h5>
    </div>
    <div class="row">
        <p>Pausaulē ir atklātas {{$family->species_count}} šīs dzimtas sugas, no kurām {{$family->species_count_lv}} 
            ir sastopamas pie mums Latvijā.</p>
    </div>
    <div class = "row">
    @foreach($species as $specie)
        @if($specie->family_id == $family->id)
        @php
            $s = $specie->name_latin;
            $specie_latin = str_replace(' ', '-', $s);
        @endphp
        <div class="col-sm-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$specie->name_latvian}}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">{{$specie->name_latin}}</h6>
                    <a href="{{route('class.showSpecie', ['specie' => $specie_latin, 'class' => $class->name_latin])}}" class="stretched-link"></a>
                </div>
            </div>
        </div>
        @endif
    @endforeach
    </div>
</div>
@endsection