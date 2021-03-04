@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h4>Meklēšanas rezultāts priekš "{{$searchTerm}}"</h4>
    </div>
</div>
<hr class="mt-0">
<div class="container m-0 p-0">
    <div id="specie" class = "row">
    @foreach($species as $specie)
        <div class="col-sm-4 mb-4">
            <div id="spec" class="card" data-id="{{ $specie->id }}">
                <div class="card-body p-3">
                    <h4 class="card-title" >
                    {{$specie->name_latvian}}
                    @isset($specie->lsg)
                    <svg width="0.9em" height="0.8em" viewBox="0 0 16 16" class="bi bi-circle-fill pb-1" fill="{{$specie->lsg->color}}" xmlns="http://www.w3.org/2000/svg">
                        <title>Iekļauta Latvijas Sarkanās grāmatas {{$specie->lsg->category}}. kategorijā </title>
                        <circle cx="8" cy="8" r="8"/>
                    </svg>
                    @endisset
                    </h4>
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
