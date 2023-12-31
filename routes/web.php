<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
| Web Routes
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('/news', [PostController::class, 'index'])->name('posts.index');
Route::get('/write', [PostController::class, 'create'])->name('posts.create');
Route::post('/write', [PostController::class, 'store'])->name('posts.store');
Route::get('/{post:slug}', [PostController::class, 'show'])->name('posts.show');

Route::post('/{post:slug}/comment', [PostController::class, 'comment'])->name('comments.store');
Route::delete('/{post:slug}/comment/{comment:id}', [PostController::class, 'deleteComment'])->name('comments.destroy');
