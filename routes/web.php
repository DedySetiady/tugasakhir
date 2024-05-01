<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PimpinanController;

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

Route::get('/', [LandingpageController::class, 'index']);

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');

Route::group(['middleware' => ['auth']], function () {
    Route::middleware(['cek_login:admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin');
    });

    Route::middleware(['cek_login:pimpinan'])->group(function () {
        Route::get('pimpinan', [PimpinanController::class, 'index'])->name('pimpinan');
    });

    Route::middleware(['cek_login:operator'])->group(function () {
        Route::get('operator', [OperatorController::class, 'index'])->name('operator');
    });

    Route::middleware(['cek_login:pelanggan'])->group(function () {
        Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
    });
});
