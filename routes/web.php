<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [TodoController::class, 'show']);
Route::post('/create-todo', [TodoController::class, 'create']);
Route::get('/deletetodoitem/{id}', [TodoController::class, 'delete']);
Route::get('/checktodoitem/{id}', [TodoController::class, 'checkItem']);
