<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;
use App\Models\Siswa;

// =========================
//  ROUTE GUEST (BELUM LOGIN)
// =========================
Route::middleware('guest')->group(function () {

    // Halaman login
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

    // Proses login
    Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
});


// =========================
//  ROUTE AUTH (SUDAH LOGIN)
// =========================
Route::middleware('auth')->group(function () {

    // =========================
    // DASHBOARD (STATISTIK BARU)
// =========================
Route::get('/dashboard', function () {

    $totalSiswa = Siswa::count();

    // Statistik gender
    $laki = Siswa::where('gender', 'L')->count();
    $perempuan = Siswa::where('gender', 'P')->count();

    // Jumlah siswa per kelas
    $kelas = Siswa::select('kelas', \DB::raw('COUNT(*) as total'))
                ->groupBy('kelas')
                ->orderBy('kelas')
                ->get();

    return view('dashboard', compact('totalSiswa', 'laki', 'perempuan', 'kelas'));

})->name('dashboard');

    // =========================
    // PROFIL USER
    // =========================
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    // =========================
    // LOGOUT
    // =========================
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // =========================
    // DATA SISWA DAPAT DILIHAT SEMUA USER
    // =========================
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

    // =========================
    //  ROUTE KHUSUS ADMIN
    // =========================
    Route::middleware('role:admin')->group(function () {

        Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
        Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');

        Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
        Route::put('/siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');

        Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

    });

});
