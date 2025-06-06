<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ServiceProviderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/providers', [ServiceProviderController::class, 'index']);
Route::get('/providers/{provider}', [ServiceProviderController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);

