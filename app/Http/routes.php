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

Route::get('/', function () {
    $routeCollection = Route::getRoutes();
    echo csrf_field();
    echo "<table style='width:100%'>";
        echo "<tr>";
            echo "<td width='10%'><h4>HTTP Method</h4></td>";
            echo "<td width='10%'><h4>Route</h4></td>";
            echo "<td width='80%'><h4>Corresponding Action</h4></td>";
        echo "</tr>";
        foreach ($routeCollection as $value) {
            echo "<tr>";
                echo "<td>" . $value->getMethods()[0] . "</td>";
                echo "<td>" . $value->getPath() . "</td>";
                echo "<td>" . $value->getActionName() . "</td>";
            echo "</tr>";
        }
    echo "</table>";
});
