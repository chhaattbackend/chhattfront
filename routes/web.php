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
Route::get('/', 'PropertyController@home')->name('home');
Route::get('/property', 'PropertyController@index')->name('property');
Route::get('/agency', 'AgencyController@index')->name('agency');
Route::get('/contact', 'PropertyController@home')->name('contact');
Route::get('/wanted', 'PropertyController@home')->name('wanted');



// Route::resource('properties', 'PropertyController');

// Route::get('/agency', function () {
//     return view('frontend.agency.index');
// });

// Route::get('property', function () {
//     return view('property');
// })->name('property');
