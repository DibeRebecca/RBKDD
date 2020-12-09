<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  
  <!-- Bootstrap core CSS -->
  
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->

    <!-- Scripts -->
    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
</head>
<body>
    <!--<div id="app">-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark primary-color  ">
          
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('RBKDD', 'RBKDD') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="basicExampleNav">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link " href="{{ url('/') }}">Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="{{ url('cv') }}"> Mon C V</a>
                    </li>
                   

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Mes Services</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('sites') }}">Sites Web</a>
                        <a class="dropdown-item" href="{{ url('apps') }}">Apps Mobiles</a>
                        <a class="dropdown-item" href="{{ url('graphs') }}">Graphisme</a>
                    </div>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="{{ url('/contact') }}">Nous Contacter</a>
                    </li>
                    

                </ul>
                <form class="form-inline">
                    <div class="md-form my-0">
                    <input class="form-control mr-sm-2 " type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
           
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="page-footer font-small stylish-color-dark pt-3">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 mx-auto">

      <!-- Content -->
      <h5 class="font-weight-bold  mt-3 mb-4">A Propos</h5>
      <p style="font-size:18px;">Je suis TABOUKOUNA Dibe Rebecca, je suis passionnée du numérique et des nouvelles technologies.Je suis developpeure web et mobile, je programme en Javascript, python et PHP.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-3 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold  mt-3 mb-4">Mes Realisations</h5>

      <ul class="list-unstyled">
        <li>
          <a href="{{url('sites')}}">Sites Web</a>
        </li>
        <li>
          <a href="{{url('apps')}}">Applications Mobiles</a>
        </li>
        <li>
          <a href="{{url('graphs')}}">Graphisme</a>
        </li>
       
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-3 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold  mt-3 mb-4">Suivez moi sur</h5>

      <ul class="list-unstyled">
        <li>
          <a href="https://www.facebook.com/rebecca.taboukouna.31/">Facebook</a>
        </li>
        <li>
          <a href="https://twitter.com/DibeRebecca">Twitter</a>
        </li>
        <li>
          <a href="https://www.instagram.com/rebeccataboukouna/">Instagram</a>
        </li>
        <li>
          <a href="https://www.linkedin.com/in/rebecca-taboukouna-2a1a6b185/">LinkedIn</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->


<ul class="list-unstyled list-inline text-center py-2">
  <li class="list-inline-item">
    <h5 class="mb-1">Inscrivez vous et recevez une reduction sur tous les tarifs</h5>
  </li>
  <li class="list-inline-item">
  <a class="btn blue-gradient text-white btn-sm" style="border-radius:25px; width:130px;font-size:13px; height:40px" href="{{url('register')}}"> S'inscrire</a>
  </li>
</ul>
<hr>
<div class="container-fluid">
<div class="row">
      <div class="col-md-12 py-2">
        <div class="mb-2 flex-center">
          <a href="https://www.facebook.com/rebecca.taboukouna.31/" class="fb-ic">
            <i class="fab fa-facebook-f fa-lg red-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <a href="https://twitter.com/DibeRebecca" class="tw-ic">
            <i class="fab fa-twitter fa-lg red-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
        
          <a href="https://www.linkedin.com/in/rebecca-taboukouna-2a1a6b185/" class="li-ic">
            <i class="fab fa-linkedin-in fa-lg red-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <a href="https://www.instagram.com/rebeccataboukouna/" class="ins-ic">
            <i class="fab fa-instagram fa-lg red-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg red-text fa-2x"> </i>
          </a>
        </div>
      </div>
      </div>
      </div>
<div class="container-fluid">
<div class="footer-copyright text-center py-3 ">© 2020 TABOUKOUNA Dibe Rebecca :
  <a href="{{url('/')}}}"> Rbk Dev & Design </a>
</div>
</div>
</div>
</footer>
<script src="{{ asset('js/jquery.min.js')}}" defer></script>
<script src="{{ asset('js/popper.min.js')}}" defer></script>
<script src="{{ asset('js/bootstrap.min.js')}}" defer></script>
    <script src="{{ asset('js/mdb.min.js')}}" defer></script>
    
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->
    
    
   
    <script src="{{ asset('js/main.js') }}" defer></script>

    <script>
      // MDB Lightbox Init
$(function () {
$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});

</script>
</body>
</html>
