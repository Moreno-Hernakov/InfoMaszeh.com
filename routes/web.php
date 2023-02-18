<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\loginController;
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

// user
Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/detail/{id}', [PostController::class, 'detail']);
Route::get('/admin/detail/{id}', [PostController::class, 'adminDetail']);
// Route::post('/post', [PostController::class, 'post']);

// admin
Route::get('/add', [PostController::class, 'adminCreate']);
Route::post('/add', [PostController::class, 'adminStore']);
Route::get('/update/{id}', [PostController::class, 'adminEdit']);
Route::put('/update/{id}', [PostController::class, 'adminUpdate']);
Route::get('/delete/{id}', [PostController::class, 'adminDestroy']);

Route::get('/comment', [CommentController::class, 'index'])->name('comment.index');
Route::post('/comment', [CommentController::class, 'store']);
Route::get('/delete/comment/{id}', [CommentController::class, 'commentDestroy']);
Route::post('/reply', [CommentController::class, 'reply']);
Route::get('/delete/reply/{id}', [CommentController::class, 'replyDestroy']);


Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::post('/login', [UserController::class, 'store']); 
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/admin/berita', [PostController::class, 'adminIndex']);
});
