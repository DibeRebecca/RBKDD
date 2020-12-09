@extends('layouts.app')
@section('title','RBKDD')
@section('content')
<style>

body{
  font-family:Poppins;
  color:#22221C;
}
</style>
<div class="card card-image" style="background-image:  url(images/app.jpg);">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">

      <!-- Content -->
      
      <h2 class="card-title h2 my-4 py-2">Applications mobiles</h2>

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

            <img src="{{asset('images/app.webp')}}" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">Cuisto ++</h3>
            <br>
            <p style="font-size:17px;">Application mobile qui repertorie les recettes,les repas et leur mode de preparation,vous recevrez des tutoriels afin de vous apprendre à preparer. Vous pouvez commandez des repas et vous faire livrer chez vous.</p>
            <!-- Main heading -->

            <hr>
            <br>
            <br>

            <p style="font-size:20px;">
              Telecharger sur Playstore
            </p>

            <!-- CTA -->
            <a href="https://play.google.com/store/apps/details?id=com.cuisto++.tg" class="btn purple-gradient btn-rounded text-center " style="border-radius:25px; width:150px; height:40px"> Decouvrir</a>
            

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>

      
      </div>
      <!--Section: Main info-->
      @endsection