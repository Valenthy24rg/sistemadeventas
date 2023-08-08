<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\EmployeeController;


Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Rutas para el CRUD de las Categoria
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/create', [CategoryController::class, 'store'])->name('categories.create');
Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/edit/{category}', [CategoryController::class, 'update'])->name('categories.edit');
Route::post('/categories/delete/{category}', [CategoryController::class, 'destroy'])->name('categories.delete');

// Rutas para el CRUD de los Productos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/create', [ProductController::class, 'store'])->name('products.create');
Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/edit/{product}', [ProductController::class, 'update'])->name('products.edit');
Route::post('/products/delete/{product}', [ProductController::class, 'destroy'])->name('products.delete');

//Rutas para el CRUD de departamento
Route::get('/department', [DepartmentController::class, 'index'])->name('departamento.index');
Route::get('/department/create', [DepartmentController::class, 'create'])->name('departamento.create');
Route::post('/department/create', [DepartmentController::class, 'store'])->name('departamento.create');
Route::get('/department/edit/{department}', [DepartmentController::class, 'edit'])->name('departamento.edit');
Route::post('/department/edit/{department}', [DepartmentController::class, 'update'])->name('departamento.edit');
Route::post('/department/delete/{department}', [DepartmentController::class, 'destroy'])->name('departamento.delete');

//Rutas para el CRUD de Ciudad
Route::get('/ciudad', [CiudadController::class, 'index'])->name('ciudads.index');
Route::get('/ciudad/create', [CiudadController::class, 'create'])->name('ciudads.create');
Route::post('/ciudad/create', [CiudadController::class, 'store'])->name('ciudads.create');
Route::get('/ciudad/edit/{ciudad}', [CiudadController::class, 'edit'])->name('ciudads.edit');
Route::post('/ciudad/edit/{departamento}', [CiudadController::class, 'update'])->name('departamento.edit');
Route::post('/ciudad/delete/{ciudad}', [CiudadController::class, 'destroy'])->name('ciudads.delete');

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees/create', [EmployeeController::class, 'store'])->name('employees.create');
Route::get('/employees/edit/{employees}', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::post('/employees/edit/{employees}', [EmployeeController::class, 'update'])->name('employees.edit');
Route::post('/employees/delete/{employees}', [EmployeeController::class, 'destroy'])->name('employees.delete');

Route::get('/client', [EmployeeController::class, 'index'])->name('clients.index');
Route::get('/client/create', [EmployeeController::class, 'create'])->name('clients.create');
Route::post('/client/create', [EmployeeController::class, 'store'])->name('clients.create');
Route::get('/client/edit/{client}', [EmployeeController::class, 'edit'])->name('clients.edit');
Route::post('/client/edit/{client}', [EmployeeController::class, 'update'])->name('clients.edit');
Route::post('/client/delete/{client}', [EmployeeController::class, 'destroy'])->name('clients.delete');


Route::get('/', function () {
    return view('welcome');
});




