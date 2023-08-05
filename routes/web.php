<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\EmployeesController;


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
Route::get('/departamento', [DepartamentoController::class, 'index'])->name('departamento.index');
Route::get('/departamento/create', [DepartamentoController::class, 'create'])->name('departamento.create');
Route::post('/departamento/create', [DepartamentoController::class, 'store'])->name('departamento.create');
Route::get('/departamento/edit/{departamento}', [DepartamentoController::class, 'edit'])->name('departamento.edit');
Route::post('/departamento/edit/{departamento}', [DepartamentoController::class, 'update'])->name('departamento.edit');
Route::post('/departamento/delete/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamento.delete');

//Rutas para el CRUD de Ciudad
Route::get('/ciudad', [CiudadController::class, 'index'])->name('ciudad.index');
Route::get('/ciudad/create', [CiudadController::class, 'create'])->name('ciudad.create');
Route::post('/ciudad/create', [CiudadController::class, 'store'])->name('ciudad.create');
Route::get('/ciudad/edit/{ciudad}', [CiudadController::class, 'edit'])->name('ciudad.edit');
Route::post('/ciudad/edit/{departamento}', [CiudadController::class, 'update'])->name('departamento.edit');
Route::post('/ciudad/delete/{ciudad}', [CiudadController::class, 'destroy'])->name('ciudad.delete');


Route::get('/empleado', [EmployeesController::class, 'index'])->name('empleados.index');
Route::get('/empleado/create', [EmployeesController::class, 'create'])->name('empleados.create');
Route::post('/empleado/create', [EmployeesController::class, 'store'])->name('empleados.create');
Route::get('/empleado/edit/{empleado}', [EmployeesController::class, 'edit'])->name('empleados.edit');
Route::post('/empleado/edit/{ciudad}', [EmployeesController::class, 'update'])->name('empleados.edit');
Route::post('/empleado/delete/{empleado}', [EmployeesController::class, 'destroy'])->name('empleados.delete');

Route::get('/empleado', [EmployeesController::class, 'index'])->name('empleados.index');
Route::get('/empleado/create', [EmployeesController::class, 'create'])->name('empleados.create');
Route::post('/empleado/create', [EmployeesController::class, 'store'])->name('empleados.create');
Route::get('/empleado/edit/{empleado}', [EmployeesController::class, 'edit'])->name('empleados.edit');
Route::post('/empleado/edit/{ciudad}', [EmployeesController::class, 'update'])->name('empleados.edit');
Route::post('/empleado/delete/{empleado}', [EmployeesController::class, 'destroy'])->name('empleados.delete');


Route::get('/', function () {
    return view('welcome');
});




