<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
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
    return "Hello World";
});

Route::get('/about', [AboutUsController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{id}', [PostController::class, 'show']); // ფიგურულ ფრჩხილში რდებული აიდი პოსკონტროლერის მეთოდ შოუში მიდის პარამეტრად.
Route::post('/posts/posts_save', [PostController::class, 'save'])->name('posts.save');






//Route::get('/about_us', [])
