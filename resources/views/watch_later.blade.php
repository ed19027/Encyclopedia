@extends('layouts.app')
@section('content')
@isset($later)
<div class="container">
    <div class="row">

    </div>
</div>
@endisset
@empty($later)
<div class="container">
    <div class="row">
            <div class="card">
                <h4 class="list-group-item list-group-item-primary">You haven't added any species to Watch Later!</h4>
            </div>
    </div>
</div>
@endempty
@endsection