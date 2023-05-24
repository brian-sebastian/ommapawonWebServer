<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FirebaseController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\ProfitController;
use App\Http\Controllers\RegisterController;
use App\Order;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'login']);

// Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/dashboard', DashboardController::class)->middleware('auth');

Route::resource('/daftar_menu', MenuController::class)->middleware('auth');

Route::get('/penghasilan_harian', [ProfitController::class, 'harian'])->middleware('auth');

Route::get('/penghasilan_bulanan', [ProfitController::class, 'bulanan'])->middleware('auth');

Route::resource('/konsumen', KonsumenController::class)->middleware('auth');

Route::resource('/kurir', KurirController::class)->middleware('auth');

Route::resource('/pesanan', PesananController::class)->middleware('auth');

Route::resource('/ulasan', UlasanController::class)->middleware('auth');


// Tes Firebase di laravel
Route::get('/signup', [FirebaseController::class, 'signUp']);
Route::get('/sigin', [FirebaseController::class, 'signIn']);
Route::get('/sigout', [FirebaseController::class, 'signOut']);
Route::get('/check', [FirebaseController::class, 'userCheck']);
