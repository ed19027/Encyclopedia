@extends('layouts.app')
@section('content')
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<div class="container">
    <div class="row">
        <h4>{{$family->name_latvian}} dzimta</h4>&nbsp<h5>({{$family->name_latin}})</h5>
    </div>
    <div class="row">
        <p>Pausaulē ir atklātas {{$family->species_count}} šīs dzimtas sugas, no kurām {{$family->species_count_lv}} 
            ir sastopama(s) pie mums Latvijā.</p>
    </div>
</div>
<hr class="mt-0">
<div class="container m-0 p-0">
    <div class = "row">
    @foreach($species as $specie)
        @if($specie->family_id == $family->id)
        @php
            $s = $specie->name_latin;
            $specie_latin = str_replace(' ', '-', $s);
        @endphp
        <div class="col-sm-4 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="transform: rotate(0);">
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
                        <div class="mb-4 mt-1">
                            <form method="POST" action="{{ action('ClassController@store') }}">     
                                @csrf      
                                <input type="hidden" name="specie_id" value="{{ $specie->id }}"> 
                                <a type="submit" class="btn-svg" role="button" title="Skatīt vēlāk">
                                    <svg width="2.2em" height="2.2em" viewBox="0 0 16 16" class="bi bi-clock-fill mt-0" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    </svg> 
                                </a>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
    </div>
</div>
@endsection