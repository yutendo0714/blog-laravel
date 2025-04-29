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

Route::get('/posts/create', [PostController::class, "create"])->name('post.create');

Route::get('/posts/{id}', [PostController::class, "show"])->name('posts.show');

Route::post('/posts', [PostController::class, "store"])->name('post.store');
