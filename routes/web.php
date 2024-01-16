<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


//home routes
Route::get('/', [HomeController::class,'homepage']);
Route::get('/home' ,[HomeController::class,'index'])->name('home');
Route::get('/post-details/{id}' ,[HomeController::class,'postDetails']);
Route::get('/post-details/{id}' ,[HomeController::class,'postDetails']);
Route::get('/create-post' ,[HomeController::class,'createPost'])->middleware('auth');
Route::post('/user-post' ,[HomeController::class,'userPost']);
Route::get('/my-post' ,[HomeController::class,'MyPost'])->middleware('auth');
Route::get('/delete-my-post/{id}' ,[HomeController::class,'deletePost'])->name('deleteposts');
Route::get('/edit-my-post/{id}' ,[HomeController::class,'editPost'])->name('updateposts');
Route::post('/update-post/{id}' ,[HomeController::class,'updatePost']);
//dashboard routes
Route::get('/add-post' ,[AdminController::class,'addPost']);
Route::post('/store-post' ,[AdminController::class,'storePost']);
Route::get('/show-posts' ,[AdminController::class,'showPosts']);
Route::get('/delete-post/{id}' ,[AdminController::class,'deletePost'])->name('deletepost');
Route::get('/update-post/{id}' ,[AdminController::class,'updatePost']);
Route::post('/edit/{id}' ,[AdminController::class,'update']);
Route::get('/accept-post/{id}' ,[AdminController::class,'acceptPost']);
Route::get('/reject-post/{id}' ,[AdminController::class,'rejectPost']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
