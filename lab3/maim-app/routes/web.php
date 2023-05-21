<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExhibitionsController;

Route::get('/', [ExhibitionsController::class, 'index']);
Route::get('/exhibitions/{id}', [ExhibitionsController::class, 'getById']);
Route::post('/exhibitions', [ExhibitionsController::class, 'create']);
Route::put('/exhibitions/{id}', [ExhibitionsController::class, 'update']);
Route::delete('/exhibitions/{id}', [ExhibitionsController::class, 'delete']);
