<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

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
    return 'tes';
});

// bikin route nya dulu
Route::get('pasien', [PasienController::class, 'index']);
Route::get('pasien/create', [PasienController::class, 'create']);
Route::post('pasien/store', [PasienController::class, 'store']);
