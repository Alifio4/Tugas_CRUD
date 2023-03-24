<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeranjangController;

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
Route::get('/', [ProdukController::class, 'index']);
Route::get('/pembelian', [ProdukController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index2']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::group(['as' => 'produk.', 'prefix' => 'produk'], function () {
    Route::post('/store', [ProdukController::class, 'store']);
    Route::get('/create', [ProdukController::class, 'create']);
    Route::get('/edit/{id}', [ProdukController::class, 'edit']);
    Route::post('/update/{id}', [ProdukController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [ProdukController::class, 'destroy'])->name('destroy');
    });

Route::group(['as' => 'kategori.', 'prefix' => 'kategori'], function () {
    Route::post('/store', [kategoriController::class, 'store']);
    Route::get('/create', [kategoriController::class, 'create']);
    Route::get('/edit/{id}', [kategoriController::class, 'edit']);
    Route::post('/update/{id}', [kategoriController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [kategoriController::class, 'destroy'])->name('destroy');
    });

Route::group(['as' => 'keranjang.', 'prefix' => 'keranjang'], function () {
    Route::get('/store/{id}', [KeranjangController::class, 'store']);
    });