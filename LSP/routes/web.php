<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormDataController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index']);

Route::get('/process', function(){
    return view('process');
});




Route::get('/', [FormDataController::class, 'index']);


// LOGIN

//MASUK KE LOGIN
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
//VERIFIKASI 
Route::post('/login',[LoginController::class, 'authenticate']);

Route::get('/admin', function(){
    return view('admin');
});

//SUBMIT FORM
Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit-form');

//KIRIM DATA SUBMIT FORM KE HOME
Route::get('/process', [HomeController::class, 'index']);
Route::get('/admin', [HomeController::class, 'adminTable']);

//TAMPILKAN DATA
Route::get('admin/show/{id}',[HomeController::class, 'show'])->middleware('auth')->name('show');
Route::patch('admin/show/{id}', [HomeController::class, 'updateStatus'])->name('updateStatus');

//FILTER BERDASARKAN TANGGAL UPLOAD
Route::get('admin/dateFilter', [HomeController::class, 'dateFilter']);

//HAPUS DATA
Route::delete('/admin/{id}', [HomeController::class,'destroy'])->name('destroy');


//LOGOUT 
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

