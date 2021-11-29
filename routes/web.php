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

Route::get('/portfolio_item',[App\Http\Controllers\PortfolioController::class, 'single'])->name('portfolio_item');


// Retrieves blog posts
Route::get('/blog',[App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog_archive',[App\Http\Controllers\BlogController::class, 'archive'])->name('blog_archive');
Route::get('/blog/{cat}/{id}',[App\Http\Controllers\BlogController::class, 'single'])->name('blog_single');

// Blog Posts Forms
Route::get('/create_post_form',[App\Http\Controllers\BlogController::class, 'createPostForm'])->name('create_post_form');
Route::get('/edit_post_form/{id}',[App\Http\Controllers\BlogController::class, 'editPostForm'])->name('edit_post_form');
Route::get('/delete_post_form',[App\Http\Controllers\BlogController::class, 'deletePostForm'])->name('delete_posts_form');

// Creating and editing posts
Route::post('/create_post',[App\Http\Controllers\BlogController::class, 'create'])->name('create_post');
Route::post('/update_post/{id}',[App\Http\Controllers\BlogController::class, 'update'])->name('update_post');
Route::get('/delete_post/{id}',[App\Http\Controllers\BlogController::class, 'destroy'])->name('delete_post');

// Creating and editing portfolio items
Route::get('/admin_posts',[App\Http\Controllers\BlogController::class, 'store'])->name('admin_posts');

// Uploades featured images
Route::post('/upload_featured_image',[App\Http\Controllers\BlogController::class, 'uploadFeaturedImage'])->name('upload_featured_image');



// Portfolio items

Route::get('/admin_items',[App\Http\Controllers\PortfolioController::class, 'showAllItems'])->name('admin_items');


Route::get('/create_item_form',[App\Http\Controllers\PortfolioController::class, 'createForm'])->name('create_item_form');
Route::get('/edit_item_form/{id}',[App\Http\Controllers\PortfolioController::class, 'editItemForm'])->name('edit_item_form');



Route::post('/create_item',[App\Http\Controllers\PortfolioController::class, 'create'])->name('create_item');
Route::post('/update_item/{id}',[App\Http\Controllers\PortfolioController::class, 'update'])->name('update_item');
Route::post('/delete_item/{id}',[App\Http\Controllers\PortfolioController::class, 'destroy'])->name('delete_item');


Route::get('/contact',[App\Http\Controllers\ContactController::class, 'index'])->name('contact');


// Portfolio and Item categories
Route::post('/add_category',[App\Http\Controllers\BlogController::class, 'createNewCategory'])->name('add_category');

Route::post('/add_portfolio_category',[App\Http\Controllers\PortfolioController::class, 'createNewCategory'])->name('add_portfolio_category');


// Settings
Route::get('/settings_general',[App\Http\Controllers\SettingsController::class, 'settingsGeneral'])->name('settings_general');

Route::post('/upload_avatar',[App\Http\Controllers\SettingsController::class, 'uploadAvatar'])->name('upload_avatar');



