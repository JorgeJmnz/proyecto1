<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::resource('modulos', App\Http\Controllers\ModuloController::class)->names('modulos');
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->names('categorias');
Route::resource('subestaciones', App\Http\Controllers\SubestacioneController::class)->names('subestaciones');

Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('catalogo', App\Http\Controllers\catalgocontroller::class)->names('catalogos');
Route::resource('mostraritem', App\Http\Controllers\mostraritemcontroller::class);
Route::resource('encargados', App\Http\Controllers\EncargadoController::class)->names('encargados');
Route::resource('inventarios', App\Http\Controllers\InventarioController::class)->names('inventarios');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
