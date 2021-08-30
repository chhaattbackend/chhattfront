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
Route::get('ajax/{type}', 'PropertyController@ajax')->name('ajax.index');
Route::get('/agentsingle', 'AgentController@singleRealtor')->name('agent.single');
// Route::get('/number', 'AgentController@index')->name('agent.number');
Route::get('/property', 'PropertyController@index')->name('property');
Route::get('/projects', 'PropertyController@forBuy')->name('buy.property');
Route::get('/forrent', 'PropertyController@viewMore')->name('more.property');
Route::get('/popularproperty', 'PropertyController@popularProperty')->name('popular.property');
Route::get('invest','PropertyController@invest')->name('invest');


Route::get('/result', 'PropertyController@search')->name('property.search');
// Route::get('/realtorDetail/{id}', 'AgentController@singleRealtor')->name('single.realtor');
Route::get('/searchone', 'AgencyController@newAgency')->name('agent.search');
Route::get('/getspeciality', 'AgentController@getSpeciality')->name('agent.special');
Route::get('/real-estate-agencies', 'AgencyController@index')->name('agency');
Route::get('/agency/{id}', 'AgencyController@singleAgency')->name('single.agency');
Route::get('/propertyDetail/{id}', 'PropertyController@singleProperty')->name('single.property');

Route::post('/agency/ajax', 'AgencyController@ajax');
Route::post('/agency/mobileajax', 'AgencyController@mobileajax');
Route::post('/agent/mobileajax', 'AgentController@mobileajax');
Route::get('/property/{property_type}', 'PropertyController@explorer')->name('explorer.search');
Route::get('/contact-us', function () {
    return view('layouts.contact');
})->name('contact');

// Route::get('/exapmle', function () {
//     return view('frontend.agency.agentlist');
// })->name('contact');

Route::post('sendform', 'LeadController@formsubmit')->name('contact.form');

// mobile
Route::post('propertymobile', 'PropertyController@mobile');
Route::get('filter/{for}', 'PropertyController@mobile')->name('filter');
Route::get('results/{all}', 'PropertyController@search')->name('allproperties');
// mobile

// Route::prefix('construction')->group(function () {
Route::get('construction', 'ConstructionACategoryController@index')->name('construction.home');
Route::get('searchsuggestions', 'ConstructionACategoryController@searchsuggestions')->name('construction.searchsuggestions');
Route::get('construction/result', 'ConstructionACategoryController@search')->name('construction.search');
Route::get('{store:slug}/product/{product:slug}', 'ConstructionBCategoryController@singleproduct')->name('construction.singleproduct');
Route::get('store/{store:slug}', 'ConstructionStoreController@index')->name('construction.singlestore');
Route::get('{acategory:slug}', 'ConstructionBCategoryController@viewall')->name('construction.bcatlist');
Route::get('{acategory:slug}/{bcategory:slug}', 'ConstructionBCategoryController@index')->name('construction.bcat');
Route::get('{acategory:slug}/{bcategory:slug}/{ccategory:slug}', 'ConstructionBCategoryController@ccatproductlist')->name('construction.ccatproductlist');
Route::get('{acategory:slug}/{bcategory:slug}/{ccategory:slug}/{dcategory:slug}', 'ConstructionBCategoryController@dcatproductlist')->name('construction.dcatproductlist');
Route::get('{acategory:slug}/{bcategory:slug}/{ccategory:slug}/brand/{brand:slug}', 'ConstructionBCategoryController@brandproductlist')->name('construction.brandproductlist');
// });
