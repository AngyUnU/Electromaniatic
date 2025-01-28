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

Route::get('/', function () { //Ruta de bienvenida 
    return view('index');
})->name('index');

Route::resource('/categories', CategoryController::class);
Route::resource('/clients', ClientController::class);
Route::resource('/inventories', InventorieController::class);
Route::resource('/employees', EmployeeController::class);
Route::resource('/products', ProductController::class);
Route::resource('/sales', SaleController::class);

Route::get('/categories/{categories}/delete', [App\Http\Controllers\CategoryController::class, 'delete'])->name('categories.delete');
Route::get('/clients/{client}/delete', [App\Http\Controllers\ClientController::class, 'delete'])->name('clients.delete');
Route::get('/products/{products}/delete', [App\Http\Controllers\ProductController::class, 'delete'])->name('products.delete');
Route::get('/employees/{employees}/delete', [App\Http\Controllers\EmployeeController::class, 'delete'])->name('employees.delete');

Route::put('/categories/{categories}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
Route::put('/client/{clients}/update', [App\Http\Controllers\ClientController::class, 'update'])->name('clients.update');
Route::put('products/{products}/update', [ProductController::class, 'update'])->name('products.update');
Route::put('employees/{employee}/update', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employees.update');

Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');


//Route::get('/orders/{order}/delete',[App\Http\Controllers\SaleController::class,'delete'])->name('sale.delete');
