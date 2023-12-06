<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sitioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/personas', [sitioController::class,'index']);
Route::post('/personas/store', [sitioController::class, 'store'])->name('personas.store');


// Ruta para la página de herramientas
Route::get('/artistas', [sitioController::class, 'artistas']);

// Ruta para la página de preguntas frecuentes
Route::get('/bilioteca', [sitioController::class, 'biblioteca']);

// Ruta para la página de noticias
Route::get('/generos', [sitioController::class, 'generos']);

// Ruta para la página de blog
Route::get('/acerca', [sitioController::class, 'acerca']);