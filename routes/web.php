<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('landing/{slug}/show' , [LandingController::class,'show'])->name('landingShow');

// Posts Page
// Posts Page -> index
Route::get('posts', [PostsController::class, 'index'])->name('index');
// Posts Page -> create
Route::get('posts/create', [PostsController::class, 'create'])->name('create');
// Posts Page -> show
Route::get('posts/{slug}/show', [PostsController::class, 'show'])->name('show');
// Posts Page -> store
Route::post('posts', [PostsController::class, 'store'])->name('store');
// Posts Page -> edit
Route::get('posts/{slug}/edit', [PostsController::class, 'edit'])->name('edit');
// Posts Page -> update
Route::patch('posts/{slug}', [PostsController::class, 'update'])->name('update');
// Posts Page -> delete
Route::delete('posts/{slug}', [PostsController::class, 'delete'])->name('delete');


// Comments
Route::post('comment', [CommentsController::class, 'comments'])->name('comment');
