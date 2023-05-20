<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExhibitionsController;

use App\Exhibitions\Actions\GetExhibitionsAction;
use App\Exhibitions\Actions\GetExhibitionActionById;
use App\Exhibitions\Actions\CreateExhibitionAction;
use App\Exhibitions\Actions\UpdateExhibitionAction;
use App\Exhibitions\Actions\DeleteExhibitionAction;

Route::get('/', [ExhibitionsController::class, 'index']);
Route::get('/exhibitions/{id}', [ExhibitionsController::class, 'getById']);
Route::post('/exhibitions', [ExhibitionsController::class, 'create']);
Route::put('/exhibitions/{id}', [ExhibitionsController::class, 'update']);
Route::delete('/exhibitions/{id}', [ExhibitionsController::class, 'delete']);
