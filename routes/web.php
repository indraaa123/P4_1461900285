<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\Jenis_bukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Rak_bukuController;

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
Route::get('/bukuexport',[BukuController::class, 'bukuexport']);
Route::get('/jenis_bukuexport',[Jenis_bukuController::class, 'jenis_bukuexport']);
Route::get('/userexport',[UserController::class, 'userexport']);
Route::get('/rak_bukuexport',[Rak_bukuController::class, 'rak_bukuexport']);