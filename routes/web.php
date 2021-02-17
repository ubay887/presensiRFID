<?php

use App\Http\Controllers\ViewController;
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
Route::post('/', [AuthController::class, 'auth']);

Route::get('/dashboard', [ViewController::class, 'dashboard']);
Route::get('/profile', [ViewController::class, 'profile']);
Route::get('/anggota', [ViewController::class, 'anggota']);
Route::get('/dashboard/api/value', [ValueController::class, 'dashboardValue'])->name('api.dashboard');
Route::get('/profile/changepassword', [ViewController::class, 'changepass']);
