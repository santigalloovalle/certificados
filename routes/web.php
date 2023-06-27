<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\SalariesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return redirect(route('home'));
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/users', UserController::class)->names('users');
Route::resource('/people', PeopleController::class)->names('people');
Route::resource('/admins', AdminController::class)->names('admins');

Route::get('/histories', [AdminController::class, 'histories'])->name('histories');
Route::get('/certificates/{id}', [AdminController::class, 'certificates'])->name('certificates');
Route::get('/error', [HomeController::class, 'error'])->name('error');
Route::get('/users', [AdminController::class, 'show_users'])->name('users.index');

Route::get('/generatePDF/{id}', [PDFController::class, 'generatePDF'])->name('generatePDF');
Route::post('/generateWord/{id}', [HomeController::class, 'generateWord'])->name('generateWord');

Route::post('/generate/{id}', function (Request $request, $id) {
    if ($request->word == 'on') {
        return redirect(route('generateWord', $id, $request));
    }else if ($request->pdf == 'on') {
        return redirect(route('generatePDF'));
    }else if ($request->pdf == 'on' and $request->word == 'on') {
        return redirect(route('generatePDF'));
        return redirect(route('generateWord'));
    } else {
        return '<script language="javascript">alert("Selecciona una forma de descargar el certificado(Word/Pdf)");</script>';
    }})->name('generate');