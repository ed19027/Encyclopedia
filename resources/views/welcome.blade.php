@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4>Latvijas dzīvnieku sugu enciklopēdija</h4>
    </div>
</div>
<hr class="mt-1">
<div class="row">
    <div class="col-sm-9">
        <p class="text-justify">Sugu enciklopēdija ir apjomīga brīvpieejas datu krātuve par Latvijā sastopamajām dzīvnieku sugām. Pašlaik tajā atrodamas ziņas par gandrīz 90 sugām. Enciklopēdija sniedz iespēju ielūkoties Latvijas dabas daudzveidības visdažādākajos tematos. Tā joprojām tiek papildināta ar jauniem sugu aprakstiem un attēliem.</p>
    </div>
    <div class="col-sm">
        <img src="{{ asset('briedis.jpg') }}" class="rounded float-right w-100" alt="Alnis">
    </div>
</div>
@endsection