<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index']);
Route::post('/todo/create', [TodoController::class, 'create']);
Route::get('/todo/create', [TodoController::class, 'add']);
Route::get('/todo/update', [TodoController::class, 'find']);
Route::post('/todo/update', [TodoController::class, 'search']);
Route::post('/todo/update/($id)', [TodoController::class, 'update']);
Route::post('/todo/delete', [TodoController::class, 'delete']);
Route::post('todo/delete', [TodoController::class, 'remove']);