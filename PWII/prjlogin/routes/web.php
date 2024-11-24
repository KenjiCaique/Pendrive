<?php

use Illuminate\Support\Facades\Route;

//importar
use App\Http\Middleware\Authenticate;
use Illuminate\Auth\AuthenticationException;
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

Route::get('/usuario', function () {
    return view('usuario');
});

Route::post('/usuario','App\Http\Controllers\UserController@store');

Route::get('/login', function () {
    return view('login');
});

Route::post('/login-user','App\Http\Controllers\UserController@verifyUser');

Route::get('/logout','App\Http\Controllers\UserController@logoutUser');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(Authenticate::class);

Route::get('/dashboard','App\Http\Controllers\UserController@index')->middleware(Authenticate::class);