<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\KonsumenController;
use App\Http\Controllers\Api\KurirController;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\RumahMakanController;
use App\Http\Controllers\Api\UlasanController;
use App\Http\Controllers\DashboardController;
use App\Kurir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Api Controller Konsumen, Menu, Rumah Makan

Route::post('konsumen/topup', [KonsumenController::class, 'TopUp']);
Route::resource('konsumen', KonsumenController::class)->only('show','store','update');
Route::get('rumahmakan/{rumahmakan}/laporan', [RumahMakanController::class, 'laporan']);
Route::resource('rumahmakan', RumahMakanController::class)->only('show', 'update', 'index');
Route::resource('menu', MenuController::class)->only('store','update','index', 'destroy');
Route::get('menu/{menu}/update', [MenuController::class, 'updateWithPhoto']);

//Api Order

Route::POST('order/struk', [OrderController::class, 'struk']); 
Route::GET('order/pengantaran', [OrderController::class, 'pengantaran']);
Route::GET('order/historipengantaran', [OrderController::class, 'historipengantaran']);
Route::GET('order/laporanpengantaran', [OrderController::class, 'laporanpengantaran']);
Route::POST('order/{order}/pembayaran', [OrderController::class, 'pembayaran']);
Route::POST('order/tambah', [OrderController::class, 'store']);
Route::resource('order', OrderController::class)->only('update', 'index', 'show');

//Api Ulasan
Route::post('ulasan', [UlasanController::class, 'store']);

//Api OmmaPawon
Route::get('konsumen/login/{phone}', [AuthController::class,'ommapawon']);
Route::get('ommapawon/login/{phone}', [AuthController::class, 'kurir']);

//Api Kurir
Route::resource('kurir', KurirController::class)->only('store','show','update','index','destroy');


