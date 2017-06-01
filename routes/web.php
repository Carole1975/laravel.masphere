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

Route::get('/family', 'FamilyController@home')->name('family');
Route::get('/pro', 'ProController@index')->name('pro');
Route::get('/pro/search', 'ProController@search')->name('prosearch');
Route::get('/pro/dispo', 'ProController@dispoform')->name('disponibilite');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/annonces', 'AnnoncesController@getAnnonces');
Route::get('/test/users', 'TestController@testUsers');
//Route::get('/test/usersRole', 'TestController@testUserRole');
Route::get('/test/anoonces', 'TestController@testAnnonces');

Route::post('/annonces/create', 'AnnonceController@createAnnonce')->name('createAnnonce');
