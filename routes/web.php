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

Route::get('/backerror', function () {
    return redirect()->back();
})->name('backerror');

Route::group(['middleware'=>'pro'], function () {
    Route::get('/pro', 'ProController@index')->name('pro');

    Route::get('/pro/annonces/choose/{id}', 'StatutController@chooseAnnoncePro');
    Route::get('/pro/annonces/unchoose/{id}', 'StatutController@unchooseAnnoncePro');

    Route::post('/pro/search/post', 'ProController@search')->name('prosearchpost');
    Route::get('/pro/search', 'ProController@search')->name('prosearch');

    Route::post('/pro/createdispo', 'ProController@createDispo')->name('createDispo');
    Route::get('/pro/dispo', 'ProController@dispoform')->name('dispoform');
    Route::get('/pro/dispo/update/{id}', ['uses'=>'ProController@getDispoToUpdate']);
    Route::post('/updateDispo/{id}', 'ProController@updateDispo')->name('updateDispo');

    Route::get('/statut/dispo/post2/{id}', 'StatutController@validationDispoPro');
    Route::get('/statut/dispo/depost2/{id}', 'StatutController@deValidationDispoPro');
});

Route::group(['middleware'=>'fam'], function () {
    Route::get('/family', 'FamilyController@home')->name('family');

    Route::get('/family/search', 'FamilyController@search')->name('familysearch');
    Route::post('/annonces/create', 'AnnonceController@createAnnonce')->name('createAnnonce');
    Route::get('/family/annonce/update/{id}', ['uses'=>'FamilyController@getAnnonceToUpdate']);
    Route::get('/family/annonce', 'FamilyController@annoncesform');
    Route::post('/updateAnnonce/{id}', 'FamilyController@updateAnnonce')->name('updateAnnonce');
    Route::get('/annonces/suppr/{id}', 'AnnonceController@supprAnnonce');

    Route::get('/statut/dispo/post1/{id}', 'StatutController@choixDispoFamille');
    Route::get('/statut/dispo/depost1/{id}', 'StatutController@unChoixDispoFamille');

    Route::get('/statut/annonce/post2/{id}', 'StatutController@validationAnnonceFam');
    Route::get('/statut/annonce/depost2/{id}', 'StatutController@deValidationAnnonceFam');
});
