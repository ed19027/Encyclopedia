@extends('layouts.app')
@section('content')
<div class="row ml-0">
    <div class="d-flex mt-1">
        <h4>{{$specie->name_latvian}}</h4>&nbsp;
        <h5 style="padding-top: 2.5px;">({{$specie->name_latin}})</h5>

        @isset($specie->lsg)
        <svg width="2em" height="1.4em" viewBox="0 0 16 16" class="bi bi-circle-fill pt-1" fill="{{$specie->lsg->color}}" xmlns="http://www.w3.org/2000/svg">
            <title>Iekļauta Latvijas Sarkanās grāmatas {{$specie->lsg->category}}. kategorijā </title>
            <circle cx="8" cy="8" r="8"/>
        </svg>
        @endisset
    </div>
    @if (!Auth::guest() && Auth::user()->isAdmin())
    @php
        $specie_latin = str_replace(' ', '-', $specie->name_latin);
    @endphp
    <div class="col-sm">
        <a href="{{action('SpeciesController@edit', ['specie' => $specie_latin])}}" class="btn btn-outline-success float-right py-1 px-2" role="button">Rediģēt</a>
    </div>
    @endif
</div>
<hr class="mt-1">
<div class="container">
    @isset($specie->description)
    <div class="row">
        <h5 class="col-sm-12 pl-0">Apraksts</h5>
        <p>{{$specie->description}}</p>
    </div>
    @endisset
    @isset($specie->biology)
    <div class="row">
        <h5 class="col-sm-12 pl-0">Bioloģija</h5>
        <p>{{$specie->biology}}</p>
    </div>
    @endisset
    @isset($specie->size)
    @php
    $size = $specie->size;
    if($size < 1){
        $size *= 100;
    }
    elseif(fmod($size, 1) == 0){
       $size = (int)$size;             
    }
    @endphp
    <div class="row">
        <h5 class="col-sm-12 pl-0">Garums</h5>
        <p>
            Var sasniegt {{$size}} 
            @if($specie->size < 1) 
            centimetrus.
            @elseif($specie->size == 1)
            metrau.
            @elseif($specie->size > 1)
            metrus.  
            @endif
        </p>
    </div>
    @endisset
    @isset($specie->weight)
    @php
    $weight = $specie->weight;
    if($weight < 1){
        $weight *= 1000;
    }
    else{
       $weight = (int)$weight;             
    }
    @endphp
    <div class="row">
        <h5 class="col-sm-12 pl-0">Svars</h5>
        <p>
            Var sasniegt {{$weight}} 
            @if($specie->weight < 1) 
            gramus.
            @elseif($specie->weight == 1)
            kilogramu.
            @elseif($specie->weight > 1)
            kilogramus.  
            @endif
        </p>

    </div>
    @endisset
    @isset($specie->reproduction)
    <div class="row">
        <h5 class="col-sm-12 pl-0">Vairošanās</h5>
        <p>{{$specie->reproduction}}</p>
    </div>
    @endisset
    @isset($specie->prevalence)
    <div class="row">
        <h5 class="col-sm-12 pl-0">Izplatība</h5>
        <p>{{$specie->prevalence}}</p>
    </div>
    @endisset
    @isset($specie->lsg)
    <div class="row">
        <h5 class="col-sm-12 pl-0">Latvijas Sarkanajā grāmatā</h5>
        <p>{{$specie->lsg->description}}.</p>
    </div>
    @endisset
</div>
<script type="text/javascript">
    $(document).ready(function() {     


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('i.glyphicon-heart, i.glyphicon-heart-empty').click(function(){    
            var id = $(this).parents(".panel").data('id');
            var cObjId = this.id;
            var cObj = $(this);

            $.ajax({
               type:'POST',
               url:'/ajaxRequest',
               data:{id:id},
               success:function(data){
                  if(jQuery.isEmptyObject(data.success.attached)){
                    $(cObj).removeClass("like-post");
                  }else{
                    $(cObj).addClass("like-post");
                  }
               }
            });


        });      


        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });                                        
    }); 
</script>
@endsection