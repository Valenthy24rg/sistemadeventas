<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\ProviderController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\BillController;




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

Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', DepartmentController::class);
Route::apiResource('departments', ProductController::class);
Route::apiResource('cities', CityController::class);
Route::apiResource('providers', ProviderController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('clients', EmployeeController::class);
Route::apiResource('employees', ClientController::class);
Route::apiResource('bills', BillController::class);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
