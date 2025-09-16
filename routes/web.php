<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

// Test route (to confirm routes are working)
Route::get('/hello', function () {
    return "Hello from web.php!";
});

// Posts routes
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');
