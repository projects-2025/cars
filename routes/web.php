<?php

use App\Http\Controllers\Dashboard\Auth\LoginController;
use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('dashboard', function () {
//     return view('dashboard.pages.auth.login');
// });


// Route::prefix('dashboard/')->name('dashboard.')->group(function () {

//     Route::middleware('auth:admin')->group(function () {
//         Route::get('home', [HomeController::class, 'index'])->name('home');
//     });


//         Route::get('login', [LoginController::class, 'login'])->name('login');
//         Route::post('login', [LoginController::class, 'checkLogin'])->name('check');
//         Route::get('logout', [LoginController::class, 'logout'])->name('logout');



// });
