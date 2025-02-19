<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

//Rute autentikasi sistem
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login_proses',[LoginController::class, 'login_proses'])->name('login_proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Rute yang membutuhkan autentikasi
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard',[LoginController::class, 'dashboard'])->name('dashboard');

    Route::group(['middleware' => 'cekRole:Admin'], function () {
        Route::get('/register', [LoginController::class, 'register'])->name('register');
    });
    Route::group(['middleware' => 'cekRole:Admin,Hubin'], function () {
        Route::get('/tempat', [LoginController::class, 'tempat'])->name('tempat');
    });
    Route::group(['middleware' => 'cekRole:Admin,Alumni'], function () {
        Route::get('/form', [LoginController::class, 'form'])->name('form');
    });
    Route::group(['middleware' => 'cekRole:Admin,Hubin,Alumni,Siswa'], function () {
        Route::get('/info', [LoginController::class, 'info'])->name('info');
    });
});
