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
    return "Hello Mam";
});

Route::get('/about', [AboutUsController::class, 'index']);

Route::get('/posts', [PostController::class, 'index'])->name('all.posts');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::get('/posts/{post}', [PostController::class, 'show']); // ფიგურულ ფრჩხილში არსებული აიდი პოსკონტროლერის მეთოდ შოუში მიდის პარამეტრად.

Route::post('/posts/posts_save', [PostController::class, 'save'])->name('posts.save');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit'); // აიდის მიხედვით რომ გადავიდეთ შესაბამის პოსტის რედაქტირებაზე

Route::put('/posts/{post}/update', [PostController::class, 'update'])->name('post.update'); // editis გაკეთების შემდეგ რომ დაასეივოს გაგზავნილი რექვესთი

Route::delete('/posts/{post}/delete', [PostController::class, 'delete'])->name('post.delete');

Route::get('/posts/{post}/view', [PostController::class, 'postview'])->name('post.view');

// პოსტები გადავეცით ცვლადად რომელსაც ავტომატურად ჩვენი მოდელიდან მოაქვს ინფო
// თუ რა აიდი არის პოსტ თეიბლებში




//Route::get('/about_us', [])
