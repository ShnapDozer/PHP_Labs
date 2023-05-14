<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exhibitions', 'ExhibitionController@index');
Route::post('/exhibitions', 'ExhibitionController@store');
Route::get('/exhibitions/{id}', 'ExhibitionController@show');
Route::put('/exhibitions/{id}', 'ExhibitionController@update');
Route::patch('/exhibitions/{id}', 'ExhibitionController@update');
Route::delete('/exhibitions/{id}', 'ExhibitionController@destroy');

Route::get('/exhibitions', [GetExhibitionsAction::class, 'execute']);
Route::get('/exhibitions/{id}', [GetExhibitionAction::class, 'execute']);
Route::post('/exhibitions', [CreateExhibitionAction::class, 'execute']);
Route::put('/exhibitions/{id}', [UpdateExhibitionAction::class, 'execute']);
Route::delete('/exhibitions/{id}', [DeleteExhibitionAction::class, 'execute']);