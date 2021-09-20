<?php

use Illuminate\Support\Facades\Route;

//uso el controlador 
use App\Http\Controllers\PostController;


Route::get('/', [PostController::class, 'index'])->name('posts.index');


/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');


//componente anonimo: clase - metodo
Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

