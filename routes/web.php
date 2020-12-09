<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function (){
    return view ('accueil');
});

Route::get('/b', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('apps', function () {
    return view('apps');
});
Route::get('/graphs', function () {
    return view('graphs');
});
Route::get('/sites', function () {
    return view('sites');
});
Route::get('/cv', function () {
    return view('cv');
});
Route::get('/contact', 'MainController@contact');

Route::get('/bonjour/{prenom}','MainController@bonjour');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('contactinfo','HomeController@contactinfo')->name('contactinfo');
Route::get('/admin_users','HomeController@admin_users');
Route::get('/admin_contacts','HomeController@admin_contacts');