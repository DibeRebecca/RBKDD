<?php

namespace App\Http\Controllers;
use App\Annonces;
use App\User;
use App\Contact;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin_users()
    {
        $users=User::all();
        return view('users',compact('users'));
    }
    public function admin_contacts()
    {
        $contacts=Contact::all();
        return view('contacts',compact('contacts'));
    }
   
    

    public function contactinfo()
    {
        $contact=new Contact();
        $contact->nom=request('nom');
        $contact->email=request('email');
        $contact->phone=request('phone');
        $contact->objet=request('objet');
        $contact->message=request('message');
        $contact->save();
        //return "votre message a bien ete recu";
        return redirect('/');
    }
}
