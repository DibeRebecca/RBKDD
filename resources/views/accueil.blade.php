@extends('layouts.app')
@section('title','RBKDD')

@section('content')
<header >
<style>

body{
  font-family:Poppins;
  color:#22221C;
}
</style>
<div></div>

    <body>
    <main >
   <br>
  
<div class="card card-image" style="background-image: url(images/diapo1.jpg);">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">
      <h2 class="card-title h2 my-4 py-2" style="font-size:50px">Rbk   Dev   and  Design</h2>
      <p class="mb-4 pb-2 px-md-5 mx-md-5" style="font-size:25px">La Passion de la Technologie et du Design</p>
      <a class="btn blue-gradient btn-rounded text-center " style="border-radius:25px; width:200px; height:40px"> Decouvrir</a>
    </div>
  </div>
</div>
<!-- Jumbotron -->
        <!--Section: about-->
        <section id="about" class="py-5 ">

            <!-- Container -->
            <div class="container">
                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold text-center mb-5 mt-4">Mes Domaines d'activités</h2>
                <!-- Section description -->
                <p class="lead text-black text-center w-responsive mx-auto mb-5" style="font-size:20px;">J'oeuvre dans le numerique , la digitalisation des societes en leur proposant un site web , une application mobile et des visuels de communication.
                   </p>

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-5 text-center text-lg-left">
                        <img class="img-fluid" src="{{asset('images/diapo2.jpg')}}" alt="Sample image">
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-7">

                        <!-- Grid row -->
                        <div class="row mb-3">

                            <!-- Grid column -->
                            <div class="col-1">
                                <i class="fa fa-mail-forward fa-lg purple-text"></i>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-xl-10 col-md-11 col-10">
                                <h4 class="font-weight-bold mb-3" >Sites Web</h4>
                                <p class="text-black" style="font-size:17px;">Vous etes une société ou un particulier vous avez besoin d'un site web pour faire la promotion de vos produits ou de vos compétences </p>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                      <!--  <div class="row mb-3">

                           
                            <div class="col-1">
                                <i class="fa fa-mail-forward fa-lg purple-text"></i>
                            </div>
                            <div class="col-xl-10 col-md-11 col-10">
                                <h4 class="font-weight-bold mb-3" >Application mobile</h4>
                                <p class="text-black" style="font-size:17px;">Offir vos services via une application mobile telechargeable sur PlayStore, Vous permet de rendre vos services plus accessibles à votre clientelle. </p>
                            </div>
                        

                        </div> -->
                        <!-- Grid row -->

                        <!--Grid row-->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-1">
                                <i class="fa fa-mail-forward fa-lg purple-text"></i>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-xl-10 col-md-11 col-10">
                                <h4 class="font-weight-bold mb-3" >Graphisme</h4>
                                <p class="text-black mb-0" style="font-size:17px;">Pour communiquer éfficacement vous avez besoin de logos, affiches et spots publicitaires, visuels etc </p>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!--Grid row-->

                    </div>
                    <!--Grid column-->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Container -->

        </section>
        <!--Section: about-->

        <!--Section: projects-->
        <section id="projects" class="text-center py-5" style="background-color: #eee;">

            <!-- Container -->
            <div class="container">

                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold mb-5">Mes projets</h2>
                <!-- Section description -->
                <p class="text-black w-responsive mx-auto mb-5" style="font-size:18px;">Decouvrez les divers projets sur lesquels j'ai travaillé.</p>

                <!-- Grid row -->
                <div class="row text-center">

                    <!-- Grid column -->
                    <div class="col-lg-6 col-md-12 mb-lg-0 mb-4">
                        <!--Featured image-->
                        <div class="view overlay rounded z-depth-1">
                            <img src="{{ asset('images/graph.jpg') }}" class="img-fluid" alt="Sample project image">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Excerpt-->
                        <div class="card-body pb-0">
                            <h4 class="font-weight-bold my-3" id="sites">Les Sites Web</h4>
                            <p class="text-black" style="font-size:18px;">Les Sites d'Enteprise , blogs personnels , chatbots  .
                            </p>
                            <a class="btn blue-gradient text-white btn-sm" style="border-radius:25px; width:130px;font-size:13px; height:40px" href="{{url('sites')}}"> Decouvrir</a>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                   <!-- <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        
                       <div class="view overlay rounded z-depth-1">
                            <img src="{{ asset('images/app.jpg') }}" class="img-fluid" alt="Sample project image">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                        <div class="card-body pb-0">
                            <h4 class="font-weight-bold my-3" id="apps">Applications Mobiles </h4>
                            <p class="text-black" style="font-size:18px;"> Applications mobiles disponibles sur PlayStore.
                            </p>
                            
                            <a class="btn blue-gradient text-white btn-sm" style="border-radius:25px; width:130px;font-size:13px; height:40px" href="{{url('apps')}}"> Decouvrir</a>
                        </div> 
                    </div>-->
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-6 col-md-6">
                        <!--Featured image-->
                        <div class="view overlay rounded z-depth-1">
                            <img src="{{ asset('images/sites.jpg') }}" class="img-fluid" alt="Sample project image">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Excerpt-->
                        <div class="card-body pb-0">
                            <h4 class="font-weight-bold my-3" id="graphs">Graphisme</h4>
                            <p class="text-black" style="font-size:18px;">Visuels, Affiches 
                            , logos.
                            </p>
                            <a class="btn blue-gradient text-white btn-sm" style="border-radius:25px; width:130px;font-size:13px; height:40px" href="{{url('graphs')}}"> Decouvrir</a>
                        </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Container -->

        </section>
        <!--Section: projects-->

        <!--Section: gallery-->
        

        <div class="container mt-5">


  <!--Section: Content-->
  <section class="team-section text-center dark-grey-text">

    <!-- Section heading -->
    <h3 class="font-weight-bold mb-4 pb-2">Temoignages</h3>
    <!-- Section description -->

  	<!--Grid row-->
    <div class="row text-center">

      <!--Grid column-->
      <div class="col-md-4 mb-4">

        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img src="{{asset('images/happy.jpg')}}" style="width:250px;" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">Happy BIDASSA</h4>
          <h6 class="font-weight-bold blue-text my-3">Developpeure Web</h6>
          <p class="font-weight-normal dark-grey-text">
            <i class="fas fa-quote-left pr-2"></i>RBKDD est une developpeure dynamique, tres douée dans tout ce qui concerne le digital.</p>
          <!--Review-->
          <div class="orange-text">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star-half-alt"> </i>
          </div>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-4 mb-4">

        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img src="{{asset('images/israel.jpg')}}" style="width:250px;" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">Israel Adekpoe</h4>
          <h6 class="font-weight-bold blue-text my-3">Graphiste</h6>
          <p class="font-weight-normal dark-grey-text">
            <i class="fas fa-quote-left pr-2"></i>RBKDD fait de belles affiches, logo et des sites web avec de bons designs</p>
          <!--Review-->
          <div class="orange-text">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
          </div>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-4 mb-4">

        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img src="{{asset('images/hophoet.jpg')}}" style="width:250px;" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">Milca ADETOU</h4>
          <h6 class="font-weight-bold blue-text my-3">Entrepreneure</h6>
          <p class="font-weight-normal dark-grey-text">
            <i class="fas fa-quote-left pr-2"></i>J'ai confié le site de mon entreprise a RBKDD et elle l'a fait.J'ai trouvé le site tres attrayant et j'etait satisfaite</p>
          <!--Review-->
          <div class="orange-text">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="far fa-star"> </i>
          </div>
        </div>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </section>
  <!--Section: Content-->


</div>

        <!--Section: call to action-->
        <div class="streak streak-md streak-photo" style="background-image:url('images/diapo2.jpg')">
            <div class="flex-center rgba-black-light pattern-1">
                <div class="white-text smooth-scroll mt-5">
                    <h2 class="h2-responsive mb-5 wow fadeIn">Vous voulez un site web , une Application mobile , Visuels, Logos etc..</h2>
                    <div class="text-center">
                    <a class="btn blue-gradient text-white btn-sm" style="border-radius:25px; width:200px;font-size:13px; height:40px" href="{{url('contact')}}"> Contactez-moi</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

