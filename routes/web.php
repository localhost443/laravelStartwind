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

route::get('/', function() {
    return view('posts.index');
});
route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'post'])->name('register');
route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store']);


route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
route::post('/login', [\App\Http\Controllers\LoginController::class, 'store']);
route::post('/logout', [\App\Http\Controllers\LoginController::class, 'destroy'])->name('logout');
