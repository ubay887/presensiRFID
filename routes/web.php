<?php
// use controller main
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthController;

// use controller guru
use App\Http\Controllers\Guru\ValueGuruController;
use App\Http\Controllers\Guru\ViewGuruController;

// use controller admin
use App\Http\Controllers\Admin\ViewAdminController;
use App\Http\Controllers\Admin\ValueAdminController;
use App\Http\Controllers\Admin\EditAdminController;
use App\Http\Controllers\Admin\DetailAdminController;

// use custom
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
// main route
Route::get('/', [ViewController::class, 'login'])->middleware('guest:guru')->middleware('guest:admin');
Route::post('/', [AuthController::class, 'postLogin'])->name('login');
Route::get('/logout', [AuthController::class, 'postLogout']);
Route::get('/time', [AuthController::class, 'valueAuth'])->name('value.auth');

Route::middleware('auth:guru')->group(function () {
    // main route guru
    Route::get('/guru/dashboard', [ViewGuruController::class, 'dashboard']);
    Route::get('/guru/profile', [ViewGuruController::class, 'profile']);
    Route::get('/guru/profile/changepass', [ViewGuruController::class, 'changepass']);
    Route::get('/guru/datasubjek', [ViewGuruController::class, 'datasubjek']);
    Route::get('/guru/presensi', [ViewGuruController::class, 'presensi']);
    Route::get('/guru/jammasuk', [ViewGuruController::class, 'jammasuk']);
    Route::get('/guru/grafik', [ViewGuruController::class, 'grafik']);
    Route::get('/guru/harilibur', [ViewGuruController::class, 'harilibur']);
    Route::get('/guru/dashboard/value', [ValueGuruController::class, 'valueDashboard'])->name('value.guru.dashboard');

    Route::get('/guru/siswa', [ViewGuruController::class, 'siswa']);
});
Route::middleware('auth:admin')->group(function () {
    // main route admin
    Route::get('/admin/dashboard', [ViewAdminController::class, 'dashboard']);
    Route::get('/admin/profile', [ViewAdminController::class, 'profile']);
    Route::post('/admin/profile/update', [EditAdminController::class, 'update']);
    Route::get('/admin/dashboard/value', [ValueAdminController::class, 'valueDashboard'])->name('value.dashboard');

    //route mengatur siswa
    Route::get('/admin/siswa', [ViewAdminController::class, 'siswa']);
    Route::get('/admin/siswa/{ID}/detail', [DetailAdminController::class, 'siswa']);

    //route mengatur guru
    Route::get('/admin/guru', [ViewAdminController::class, 'guru']);
});
