<?php

use App\Http\Controllers\BaliController;
use App\Http\Controllers\DashboardBaliController;
use App\Http\Controllers\DashboardSurabayaController;
use App\Http\Controllers\DashboardMedanController;
use App\Http\Controllers\SurabayaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//  return view('dashboard');
//})->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth:sanctum', 'verified']);
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);

// DATA PENDUDUK MEDAN
Route::get('/dashboardmedan', [DashboardMedanController::class, 'index']);
Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/cari', [MahasiswaController::class, 'cari']);

// DATA PENDUDUK BALI
Route::get('/dashboardbali', [DashboardBaliController::class, 'index']);
Route::resource('bali', BaliController::class);
Route::get('/cari', [BaliController::class, 'cari']);

// DATA PENDUDUK SURABAYA
Route::get('/dashboardsurabaya', [DashboardSurabayaController::class, 'index']);
Route::resource('surabaya', SurabayaController::class);
Route::get('/cari', [SurabayaController::class, 'cari']);