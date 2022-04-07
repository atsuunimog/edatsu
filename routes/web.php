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
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if(Auth::user()->role == "subscriber"):
        return view("subscriber.dashboard");
    else:
        return view("admin.dashboard");
    endif;
})->name('dashboard');

Route::get('/admin-login', function () {
   return view('auth.admin-login');
})->name('admin-login');




