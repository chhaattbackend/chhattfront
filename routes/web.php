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
Route::get('/real-estate-agencies', 'AgencyController@index')->name('agency');
Route::get('/agency/{id}', 'AgencyController@singleAgency')->name('single.agency');
Route::get('/propertyDetail/{id}', 'PropertyController@singleProperty')->name('single.property');
Route::post('/agency/ajax', 'AgencyController@ajax');
Route::post('/agency/mobileajax', 'AgencyController@mobileajax');
Route::get('/property/{property_type}','PropertyController@explorer')->name('explorer.search');
Route::get('/contact-us', function () {
    return view('layouts.contact');
})->name('contact');
Route::post('sendform','LeadController@formsubmit')->name('contact.form');


Route::get('examplepage', function () {
return view('frontend.construction.store.single');
});









// construction
Route::prefix('construction')->group(function () {
Route::get('/','ConstructionACategoryController@index')->name('construction.home');

Route::post('/{id}','ConstructionBCategoryController@index')->name('construction.bcat'); // for ccat click on homepage
Route::get('/{id}','ConstructionBCategoryController@byCategory')->name('construction.bcat'); // for reload that current ccat page

Route::get('/bcat/all','ConstructionBCategoryController@viewall')->name('construction.bcatlist');
Route::get('/productlist/{id}','ConstructionBCategoryController@product')->name('construction.productlist');
Route::get('/productDetail/{id}','ConstructionBCategoryController@singleproduct')->name('construction.singleproduct');
Route::get('/storeDetail/{store:slug}','ConstructionStoreController@index')->name('construction.singlestore');
});
// construction




// mobile
Route::post('propertymobile', 'PropertyController@mobile');
Route::get('filter/{for}', 'PropertyController@mobile')->name('filter');
Route::get('results', 'PropertyController@search')->name('allproperties');
// mobile
