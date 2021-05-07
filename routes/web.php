<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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
Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('auth.show');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('auth.login');
Route::get('dashboard', [HomeController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::resource('posts', PostController::class);
Route::get('/logout', [HomeController::class, 'logout'])->middleware('auth')->name('logout');
