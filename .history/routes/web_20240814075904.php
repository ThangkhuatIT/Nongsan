<?php

use Illuminate\Support\Facades\Route;
// use models
use App\Http\Controllers\UserController;
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

Route::get('/login', [UserController::class, 'index'])->name('login.index');
Route::post('/login', [UserController::class, 'login'])->name('login.post');
