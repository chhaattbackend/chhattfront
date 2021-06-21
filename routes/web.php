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
// Route::get('/property/{id}', 'PropertyController@index')->name('single.property');
Route::get('/result', 'PropertyController@search')->name('property.search');

Route::get('/agency', 'AgencyController@index')->name('agency');
Route::get('/agency/{id}', 'AgencyController@singleAgency')->name('single.agency');
Route::get('/property/{id}', 'PropertyController@singleProperty')->name('single.property');
Route::post('/agency/ajax', 'AgencyController@ajax');

Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');


Route::get('/wanted', function () {
    return view('layouts.mobile.master');
})->name('wanted');



// mobile start

Route::post('propertymobile', 'PropertyController@mobile');
Route::get('results', 'PropertyController@search')->name('allproperties');


// mobile end
