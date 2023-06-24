<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::resource("product", ProductController::class);

Route::get('/', [ProductController::class, 'index']);
Route::get('/add-product', [ProductController::class, 'create']);
Route::get('/show-product/{id}', [ProductController::class, 'show']);
Route::post('/save-product', [ProductController::class, 'store']);
Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
Route::post('/update-product', [ProductController::class, 'update']);
Route::get('/delete-product/{id}', [ProductController::class, 'destroy']);



Route::get('/view-order-product', [OrderController::class, 'index']);
Route::get('order-product/{id}', [OrderController::class, 'store']);


Route::get('/delete-order/{id}', [OrderController::class, 'destroy']);