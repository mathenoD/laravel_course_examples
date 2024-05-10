<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route to display posts and the form for new posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route to handle the post form submission
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
