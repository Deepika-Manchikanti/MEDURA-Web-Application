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
use MongoDB\Client as Mongo;

Route::get('mongo', function(Request $request) {// for testing remove anytime
    $collection = (new Mongo)->mydatabase->mycollection->insertOne([
    'item' => 'canvas',
    'qty' => 100
]);
   
});

Route::get('dongo', function(Request $request) { //for testing remove anytime
	$col = "test2@test.com";
    $collection = (new Mongo)->medura->$col;

    return $collection->find()->toArray();
});


Route::get('/', function () {
    return view('welcome');
});



Route::get('/patient', function () {
    return view('patient');
});

Route::get('/register_patient', function () {
    return view('register_patient');
});

Route::get('/fp_auth/{fp_hash}', 'PatientController@fp_auth');

Route::get('/fpa/{fp_result}', 'PatientController@fp_authentication');

Route::get('/auth_patient', 'PatientController@auth_patient');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('add','PatientController@prescribe');
Route::post('setPatient','PatientController@set_patient');
Route::get('/Patient_dashboard','PatientController@index');
Route::get('/statistics', function () {
    return view('statistics');
});
