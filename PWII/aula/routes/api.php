<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categoria','App\Http\Controllers\CategoriaController@indexApi');
Route::get('/produto','App\Http\Controllers\ProdutoController@indexApi');
Route::get('/contato','App\Http\Controllers\ContatoController@indexApi');
Route::get('/user','App\Http\Controllers\UserController@indexApi');

Route::post('/categoria','App\Http\Controllers\CategoriaController@storeApi');
Route::post('/produto','App\Http\Controllers\ProdutoController@storeApi');
Route::post('/contato','App\Http\Controllers\ContatoController@storeApi');
Route::post('/user','App\Http\Controllers\UserController@verifyUser');

Route::delete('/categoria/{id}','App\Http\Controllers\CategoriaController@destroyApi');
Route::delete('/produto/{id}','App\Http\Controllers\ProdutoController@destroyApi');
Route::delete('/contato/{id}','App\Http\Controllers\ContatoController@destroyApi');
Route::delete('/user','App\Http\Controllers\UserController@destroyApi');