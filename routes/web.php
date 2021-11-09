<?php

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

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('homepage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/portfolio',[App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio');


// Retrieves blog posts
Route::get('/blog',[App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog_archive',[App\Http\Controllers\BlogController::class, 'archive'])->name('blog_archive');
Route::get('/blog/{id}',[App\Http\Controllers\BlogController::class, 'single'])->name('blog_single');

// Blog Posts Forms
Route::get('/create_post_form',[App\Http\Controllers\BlogController::class, 'createPostForm'])->name('create_posts_form');
Route::get('/edit_post_form',[App\Http\Controllers\BlogController::class, 'editPostForm'])->name('edit_posts_form');
Route::get('/delete_post_form',[App\Http\Controllers\BlogController::class, 'deletePostForm'])->name('delete_posts_form');

// Creating and editing posts
Route::post('/create_post',[App\Http\Controllers\BlogController::class, 'create'])->name('create_post');
Route::post('/edit_post',[App\Http\Controllers\BlogController::class, 'edit'])->name('edit_post');
Route::post('/delete_post',[App\Http\Controllers\BlogController::class, 'destroy'])->name('delete_post');

// Creating and editing portfolio items
Route::get('/admin_posts',[App\Http\Controllers\BlogController::class, 'store'])->name('admin_posts');
Route::post('/create_item',[App\Http\Controllers\BlogController::class, 'create'])->name('create_post');
Route::post('/edit_itemt',[App\Http\Controllers\BlogController::class, 'edit'])->name('edit_post');
Route::post('/delete_item',[App\Http\Controllers\BlogController::class, 'destroy'])->name('delete_post');


Route::get('/contact',[App\Http\Controllers\ContactController::class, 'index'])->name('contact');


Route::post('/add_category',[App\Http\Controllers\BlogController::class, 'createNewCategory'])->name('add_category');

