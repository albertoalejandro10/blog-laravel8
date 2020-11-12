<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\PostController;

Route::get('/', [PageController::class, 'posts']);
Route::get('blog/{post:slug}', [PageController::class, 'post'])->name('post');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('posts', PostController::class)->middleware('auth')->except('show');
