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
Route::get('/', 'PropertyController@home');


Route::resource('properties', 'PropertyController');

// Route::get('/', function () {
//     return view('frontend.home.index');
// });

Route::get('property', function () {
    return view('property');
})->name('property');
