<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::group(['middleware' => ['role:admin']], function () {
//    Route::post('products', [ProductController::class, 'store']);
//    Route::put('products/{product}', [ProductController::class, 'update']);
//    Route::delete('products/{product}', [ProductController::class, 'destroy']);
//    Route::get('sales', [SaleController::class, 'index']);
    Route::apiResource('users', UserController::class);
//});
