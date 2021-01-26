<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
    return view('auth.logout');
});
Route::get('register',[LoginController::class, 'create']);
Route::get('cekakun',[LoginController::class, 'cekakun'])->name('cekakun');
Route::post('register',[LoginController::class, 'store'])->name('register');
Route::post('login',[LoginController::class, 'authenticate']);
Route::get('logout',[LoginController::class, 'logout'])->name('logout');

Route::get('dashboard',function(){
    return view('dashboard');
});