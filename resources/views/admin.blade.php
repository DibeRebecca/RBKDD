@extends('layouts.admin')
@section('title','Admin')
@section('content')
<div class="content-wrapper">
  <div class="content-wrapper">
    <button class="btn btn-primary"> <a class="text-white" href="{{url('admin_users')}}" >Liste des utilisateurs</a> </button>
    <button class="btn btn-primary"> <a class="text-white" href="{{url('admin_contacts')}}" >Liste des contacts</a> </button>
  </div>
</div>
@endsection
  <!-- Content Wrapper. Contains page content -->

  
</body>
</html>

