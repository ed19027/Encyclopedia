@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <div class="card mb-4">
            <div class="card-header pb-1 d-flex">       
                <h5 class="mb-2">Rediģēt sugu: {{$specie->name_latvian}}</h5>&nbsp;
                <h6 class="mt-1">({{$specie->name_latin}})</h6>
            </div>
            <div class="card-body">
                {{ Form::open(['action' => ['SpeciesController@update', 'specie' =>$specie->id], 'method' => 'put', 'class' => 'form-horizontal'])}}
                
                <div class="form-group row">
                {{ Form::label('family_id', 'Dzimta', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::select('family_id', $families, $specie->family->id, ['class' => 'form-control '.($errors->has('family_id') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('family_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('family_id') }}</strong>
                        </span>
                    @endif 
                    </div>
                </div>
                <div class="form-group row">
                {{ Form::label('name_latin', 'Nosaukums (Latīniski)', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::text('name_latin', $specie->name_latin, ['class' => 'form-control '.($errors->has('name_latin') ? ' is-invalid' : '')]) }}   
                    @if ($errors->has('name_latin'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name_latin') }}</strong>
                        </span>
                    @endif 
                    </div>
                </div>
                <div class="form-group row">
                {{ Form::label('name_latvian', 'Nosaukums (Latviski)', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::text('name_latvian', $specie->name_latvian, ['class' => 'form-control '.($errors->has('name_latvian') ? ' is-invalid' : '')]) }}   
                    @if ($errors->has('name_latvian'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name_latvian') }}</strong>
                        </span>
                    @endif 
                    </div>
                </div>
                <div class="form-group row">
                {{ Form::label('description', 'Apraksts', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::textarea('description', $specie->description, ['class' => 'form-control input-sm-12'.($errors->has('description') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('description'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif 
                    </div>
                </div>
                <div class="form-group row">
                {{ Form::label('biology', 'Bioloģija', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::textarea('biology', $specie->biology, ['class' => 'form-control '.($errors->has('biology') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('biology'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('biology') }}</strong>
                        </span>
                    @endif 
                    </div>
                </div>
                <div class="form-group row">
                {{ Form::label('size', 'Garums (m)', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::number('size', $specie->size, ['class' => 'form-control'.($errors->has('size') ? ' is-invalid' : ''), 'step' => '0.01']) }}
                    @if ($errors->has('size'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('size') }}</strong>
                        </span>
                    @endif 
                    </div>
                </div>
                <div class="form-group row">
                {{ Form::label('weight', 'Svars (kg)', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::number('weight', $specie->weight, ['class' => 'form-control'.($errors->has('weight') ? ' is-invalid' : ''), 'step' => '0.001']) }}
                    @if ($errors->has('weight'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('weight') }}</strong>
                        </span>
                    @endif 
                    </div>
                </div>
                <div class="form-group row">
                {{ Form::label('reproduction', 'Vairošanās', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::textarea('reproduction', $specie->reproduction, ['class' => 'form-control '.($errors->has('reproduction') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('reproduction'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('reproduction') }}</strong>
                        </span>
                    @endif 
                    </div>
                </div>
                <div class="form-group row">
                {{ Form::label('prevalence', 'Izplatība', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::textarea('prevalence', $specie->prevalence, ['class' => 'form-control '.($errors->has('prevalence') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('prevalence'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('prevalence') }}</strong>
                        </span>
                    @endif 
                    </div>
                </div>
                <div class="form-group row">
                {{ Form::label('lsg_id', 'Sarkanā grāmata', ['class' => 'col-md-4 col-form-label text-md-right pt-1']) }}
                    <div class="col-sm-2 pt-1">
                    {{ Form::label('radio', 'Nav iekļauta:', ['class' => 'control-label']) }}
                    </div>
                    <div class="col-sm-1 p-0 pt-1">
                    {{ Form::checkbox('radio', '', (($specie->lsg_id == '') ? true : false), ['style' => 'margin-top: 5.5px;']) }}
                    </div>
                    <div class="col-sm-2 p-0 pt-2">
                    {{ Form::range('lsg_id', $specie->lsg_id, ['min' => '0', 'max' => '4', 'class' => 'form-control-range'.($errors->has('lsg_id') ? ' is-invalid' : '')]) }}
                    
                    </div>
                    <div class="col-sm-1 pt-1">
                        <span id="rangeval" role="button" class="btn btn-outline-primary p-0 px-2">2</span>
                    </div>
                    @if ($errors->has('lsg_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('lsg_id') }}</strong>
                        </span>
                    @endif 
                </div>                    
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                    {{ Form::submit('Atjaunot', ['class' => 'btn btn-primary float-right']) }}
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
        </div>
    </div>
</div>
<script type="application/javascript">
$(document).ready(function () {
     $("#lsg_id").on('change', function () {
           $(this).attr('value', $(this).val());
           $('#rangeval').html($(this).val());
     })
});
$(document).ready(function () {
     if ($('#radio').is(':checked') == true){
         $('#lsg_id').attr('value', '').prop('disabled', true);
         $('#rangeval').html('');
     }
});
$(document).ready(function () {
     $("#radio").on('click', function () {
        if ($('#radio').is(':checked') == true){
            $('#lsg_id').attr('value', '').prop('disabled', true);
            $('#rangeval').html('');
        } else {
            $('#lsg_id').prop('disabled', false);
            $('#rangeval').html('');
        }
     })
});

</script>
@endsection