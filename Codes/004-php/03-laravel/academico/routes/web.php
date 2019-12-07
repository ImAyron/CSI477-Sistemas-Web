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

Route::get('/welcome', 'PaginasController@welcome');

Route::get('/', 'PaginasController@index');

Route::get('/listar', 'PaginasController@listar');

Route::get('/estados', 'EstadoController@index');

Route::get('/disciplinas', 'DisciplinaController@index');

// Route::get('/cidades', 'CidadeController@index');
// Route::get('/cidades/incluir', 'CidadeController@create');
// Route::post('/cidades/salvar', 'CidadeController@store');

Route::resource('/cidades', 'CidadeController');




Route::get('/alunos', 'AlunoController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
