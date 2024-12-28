<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BetController;

Route::post('/usuarios', [UserController::class, 'storeOrUpdate']);
Route::get('/eventos', [EventController::class, 'index']);
Route::post('/apuestas', [BetController::class, 'store']);
Route::get('/apuestas/usuario/{id}', [BetController::class, 'listByUser']);
Route::patch('/apuestas/{id}', [BetController::class, 'updateState']);

