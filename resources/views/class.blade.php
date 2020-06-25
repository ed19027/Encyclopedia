@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <h4>{{$class->name_latvian}}</h4>&nbsp<h5>({{$class->name_latin}})</h5>
            @if ($class->name_latin == 'Osteichthyes')
            <p class="text-justify">Lielākā un dominējošā zivju grupa mūsdienās visā pasaulē. To skaitā ir ap 96% jeb ap 28,000 mūsdienās zināmo zivju sugu. Primitīvākās veidojušās Kembrija periodā pirms aptuveni 550 miljoniem gadu. Daudzveidības (dažādošanās) laikmets bijis Devona periodā. Raksturīgas gan pāra, gan nepāra spuras. Ķermenis klāts ar zvīņām. Skelets veidots no kauliem: nodalāms galvaskausa, ass un ekstremitāšu skelets. Ass skelets no skriemeļiem, kam ir augšējie un apakšējie loki. Ekstremitāšu skelets sastāv no spuras stariem - parasti tie savienoti ar plēvi. Galvenais elpošanas orgāns ir žaunas.</p>
            @elseif ($class->name_latin == 'Cyclostomata')
            <p class="text-justify">Senas, savrupas izcelsmes, no bezžokļaiņiem Kembrija periodā cēlusies mugurkaulnieku grupa. Skelets sastāv no skrimšļiem, kas pēc uzbūves (funkcijām) ļoti tuvs mugurkaulnieku mugurkaulam. Ķermenis kails, bez zvīņām, ieapaļš. Āda kaila, klāta ar gļotu dziedzeriem. Žaunas ar vākiem. Kustību orgāni ir nepāra spuras (pāra spuru nav). Galvas tuvumā abās ķermeņa pusēs ir septiņas apaļas žaunu atveres. Žokļu nav. Mute apaļa, sūcējtipa, ar ragveida zobiem uz piesūcekņa piltuves un mutes iekšienē. Nāsu atvere viena.</p>
            @endif
    </div>
    <div class="row">
        <a href="{{route('class.showSystematic', $class->name_latin)}}"  class="btn btn-success" role="button">Sistemātika</a>
    </div>
    <br>
    <div class="row">
        @php
        $limit = 0;
        @endphp
        @foreach ($species as $specie)
        @if($specie->family->order->clasz->id == $class->id and $limit < 3)
        @php
            $s = $specie->name_latin;
            $specie_latin = str_replace(' ', '-', $s);
        @endphp
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{$specie->name_latvian}}</h4>
                  <h6 class="card-subtitle mb-2 text-muted">{{$specie->name_latin}}</h6>
                  <a href="{{route('class.showSpecie', ['specie' => $specie_latin, 'class' => $class->name_latin])}}" class="stretched-link"></a>
                </div>
            </div>
        </div>
        @php
        $limit += 1;
        @endphp
        @endif
        @endforeach
    </div>
</div>
@endsection