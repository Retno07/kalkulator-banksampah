<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
//         ->name('dashboard');
// Route::get('/jenis-sampah.index', [App\Http\Controllers\Admin\JenisSampahController::class, 'index'])
//         ->name('jenis');
// Route::get('/jenis-sampah.create', [App\Http\Controllers\Admin\JenisSampahController::class, 'create'])
//         ->name('create');
// Route::post('/jenis-sampah.store', [App\Http\Controllers\Admin\JenisSampahController::class, 'store'])
//         ->name('store');
// Route::post('/jenis-sampah.edit/{id}', [App\Http\Controllers\Admin\JenisSampahController::class, 'edit'])
//         ->name('show');
// Route::post('/jenis-sampah.update', [App\Http\Controllers\Admin\JenisSampahController::class, 'update'])
//         ->name('update');
// Route::post('/jenis-sampah.destroy', [App\Http\Controllers\Admin\JenisSampahController::class, 'destroy'])
//         ->name('destroy');

Route::prefix('office')
    ->namespace('Admin')
    ->group(function() {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('dashboard');

        Route::resource('jenis-sampah', '\App\Http\Controllers\Admin\JenisSampahController');
        Route::resource('jual-sampah', '\App\Http\Controllers\Admin\JualSampahController');
    });

Auth::routes(['verify' => true]);
