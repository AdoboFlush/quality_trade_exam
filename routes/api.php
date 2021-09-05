<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/products/{keyword}', [ProductController::class, 'index_get']);
Route::post('/products/{keyword}', [ProductController::class, 'index_post']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
