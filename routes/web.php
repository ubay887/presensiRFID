<?php

use App\Http\Controllers\ViewController;
use App\Http\Controllers\ViewGuruController;
use App\Http\Controllers\ViewAdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ValueController;
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

Route::get('/', [ViewController::class, 'login']);
Route::post('/', [AuthController::class, 'postLogin'])->name('login');
Route::get('/logout', [AuthController::class, 'postLogout']);

Route::middleware('auth:guru')->group(function () {
    Route::get('/guru/dashboard', [ViewGuruController::class, 'dashboard']);
    Route::get('/guru/profile', [ViewGuruController::class, 'profile']);
    Route::get('/guru/anggota', [ViewGuruController::class, 'anggota']);
    Route::get('/guru/presensi', [ViewGuruController::class, 'presensi']);
    Route::get('/guru/ruangan', [ViewGuruController::class, 'ruangan']);
    Route::get('/guru/grafik', [ViewGuruController::class, 'grafik']);
    Route::get('/guru/jammasuk', [ViewGuruController::class, 'jammasuk']);
    Route::get('/guru/dashboard/api/value', [ValueController::class, 'dashboardValue'])->name('api.dashboard');
    Route::get('/guru/profile/changepassword', [ViewGuruController::class, 'changepass']);
});
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [ViewAdminController::class, 'dashboard']);
});