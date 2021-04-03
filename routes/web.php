<?php
// use controller main
use App\Http\Controllers\Main\ViewController;
use App\Http\Controllers\Main\AuthController;
use App\Http\Controllers\Main\EditController;

// use controller siswa
use App\Http\Controllers\Siswa\ViewSiswaController;
use App\Http\Controllers\Siswa\EditSiswaController;

// use controller guru
use App\Http\Controllers\Guru\ValueGuruController;
use App\Http\Controllers\Guru\ViewGuruController;

// use controller admin
use App\Http\Controllers\Admin\ViewAdminController;
use App\Http\Controllers\Admin\ValueAdminController;
use App\Http\Controllers\Admin\EditAdminController;
use App\Http\Controllers\Admin\ExportAdminController;

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
    Route::get('/guru/profile/changepass', [ViewGuruController::class, 'changepass']);
    Route::get('/guru/kelas', [ViewGuruController::class, 'datasubjek']);
    Route::get('/guru/presensi', [ViewGuruController::class, 'presensi']);
    Route::get('/guru/presensi/rekap', [ViewGuruController::class, 'rekap']);
    Route::get('/guru/jammasuk', [ViewGuruController::class, 'jammasuk']);
    Route::get('/guru/jammasuk/tambahjam', [ViewGuruController::class, 'tambahjam']);
    Route::get('/guru/grafik', [ViewGuruController::class, 'grafik']);
    Route::get('/guru/tagid', [ViewGuruController::class, 'tagid']);
    Route::get('/guru/quotes', [ViewGuruController::class, 'quotes']);
    Route::get('/guru/dashboard/value', [ValueGuruController::class, 'valueDashboard']);
    Route::get('/guru/calendar', [ViewGuruController::class, 'calendar']);

    // route mengatur siswa
    Route::get('/guru/siswa', [ViewController::class, 'tableSiswa']);
    Route::get('/guru/siswa/tambah', [ViewController::class, 'tambahSiswa']);
    Route::get('/guru/siswa/{id}/detail', [ViewController::class, 'detailSiswa']);
});

Route::middleware('auth:admin')->group(function () {
    // main route admin
    Route::get('/admin/dashboard', [ViewAdminController::class, 'dashboard']);
    Route::get('/admin/profile', [ViewAdminController::class, 'profile']);
    Route::post('/admin/profile/{id}/update', [EditAdminController::class, 'updateProfile']);
    Route::post('/admin/profile/{id}/delete', [EditAdminController::class, 'deleteProfile']);
    Route::get('/admin/calendar', [ViewController::class, 'calendar']);

    // ajax
    Route::get('/admin/dashboard/value', [ValueAdminController::class, 'valueDashboard']);

    //route mengatur siswa
    Route::get('/admin/siswa', [ViewController::class, 'tableSiswa'])->name('admin.table.siswa');
    Route::get('/admin/siswa/tambah', [ViewController::class, 'tambahSiswa']);
    Route::get('/admin/siswa/{id}/detail', [ViewController::class, 'detailSiswa']);
    Route::get('/admin/siswa/{id}/record', [ViewController::class, 'recordSiswa']);
    Route::post('/admin/siswa/delete', [EditController::class, 'deleteSiswa']);

    Route::get('/admin/siswa/export', [ExportAdminController::class, 'allSiswa']);

    //route mengatur guru
    Route::get('/admin/guru', [ViewAdminController::class, 'guru']);
});
