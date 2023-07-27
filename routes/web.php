<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Rutas para el CRUD de las Categorias
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/create', [CategoryController::class, 'store'])->name('categories.create');
Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/edit/{category}', [CategoryController::class, 'update'])->name('categories.edit');
Route::post('/categories/delete/{category}', [CategoryController::class, 'destroy'])->name('categories.delete');

// Rutas para el CRUD de los Productos
Route::get('/products', [CategoryController::class, 'index'])->name('products.index');
Route::get('/products/create', [CategoryController::class, 'create'])->name('products.create');
Route::post('/products/create', [CategoryController::class, 'store'])->name('products.create');
Route::get('/products/edit/{product}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/products/edit/{product}', [CategoryController::class, 'update'])->name('categories.edit');
Route::post('/products/delete/{product}', [CategoryController::class, 'destroy'])->name('categories.delete');


Route::get('/', function () {
    return view('welcome');
});




