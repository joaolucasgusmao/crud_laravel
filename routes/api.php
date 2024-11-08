<?php

namespace Routes;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/users', [UserController::class, 'create']);
Route::get('/users', [UserController::class, 'read']);
Route::patch('/users/{userId}', [UserController::class, 'update']);
Route::delete('/users/{userId}', [UserController::class, 'delete']);
