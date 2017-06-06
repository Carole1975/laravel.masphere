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

Auth::routes();

Route::get('/', function () {
    return redirect('/login');
})->name('home');

Route::group(['middleware'=>'pro'], function () {
    Route::get('/pro', 'ProController@index')->name('pro');

    Route::get('/pro/annonces/choose/{id}', 'ProController@chooseAnnonce');
    Route::get('/pro/annonces/unchoose/{id}', 'ProController@unchooseAnnonce');
    Route::post('/pro/search/post', 'ProController@search')->name('prosearchpost');
    Route::get('/pro/search', 'ProController@search')->name('prosearch');

    Route::post('/pro/createdispo', 'ProController@createDispo')->name('createDispo');
    Route::get('/pro/dispo', 'ProController@dispoform')->name('dispoform');
});

Route::group(['middleware'=>'fam'], function () {
    Route::get('/family', 'FamilyController@home')->name('family');
    Route::get('/family/search', 'FamilyController@search')->name('familysearch');
    Route::post('/annonces/create', 'AnnonceController@createAnnonce')->name('createAnnonce');
    Route::get('/family/annonce/update/{id}', ['uses' => 'FamilyController@getAnnonceToUpdate']);
    Route::post('/updateAnnonce/{id}', 'FamilyController@updateAnnonce')->name('updateAnnonce');
});
