@extends('layouts.app')
@section('title','RBKDD')
@section('content')
<style>

body{
  font-family:Poppins;
  color:#22221C;
}
</style>
<div class="card card-image" style="background-image:  url(images/diapo3.jpg);">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">

      <!-- Content -->
      
      <h2 class="card-title h2 my-4 py-2">Sites Web</h2>
      <p class="mb-4 pb-2 px-md-5 mx-md-5"></p>
     

    </div>
  </div>
</div>
    <div class="container">
      <!--Section: Main info-->
      <!-- Jumbotron -->

<!-- Jumbotron -->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="{{asset('images/yeyaa.png')}}" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">Site web d' <strong>Innov'Com</strong> </h3>
            <hr>
            <br>
            <p style="font-size:17px;">Innov'Com est une structure dans le domaine du digital qui propose une application mobile nommée <strong>yeyaa</strong> pour la geolocalisation des restaurant , passer des commandes et se faire livrer
             </p>
            <hr>
              <p class="w-responsive text-center"><strong>www.yeyaa.com</strong></p>
              
            <a  href="https://www.yeyaa.com" class="btn purple-gradient btn-rounded text-center " style="border-radius:25px; width:200px; height:40px"> Decouvrir</a>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>

      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="{{asset('images/capture.png')}}" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">
          <br>
            <!-- Main heading -->
            <h3 class="h3 mb-3">Site Web  Rbk Pearls</h3>
            <p style="font-size:17px;">Site d'E-Commerce pour acheter des perles, bijoux, collier, sacs, chaussures faits en perles</p>
            <!-- Main heading -->
             <br>
            <hr>
            <p class="w-responsive text-center"><strong>www.rbkpearls.com</strong></p>

<!-- CTA -->
<a  href="https://www.rbkpearls.com" class="btn purple-gradient btn-rounded text-center " style="border-radius:25px; width:200px; height:40px"> Decouvrir</a>

            <p>
            </p>

            <!-- CTA -->
            

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      </div>
      <!--Section: Main info-->
    @endsection