@extends('layouts.app')
@section('content')
<div class="row ml-0">
    <h4>Administratora panelis</h4>&nbsp;
</div>
<hr class="mt-1">
<div class="container">
    <div class="row">
      <div class="col-sm-4 p-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pievienot sugu</h5>
              <hr class="mt-1 mb-2">
            <p class="card-text text-justify">Pievienojot jaunu sugu tā tiks neatgriezeniski saglabāta sistēmas datu bāzē.</p>
            <br>
            <a href="{{ url('specie/create') }}" class="btn btn-outline-success mt-2">Pievienot</a>
          </div>
        </div>
    </div>
</div>
@endsection