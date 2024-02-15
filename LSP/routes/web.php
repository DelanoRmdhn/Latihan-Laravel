<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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




Route::get('/', [CategoryController::class, 'index']);

Route::get('/edit', function(){
    return view('editData');
});

// LOGIN

//MASUK KE LOGIN
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
//VERIFIKASI 
Route::post('/login',[LoginController::class, 'authenticate']);

Route::get('/admin', function(){
    return view('admin');
});

//LOGOUT 
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
