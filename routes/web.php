<?php

use Illuminate\Support\Facades\Route;

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

// Route Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dokumen', [App\Http\Controllers\HomeController::class, 'dokumen'])->name('dokumen');
Route::get('/majalah', [App\Http\Controllers\HomeController::class, 'majalah'])->name('majalah');
Route::get('/layanan', [App\Http\Controllers\HomeController::class, 'layanan'])->name('layanan');
Route::get('/profil/{profile}', [App\Http\Controllers\HomeController::class, 'profile'])->name('profil');

Route::get('/detail-berita/{slug}', [App\Http\Controllers\HomeController::class, 'detailBerita'])->name('detailBerita');
// Route Home End


//Route Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Service
    Route::resource('/services', App\Http\Controllers\Admin\ServiceController::class);

    // Profile
    Route::resource('/profile', App\Http\Controllers\Admin\ProfileController::class)->except('index', 'create', 'store', 'destroy');

    // Service
    Route::resource('/services', App\Http\Controllers\Admin\ServiceController::class);

    // Document
    Route::resource('/document', App\Http\Controllers\Admin\DocumentController::class);

    // Account 
    Route::get('/account', [\App\Http\Controllers\Admin\AccountController::class, 'index'])->name('account');
});
//Route Admin End
