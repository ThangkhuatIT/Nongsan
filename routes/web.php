<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
// use models
use App\Http\Controllers\BlogController;
use App\Http\Middleware\AuthMiddleware;
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

Route::get('/', [HomeController::class, 'home_blog'])->name('home.blog');
Route::middleware(NotAuthMiddleware::class)->prefix('auth')->group(function () {

    Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.doLogin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout')->withoutMiddleware(NotAuthMiddleware::class);
});
// admin route
Route::middleware(AuthMiddleware::class)->prefix('admin')->group(function () {
    Route::get('/management/blogs', [BlogController::class, 'indexBlog'])->name('admin.management.blogs');
    Route::get('/management/blogs/createBlog', [BlogController::class, 'indexCreateBlog'])->name('admin.management.createblogs');
    Route::get('/management/blogs/detail/{id}-{slug}', [BlogController::class, 'indexBlogDetail'])->name('admin.management.blog.detail');
    Route::post('/management/blogs/createBlog', [BlogController::class, 'doCreateBlog'])->name('admin.management.doCreateBlog');
    Route::post('/management/blogs/find', [HomeController::class, 'find'])->name('find.new');

    Route::get('/management/tags', [TagController::class, 'index'])->name('admin.management.tags');
    // Route::get('/management/tags/createtag', [TagController::class, 'indexCreateBlog'])->name('admin.management.createblogs');
    Route::post('/management/tags/createTag', [TagController::class, 'store'])->name('admin.management.doCreateTag');
    Route::delete('/management/tags/{id}', [TagController::class, 'destroy'])->name('admin.management.deleteTag');

    Route::get('/management/c_aticles', [BlogCategoryController::class, 'index'])->name('admin.management.c_aticles');
    // Route::get('/management/c_aticles/createC_aticle', [BlogCategoryController::class, 'indexCreateBlog'])->name('admin.management.createblogs');
    Route::post('/management/c_aticles/createC_aticle', [BlogCategoryController::class, 'store'])->name('admin.management.doCreatec_aticles');
    Route::delete('/management/c_aticles/{id}', [BlogCategoryController::class, 'destroy'])->name('admin.management.deleteC_aticles');
});
