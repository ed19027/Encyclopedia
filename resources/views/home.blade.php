@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Panelis</div>
                <div class="card-body">
                    <p class="mb-0">Jūs esat pieteicies !</p>
                    @if(isset($errors))
                    @foreach($errors->all() as $message)
                        <p class="has-error text-danger mt-1 mb-0">{{ $message }}</p>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

