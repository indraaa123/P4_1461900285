<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\Jenis_bukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Rak_bukuController;
use Maatwebsite\Excel\Facades\Excel;

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
 
Route::get('/buku',[BukuController::class, 'index']);
Route::get('/jenis_buku',[Jenis_bukuController::class, 'index']);
Route::get('/user',[UserController::class, 'index']);
Route::get('/rak_buku',[Rak_bukuController::class, 'index']);
Route::get('/exportbuku',[BukuController::class, 'bukuexport'])->name('exportbuku');
Route::get('/exportjenis_buku',[Jenis_bukuController::class, 'jenis_bukuexport'])->name('exportjenis_buku');
Route::get('/exportuser',[UserController::class, 'userexport'])->name('exportuser');
Route::get('/exportrak_buku',[Rak_bukuController::class, 'rak_bukuexport'])->name('exportrak_buku');