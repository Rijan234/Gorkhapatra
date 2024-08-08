<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\LayoutController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home']);
Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/news/{category}', [FrontendController::class, 'category'])->name('fe.category');
Route::get('/posts/{id}', [FrontendController::class, 'post'])->name('fe.post');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('category', CategoryController::class)->names('category');
    Route::resource('post', PostController::class)->names('post');

    Route::resource('layout', LayoutController::class)->names('layout');
    Route::get('/layout/activate/{id}/{div_id}', [LayoutController::class, 'activate'])->name('layout.activate');



    
});

require __DIR__.'/auth.php';
