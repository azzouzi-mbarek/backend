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


use App\Model\Level\Level;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/levels', function () {
    $levels=Level::all();
    return view('levels')->with('levels',$levels);
});
Route::get('country', 'CountryController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
