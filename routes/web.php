<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswasController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\NilaiController;


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

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view ('dashboard');
    })->name('dashboard');

    Route::controller(MahasiswasController::class)->prefix('mahasiswas')->group(function () {
        Route::get('', 'index')->name('mahasiswas');
        Route::get('create', 'create')->name('mahasiswas.create');
        Route::post('store', 'store')->name('mahasiswas.store');
        Route::get('show/{id}', 'show')->name('mahasiswas.show');
        Route::get('edit/{id}', 'edit')->name('mahasiswas.edit');
        Route::put('edit/{id}', 'update')->name('mahasiswas.update');
        Route::delete('delete/{id}', 'destroy')->name('mahasiswas.destroy');
    });
    Route::controller(DosenController::class)->prefix('dosens')->group(function () {
        Route::get('', 'index')->name('dosens');
        Route::get('create', 'create')->name('dosens.create');
        Route::post('store', 'store')->name('dosens.store');
        Route::get('show/{id}', 'show')->name('dosens.show');
        Route::get('edit/{id}', 'edit')->name('dosens.edit');
        Route::put('edit/{id}', 'update')->name('dosens.update');
        Route::delete('delete/{id}', 'destroy')->name('dosens.destroy');
    });
    Route::controller(MatkulController::class)->prefix('matkul')->group(function () {
        Route::get('', 'index')->name('matkul');
        Route::get('create', 'create')->name('matkul.create');
        Route::post('store', 'store')->name('matkul.store');
        Route::get('show/{id}', 'show')->name('matkul.show');
        Route::get('edit/{id}', 'edit')->name('matkul.edit');
        Route::put('edit/{id}', 'update')->name('matkul.update');
        Route::delete('delete/{id}', 'destroy')->name('matkul.destroy');
    });
    Route::controller(NilaiController::class)->prefix('nilai')->group(function () {
        Route::get('', 'index')->name('nilai');
        Route::get('create', 'create')->name('nilai.create');
        Route::post('store', 'store')->name('nilai.store');
        Route::get('show/{id}', 'show')->name('nilai.show');
        Route::get('edit/{id}', 'edit')->name('nilai.edit');
        Route::put('edit/{id}', 'update')->name('nilai.update');
        Route::delete('delete/{id}', 'destroy')->name('nilai.destroy');
    });

    Route::post('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});




