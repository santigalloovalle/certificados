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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admins', [App\Http\Controllers\AdminController::class, 'index'])->name('admins');

Route::resource('/users', App\Http\Controllers\UserController::class)->names('users');
Route::resource('/admins', App\Http\Controllers\AdminController::class)->names('admins');
Route::resource('/salaries', App\Http\Controllers\SalaryController::class)->names('salaries');

Route::get('/historial', [App\Http\Controllers\HomeController::class, 'historial'])->name('historial');

Route::get('/prueba', function () {
    return view('admins');
});