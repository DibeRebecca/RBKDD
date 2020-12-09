<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function home(){
        echo "bonjour";
    }
    public function bonjour($prenom)
    {
        echo "bonjour $prenom";
    }
    public function contact()
    {
       
        return view('contact');
        
    }
}
