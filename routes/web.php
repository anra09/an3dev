<?php

use App\Models\Pendaftaran;
use App\Models\Pengguna_layanan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Pengguna_layananController;
use App\Http\Controllers\Penyedia_layananController;
use Database\Seeders\IndoRegionSeeder;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/screen', function () {
    return view('screen');
 });

Route::middleware(['auth:sanctum','verified'])->resource('/dashboard',DashboardController::class );

Route::middleware(['auth:sanctum','verified'])->resource('/',DashboardController::class );

Route::middleware(['auth:sanctum','verified'])->resource('/profile',Pengguna_layananController::class );

Route::middleware(['auth:sanctum','verified'])->resource('/daftar',PendaftaranController::class );

Route::middleware(['auth:sanctum','verified'])->resource('/layanan',Penyedia_layananController::class );

Route::post('profile-kota', 'Pengguna_layananController@kota')->name('profile-kota.kota');


