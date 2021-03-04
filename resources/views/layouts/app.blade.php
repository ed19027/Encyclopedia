<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="w-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="w-100">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm position-relative">
            <div class="container mx-6">
                <a class="navbar-brand mr-4 pr-2" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="list-group col-sm-4 border-0 position-absolute">
                        <div class="list-group-item border-0 p-0">
                            <form class="form-inline my-2 my-lg-0" action="species.index" method="GET" >
                                @csrf
                                <input class="form-control mr-sm-2" size="35" type="search" placeholder="Sugas nosaukums" aria-label="Search" id="search" name="searchTerm">
                                <button href="/species" id="result" class="btn btn-outline-success my-2 my-sm-0" type="submit">Meklēt</button>
                            </form>
                        </div>
                        <div class="list-group-item col-sm-7 search-results specie border-0 p-0 pt-1" style="">
                        </div>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="list-group shadow-sm">
                        <a href="{{route('class.show', 'Amphibia')}}" class="list-group-item list-group-item-action">Abinieki</a>
                        <a href="{{route('class.show', 'Cyclostomata')}}" class="list-group-item list-group-item-action">Apaļmutnieki</a>
                        <a href="{{route('class.show', 'Osteichthyes')}}" class="list-group-item list-group-item-action">Kaulzivis</a>
                        <a href="{{route('class.show', 'Reptilia')}}" class="list-group-item list-group-item-action">Rāpuļi</a>
                        <a href="{{route('class.show', 'Aves')}}" class="list-group-item list-group-item-action">Putni</a>
                        <a href="{{route('class.show', 'Mammalia')}}" class="list-group-item list-group-item-action">Zīdītāji</a>
                        @if ( !Auth::guest() && Auth::user()->isAdmin() )
                            <a href="{{url('admin')}}" class="list-group-item list-group-item-action">Administrators</a>
                        @endif 
                    </div>
                </div>
                <div class="col-sm">
                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="application/javascript"> 
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
}); 
  
$(document).ready(function () {
    $('#search')
        .on('keyup click', function () {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.post("/search", { search: $('#search').val(), _token: CSRF_TOKEN }, function(data) {
                $('.specie').css('display', '');
                $('.specie').html('');
                $.each(data, function(i, specie) {
                    var latin = specie.name_latin.replace(' ', '-');
                    var c = '<div id="spec" class="card shadow mb-1">\n\
                                <div class="card-body px-3 py-2 my-1">\n\
                                    <h5 class="card-title">'+specie.name_latvian+'</h5>\n\
                                    <h6 class="card-subtitle text-muted">'+specie.name_latin+'</h6>\n\
                                    <a href="/specie/'+latin+'" class="stretched-link"></a>\n\
                                </div>\n\
                            </div>';
                    $('.specie').append(c);
                    return i<6;
                });
      
            if($('#search').val() == ''){
                $('.specie').css('display', 'none');
            }
        });
    })
    
    $('#result').click(function() {
        $('.specie').css('display', 'none');
    });
});
   
$(document).click(function() {
    $('.specie').css('display', 'none');
});
//var val = document.getElementById("#search").value;
/*
window.addEventListener("click", function(event) {
    
});
    
$(document).ready(function(){
    $('.card shadow').hover(function(){
        $(".card shadow").css("background-color", gray);
    });
});
window.addEventListener("click", function(event) {
    document.getElementByClassName('specie').innerHTML = "Hello World";
});
*/
</script>
