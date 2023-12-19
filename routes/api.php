<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


//Route::get('/user', [AuthController::class, 'user']);
Route::get('/location', [UserController::class, 'getAllLocations']);
Route::apiResource('users', UserController::class);
Route::get('/location/{id}', [UserController::class, 'getLocation']);
