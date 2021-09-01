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
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{var1}', 'Controller@dispensed'); //api to get data of general medicine dispensed.

Route::get('/medicine_type/{var}', 'Controller@medicine_type'); // api to send data of specific medicine on getting fingerprint

/*Route::get('/{var1}/{var2}', function ($var1, $var2) {  //api2
    return  $var1 . $var2;
});

Route::get('/{var1}/{var2}/{var3}', function ($var1, $var2, $var3) { //api3
    return  $var1 . $var2 . $var3;
});*/