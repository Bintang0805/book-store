<?php

use App\Http\Controllers\AdminController;
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

Route::prefix('admin')->name('admin.')->group(function () {

    Route::controller(AdminController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('management-users', 'managementUsers')->name('managementUsers');
        Route::get('management-books', 'managementBooks')->name('managementBooks');
    });

});
