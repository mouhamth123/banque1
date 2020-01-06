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

Route::get('/image', 'HomeController@indexe')->name("Images.index");
Route::get('image/create','HomeController@create');
Route::post('image/create','HomeController@store')->name("ajouter_image");


Route::get('image/{id}/edit','HomeController@edit')->name("editer_image");
Route::get('/profil','UserController@profile')->name("profile");
Route::post('/profile','UserController@update_avatar');
Route::get('/abonnement/expired', "AbonnementController@expired");
Route::get('/welcome', 'HomeController@index')->name('welcome');

Route::patch('image/{id}/update', 'HomeController@update')->name('update_image');

Route::get('image/{id}/download', 'HomeController@show')->name('download_image');

Route::get('/backoffice/{slog}', "produitController@show");
Route::get('/', 'HomeController@accueil');
Route::get('/backoffice', "produitController@backoffi");
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/inscription', function () {
    return view('layout.inscription');
});
Route::get('/welcome/inscription', function () {
    return view('layout.inscription');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::delete('image/{id}', 'HomeController@destroy');
Route::delete('user/{id}', 'UserController@destroy'); 

Route::get('/nature', 'CategoriesController@nature');
Route::get('/oser', 'CategoriesController@oser');
Route::get('/faune', 'CategoriesController@faune');
Route::get('/architecture', 'CategoriesController@architecture');


Route::get('/test1', 'HomeController@test1');


