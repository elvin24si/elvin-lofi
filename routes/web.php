<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get(
    '/mahasiswa/{param1?}',
    [MahasiswaController::class, 'show']
)->name('mahasiswa.show');

Route::get(
    '/matakuliah/show/{param1?}',
    [MatakuliahController::class, 'show']
)->name('matakuliah.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: ' . $param1;
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/question/respon', [QuestionController::class, 'respon'])->name('question.respon');
Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/auth', [AuthController::class, 'index']);

Route::post('auth/login', [AuthController::class, 'login'])
    ->name('auth.login');

Route::get('/regisvolt', function () {
    return view('admin/sign-up-volt');
})
    ->name('regisvolt');

Route::post('/register', [AuthController::class, 'register'])
    ->name('auth.register');

Route::get('/logvolt', function () {
    return view('admin/sign-in-volt');
})
    ->name('logvolt');

Route::resource('pelanggan', PelangganController::class);
Route::resource('user', UserController::class);
