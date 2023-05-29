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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/users', App\Http\Controllers\UserController::class)->names('users');
Route::resource('/people', App\Http\Controllers\PeopleController::class)->names('people');
Route::resource('/admins', App\Http\Controllers\AdminController::class)->names('admins');
Route::resource('/salaries', App\Http\Controllers\SalariesController::class)->names('salaries');

Route::get('/histories', [App\Http\Controllers\AdminController::class, 'histories'])->name('histories');
Route::get('/certificates', [App\Http\Controllers\AdminController::class, 'certificates'])->name('certificates');
Route::get('/error', [App\Http\Controllers\HomeController::class, 'error'])->name('error');
Route::get('/users', [App\Http\Controllers\AdminController::class, 'show_users'])->name('users.index');
Route::get('/CertificadoLaboral', [App\Http\Controllers\PDFController::class, 'generatePDF'])->name('generatePDF');

Route::get('/prueba', function () {
});