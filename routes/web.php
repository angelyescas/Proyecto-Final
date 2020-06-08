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


Route::resource('/', 'WelcomeController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/cobrador', 'CobradorController@index')->middleware('auth');;
//Route::get('/suscriptor', 'SuscriptorController@index')->middleware('auth');;

Route::resource('cobrador', 'CobradorController')->middleware('auth');;
Route::resource('suscriptor', 'SuscriptorController')->middleware('auth');;
Route::resource('servicio', 'ServicioController')->middleware('auth');;
Route::resource('users', 'UserController')->middleware('auth');;
Route::resource('mensaje', 'MensajeController')->middleware('auth');;
Route::resource('notifi', 'NotificacionController')->middleware('auth');;







