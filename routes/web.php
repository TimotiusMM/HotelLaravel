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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('kamar', 'kamar')->name('kamar');
Route::view('fasilitas', 'fasilitas')->name('fasilitas');

Route::view(config('admin.path') . '/login', 'auth.login')->name('admin.login');

route::group([
    'prefix' => config('admin.path'),
    'middleware' => ['auth:admin'],
], function () {
    Route::view('/', 'dashboard')->name('dashboard');
    Route::view('admin', 'admin.index')->name('admin.index');
});
