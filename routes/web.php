<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can registzer web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/', function () {
 //   return view('welcome');
//});
//Route::get('dropdown', [\App\Http\StudentControllers\MainController::class, 'index']);


Route::get("home","MainController@index");

Route::get("user","UserController@index");

Route::get("track_bus_live","BusController@track_bus_live");


Route::view("insertbuttononclick","insert");

Route::post('insert','MainController@store');
Route::get('delete/{id}','MainController@destroy');
Route::get('detail/{id}','MainController@show');
Route::get('edit/{id}','MainController@edit');
Route::post('update','MainController@update');

Route::post('location_insert','BusController@store_location');

//Route::view('qr-code-g', 'resources/view/qrCode.blade.php');
//Route::post('a','MainController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

