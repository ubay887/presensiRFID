<?php
// use controller admin
use App\Http\Controllers\Admin\EditAdminController;
use App\Http\Controllers\Admin\ExportAdminController;
use App\Http\Controllers\Admin\ViewAdminController;

// use controller guru
use App\Http\Controllers\Guru\EditGuruController;
use App\Http\Controllers\Guru\ValueGuruController;
use App\Http\Controllers\Guru\ViewGuruController;

// use controller main
use App\Http\Controllers\Main\AuthController;
use App\Http\Controllers\Main\EditController;
use App\Http\Controllers\Main\ViewController;

// use controller siswa
use App\Http\Controllers\Siswa\ViewSiswaController;

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
Route::get('/', [ViewController::class, 'login'])->middleware('guest:guru')->middleware('guest:admin')->middleware('guest:siswa');
Route::post('/', [AuthController::class, 'postLogin'])->name('login');
Route::get('/logout', [AuthController::class, 'postLogout']);
Route::get('/logtime', [AuthController::class, 'timeAuth']);

Route::middleware('auth:siswa')->group(function () {
    Route::get('/siswa/dashboard', [ViewSiswaController::class, 'dashboard']);
    Route::get('/siswa/profile', [ViewSiswaController::class, 'profile']);
    Route::get('/siswa/grafik', [ViewSiswaController::class, 'grafik']);
    Route::get('/siswa/calendar', [ViewController::class, 'calendar']);
});

Route::middleware('auth:guru')->group(function () {
    // main route guru
    Route::get('/guru/dashboard', [ViewGuruController::class, 'dashboard']);
    Route::get('/guru/profile', [ViewGuruController::class, 'profile']);
    Route::post('/guru/profile/{guru}/update', [EditGuruController::class, 'updateProfile']);
    Route::post('/guru/profile/{guru}/delete', [EditGuruController::class, 'deleteProfile']);
    Route::get('/guru/kelas', [ViewController::class, 'kelasSiswa']);
    Route::post('/guru/kelas/tambah', [EditController::class, 'tambahKelasSiswa']);

    Route::get('/guru/presensi', [ViewGuruController::class, 'presensi']);
    Route::get('/guru/presensi/rekap', [ViewGuruController::class, 'rekap']);
    Route::get('/guru/jam', [ViewGuruController::class, 'jammasuk']);
    Route::get('/guru/jam/tambahjam', [ViewGuruController::class, 'tambahjam']);
    Route::get('/guru/grafik', [ViewGuruController::class, 'grafik']);
    Route::get('/guru/tagid', [ViewGuruController::class, 'tagid']);
    Route::get('/guru/quotes', [ViewGuruController::class, 'quotes']);
    Route::get('/guru/dashboard/value', [ValueGuruController::class, 'valueDashboard']);
    Route::get('/guru/calendar', [ViewController::class, 'calendar']);

    // route mengatur siswa
    Route::get('/guru/siswa', [ViewController::class, 'tableSiswa']);
    Route::get('/guru/siswa/tambah', [ViewController::class, 'tambahSiswa']);
    Route::get('/guru/siswa/{id}/detail', [ViewController::class, 'detailSiswa']);
    Route::get('/guru/siswa/{id}/record', [ViewController::class, 'recordSiswa']);
    Route::post('/guru/siswa/delete', [EditController::class, 'deleteSiswa']);
});

Route::middleware('auth:admin')->group(function () {
    // main route admin
    Route::get('/admin/dashboard', [ViewAdminController::class, 'dashboard']);
    Route::get('/admin/profile', [ViewAdminController::class, 'profile']);
    Route::post('/admin/profile/{admin}/update', [EditAdminController::class, 'updateProfile']);
    Route::post('/admin/profile/{admin}/delete', [EditAdminController::class, 'deleteProfile']);
    Route::get('/admin/calendar', [ViewController::class, 'calendar']);

    //route mengatur siswa
    Route::get('/admin/siswa', [ViewController::class, 'tableSiswa'])->name('admin.table.siswa');
    Route::get('/admin/siswa/tambah', [ViewController::class, 'tambahSiswa']);
    Route::get('/admin/siswa/{id}/detail', [ViewController::class, 'detailSiswa']);
    Route::get('/admin/siswa/{id}/record', [ViewController::class, 'recordSiswa']);
    Route::post('/admin/siswa/delete', [EditController::class, 'deleteSiswa']);
    Route::get('/admin/kelas', [ViewController::class, 'kelasSiswa']);

    Route::get('/admin/siswa/export', [ExportAdminController::class, 'allSiswa']);

    //route mengatur guru
    Route::get('/admin/guru', [ViewAdminController::class, 'tableGuru']);
    Route::get('/admin/guru/{id}/detail', [ViewAdminController::class, 'detailGuru']);
    Route::get('/admin/guru/{id}/detail/edit', [ViewAdminController::class, 'editDetailGuru']);
    Route::post('/admin/guru/{id}/detail/edit', [EditAdminController::class, 'updateDetailGuru']);
});
