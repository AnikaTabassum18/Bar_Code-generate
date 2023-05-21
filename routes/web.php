<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/generate-barcode', [ProductController::class, 'index'])->name('generate.barcode');
Route::get('/show-barcode', [ProductController::class, 'show_barcode']);
Route::get('/create', [ProductController::class, 'create_barcode']);
Route::post('/post', [ProductController::class, 'store_barcode']);