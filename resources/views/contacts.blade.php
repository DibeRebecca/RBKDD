@extends('layouts.admin')
@section('title','RBKDD_Admin')
@section('content')
<div class="content-wrapper">

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Liste des contacts </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Email</th>
                      <th>Telephone</th>
                      <th>Objet</th>
                      <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($contacts as $contact)
                    <tr>
                      <td>{{$contact->nom}}</td>
                      <td>{{$contact->email}}</td>
                      <td>{{$contact->phone}}</td>
                      <td><span class="tag tag-success">{{$contact->objet}}</span></td>
                      <td>{{$contact->message}}</td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        @stop