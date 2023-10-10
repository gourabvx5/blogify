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



/*
|--------------------------------------------------------------------------
| User Page Route
|--------------------------------------------------------------------------
*/
Route::get('/login', [UserController::class, 'userLogin'])->name('user.login');
Route::get('/registration', [UserController::class, 'userRegister'])->name('user.register');
Route::get('/profile', [UserController::class, 'userProfile'])->name('user.profile');


/*
|--------------------------------------------------------------------------
| Post Page Route
|--------------------------------------------------------------------------
*/
Route::get('/add-post',[PostController::class, 'addPost'])->name('add.post');
Route::get('/edit-post',[PostController::class, 'editPost'])->name('edit.post');
Route::get('/all-post',[PostController::class, 'allPost'])->name('all.post');
Route::get('/posts/single-post',[PostController::class, 'singlePost'])->name('single.post');