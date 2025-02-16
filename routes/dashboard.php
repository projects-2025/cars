<?php


// here we created a custom route file for the dashboard from bootstrap/app.php


use App\Http\Controllers\Dashboard\Auth\LoginController;
use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('dashboard', function () {
//     return view('dashboard.pages.auth.updateAuth');
// });


Route::prefix('dashboard/')->name('dashboard.')->group(function () {

    Route::middleware('auth:admin', 'preventBackHistory')->group(function () {
        Route::get('home', [HomeController::class, 'index'])->name('home');
        Route::get('auth', [LoginController::class, 'changeAuth'])->name('auth');
        Route::post('update-auth', [LoginController::class, 'updateAuth'])->name('update');
    });

    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'checkLogin'])->name('check');



    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
