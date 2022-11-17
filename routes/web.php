<?php

use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {return view('welcome');})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('modulos', App\Http\Controllers\ModuloController::class)->names('modulos');
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->names('categorias');
Route::resource('subestaciones', App\Http\Controllers\SubestacioneController::class)->names('subestaciones');


Route::resource('users', App\Http\Controllers\UserController::class);
//Route::get('users.index',[App\Http\Controllers\UserController::class, 'index']);

//Route::get('users' ,App\Http\Controllers\UserController::class);
//Route::post('users',[App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
