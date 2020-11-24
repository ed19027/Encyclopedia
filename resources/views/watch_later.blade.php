@extends('layouts.app')
@section('content')
@if($later->isnotEmpty())
<div class="container">
    <div class="row">
        $later
    </div>
</div>
@elseif($later->isEmpty())
<div class="row ml-0">
    <h4>Skatīt vēlāk</h4>
</div>
<hr class="mt-0">
<div class="container">
    <div class="row">
        <h5 class="text-danger">Neviena suga vēl nav pievienota</h5>
    </div>
</div>
@endif
@endsection