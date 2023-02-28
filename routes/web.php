<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/dashboard', function () {
//     return view('dashboard.pengunjung', [
//         "title" => "Dashboard",
//         'active' => 'pengunjung'
//     ]);
// });

Route::get('/dashboard/operator', function () {
    return view('dashboard.operator', [
        "title" => "Dashboard",
        'active' => 'operator'
    ]);
})->middleware('auth');

Route::get('/daftar/antrian', function () {
    return view('antrian.daftarAntrian', [
        "title" => "Daftar Antrian",
        'active' => 'daftar antrian'
    ]);
})->middleware('auth');

Route::get('/ambil/antrian', function () {
    return view('antrian.ambilAntrian', [
        "title" => "Ambil Antrian",
        'active' => 'antrian'
    ]);
});
Route::get('/dashboard', [App\Http\Controllers\AmbilAntrianController::class, 'tampil'])->name('dashboard');
Route::get('/ambil/antrian/submit', [App\Http\Controllers\AmbilAntrianController::class, 'ambil'])->name('ambilantrian');