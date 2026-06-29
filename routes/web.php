<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HandphoneController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ServisController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ManajemenController;

/*
|--------------------------------------------------------------------------
| AUTH ROUTES  – hanya tamu (belum login)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/login',  fn() => view('pages.v_login'))->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES  – wajib login
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    /*── DASHBOARD ──*/
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    /*──────────────────────────────────────────────────────────────────────
     | MENU BERSAMA  –  owner + admin
     |  - Data HP, Merek, Supplier, Pelanggan
     |  - Pembelian, Penjualan, Booking, Servis, Pengeluaran
     ──────────────────────────────────────────────────────────────────────*/
    Route::middleware('role:owner,admin')->group(function () {

        /*── DATA HP ──*/
        Route::prefix('data-hp')->name('datahp.')->group(function () {
            Route::get('/',                  [HandphoneController::class, 'index'])->name('index');
            Route::get('/tambah',            [HandphoneController::class, 'create'])->name('create');
            Route::post('/',                 [HandphoneController::class, 'store'])->name('store');
            Route::get('/{handphone}',       [HandphoneController::class, 'show'])->name('show');
            Route::get('/{handphone}/edit',  [HandphoneController::class, 'edit'])->name('edit');
            Route::put('/{handphone}',       [HandphoneController::class, 'update'])->name('update');
            Route::delete('/{handphone}',    [HandphoneController::class, 'destroy'])->name('destroy');
        });

        /*── MEREK ──*/
        Route::prefix('merek')->name('merek.')->group(function () {
            Route::get('/',              [MerekController::class, 'index'])->name('index');
            Route::get('/tambah',        [MerekController::class, 'create'])->name('create');
            Route::post('/',             [MerekController::class, 'store'])->name('store');
            Route::get('/{merek}',       [MerekController::class, 'show'])->name('show');
            Route::get('/{merek}/edit',  [MerekController::class, 'edit'])->name('edit');
            Route::put('/{merek}',       [MerekController::class, 'update'])->name('update');
            Route::delete('/{merek}',    [MerekController::class, 'destroy'])->name('destroy');
        });

        /*── SUPPLIER ──*/
        Route::prefix('supplier')->name('supplier.')->group(function () {
            Route::get('/',                [SupplierController::class, 'index'])->name('index');
            Route::get('/tambah',          [SupplierController::class, 'create'])->name('create');
            Route::post('/',               [SupplierController::class, 'store'])->name('store');
            Route::get('/{supplier}',      [SupplierController::class, 'show'])->name('show');
            Route::get('/{supplier}/edit', [SupplierController::class, 'edit'])->name('edit');
            Route::put('/{supplier}',      [SupplierController::class, 'update'])->name('update');
            Route::delete('/{supplier}',   [SupplierController::class, 'destroy'])->name('destroy');
        });

        /*── PELANGGAN ──*/
        Route::prefix('pelanggan')->name('pelanggan.')->group(function () {
            Route::get('/',                 [PelangganController::class, 'index'])->name('index');
            Route::get('/tambah',           [PelangganController::class, 'create'])->name('create');
            Route::post('/',                [PelangganController::class, 'store'])->name('store');
            Route::get('/{pelanggan}',      [PelangganController::class, 'show'])->name('show');
            Route::get('/{pelanggan}/edit', [PelangganController::class, 'edit'])->name('edit');
            Route::put('/{pelanggan}',      [PelangganController::class, 'update'])->name('update');
            Route::delete('/{pelanggan}',   [PelangganController::class, 'destroy'])->name('destroy');
        });

        /*── PEMBELIAN ──*/
        Route::prefix('pembelian')->name('pembelian.')->group(function () {
            Route::get('/',                 [PembelianController::class, 'index'])->name('index');
            Route::get('/tambah',           [PembelianController::class, 'create'])->name('create');
            Route::post('/',                [PembelianController::class, 'store'])->name('store');
            Route::get('/{pembelian}',      [PembelianController::class, 'show'])->name('show');
            Route::get('/{pembelian}/edit', [PembelianController::class, 'edit'])->name('edit');
            Route::put('/{pembelian}',      [PembelianController::class, 'update'])->name('update');
            Route::delete('/{pembelian}',   [PembelianController::class, 'destroy'])->name('destroy');
        });

        /*── PENJUALAN ──*/
        Route::prefix('penjualan')->name('penjualan.')->group(function () {
            Route::get('/',                 [PenjualanController::class, 'index'])->name('index');
            Route::get('/tambah',           [PenjualanController::class, 'create'])->name('create');
            Route::post('/',                [PenjualanController::class, 'store'])->name('store');
            Route::get('/{penjualan}',      [PenjualanController::class, 'show'])->name('show');
            Route::get('/{penjualan}/edit', [PenjualanController::class, 'edit'])->name('edit');
            Route::put('/{penjualan}',      [PenjualanController::class, 'update'])->name('update');
            Route::delete('/{penjualan}',   [PenjualanController::class, 'destroy'])->name('destroy');
        });

        /*── BOOKING ──*/
        Route::prefix('booking')->name('booking.')->group(function () {
            Route::get('/',                      [BookingController::class, 'index'])->name('index');
            Route::get('/tambah',                [BookingController::class, 'create'])->name('create');
            Route::post('/',                     [BookingController::class, 'store'])->name('store');
            Route::get('/{booking}',             [BookingController::class, 'show'])->name('show');
            Route::get('/{booking}/edit',        [BookingController::class, 'edit'])->name('edit');
            Route::put('/{booking}',             [BookingController::class, 'update'])->name('update');
            Route::patch('/{booking}/status',    [BookingController::class, 'updateStatus'])->name('update-status');
            Route::delete('/{booking}',          [BookingController::class, 'destroy'])->name('destroy');
        });

        /*── SERVIS ──*/
        Route::prefix('servis')->name('servis.')->group(function () {
            Route::get('/',                   [ServisController::class, 'index'])->name('index');
            Route::get('/tambah',             [ServisController::class, 'create'])->name('create');
            Route::post('/',                  [ServisController::class, 'store'])->name('store');
            Route::get('/{servi}',            [ServisController::class, 'show'])->name('show');
            Route::get('/{servi}/edit',       [ServisController::class, 'edit'])->name('edit');
            Route::put('/{servi}',            [ServisController::class, 'update'])->name('update');
            Route::patch('/{servi}/status',   [ServisController::class, 'updateStatus'])->name('update-status');
            Route::delete('/{servi}',         [ServisController::class, 'destroy'])->name('destroy');
        });

        /*── PENGELUARAN ──*/
        Route::prefix('pengeluaran')->name('pengeluaran.')->group(function () {
            Route::get('/',                     [PengeluaranController::class, 'index'])->name('index');
            Route::get('/tambah',               [PengeluaranController::class, 'create'])->name('create');
            Route::post('/',                    [PengeluaranController::class, 'store'])->name('store');
            Route::get('/{pengeluaran}',        [PengeluaranController::class, 'show'])->name('show');
            Route::get('/{pengeluaran}/edit',   [PengeluaranController::class, 'edit'])->name('edit');
            Route::put('/{pengeluaran}',        [PengeluaranController::class, 'update'])->name('update');
            Route::delete('/{pengeluaran}',     [PengeluaranController::class, 'destroy'])->name('destroy');
        });

    }); // end role:owner,admin

    /*──────────────────────────────────────────────────────────────────────
     | MENU EKSKLUSIF OWNER
     |  - Laporan Omzet  (semua sub-laporan + export)
     |  - Manajemen Pengguna & Pengaturan Sistem
     ──────────────────────────────────────────────────────────────────────*/
    Route::middleware('role:owner')->group(function () {

        /*── LAPORAN ──*/
        Route::prefix('laporan')->name('laporan.')->group(function () {
            Route::get('/',               [LaporanController::class, 'index'])->name('index');
            Route::get('/penjualan',      [LaporanController::class, 'penjualan'])->name('penjualan');
            Route::get('/pembelian',      [LaporanController::class, 'pembelian'])->name('pembelian');
            Route::get('/pengeluaran',    [LaporanController::class, 'pengeluaran'])->name('pengeluaran');
            Route::get('/servis',         [LaporanController::class, 'servis'])->name('servis');
            Route::get('/export/pdf',     fn() => back())->name('export.pdf');
            Route::get('/export/excel',   fn() => back())->name('export.excel');
        });

        /*── MANAJEMEN PENGGUNA ──*/
        Route::prefix('manajemen')->name('manajemen.')->group(function () {
            Route::get('/', [ManajemenController::class, 'index'])->name('index');

            Route::prefix('pengguna')->name('pengguna.')->group(function () {
                Route::get('/',          [ManajemenController::class, 'index'])->name('index');
                Route::get('/tambah',    [ManajemenController::class, 'create'])->name('create');
                Route::post('/',         [ManajemenController::class, 'store'])->name('store');
                Route::get('/{user}/edit', [ManajemenController::class, 'edit'])->name('edit');
                Route::put('/{user}',    [ManajemenController::class, 'update'])->name('update');
                Route::delete('/{user}', [ManajemenController::class, 'destroy'])->name('destroy');
            });

            Route::prefix('pengaturan')->name('pengaturan.')->group(function () {
                Route::get('/',  [ManajemenController::class, 'pengaturanIndex'])->name('index');
                Route::put('/',  [ManajemenController::class, 'pengaturanUpdate'])->name('update');
            });
        });

    }); // end role:owner

    /*── LOGOUT ──*/
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});