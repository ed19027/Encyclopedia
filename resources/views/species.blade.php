@extends('layouts.app')
@section('content')
<script type="application/javascript">
$(document).ready(function () {
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $("#specie").off('click', '.fav').on('click', '.fav', function () {
    
        $.ajax({
            type: "POST",
            url:'/ajaxRequest',
            data: {id:id},
            success: function (data) {
                $("#"+data["id"]).toggleClass("btn-success btn-light");    
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    })
});
$(function () {
  $('[data-toggle="popover"]').popover()
})  
    
</script>

<div class="container">
    <div class="row">
        <h4>{{$family->name_latvian}} dzimta</h4>&nbsp
        <h5 style="padding-top: 2.5px;">({{$family->name_latin}})</h5>
    </div>
    <div class="row">
        <p>Pausaulē ir atklātas {{$family->species_count}} šīs dzimtas sugas, no kurām {{$family->species_count_lv}} 
            ir sastopama(s) pie mums Latvijā.</p>
    </div>
</div>
<hr class="mt-0">
<div class="container m-0 p-0">
    <div id="specie" class = "row">
    @foreach($species as $specie)
        @if($specie->family_id == $family->id)
        @php
            $specie_latin = str_replace(' ', '-', $specie->name_latin);
        @endphp
        <div class="col-sm-4 mb-4">
            <div id="spec" class="card">
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
                    <a href="{{ url('/specie/'.$specie_latin)}}" class="stretched-link"></a>
                </div>
            </div>
        </div>
        @endif
    @endforeach
    </div>
</div>
@endsection