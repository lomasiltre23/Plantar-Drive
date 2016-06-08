<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('clientes', 'ClientController',['except'=>['create', 'edit']]);
Route::resource('clientes.odts', 'ODTController',['except'=>['create', 'edit'], 'parameters'=>'singular']);
Route::post('/registerUser', 'SentinelController@createUser');
Route::post('/registerAdmin', 'SentinelController@createAdmin');
Route::post('/login', 'SentinelController@login');

Route::get('/', function ()
{
   return view('index');
});

Route::get('admin', function ()
{
   return view('admin');
});
