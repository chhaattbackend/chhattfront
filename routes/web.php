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
Route::get('/result', 'PropertyController@search')->name('property.search');
Route::get('/agency', 'AgencyController@index')->name('agency');
Route::get('/agency/{id}', 'AgencyController@singleAgency')->name('single.agency');
Route::get('/property/{id}', 'PropertyController@singleProperty')->name('single.property');
Route::post('/agency/ajax', 'AgencyController@ajax');
Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');


// construction
Route::prefix('construction')->group(function () {
Route::get('/','ConstructionACategoryController@index')->name('construction.home');
Route::post('/{id}','ConstructionBCategoryController@index')->name('construction.bcat');
// Route::get('/{id}','ConstructionACategoryController@index')->name('construction.ccat');
});
// construction




// mobile
Route::post('propertymobile', 'PropertyController@mobile');
Route::get('filter/{for}', 'PropertyController@mobile')->name('filter');
Route::get('results', 'PropertyController@search')->name('allproperties');
// mobile
