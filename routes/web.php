<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\TicketController;
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

// Guest routes
Route::get('/', function () {
    return view('index');
});

Route::prefix('user')->name('user.')->group(function () {
    Route::resource('/tickets', TicketController::class);
});

// User routes
Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


// Admin route group
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleController::class);
});
