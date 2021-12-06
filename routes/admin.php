<?php


use App\Http\Controllers\admin\HomeController;
use Illuminate\Support\Facades\Route;
//llamo al controlador
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\FichaController;

Route::get('admin', [HomeController::class, 'index'])->middleware('can:admin.index')->name('admin.index');
//nombre de las rutas


//rutas para los roles
Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('tags', TagController::class)->except('show')->names('admin.tags');

Route::resource('fichas', FichaController::class)->except('show')->names('admin.fichas');

