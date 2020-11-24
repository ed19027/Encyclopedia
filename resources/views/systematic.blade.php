@extends('layouts.app')
@section('content')
<div class="row ml-1">
    <h4 class="d-inline">{{$class->name_latvian}} - Sistemātika</h4>
</div>
<hr class="mt-1">
<div class="container">
    <div class="row">
        <ul class="list-unstyled">
            <li>
                <button type="button" class="btn btn-outline-info" disabled>
                Valsts | {{$class->subdivision->division->kingdom->name_latvian}} ({{$class->subdivision->division->kingdom->name_latin}})
                </button>
            </li>
            <ul class="list-unstyled ml-5 mt-3">
                <li>
                    <button type="button" class="btn btn-outline-success" disabled>
                    Tips | {{$class->subdivision->division->name_latvian}} ({{$class->subdivision->division->name_latin}})
                    </button>
                </li>
                <ul class="list-unstyled ml-5 mt-3">
                    <li>
                        <button type="button" class="btn btn-outline-info" disabled>
                        Apakštips | {{$class->subdivision->name_latvian}} ({{$class->subdivision->name_latin}})
                        </button>
                    </li>
                    <ul class="list-unstyled ml-5 mt-3">
                        <li>
                            <button type="button" class="btn btn-outline-success" disabled>
                            Klase | {{$class->name_latvian}} ({{$class->name_latin}})
                            </button>
                        </li>
                        @foreach($orders as $order)
                        @if($order->class_id == $class->id)
                        <ul class="list-unstyled ml-5 mt-3">
                            <a type="button" class="btn btn-outline-info" href="{{route('class.showFamilies', ['order' => $order->name_latin, 'class' => $class->name_latin])}}">
                                Karta | {{$order->name_latvian}} ({{$order->name_latin}})
                            </a>
                            @foreach($families as $family)
                            @if($family->order_id == $order->id)
                            <ul class="list-unstyled ml-5 mt-3 mb-1">
                                <a role="button" class="btn btn-outline-success" href="{{route('class.showSpecies', ['family' => $family->name_latin, 'class' => $class->name_latin])}}">
                                    {{$family->name_latvian}} dzimta ({{$family->name_latin}})
                                </a>
                            </ul>
                            @endif
                            @endforeach
                        </ul>
                        @endif
                        @endforeach
                    </ul>
                </ul>
            </ul>
        </ul>
    </div>
</div>
<hr class="mt-1">
@endsection
