<?php

use App\Http\Controllers\CotistasController;
use Illuminate\Support\Facades\Route;

Route::get('/cotistas', [CotistasController::class , 'index']);

Route::get('/cotistas/novo', [CotistasController::class , 'create']);
Route::post('/cotistas/novo', [CotistasController::class , 'store']);
