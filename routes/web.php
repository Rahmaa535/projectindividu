<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Logincontroller;
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

//admin

Route::middleware('auth')->group(function(){
    Route::resource('dashboard', DashboardController::class)->middleware('auth');
    Route::resource('master_s', SiswaController::class)->middleware('auth');
    Route::get('master_s/{id_siswa}/hapus', [SiswaController::class, 'hapus'])->name('master_s.hapus');
    Route::resource('master_p', ProjectController::class)->middleware('auth');
    Route::get('master_p/tambah/{id_siswa}', [ProjectController::class, 'create'])->name('master_p.tambah');
    Route::get('master_p/{id_siswa}/hapus', [ProjectController::class, 'hapus'])->name('master_p.hapus');
    Route::resource('master_k', ContactController::class)->middleware('auth');
    Route::post('logout', [LoginController::class,'logout']);
});






// Route::get('/', 'DashboardController@index');

// Route::get('/master_s', function () {
//     return view('master_siswa');
// });
// Route::get('/master_p', function () {
//     return view('master_project');
// });
// Route::get('/master_k', function () {
//     return view('master_kontak');
// });

//guest
Route::middleware('guest')->group(function(){
    Route::get('login', [LoginController::class,'index'])->name('login');
    Route::post('login', [LoginController::class,'authenticate']);
    route::get('/', function (){
        return view ('home');
    });
    route::get('/about', function (){
        return view ('about');
    });
    route::get('/project', function (){
        return view ('project');
    });
    route::get('/contact', function (){
        return view ('contact');
    });
});