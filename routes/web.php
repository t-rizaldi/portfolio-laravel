<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
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
Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('/experience-education', 'education')->name('education');
    Route::get('/contact', 'contact')->name('contact');
});

Route::controller(ServiceController::class)->group(function(){
    Route::get('/services', 'index')->name('services');
});

Route::controller(PortfolioController::class)->group(function() {
    Route::get('/portfolio', 'index')->name('portfolio');
    Route::get('/portfolio/detail/{portfolio:slug}', 'detail')->name('portfolio.detail');
});

Route::controller(PostController::class)->group(function() {
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog/detail', 'detail')->name('blog.detail');
});


// Admin Routes
Route::controller(DashboardController::class)->group(function() {
    Route::get('dashboard', 'index')->name('admin');
});

// Portfolio and post admin
Route::prefix('admin')->group(function(){
    Route::name('admin.')->group(function() {

        // portfolio
        Route::get('/portfolio/check-slug', [AdminPortfolioController::class, 'checkSlug']);
        Route::resource('portfolio',AdminPortfolioController::class)->parameters(['portfolio' => 'portfolio:slug']);
    });
});