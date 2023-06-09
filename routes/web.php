<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;

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

// Route::resource('/produk', produk::class);

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');

Route::get('/form', [AkunController::class, 'index']);
Route::post('/form', [AkunController::class, 'store'])->name('form.store');
