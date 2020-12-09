@extends('layouts.app')
@section('title','RBKDD')
@section('content')
 <!--Section: contact-->
 <style>

body{
  font-family:Poppins;
  color:#22221C;
}
</style>
 <!-- Jumbotron -->
<div class="card card-image" style="background-image: url(images/diapo2.jpg);">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">

      <!-- Content -->
      <!--<h5 class="h5 orange-text"> Contact</h5>-->
      <h2 class="card-title h2 my-4 py-2">Me Contacter</h2>

    </div>
  </div>
</div>
<!-- Jumbotron -->
<section id="contact" class="py-5" style="background-color: #eee;">
<div class="container">

    <!-- Section heading -->
    
    <!-- Section description -->
    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-9 mb-md-0 mb-5">

        <form action="{{route('contactinfo')}}" method="post">
            {{ csrf_field() }}
            <!-- Grid row -->
            <div class="row">

            <!-- Grid column -->
            <div class="col-md-4">
                <div class="md-form mb-0">
                <input type="text" name="nom" id="contact-name" class="form-control">
                <label for="contact-name" class="">Votre nom</label>
                </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4">
                <div class="md-form mb-0">
                <input type="text" name="email" id="contact-email" class="form-control">
                <label for="contact-email" class="">Votre email</label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="md-form mb-0">
                <input type="number" name="phone" id="contact-phone" class="form-control">
                <label for="contact-email" class="">Votre telephone</label>
                </div>
            </div>
            
            <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">
                <div class="md-form mb-0">
                <input type="text" name="objet" id="contact-Subject" class="form-control">
                <label for="contact-Subject" class="">Objet</label>
                </div>
            </div>
            <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">
                <div class="md-form">
                <textarea type="text" name="message" id="contact-message" class="form-control md-textarea" rows="3"></textarea>
                <label for="contact-message">Votre message</label>
                </div>
            </div>
            <!-- Grid column -->

            </div>
            <!-- Grid row -->
            <div class="text-center text-md-left">
            <button class="btn blue-gradient btn-rounded text-center " style="border-radius:25px; width:150px; height:40px"> Envoyer</button>
           
        </div>

        </form>

       

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li>
            <i class="fa fa-map-marker fa-2x blue-text"></i>
            <p>Agoe Fiovi</p>
            </li>
            <li>
            <i class="fa fa-phone fa-2x mt-4 blue-text"></i>
            <p>+ 228 97864437</p>
            <p>+ 228 90857343</p>
            </li>
            <li>
            <i class="fa fa-envelope fa-2x mt-4 blue-text"></i>
            <p class="mb-0">dibe.taboukouna@gmail.com</p>
            </li>
        </ul>
        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</div>

</section>
<!--Section: contact-->
@endsection