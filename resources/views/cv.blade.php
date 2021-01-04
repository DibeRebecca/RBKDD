@extends('layouts.app')
@section('title','RBKDD')

@section('content')

<!DOCTYPE html>
<style>

body{
  font-family:Poppins;
  color:#22221C;
}
</style>
<html lang="en">

<head>
  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1 style="font-family:Poppins;">TABOUKOUNA Dibe Rebecca</h1>
      <p>Je suis <span class="typed" data-typed-items="Developpeure, Graphiste, Freelancer"></span></p>
      <div class="social-links">
        <a href="https://twitter.com/DibeRebecca" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://facebook.com/rebeccataboukouna" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/rebeccataboukouna/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="https://linkedin.com/rebeccataboukouna" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>

  </section><!-- End Hero -->
<body class="developer">
    <main>
        <div class="container">
        <br>
        <div class="avatar mx-auto">
            <img src="{{asset('images/photo.jpg')}}" style="width:300px; margin-left:35%;" class="rounded-circle z-depth-1 img-fluid">
          </div>
            <section id="about" class="section feature-box ">
                <h2 class="text-center text-uppercase my-5 pt-2 wow fadeIn" data-wow-delay="0.2s">Personnal  <strong>Branding</strong></h2>

                <p class="text-center w-responsive mx-auto wow fadeIn my-5" data-wow-delay="0.2s">Je suis Rebecca TABOUKOUNA, je suis une jeune developpeure et passionnée du design et des nouvelles Technologies.</p>

                <!-- First row -->
                <div class="row features-big text-center wow fadeIn" data-wow-delay="0.4s">

                    <!-- First column -->
                    <div class="col-md-4 mb-2">

                        <!--Panel-->
                        <div class="card card-body hoverable">
                            <i class="fas fa-laptop fa-3x mb-4" aria-hidden="true"></i>
                            <h5 class="font-weight-bold text-uppercase mb-4">Freelancer</h5>
                            <p class="dark-grey-text" >Je developpe à mon propre compte des solutions digitales,Je travaille en freelance </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /First column -->

                    <!-- Second column -->
                    <div class="col-md-4 mb-5">

                        <!--Panel-->
                        <div class="card card-body yellow hoverable">
                            <i class="fas fa-code fa-3x mb-4" aria-hidden="true"></i>
                            <h5 class="font-weight-bold text-uppercase mb-4">Developpeure</h5>
                            <p class="dark-grey-text">Je developpe des sites web , des chatbots. </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Second column -->

                    <!-- Third column -->
                    <div class="col-md-4 mb-5">

                        <!--Panel-->
                        <div class="card card-body hoverable">
                            <i class="fas fa-pencil-alt fa-3x mb-4" aria-hidden="true"></i>
                            <h5 class="font-weight-bold text-uppercase mb-4">Graphiste</h5>
                            <p class="dark-grey-text"> Je concois des visuels, logo, affiches</p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Third column -->

                </div>
                <!-- /.First row -->

            </section>
            <!-- /.Second section -->

        </div>
        <!-- /.First container -->

        <!--Second container-->
        <div class="container-fluid" style="background-color: #f3f3f5;">
            <div class="container py-2 pt-2">

                <!-- Second section -->
                <section id="skills">

                    <!-- First row -->
                    <div class="row py-2">

                        <!--First column-->
                        <div class="col-lg-6 col-md-12 mb-3 wow fadeIn" data-wow-delay="0.4s">

                            <!--Section heading-->
                            <div class="d-flex justify-content-start">
                                <h4 class="text-center text-uppercase mb-5 pb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">Mon <strong>Parcours</strong></h4>
                            </div>

                            <!--Description-->
                            <blockquote class="blockquote bq-warning mb-4">
                                <div class="row"> <i class="fas fa-briefcase fa-x mb-1 mr-3 ml-3" aria-hidden="true"></i>
                                    <h5 class="font-weight-bold mb-3"> Etudes universitaires</h5>
                                </div>
                                <p class="font-weight-bold ml-1 dark-grey-text mb-2">Septembre, 2018 - Present </p>
                                <p class="mb-0 ml-1 light-grey-text">J'etudie à <strong>IPNET Institute Of Technology</strong> en <strong>Developpement Web Bases de Données Big Data</strong> </p>
                            </blockquote>

                            <blockquote class="blockquote bq-warning mt-1 mb-4">
                                <div class="row"> <i class="fas fa-briefcase fa-x mb-1 mr-3 ml-3" aria-hidden="true"></i>
                                    <h5 class="font-weight-bold mb-3">Freelancing </h5>
                                </div>
                                <p class="font-weight-bold ml-1 dark-grey-text mb-2">March 2019 - Present </p>
                                <p class="mb-0 ml-1 light-grey-text">Je travaille en Freelance depuis plus d'un an</p>
                            </blockquote>

                            <!--<blockquote class="blockquote bq-warning">
                                <div class="row"> <i class="fas fa-briefcase fa-x mb-1 mr-3 ml-3" aria-hidden="true"></i>
                                    <h5 class="font-weight-bold mb-3"> Developeur mobile</h5>
                                </div>
                                <p class="font-weight-bold ml-1 dark-grey-text mb-2"><strong>Décembre 2020 - Present </strong></p>
                                <p class="mb-0 ml-1 light-grey-text">Developpeur Web de formation, j'ai appris par moi mème le developpement mobile qui me passionne tellement.</p>
                            </blockquote>-->

                        </div>
                        <!--/First column-->

                        <!--Second column-->
                        <div class="col-lg-5 offset-lg-1 col-md-12 mb-4 wow fadeIn" data-wow-delay="0.4s">

                            <!--Second heading-->
                            <div class="d-flex justify-content-start">
                                <h4 class="text-center text-uppercase mb-5 pb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">Mes <strong>Competences</strong></h4>
                            </div>

                            <p class="black-text text-uppercase font-weight-bold pt-3" align="justify">JAVASCRIPT</p>
                            <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p class="black-text text-uppercase font-weight-bold" align="justify">PYTHON</p>
                            <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p class="black-text text-uppercase font-weight-bold pt-3" align="justify">PHP</p>
                            <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                            <p class="black-text text-uppercase font-weight-bold" align="justify">HTML</p>
                            <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>

                            <p class="black-text text-uppercase font-weight-bold pt-3" align="justify">CSS</p>
                            <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>

                            

                            <p class="black-text text-uppercase font-weight-bold pt-3" align="justify">MDBootstrap/Bootstrap</p>
                            <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>

                    
                           <br>
                            <h3>Framework</h3>
                            <p class="black-text text-uppercase font-weight-bold pt-3" align="justify">Laravel</p>
                            <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                            <p class="black-text text-uppercase font-weight-bold pt-3" align="justify">Symfony</p>
                            <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p class="black-text text-uppercase font-weight-bold pt-3" align="justify">DJANGO</p>
                            <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                        </div>
                        <!--/Second column-->

                    </div>
                    <!--/First row-->

                </section>
                <!-- /.Second section -->

            </div>
        </div>
        <div class="container-fluid">
        <h3 class="h1-responsive font-weight-bold text-center mb-5 mt-4">Mes certifications</h3>
        <div class="row">
        <div class="col-md-4 mb-3">

    <img src="{{asset('images/certificat1.png')}}" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-4 mb-3">

    <img src="{{asset('images/certificat2.png')}}" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <div class="col-md-4 mb-3">

    <img src="{{asset('images/certificat1.png')}}" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  </div>
        </div>
        <!--/Second container-->

        <!-- Third container -->
        

        <!-- Streak -->
      
        <br>
        <div class="container-fluid">
            <div class="streak streak-md streak-photo" style="height:100px;background-image:url('images/diapo2.jpg')">
                <div class="flex-center rgba-black-light pattern-1">
                    <div class="white-text text-center smooth-scroll mt-5">
                        <h2 class="h2-responsive mb-3 wow fadeIn">Vous voulez un site web , une Application mobile , Visuels, Logos etc..</h2>
                        
                        <a class="btn blue-gradient text-white btn-sm" style="border-radius:25px; width:200px;font-size:13px; height:40px" href="{{url('contact')}}"> Contactez-moi</a>
                       
                    </div>
                </div>
            </div>
        </div>

        

        <!-- /.Customers carousel -->

    </main>
    <!--/Main layout-->

    <!-- Scrollspy -->
    <div class="dotted-scrollspy clearfix d-none d-sm-block">
        <ul class="nav smooth-scroll flex-column">
            <li class="nav-item"><a class="nav-link" href="#home"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#about"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#skills"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#works"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#contact"><span></span></a></li>
        </ul>
    </div>

    <style>
        html,
        body,
        header,
        .jarallax {
            height: 100%;
        }
        
        @media (min-width: 560px) and (max-width: 740px) {
            html,
            body,
            header,
            .jarallax {
                height: 600px;
            }
        }
    </style>
      <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  @endsection
    <script>
        // initialize scrollspy
        $('body').scrollspy({
            target: '.dotted-scrollspy'
        });

        // initialize lightbox
        $(function() {
            $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
        });

        $('.navbar-collapse a').click(function() {
            $(".navbar-collapse").collapse('hide');
        });

        /* WOW.js init */
        new WOW().init();
    </script>

</body>

</html>
