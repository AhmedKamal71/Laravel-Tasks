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
Route::get('edit/{id}/edit', [PostController::class, "edit"])->name("edit.edit");
Route::put('edit/{id}', [PostController::class, "update"])->name("edit.update");
