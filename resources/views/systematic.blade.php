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
                              @foreach($orders as $key => $order)
                                @if($order->class_id == $class->id and $key == 1)
                                  Karta | {{$order->name_latvian}} ({{$order->name_latin}})
                                @endif
                              @endforeach
                              </button>
                              <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropright</span>
                              </button>
                              <div class="dropdown-menu">
                              @foreach($orders as $key => $order)
                                @if($order->class_id == $class->id and $key > 1)
                                <a class="dropdown-item" href="#">{{$order->name_latvian}} ({{$order->name_latin}})</a>
                                @endif
                              @endforeach
                              </div>
                            </div> 
                            <ul class="list-unstyled ml-5">
                                <div class="btn-group btn-sm dropright">
                                  <button type="button" class="btn btn-success">
                                  @foreach($families as $key => $family)
                                    @if($family->order_id == $order->id and $key == 1)
                                      Dzimta | {{$family->name_latvian}} ({{$family->name_latin}})
                                    @endif
                                  @endforeach
                                  </button>
                                  <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropright</span>
                                  </button>
                                  <div class="dropdown-menu">
                                  @foreach($orders as $key => $order)
                                    @if($family->order_id == $order->id  and $key > 1)
                                    <a class="dropdown-item" href="#">Dzimta - {{$family->name_latvian}} ({{$family->name_latin}})</a>
                                    @endif
                                  @endforeach
                                  </div>
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
