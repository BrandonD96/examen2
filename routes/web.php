<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionController;

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

Route::post('/crearPublicacion',[PublicacionController::class,'crearPublicacion'])->name('crear.publicacion');
Route::get('/{slug}',[PublicacionController::class,'mostrarPublicacion'])->name('mostrar.publicacion');
Route::post('/eliminarPublicacion',[PublicacionController::class,'eliminarPublicacion'])->name('eliminar.publicacion');
Route::get('/', function () {return view('index');})->name('Inicio');


