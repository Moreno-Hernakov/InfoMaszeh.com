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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::post('/login', [UserController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'logout']);

    Route::get('/home', [PostController::class, 'index']);
    Route::post('/post', [PostController::class, 'post']);
    Route::get('/add', [PostController::class, 'addCreate']);
    Route::post('/add', [PostController::class, 'addStore']);
    Route::get('/detail/{id}', [PostController::class, 'detail']);


    Route::get('/comment', [CommentController::class, 'index']);
    Route::post('/comment', [CommentController::class, 'store']);
});
