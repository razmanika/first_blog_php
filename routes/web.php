<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\TestMiddleWare;
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
})->name('welcomep');//->middleware(TestMiddleWare::class);
//Route::get('/', [PostController::class, 'index'])->middleware(TestMiddleWare::class);

Route::get('/about', [AboutUsController::class, 'index']);

Route::get('/posts', [PostController::class, 'index'])->name('all.posts');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::get('/posts/{post}', [PostController::class, 'show']); // ფიგურულ ფრჩხილში არსებული აიდი პოსკონტროლერის მეთოდ შოუში მიდის პარამეტრად.

Route::post('/posts/posts_save', [PostController::class, 'save'])->name('posts.save');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit'); // აიდის მიხედვით რომ გადავიდეთ შესაბამის პოსტის რედაქტირებაზე

Route::put('/posts/{post}/update', [PostController::class, 'update'])->name('post.update'); // editis გაკეთების შემდეგ რომ დაასეივოს გაგზავნილი რექვესთი

Route::delete('/posts/{post}/delete', [PostController::class, 'delete'])->name('post.delete');

Route::get('/posts/{post}/view', [PostController::class, 'postview'])->name('post.view');

Route::get('/login', [LoginController::class, 'getLogin'])->name('get.login');

Route::post('/post_login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// პოსტები გადავეცით ცვლადად რომელსაც ავტომატურად ჩვენი მოდელიდან მოაქვს ინფო
// თუ რა აიდი არის პოსტ თეიბლებში




//Route::get('/about_us', [])



