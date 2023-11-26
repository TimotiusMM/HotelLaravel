<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepsionisController;


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

route::group([
    'prefix' => config('admin.path'),
], function () {
    Route::get('login', 'LoginAdminController@formLogin')->name('admin.login');
    Route::post('login', 'LoginAdminController@login');

    route::group(['middleware' => 'auth:admin'], function () {
        Route::post('logout', 'LoginAdminController@logout')->name('admin.logout');

        // Existing dashboard route
        Route::view('/', 'dashboard')->name('dashboard');

        // Modified dashboard route to fetch and pass data
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        Route::get('/akun', 'AdminController@akun')->name('admin.akun');
        Route::put('/akun', 'AdminController@updateAkun');

        Route::group(['middleware' => ['can:role,"admin"']], function () {
            Route::resource('admin', 'AdminController');
            Route::resource('kamar', 'KamarController');
        });

        // Route for processing form submissions
        Route::post('/proses_pesan', [ResepsionisController::class, 'store'])->name('proses_pesan');
    });
});
