<?php


use App\Http\Controllers\admin\auth\LoginController;
use App\Http\Controllers\admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('dashboard', function () {
    return view('dashboard.pages.auth.login');
});


Route::prefix('dashboard/')->name('dashboard.')->group(function () {

    Route::middleware('auth:admin')->group(function () {
        Route::get('home', [HomeController::class, 'index'])->name('home');
    });

    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'login')->name('login');
        Route::post('login', 'checklogin')->name('check');
        Route::post('logout', 'logout')->name('logout');
    });


});
