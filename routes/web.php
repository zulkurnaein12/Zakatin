<?php

use App\Http\Controllers\Admin\LaporanPembayaranController;
use App\Http\Controllers\Admin\LaporanPenerimaanController;
use App\Http\Controllers\Admin\MustahiqController;
use App\Http\Controllers\Admin\MuzakkiController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\Admin\PDFController;
use App\Http\Controllers\Admin\PenerimaanberasController;
use App\Http\Controllers\Admin\PenerimaanuangController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ZakatFitrahController as AdminZakatFitrahController;
use App\Http\Controllers\Admin\ZakatMaalController as AdminZakatMaalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Muzakki\PasswordController as MuzakkiPasswordController;
use App\Http\Controllers\Muzakki\PembayaranController;
use App\Http\Controllers\Muzakki\ProfileController as MuzakkiProfileController;
use App\Http\Controllers\Muzakki\RiwayatController;
use App\Http\Controllers\Pengurus\PasswordController as PengurusPasswordController;
use App\Http\Controllers\Pengurus\PenerimaanZakatFitrahController;
use App\Http\Controllers\Pengurus\PenerimaanZakatMaalController;
use App\Http\Controllers\Pengurus\ProfileController as PengurusProfileController;
use App\Http\Controllers\Pengurus\ZakatFitrahController;
use App\Http\Controllers\Pengurus\ZakatMaalController;
use App\Http\Controllers\PengurusController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::middleware('role:admin')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('index');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/password', [PasswordController::class, 'edit'])->name('edit.password');
    Route::post('/password/update', [PasswordController::class, 'update'])->name('update.password');
    Route::resource('user', UserController::class);
    Route::resource('muzakki', MuzakkiController::class);
    Route::resource('mustahiq', MustahiqController::class);
    Route::resource('zakafitrah', AdminZakatFitrahController::class);
    Route::resource('zakatmaal', AdminZakatMaalController::class);
    Route::get('/laporan', [LaporanPembayaranController::class, 'index'])->name('laporan');
    Route::get('/laporanPenerimaan', [LaporanPenerimaanController::class, 'index'])->name('penerimaan');
    Route::resource('penerimaanberas', PenerimaanberasController::class);
    Route::resource('penerimaanuang', PenerimaanuangController::class);
    Route::get('pdf/generate', [PDFController::class, 'generatePDF'])->name('pdf.generate');
});

Route::middleware('role:pengurus')->name('pengurus.')->prefix('pengurus')->group(function () {
    Route::get('/home', [PengurusController::class, 'index'])->name('index');
    Route::get('/profile', [PengurusProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile/{id}', [PengurusProfileController::class, 'update'])->name('profile.update');
    Route::get('/password', [PengurusPasswordController::class, 'edit'])->name('edit.password');
    Route::post('/password/update', [PengurusPasswordController::class, 'update'])->name('update.password');
    Route::resource('zakatfitrah', ZakatFitrahController::class);
    Route::resource('zakatmaal', ZakatMaalController::class);
    Route::resource('penerimaanzakatfitrah', PenerimaanZakatFitrahController::class);
    Route::resource('penerimaanzakatmaal', PenerimaanZakatMaalController::class);
});

Route::middleware('role:muzakki')->name('muzakki.')->prefix('muzakki')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/checkout', [PembayaranController::class, 'checkout'])->name('checkout');
    Route::get('/profile', [MuzakkiProfileController::class, 'index'])->name('profile');
    Route::patch('/profile/{id}', [MuzakkiProfileController::class, 'update'])->name('updateprofile');
    Route::get('/password', [MuzakkiPasswordController::class, 'edit'])->name('password');
    Route::post('/password/update', [MuzakkiPasswordController::class, 'update'])->name('updatepassword');
    Route::post('/invoice{id}', [PembayaranController::class, 'invoice'])->name('invoice');
});
