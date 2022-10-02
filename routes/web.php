<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;

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

// TUGAS DIBAWAH

Route::get('/', [CobaController::class, 'index']);

Route::get('create', [CobaController::class, 'create']);
Route::post('', [CobaController::class, 'store']);

Route::get('{id}', [CobaController::class, 'show']);

Route::get('{id}/edit', [CobaController::class, 'edit']);
Route::put('{id}', [CobaController::class, 'update']);

Route::delete('{id}', [CobaController::class, 'destroy']);

// TUGAS END