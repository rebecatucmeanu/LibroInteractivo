<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CapitulosController;

Route::get('/portada', [CapitulosController::class, 'mostrarTituloAutor']);
Route::get('/capitulo1', [CapitulosController::class, 'capitulo1']);
Route::get('/capitulo2', [CapitulosController::class, 'capitulo2']);
Route::get('/choice1', [CapitulosController::class, 'choice1']);
Route::get('/TheEnd_goodChoice', [CapitulosController::class, 'TheEnd_goodChoice']);
Route::get('/TheEnd_badChoice', [CapitulosController::class, 'TheEnd_badChoice']);
