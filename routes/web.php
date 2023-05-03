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

Route::resource('/users', App\Http\Controllers\UserController::class)->names('users');
Route::resource('/admins', App\Http\Controllers\AdminController::class)->names('admins');
Route::get('/salaries', [App\Http\Controllers\AdminController::class, 'salaries'])->name('salaries');

Route::get('/histories', [App\Http\Controllers\AdminController::class, 'histories'])->name('histories');

Route::get('/prueba', function () {
    return view('form');
});