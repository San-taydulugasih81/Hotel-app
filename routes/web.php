<?php

namespace App\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('kamar', 'kamar')->name('kamar');

Route::group([
    'prefix' => config('admin.path'),
], function () {

    Route::get('login', [LoginAdminController::class, 'formlogin'])->name('admin.login');
    Route::post('login', [LoginAdminController::class, 'login']);

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::post('logout', [LoginAdminController::class, 'logout'])->name('admin.logout');

        Route::view('/', 'dashboard')->name('dashboard');
        Route::get('/akun', [AdminController::class, 'akun'])->name('admin.akun');
        Route::put('/akun', [AdminController::class, 'updateAkun']);

        Route::group(['middleware' => ['can:role,"admin"']], function () {
            Route::resource('admin', 'App\Http\Controllers\AdminController');
            Route::resource('kamar', 'App\Http\Controllers\KamarController');
        });
    });
});
