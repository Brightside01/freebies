<?php

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

Route::get('/', function () {
    return view('welcome');
});  #homepage or welcome

Auth::routes(); #login, register, forget password, reset your password, verify your password
#http://freebies.test/login
#http://freebies.test/register


Route::get('/home', 'HomeController@index')->name('home'); #user dashboard

// Route::get();
// Route::post();
Route::view('welcome/path','welcome');
#localhost/freebies/public/mylink

Route::view('enter/login','auth.login');
Route::view('getstarted/start/now','auth.register'); 
Route::view('newsfeed','newsfeed');
Route::view('contact','contact');
Route::view('faq','faq');
Route::view('profile','profile');
Route::view('about','about');
Route::view('404','404');
Route::view('settings','settings');
