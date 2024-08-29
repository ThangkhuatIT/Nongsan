<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
// use models
use App\Http\Controllers\UserController;
use App\Http\Middleware\NotAuthMiddleware;



Route::get('/', function () {
    return view('blog');
})->name('news.index');

Route::middleware(NotAuthMiddleware::class)->prefix('auth')->group(function () {

    Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.doLogin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout')->withoutMiddleware(NotAuthMiddleware::class);
    // Route::get('/resetIndex', [AuthController::class, 'indexResetPass'])->name('resetIndex');
//     Route::get('/resetAcountsM', [AuthController::class, 'checkbyMail'])->name('auth.mail');
//     Route::get('/resetAcountsP', [AuthController::class, 'checkbyPhone'])->name('auth.phone');
//     Route::post('/resetAcountsM', [AuthController::class, 'requestByPhone'])->name('auth.requestByPhone');
//     Route::post('/resetAcountsP', [AuthController::class, 'requestByMail'])->name('auth.requestByMail');
//     Route::put('/resetAcounts', [AuthController::class, 'resetPass'])->name('auth.doResetPassword');
});
