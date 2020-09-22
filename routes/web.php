<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactsMail;
use Illuminate\Support\Facades\Mail;
$path="App\Http\Controllers" ;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* here is where all the routing happens, for future ref 
* i here by sorted it in alphabetical order 
* it has both contoller and some layouts */
Route::get('/welcome', function(){
    return view('welcomepage');
});
Route::get('/',$path."\StudentController@index");
Route::get('/edit/{id}',$path."\StudentController@edit");
Route::get('/show/{id}',$path."\StudentController@show");
Route::get('/create',$path."\StudentController@create");
Route::post('/store',$path."\StudentController@store");
Route::post('/update/{id}',$path."\StudentController@update");
Route::get('/delete/{id}',$path."\StudentController@delete");


/* This is routing to functions aka layouts only */
Route::get('/contact', function(){
    return view('contactspage');
});
Route::post('/message', $path."\MailController@sendEmail");
Route::get('/mailsent', function(){
    return new ContactsMail(); 
});


/* This page is just for animation , This has no role in this project */
Route::get('/animations',$path."\AnimationController@animations");
Route::get('/animation', function(){
    return view('animation');
});