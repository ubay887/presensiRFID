<?php

use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ValueController;
use App\Http\Controllers\ViewGuruController;
use App\Http\Controllers\ViewAdminController;
use App\Http\Controllers\ValueAdminController;
use App\Http\Controllers\EditAdminController;
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

Route::get('/', [ViewController::class, 'login'])->middleware('guest:guru')->middleware('guest:admin');
Route::post('/', [AuthController::class, 'postLogin'])->name('login');
Route::get('/logout', [AuthController::class, 'postLogout']);

Route::middleware('auth:guru')->group(function () {
    Route::get('/guru/dashboard', [ViewGuruController::class, 'dashboard']);
    Route::get('/guru/profile', [ViewGuruController::class, 'profile']);
    Route::get('/guru/anggota', [ViewGuruController::class, 'anggota']);
    Route::get('/guru/datasubjek', [ViewGuruController::class, 'datasubjek']);
    Route::get('/guru/presensi', [ViewGuruController::class, 'presensi']);
    Route::get('/guru/ruangan', [ViewGuruController::class, 'ruangan']);
    Route::get('/guru/grafik', [ViewGuruController::class, 'grafik']);
    Route::get('/guru/jammasuk', [ViewGuruController::class, 'jammasuk']);
    Route::get('/guru/harilibur', [ViewGuruController::class, 'harilibur']);
    Route::get('/guru/dashboard/api/value', [ValueController::class, 'dashboardValue'])->name('value.guru.dashboard');
    Route::get('/guru/profile/changepass', [ViewGuruController::class, 'changepass']);
});
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [ViewAdminController::class, 'dashboard']);
    Route::get('/admin/profile', [ViewAdminController::class, 'profile']);
    Route::get('/admin/anggota', [ViewAdminController::class, 'anggota']);
    Route::get('/admin/guru', [ViewAdminController::class, 'guru']);
    Route::post('/admin/profile/update', [EditAdminController::class, 'update']);
    Route::get('/admin/dashboard/value', [ValueAdminController::class, 'valueDashboard'])->name('value.dashboard');
});
