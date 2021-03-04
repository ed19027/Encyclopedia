@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h4>{{$class->name_latvian}}</h4>&nbsp
        <h5 style="padding-top: 2.5px;">({{$class->name_latin}})</h5>
        @if ($class->name_latin == 'Osteichthyes')
            <p class="text-justify">Lielākā un dominējošā zivju klase mūsdienās visā pasaulē. To skaitā ir ap 96% jeb ap 28,000 mūsdienās zināmo zivju sugu. Primitīvākās veidojušās Kembrija periodā pirms aptuveni 550 miljoniem gadu. Daudzveidības (dažādošanās) laikmets bijis Devona periodā. Raksturīgas gan pāra, gan nepāra spuras. Ķermenis klāts ar zvīņām. Skelets veidots no kauliem: nodalāms galvaskausa, ass un ekstremitāšu skelets. Ass skelets no skriemeļiem, kam ir augšējie un apakšējie loki. Ekstremitāšu skelets sastāv no spuras stariem - parasti tie savienoti ar plēvi. Galvenais elpošanas orgāns ir žaunas.</p>
            @elseif ($class->name_latin == 'Cyclostomata')
            <p class="text-justify">Senas, savrupas izcelsmes, no bezžokļaiņiem Kembrija periodā cēlusies mugurkaulnieku klase. Skelets sastāv no skrimšļiem, kas pēc uzbūves (funkcijām) ļoti tuvs mugurkaulnieku mugurkaulam. Ķermenis kails, bez zvīņām, ieapaļš. Āda kaila, klāta ar gļotu dziedzeriem. Žaunas ar vākiem. Kustību orgāni ir nepāra spuras (pāra spuru nav). Galvas tuvumā abās ķermeņa pusēs ir septiņas apaļas žaunu atveres. Žokļu nav. Mute apaļa, sūcējtipa, ar ragveida zobiem uz piesūcekņa piltuves un mutes iekšienē. Nāsu atvere viena.</p>
            @elseif ($class->name_latin == 'Amphibia')
            <p class="text-justify">Senākā sauszemes mugurkaulnieku klase, kuriem joprojām saglabājušās ūdens priekšteču pazīmes. To individuālajā attīstībā ir raksturīga vides maiņa: attīstības sākuma stadijas noris ūdenī, un kāpurs, kurš pielāgojies dzīvei ūdenī, pārvēršas (metamorfozē) pieaugušā dzīvniekā, kas dzīvo uz sauszemes. Abiniekus (arī rāpuļus) pēta zooloģijas apakšnozare — herpetoloģija. Abiniekiem ir ļoti plašs izplatības areāls. Tie nav sastoapami tikai Arktikā un Antarktīdā. Lielākā sugu daudzveidība vērojama tropos, daudz mazāka tā ir mērenā klimata joslā.</p>
            @elseif ($class->name_latin == 'Reptilia')
            <p class="text-justify">Pirmā īsto mugurkaulnieku klase, kuriem ir augstāko sauszemes mugurkaulnieku — amniotu — galvenās iezīmes. Viss dzīves cikls notiek uz sauszemes. Bet tomēr līdzīgi abiniekiem tie ir aukstasiņu — poikilotermi dzīvnieki ar nepastāvīgu ķermeņa temperatūru. Rāpuļus (arī abiniekus) pēta zooloģijas apakšnozare — herpetoloģija.</p>
            @elseif ($class->name_latin == 'Aves')
            <p class="text-justify">Ar spalvām klāta endotermiska (siltasiņu) mugurkaulnieku klase, kas dēj olas un primāri ir specializējušies lidošanai. Kopā pavisam ir vairāk nekā 10 000 putnu sugu. Tie dzīvo visas planētas ekosistēmās, sākot no Arktikas līdz pat Antarktīdai. Putnu lielums var būt no 5 centimetriem līdz pat 2,7 metriem. Putnus īsumā var raksturot kā divkājainus amniotus, kuru priekšējās ekstremitātes pārveidojušās spārnos, ķermenis klāts ar spalvām, ķermeņa temperatūra pastāvīga un ļoti augsta. Putni vairojas, dējot olas un perējot mazuļus. Putnus pēta zooloģijas apakšnozare — ornitoloģija.</p>
            @elseif ($class->name_latin == 'Mammalia')
            <p class="text-justify">Mugurkaulnieku attīstītākā klase. Organisma augstākā attīstība izpaužas visu orgānu sistēmu lielākā diferenciācijā un galvas smadzeņu visaugstākajā attīstībā. Tajās sevišķi attīstīts augstākās nervu darbības centrs — pusložu garoza, ko veido pelēkā smadzeņu viela. Sakarā ar to zīdītāju uzvedībai ir ļoti dažādas izpausmes. To veicina ļoti saliktie maņu orgāni, sevišķi dzirdes un ožas orgāni. Dzirdes orgānā ir iekšējā auss, vidusauss, kurā ir jau trīs dzirdes kauliņi — kāpslītis, laktiņa, āmuriņš —, labi attīstīta ārējā auss jeb ārējā auss eja, kuru apņem bungkauls. Ožas orgāns ir liela apjoma, tajā daudz ožas gliemežnīcu, un tas līdz ar dzirdes orgānu zīdītājiem ir vadošais orgāns barības iegūšanā, slēpjoties no vajātājiem un uzmeklējot sev līdzīgus.</p>
        @endif
    </div>
    @foreach ($species as $specie)
    @if ($specie->family->order->clasz->id == $class->id)
        <div class="row">
            <a href="{{route('class.showSystematic', $class->name_latin)}}"  class="btn btn-success" role="button">Sistemātika</a>
        </div>
        @break
    @endif
    @endforeach
</div>
<hr>
<div class="container m-0 p-0">
    <div class="row ">
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
                <div class="card-body p-3">
					<h4 class="card-title" >
						{{$specie->name_latvian}}
						@isset($specie->lsg)
						<svg width="0.9em" height="0.8em" viewBox="0 0 16 16" class="bi bi-circle-fill pb-1" fill="{{$specie->lsg->color}}" xmlns="http://www.w3.org/2000/svg">
							<title>Iekļauta Latvijas Sarkanās grāmatas {{$specie->lsg->category}}. kategorijā </title>
							<circle cx="8" cy="8" r="8"/>
						</svg>
						@endisset
					</h4>
					<h6 class="card-subtitle mb-2 text-muted">{{$specie->name_latin}}</h6>
					<a href="{{ url('/specie/'.$specie_latin)}}" class="stretched-link"></a>
                </div>
            </div>
        </div>
        @php
        $limit += 1;
        @endphp
        @endif
        @endforeach
        
        @if ($limit == 0)
        <h5 class="text-danger pl-3">Dziemžēl, šai klasei, vēl nav pievienota neviena suga.</h5>
        @endif
    </div>
</div>
@endsection