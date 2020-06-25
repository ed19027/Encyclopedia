@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h4 class="d-inline">{{$class->name_latvian}} - Sistemātika</h4>
    </div>
    <br>
    <div class="row">
        <ul class="list-unstyled">
            <li>
                <button type="button" class="btn btn-success" disabled>
                Valsts | {{$class->subdivision->division->kingdom->name_latvian}} ({{$class->subdivision->division->kingdom->name_latin}})
                </button>
            </li>
            <ul class="list-unstyled ml-5 mt-2">
                <li>
                    <button type="button" class="btn btn-success" disabled>
                    Tips | {{$class->subdivision->division->name_latvian}} ({{$class->subdivision->division->name_latin}})
                    </button>
                </li>
                <ul class="list-unstyled ml-5 mt-2">
                    <li>
                        <button type="button" class="btn btn-success" disabled>
                        Apakštips | {{$class->subdivision->name_latvian}} ({{$class->subdivision->name_latin}})
                        </button>
                    </li>
                    <ul class="list-unstyled ml-5 mt-2">
                        <li>
                            <button type="button" class="btn btn-success" disabled>
                            Klase | {{$class->name_latvian}} ({{$class->name_latin}})
                            </button>
                        </li>
                        <ul class="list-unstyled ml-5 mt-1">
                            <div class="btn-group btn-sm dropright">
                                <button type="button" class="btn btn-success">
                                @php
                                    $count = 0;  
                                @endphp
                                @foreach($orders as $order)
                                    @if($order->class_id == $class->id and $count == 0)
                                        @php
                                            $count += 1;
                                            $classId[] = array('id' => $order->class_id);
                                            $size = sizeof($classId);
                                        @endphp
                                        Karta | {{$order->name_latvian}} ({{$order->name_latin}})
                                    @endif
                                @endforeach
                                </button>
                                @if($size >= 1)
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropright</span>
                                </button>
                                <div class="dropdown-menu">
                                @foreach($orders as $key => $order)
                                    @if($order->class_id == $class->id and $key > 0)
                                        <a class="dropdown-item" href="#">{{$order->name_latvian}} ({{$order->name_latin}})</a>
                                    @endif
                                @endforeach
                                </div>
                                @endif
                            </div> 
                            <ul class="list-unstyled ml-5">
                                <div class="btn-group btn-sm dropright">
                                <button type="button" class="btn btn-success">
                                @php
                                    $count = 0;  
                                @endphp
                                @foreach($families as $family)
                                    @if($family->order->class_id == $class->id and $count == 0)
                                        @php
                                            $count += 1;
                                            $classId[] = array('id' => $family->class_id);
                                            $size = sizeof($classId);
                                        @endphp
                                        Dzimta | {{$family->name_latvian}} ({{$family->name_latin}})
                                    @endif
                                @endforeach
                                </button>
                                @if($size > 0)
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropright</span>
                                </button>
                                <div class="dropdown-menu">
                                @foreach($families as $family)
                                    @if($family->order->class_id == $class->id)
                                        <a class="dropdown-item" href="{{route('class.showSpecies', ['family' => $family->name_latin, 'class' => $class->name_latin])}}">{{$family->name_latvian}} ({{$family->name_latin}})</a>
                                    @endif
                                @endforeach
                                </div>
                                @endif
                            </div>
                            </ul>
                        </ul>
                    </ul>
                </ul>
            </ul>
        </ul>
    </div>
</div>
@endsection
