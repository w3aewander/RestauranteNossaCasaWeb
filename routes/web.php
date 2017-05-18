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

Route::get('/', ['as'=>'inicio', function () {
    return view('welcome');
}]);

Route::group([], function() {
		
Route::get('/home', ['as'=>'home', function () {
    return view('home');
}]);	

Route::get('/comandas/listar', ['as' => 'listar.comandas', 'uses'=>'ComandaController@index']);
Route::get('/comandas/nova', ['as'=>'nova.comanda', 'uses'=>'ComandaController@create']);
Route::post('/comandas/criar',['as'=>'criar.comanda', 'uses'=>'ComandaController@store']);
Route::get('/comanda/{id}/editar',['as'=>'editar.comanda','uses'=>'ComandaController@show']);
Route::get('/comanda/{id}/{valor}/fechar',['as'=>'fechar.comanda','uses'=>'ComandaController@close']);

Route::post('/comanda/registrar',['as'=>'registrar.comanda','uses'=>'ComandaController@registrar']);
});
