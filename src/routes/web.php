<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\PostCondition;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PostController::class, "index"])->name('posts.index');

Route::get('/posts/create', [PostController::class, "create"])->name('posts.create');

Route::get('/posts/{id}', [PostController::class, "show"])->name('posts.show');

Route::get('/posts/{id}/edit', [PostController::class, "edit"])->name('posts.edit');

Route::post('/posts/{id}', [PostController::class, "update"])->name('posts.update');

Route::post('/posts', [PostController::class, "store"])->name('posts.store');
