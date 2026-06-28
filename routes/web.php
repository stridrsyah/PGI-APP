<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes — PGI APP (Pusat Gadget Indonesia)
| Laravel 12.x
|--------------------------------------------------------------------------
|
| Semua route dikelompokkan dalam middleware 'auth' agar hanya pengguna
| yang sudah login yang bisa mengakses halaman aplikasi.
|
| Prefix  : Tidak ada (root-level)
| Middleware: auth  → wajib login
|             guest → hanya untuk tamu (login/register)
|
*/

/*
|--------------------------------------------------------------------------
| AUTH ROUTES (Guest Only)
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    /** Halaman login */
    Route::get('/login', function () {
        return view('pages.v_login');
    })->name('login');

    /** Proses login */
    Route::post('/login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])
        ->name('login.post');
});

/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES (Auth Required)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    /*
    |----------------------------------------------------------------------
    | DASHBOARD
    |----------------------------------------------------------------------
    */
    Route::get('/', function () {
        return view('pages.v_dashboard');
    })->name('dashboard');

    /*
    |----------------------------------------------------------------------
    | DATA HP (Produk Handphone)
    |----------------------------------------------------------------------
    */
    Route::prefix('data-hp')->name('datahp.')->group(function () {
        Route::get('/',        fn() => view('pages.v_datahp'))->name('index');
        Route::get('/tambah', fn() => view('pages.v_datahp'))->name('create');
        Route::post('/',       fn() => back())->name('store');
        Route::get('/{id}',    fn() => view('pages.v_datahp'))->name('show');
        Route::get('/{id}/edit', fn() => view('pages.v_datahp'))->name('edit');
        Route::put('/{id}',    fn() => back())->name('update');
        Route::delete('/{id}', fn() => back())->name('destroy');
    });

    /*
    |----------------------------------------------------------------------
    | MEREK HP & KATEGORI
    |----------------------------------------------------------------------
    */
    Route::prefix('merek')->name('merek.')->group(function () {
        Route::get('/',        fn() => view('pages.v_merek'))->name('index');
        Route::get('/tambah', fn() => view('pages.v_merek'))->name('create');
        Route::post('/',       fn() => back())->name('store');
        Route::get('/{id}',    fn() => view('pages.v_merek'))->name('show');
        Route::get('/{id}/edit', fn() => view('pages.v_merek'))->name('edit');
        Route::put('/{id}',    fn() => back())->name('update');
        Route::delete('/{id}', fn() => back())->name('destroy');
    });

    /*
    |----------------------------------------------------------------------
    | SUPPLIER
    |----------------------------------------------------------------------
    */
    Route::prefix('supplier')->name('supplier.')->group(function () {
        Route::get('/',        fn() => view('pages.v_supplier'))->name('index');
        Route::get('/tambah', fn() => view('pages.v_supplier'))->name('create');
        Route::post('/',       fn() => back())->name('store');
        Route::get('/{id}',    fn() => view('pages.v_supplier'))->name('show');
        Route::get('/{id}/edit', fn() => view('pages.v_supplier'))->name('edit');
        Route::put('/{id}',    fn() => back())->name('update');
        Route::delete('/{id}', fn() => back())->name('destroy');
    });

    /*
    |----------------------------------------------------------------------
    | PELANGGAN
    |----------------------------------------------------------------------
    */
    Route::prefix('pelanggan')->name('pelanggan.')->group(function () {
        Route::get('/',        fn() => view('pages.v_pelanggan'))->name('index');
        Route::get('/tambah', fn() => view('pages.v_pelanggan'))->name('create');
        Route::post('/',       fn() => back())->name('store');
        Route::get('/{id}',    fn() => view('pages.v_pelanggan'))->name('show');
        Route::get('/{id}/edit', fn() => view('pages.v_pelanggan'))->name('edit');
        Route::put('/{id}',    fn() => back())->name('update');
        Route::delete('/{id}', fn() => back())->name('destroy');
    });

    /*
    |----------------------------------------------------------------------
    | PEMBELIAN (Stok Masuk dari Supplier)
    |----------------------------------------------------------------------
    */
    Route::prefix('pembelian')->name('pembelian.')->group(function () {
        Route::get('/',        fn() => view('pages.v_pembelian'))->name('index');
        Route::get('/tambah', fn() => view('pages.v_pembelian'))->name('create');
        Route::post('/',       fn() => back())->name('store');
        Route::get('/{id}',    fn() => view('pages.v_pembelian'))->name('show');
        Route::get('/{id}/edit', fn() => view('pages.v_pembelian'))->name('edit');
        Route::put('/{id}',    fn() => back())->name('update');
        Route::delete('/{id}', fn() => back())->name('destroy');
    });

    /*
    |----------------------------------------------------------------------
    | PENJUALAN (Transaksi Penjualan)
    |----------------------------------------------------------------------
    */
    Route::prefix('penjualan')->name('penjualan.')->group(function () {
        Route::get('/',        fn() => view('pages.v_penjualan'))->name('index');
        Route::get('/tambah', fn() => view('pages.v_penjualan'))->name('create');
        Route::post('/',       fn() => back())->name('store');
        Route::get('/{id}',    fn() => view('pages.v_penjualan'))->name('show');
        Route::get('/{id}/edit', fn() => view('pages.v_penjualan'))->name('edit');
        Route::put('/{id}',    fn() => back())->name('update');
        Route::delete('/{id}', fn() => back())->name('destroy');
    });

    /*
    |----------------------------------------------------------------------
    | BOOKING (Booking Servis)
    |----------------------------------------------------------------------
    */
    Route::prefix('booking')->name('booking.')->group(function () {
        Route::get('/',        fn() => view('pages.v_booking'))->name('index');
        Route::get('/tambah', fn() => view('pages.v_booking'))->name('create');
        Route::post('/',       fn() => back())->name('store');
        Route::get('/{id}',    fn() => view('pages.v_booking'))->name('show');
        Route::get('/{id}/edit', fn() => view('pages.v_booking'))->name('edit');
        Route::put('/{id}',    fn() => back())->name('update');
        Route::patch('/{id}/status', fn() => back())->name('update-status');
        Route::delete('/{id}', fn() => back())->name('destroy');
    });

    /*
    |----------------------------------------------------------------------
    | SERVIS (Manajemen Servis / Reparasi)
    |----------------------------------------------------------------------
    */
    Route::prefix('servis')->name('servis.')->group(function () {
        Route::get('/',        fn() => view('pages.v_servis'))->name('index');
        Route::get('/tambah', fn() => view('pages.v_servis'))->name('create');
        Route::post('/',       fn() => back())->name('store');
        Route::get('/{id}',    fn() => view('pages.v_servis'))->name('show');
        Route::get('/{id}/edit', fn() => view('pages.v_servis'))->name('edit');
        Route::put('/{id}',    fn() => back())->name('update');
        Route::patch('/{id}/status', fn() => back())->name('update-status');
        Route::delete('/{id}', fn() => back())->name('destroy');
    });

    /*
    |----------------------------------------------------------------------
    | PENGELUARAN (Arus Kas Keluar)
    |----------------------------------------------------------------------
    */
    Route::prefix('pengeluaran')->name('pengeluaran.')->group(function () {
        Route::get('/',        fn() => view('pages.v_pengeluaran'))->name('index');
        Route::get('/tambah', fn() => view('pages.v_pengeluaran'))->name('create');
        Route::post('/',       fn() => back())->name('store');
        Route::get('/{id}',    fn() => view('pages.v_pengeluaran'))->name('show');
        Route::get('/{id}/edit', fn() => view('pages.v_pengeluaran'))->name('edit');
        Route::put('/{id}',    fn() => back())->name('update');
        Route::delete('/{id}', fn() => back())->name('destroy');
    });

    /*
    |----------------------------------------------------------------------
    | LAPORAN (Laporan Bisnis)
    |----------------------------------------------------------------------
    */
    Route::prefix('laporan')->name('laporan.')->group(function () {
        Route::get('/',              fn() => view('pages.v_laporan'))->name('index');
        Route::get('/penjualan',     fn() => view('pages.v_laporan'))->name('penjualan');
        Route::get('/pembelian',     fn() => view('pages.v_laporan'))->name('pembelian');
        Route::get('/pengeluaran',   fn() => view('pages.v_laporan'))->name('pengeluaran');
        Route::get('/servis',        fn() => view('pages.v_laporan'))->name('servis');
        Route::get('/export/pdf',    fn() => back())->name('export.pdf');
        Route::get('/export/excel',  fn() => back())->name('export.excel');
    });

    /*
    |----------------------------------------------------------------------
    | MANAJEMEN (Pengguna & Sistem)
    |----------------------------------------------------------------------
    */
    Route::prefix('manajemen')->name('manajemen.')->group(function () {
        Route::get('/',              fn() => view('pages.v_manajemen'))->name('index');

        /* Sub-grup: Manajemen Pengguna/Staf */
        Route::prefix('pengguna')->name('pengguna.')->group(function () {
            Route::get('/',          fn() => view('pages.v_manajemen'))->name('index');
            Route::get('/tambah',    fn() => view('pages.v_manajemen'))->name('create');
            Route::post('/',         fn() => back())->name('store');
            Route::get('/{id}/edit', fn() => view('pages.v_manajemen'))->name('edit');
            Route::put('/{id}',      fn() => back())->name('update');
            Route::delete('/{id}',   fn() => back())->name('destroy');
        });

        /* Sub-grup: Pengaturan Sistem */
        Route::prefix('pengaturan')->name('pengaturan.')->group(function () {
            Route::get('/',          fn() => view('pages.v_manajemen'))->name('index');
            Route::put('/',          fn() => back())->name('update');
        });
    });

    /*
    |----------------------------------------------------------------------
    | LOGOUT
    |----------------------------------------------------------------------
    */
    Route::post('/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])
        ->name('logout');
});