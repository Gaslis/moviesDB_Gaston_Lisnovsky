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

Route::get('/home', 'HomeController@index')->name('home');


// Movies

Route::get('/','MoviesController@index');

Route::get('/movies/detallePelicula/{id}','MoviesController@show');

Route::get('/movies/listaPeliculas/','MoviesController@listaP');

Route::get('/movies/editarPelicula/{id}','MoviesController@edit');

Route::patch('/movies/guardarPeliculaEditada/{id}', 'MoviesController@update');


// Actors

Route::get('/actors/listaActores/','ActorsController@listaA');

Route::get('/actors/detalleActor/{id}','ActorsController@show');

Route::get('/actors/agregrarActor/','ActorsController@create');

Route::post('/actors/guardarActor','ActorsController@store');


// Generos

Route::get('/genres/listaGeneros/','GenresController@listaG');

Route::get('/genres/listadoXgenero/{id}','GenresController@show');
