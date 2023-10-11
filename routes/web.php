<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'homePage'])->name('home.page');

Route::get('/login', [UserController::class, 'userLogin'])->name('user.login');
Route::get('/login', [UserController::class, 'userLogin']);
Route::get('/registration', [UserController::class, 'userRegister'])->name('user.register');
Route::post('/registration', [UserController::class, 'userRegister']);
Route::get('/profile', [UserController::class, 'userProfile'])->name('user.profile');

//Post APIs

Route::get('/addpost', [PostController::class, 'posts_create']);
Route::get('/editpost',[PostController::class, 'post_edit']);