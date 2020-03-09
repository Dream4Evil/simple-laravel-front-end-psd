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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','WelcomeController@index');

Route::get('/db-connection', function () {
    if(DB::connection()->getDatabaseName())
       {
        return "conected sucessfully to database ".DB::connection()->getDatabaseName();
       } else{
        return "can't connect to database";
    }
});