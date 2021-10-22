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



Route::get('/blog',[App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog_archive',[App\Http\Controllers\BlogController::class, 'archive'])->name('blog_archive');
Route::get('/blog/{id}',[App\Http\Controllers\BlogController::class, 'single'])->name('blog_single');

Route::post('/create_post',[App\Http\Controllers\BlogController::class, 'create'])->name('create_posts');


Route::get('/contact',[App\Http\Controllers\ContactController::class, 'index'])->name('contact');
