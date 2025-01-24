<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InventorieController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {//Ruta de bienvenida 
    return view('index');
})-> name('index');

Route::resource('/categories',CategoryController::class);
Route::resource('/clients',ClientController::class);
Route::resource('/inventories',InventorieController::class);
Route::resource('/employees',EmployeeController::class);
Route::resource('/products',ProductController::class);
Route::resource('/sales',SaleController::class);

Route::get('/addresses/{address}/delete',[App\Http\Controllers\CategoryController::class,'delete'])->name('category.delete');
Route::get('/clients/{client}/delete',[App\Http\Controllers\ClientController::class,'delete'])->name('clients.delete');
Route::get('/drivers/{driver}/delete',[App\Http\Controllers\ProductController::class,'delete'])->name('product.delete');
Route::get('/employees/{employee}/delete',[App\Http\Controllers\EmployeeController::class,'delete'])->name('employees.delete');
Route::get('/orders/{order}/delete',[App\Http\Controllers\SaleController::class,'delete'])->name('sale.delete');
Route::get('/pizzas/{pizza}/delete',[App\Http\Controllers\InventorieController::class,'delete'])->name('inventor.delete');
