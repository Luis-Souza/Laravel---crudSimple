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

#Route::get('/veiculo', 'VeiculoController@index');
Route::get('/novo_veiculo', 'VeiculoController@index');

Route::post('/veiculo', function (){
    return 'veiculos';
});