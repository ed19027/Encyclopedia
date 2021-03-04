@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h4>Kārta - {{$order->name_latvian}} </h4>&nbsp
        <h5 style="padding-top: 2.5px;">({{$order->name_latin}})</h5>
    </div>
    <div class="row">
        @if ($order->name_latin == 'Petromyzontiformes')
        <p class="text-justify">Zivīm līdzīgi apaļmutnieki ar garu, ļoti lokanu ķermeni. Barojas, piesūcoties zivīm vai citiem ūdens dzīvniekiem. Mēdz būt gan parazītiskas, gan neparazītiskas sugas. Galvaskauss trīsnodalījumu, uzbūvē primitīvs. Gremošanas sistēma pielāgota barības sūkšanai. Barības objektam piesūcas, pārgraužot ādu un ieurbjoties audos. Vielas siekalu dziedzeros aizkavē asins sarecēšanu un šķīdina upura olbaltumvielas mīkstajos audos. Kuņģa nav. Ikrus nērš pašizraktās bedrveida ieplakās. Apaugļošanās ārēja. Raksturīga ilga - līdz 8 gadus gara (dažām sugām - vēl vairāk) kāpura jeb ņurņika stadija. Kāpuri šo laiku pavada pasīvi, ierakušies dūņās vai grunts substrātā un pārtiekot no detrīta. Pēc metamorfozes jeb pārvēršanās vecuma sasniegšanas tie iegūst pieauguša nēģa izskatu un dzīvesveida pazīmes. Pieaugušā stadijā dzīvo no dažām nedēļām līdz 5 gadiem, un šis ilgums ir ļoti dažāds dažādām nēģu sugām. Pēc ikru iznēršanas pieaugušie īpatņi iet bojā.</p>
        @elseif ($order->name_latin == 'Acipenseriformes')
        <p class="text-justify">Savrupi evolucionējusi sena kaulzivju (ganoīdzivju) grupa. Šādu zivju tiešo priekšteču fosilijas attiecas jau uz Triasa perioda beigām apmēram pirms 200 miljoniem gadu un kuras ir ļoti maz izmainījušās evolūcijas gaitā līdz mūsdienām. Ķermenis klāts ar piecām kaula vairodziņu rindām. Starp kaula vairodziņu rindām novietotas rombiskas plātnītes. Aste nesimetriska - astes spuras augšējā daļa manāmi garāka un lielāka. Skelets veidots pārsvarā no skrimšļa; tipiski kauli sedz tikai galvaskausu. Ass skelets ir nepārkaulota horda. Ķermenis slaids, galvas priekšdaļa slaida, purnveida.</p>
        @elseif ($order->name_latin == 'Clupeiformes')
        <p class="text-justify">Saimnieciski viena no nozīmīgākajām kaulzivju kārtām. Galvenokārt jūru un okeānu zivis ar vairāk nekā 400 sugām četrās dzimtās (pēc dažām klasifikācijām - sešās dzimtās). No tām apmēram 20 zivju sugu nozveja dod aptuveni vienu trešdaļu ikgadējās nozvejas apjoma pasaulē.Nelielas, galvenokārt līdz 35 cm garas sāļūdeņu zivis ar slaidu, saplacinātu vai ieapaļu, sudrabaini mirdzošu ķermeni. Dzīvo baros. Vairāk nekā divas trešdaļas sugu tropu ūdeņos, pārsvarā atklātos, lai gan gandrīz vienmēr nārsto piekrastēs. Saldūdeņos mītošās sugas galvenokārt tropu klimatā, dienvidu puslodē.
        </p>
        @elseif ($order->name_latin == 'Salmoniformes')
        <p class="text-justify">Slaidas, vidēji lielas līdz lielas, spēcīgas ķermeņa uzbūves zivis. Maksimālais garums - līdz 1,5 metri. Ķermeni sedz sīkas vai vidēji lielas zvīņas. Daudzās dzimtās raksturīga tauku spura - neliels izaugums starp muguras spuru un asti. Atšķirībā no citām spurām tauku spurai nav staru. Sānu līnija pilnīga vai nepilnīga. Galvenokārt ceļotājzivis, retāk - saldūdeņos dzīvojošas zivis. Latvijā lašveidīgo kārtā ietilpst 5 dzimtas.</p>
        @elseif ($order->name_latin == 'Anguiliformes')
        <p class="text-justify">Galvenokārt jūru un okeānu seklūdeņos dzīvojošas ļoti slaidas, čūskveidīga izskata zivis. Daudz retāk tās mīt okeānu dziļūdeņos līdz 4-5 km dziļumam. Parasti 0,6-2,5 m garas, reti vairāk (līdz 4 m) vai mazāk (īsākā zušveidīgā - tikai 5 cm gara pieaugušā vecumā). Pārsvarā tumsas aktivitātes zivis, diennakts gaišajā laikā ierokas grunts dūņās (smiltīs) vai atrodas dabiskā slēptuvē (alā, zem priekšmeta). Raksturīgas ļoti sīkas, ādā iegrimušas zvīņas, bagātīgi gļotu dziedzeri. Spura gara, lentveidīgi savienota (muguras, astes, anālā). Vēdera spuru nav, krūšu spuras parasti ir, bet dažām sugām arī to nav. Raksturīga diezgan ilga kāpura attīstības stadija. Dažas sugas veic ļoti tālas nārsta migrācijas. Pasaulē plaši sastopama, komerciāli nozīmīga zivju kārta ar aptuveni 800 sugām.</p>
        @elseif ($order->name_latin == 'Cypriniformes')
        <p class="text-justify">Pasaulē plaši (atskaitot dienvidu puslodi) sastopama, gandrīz tikai saldūdeņu zivju kārta. Mērenā klimata joslā ziemeļu puslodē dominējošā vai viena no dominējošajām zivju kārtām gan pēc sugu skaita, gan faktiskā biežuma ūdenstilpēs. Pārsvarā vidēja lieluma vai sīkas zivis. Ķermeņa forma dažāda, pārsvarā sāniski saplacināta vai cilindriski ieapaļa, ķermenis segts ar zvīņām, kaula plātnītēm vai ir kails. Pie mutes mēdz būt taustekļi. Īpaša pazīme ir bezzobaini žokļi; barības sakošļāšana notiek ar nelieliem, bet labi attīstītiem rīkles zobiem. Eirāzijā, Āfrikā un Z-Amerikā sastopama zivju kārta ar vairāk nekā 400 ģintīm un 3360 sugām un daudzveidības centru DA-Āzijā.</p>
        @elseif ($order->name_latin == 'Siluriformes')
        <p class="text-justify">Pasaulē ļoti plaši sastopama, galvenokārt saldūdens zivju kārta, viena no lielākajām zivju klasē aiz karpveidīgajām. Daudzveidības centrs - tropu D-Amerikā un Āfrikā. Ķermenis ieapaļi cilindrisks ar saplacinātu galvu. Mute liela vai ļoti liela. Galvas kauli lieli. Peldpūslis mazs, kā rezultātā uznirst ar grūtībām. Raksturīgi taustekļi gan pie augšžokļa, gan pie apakšžokļa. Tie pilda nozīmīgu taustes funkciju. Daudzām sugām zvīņas sīkas, iegremdētas ādā vai zvīņu nav. Ir arī sugas ar kaula plātnītēm līdzīgu zvīņojumu. Ļoti dažāda garuma un dzīvesveida sugas - sezonāli sausajos tropu apgabalos spēj dzīvot izcili seklos ūdeņos, ierakties dūņās. Bieži dzīvo tuvu gultnei, vairākām sugām izteiktāka aktivitāte ir diennakts tumšajā laikā. Nodalīto dzimtu skaits dažādās klasifikācijās atšķiras (līdz 40 dzimtas), izšķir vairāk nekā 3100 sugas.</p>
        @elseif ($order->name_latin == 'Gadiformes')
        <p class="text-justify">Galvenokārt mērenā un aukstā klimata jūru un okeānu zivis ar visai mazizplatītu pazīmi - vairākām (2-3) nodalītām muguras spurām. Vai: ja spura viena, tad tā stiepjas pāri visai mugurai. Vēdera spuras novietotas tuvu pie rīkles. Spuras bez dzeloņiem (no tā arī atvasināts kārtas agrāk lietotais sinonīms Anacanthini). Ķermenis klāts ar sīkām zvīņām. Izplatīta pazīme pie mutes ir taustekļi. Peldpūslis neliels, slēgts. Sānu līnija pilnīga. Nodala līdz 8 dzimtas ar 550 sugām.</p>
        @elseif ($order->name_latin == 'Gasterosteiformes')
        <p class="text-justify">Tradicionālas vai ļoti neparastas (adatveida, jūras zirdziņa izskata) formas jūras-okeāna vai, retāk, saldūdeņu zivis. Pārsvarā mīt tropu-subtropu piekrastes aizaugušos ūdeņos. Ķermenis slaids vai ļoti slaids, kails vai klāts ar kaula plātnītēm. Dažām sugām uz muguras un(vai) vēdera ir savrupi dzeloņi. Spuru novietojums un staru skaits tajās ļoti dažāds. Žaunu atveres normāla lieluma vai ļoti šauras, dažos gadījumos - pušķveidīgas. Ķermeņa garums parasti 5-20 cm, reti vairāk vai mazāk. Pārtiek no planktona. Daudzām sugām novērojamas izteiktas rūpes par ikriem un(vai) mazuļiem, parasti tēviņi apsargā pašbūvētās ligzdas vai ikrus iznēsā īpašās ādas krokās. Uzturas starp jūraszālēm, citiem ūdensaugiem, briesmu gadījumā spēj (sevišķi adatveidīgās sugas) ātri nostāties vertikālā pozā, atdarinot ūdensauga lapu vai (jūras zirdziņiem līdzīgās sugas) mainīt krāsu. Nodala 5 dzimtas un ap 360 sugas. Nodalīto sugu skaits dažādās klasifikācijās ļoti variē atkarībā no iekļauto dzimtu apjoma.</p>
        @elseif ($order->name_latin == 'Perciformes')
        <p class="text-justify">Skaitliski lielākā zivju klases (un visu mugurkaulnieku!) kārta. Sastopama visā pasaulē dažādos ūdeņos. Daudzviet šajā kārtā ietilpstošās sugas ir arī konkrētās ģeogrāfiskās teritorijās vismasveidīgāk sastopamo zivju skaitā. Ļoti dažāda garuma zivis, galvenokārt 5-90 cm. Slaidas, sāniski saplacinātas zivis, ķermenis segts ar zvīņām. Sānu līnija pilnīga vai sānu līnijas nav. Muguras spura divdaļīga vai viena, ļoti gara. Muguras spuras pirmajā (priekšējā) daļā stari mēdz būt dzeloņaini, otrajā (aizmugurējā) - mīksti. Vēdera spuras novietotas tuvu galvai. Nodala apmēram 170 dzimtas ar mazliet vairāk nekā 10,000 sugām.</p>
        @elseif ($order->name_latin == 'Pleuronectiformes')
        <p class="text-justify">Jūru un okeānu dažādā dziļumā visā pasaulē izplatīta zivju kārta. Pārsvarā šīs kārtas sugas mīt līdz 400 m dziļumam. Ķermenis plakans, rombveidīgs, segts ar zvīņām vai kaula plātnītēm. Pieaugušiem īpatņiem acis novietotas vienā ķermeņa pusē. Tas izraisa asimetriju galvas kaulu novietojumā un arī ķermeņa kopējo asimetriju. Raksturīga ieapaļa astes spura un ļoti gara muguras (līdz acu līmenim) un anālā spura - daudzām sugām tās stiepjas gandrīz visā ķermeņa garumā. Visbiežāk grunts tuvumā dzīvojošas zivis, tāpēc ķermeņa augšpuses un apakšpuses krāsojums manāmi atšķiras. Nodala līdz 11 dzimtas ar aptuveni 700 sugām, no kurām tikai četras sugas pastāvīgi dzīvo saldūdeņos.</p>
        @elseif ($order->name_latin == 'Beloniformes')
        <p class="text-justify">Tropu, subtropu, retāk mērenā klimata joslā sastopamu, galvenokārt - ap 75% sugu - jūras (okeāna) zivju kārta. Daudz retāk tās sastop vāji iesāļos ūdeņos vai saldūdeņos. Vidēja lieluma zivis, parasti 0,2-1 m garas, vairumā gadījumu ļoti slaidas, bultveidīgas. Daudzām sugām ir sevišķi pagarināts knābjveidīgs žoklis, kā garums sasniedz līdz vienu ceturtdaļu no ķermeņa kopējā garuma. Bieži uzturas baros ūdens virsmas tuvumā. Pārtiek no aļģēm, planktona sīkdzīvniekiem, arī sīkām zivīm. Kārtā raksturīga visai neparasta galvas kaulu uzbūve un izvietojums. Augšžoklis nekustīgs, vienāda garuma ar apakšžokli vai īsāks. Uz žokļiem daudz zobu. Tāpat neparasta pazīme ir kaulu iezaļganā krāsa. Muguras spura atvirzīta astes virzienā, atrodas iepretim anālajai spurai. Nodala 5 dzimtas ar 38 ģintīm un apmēram 200 sugām.</p>
        @elseif ($order->name_latin == 'Scorpaeniformes')
        <p class="text-justify">Sugām ļoti bagāta, galvenokārt tropu un subtropu joslas jūru un okeānu zivju kārta. Uzturas visbiežāk seklūdeņos, grunts tuvumā. Saldūdeņos šīs kārtas sugu ir sevišķi maz. Daudzām tropu sugām raksturīgas neparasti spilgtas krāsas un kontrastējošu krāsu salikumi. Tām skorpēnveidīgajām, kurām starp dažu (krūšu, vēdera) spuru stariem savienojošā membrāna ir dziļi dalīta vai šķelta gandrīz līdz pamatam, raksturīgs arī neparasts izskats. Uz galvas bieži ir dzeloņi un(vai) ragveida izciļņi. Āda visbiežāk kaila vai segta ar kaula plātnītēm. Krūšu un astes spuras noapaļotas. Vairums sugu ir nelielas: 10-30 cm garas pieaugušā vecumā (reti mazāk vai vairāk). Sistemātika šajā kārtā nav nostabilizējusies: nodala līdz 38 dzimtas ar aptuveni 1480 sugām.</p>
        @endif
    </div>
</div>
<hr class="mt-0">
<div class="container m-0 p-0">
    <div class = "row">
    @foreach ($families as $family)
    @if($family->order_id == $order->id)
    <div class="col-sm-4 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" >{{$family->name_latvian}} dzimta</h4>
                <h6 class="card-subtitle mb-2 text-muted">{{$family->name_latin}}</h6>
                <a href="{{route('class.showSpecies', ['family' => $family->name_latin, 'class' => $class->name_latin])}}" class="stretched-link"></a>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection