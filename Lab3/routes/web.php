<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('trash', [PostController::class, 'trashed'])->name('posts.trashed');

Route::get('single/{id}', [PostController::class, "show"])->name("single.show");
Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('edit/{id}', [PostController::class, "update"])->name("edit.update");

Route::get('main', [PostController::class, "testMain"])->name('main.testMain');
Route::get('new', [PostController::class, 'create'])->name('posts.create'); // Corrected route name

Route::post('store', [PostController::class, 'store'])->name('posts.store'); // Corrected route name

Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy'); // Corrected route parameter
