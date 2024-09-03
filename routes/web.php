<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\C_aticleController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
// use models
use App\Http\Controllers\UserController;
use App\Http\Middleware\NotAuthMiddleware;

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
    return view('blog');
})->name('news.index');
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::middleware(NotAuthMiddleware::class)->prefix('auth')->group(function () {

    Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.doLogin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout')->withoutMiddleware(NotAuthMiddleware::class);
});
// admin route
Route::prefix('admin')->group(function () {
    Route::get('/management/blogs', [UserController::class, 'indexBlog'])->name('admin.management.blogs');
    Route::get('/management/blogs/createBlog', [UserController::class, 'indexCreateBlog'])->name('admin.management.createblogs');
    Route::post('/management/blogs/createBlog', [UserController::class, 'doCreateBlog'])->name('admin.management.doCreateBlog');

    Route::get('/management/tags', [TagController::class, 'index'])->name('admin.management.tags');
    // Route::get('/management/tags/createtag', [TagController::class, 'indexCreateBlog'])->name('admin.management.createblogs');
    Route::post('/management/tags/createTag', [TagController::class, 'store'])->name('admin.management.doCreateTag');

    Route::get('/management/c_aticles', [C_aticleController::class, 'index'])->name('admin.management.c_aticles');
    // Route::get('/management/c_aticles/createC_aticle', [C_aticleController::class, 'indexCreateBlog'])->name('admin.management.createblogs');
    Route::post('/management/c_aticles/createC_aticle', [C_aticleController::class, 'store'])->name('admin.management.doCreatec_aticles');
});
