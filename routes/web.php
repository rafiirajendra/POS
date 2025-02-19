<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'home']);
Route::get('/transaction', [TransactionController::class, 'transaction']);
Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);
Route::get('/category/food-beverage', [ProductsController::class, 'food']);
Route::get('/category/beauty-health', [ProductsController::class, 'beauty']);
Route::get('/category/home-care', [ProductsController::class, 'homecare']);
Route::get('/category/baby-kid', [ProductsController::class, 'baby']);
