<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
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

// Auth Routes
Route::controller(AuthController::class)->group(function() {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate')->name('login.process');
    Route::get('/logout', 'logout')->name('auth.logout');
});


Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('/experience-education', 'education')->name('education');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/message', 'message')->name('contact.message');
    Route::post('/contact/message/project', 'messageProject')->name('contact.message.project');
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
    Route::post('/blog/search', 'search')->name('blog.search');
    Route::get('/blog/detail/{post:slug}', 'detail')->name('blog.detail');
});


Route::middleware('auth')->group(function() {

    // Admin Routes
    Route::controller(DashboardController::class)->group(function() {
        Route::get('/dashboard', 'index')->name('admin');
    });

    // Portfolio and post admin
    Route::prefix('admin')->group(function(){
        Route::name('admin.')->group(function() {

            // portfolio
            Route::get('/portfolio/check-slug', [AdminPortfolioController::class, 'checkSlug']);
            Route::resource('portfolio',AdminPortfolioController::class)->parameters(['portfolio' => 'portfolio:slug']);

            // Post Categories Routes
            Route::controller(PostCategoryController::class)->group(function() {
                Route::get('/post/category', 'index')->name('post.category');
                Route::get('/post/category/check-slug', 'checkSlug')->name('post.category.checkslug');
                Route::post('/post/category/store', 'store')->name('post.category.store');
                Route::put('/post/category/update', 'update')->name('post.category.update');
                Route::delete('/post/category/destroy/{postCategory:slug}', 'destroy')->name('post.category.destroy');
            });

            // posts
            Route::get('/post/check-slug', [AdminPostController::class, 'checkSlug']);
            Route::resource('post', AdminPostController::class)->parameters(['post' => 'post:slug']);

            // users
            Route::resource('user', UserController::class)->parameters(['user' => 'user:username']);

            // message
            Route::controller(MessageController::class)->group(function() {
                Route::delete('/message/permanent-destroy', 'permanentDestroyById')->name('message.permanendestroybyid');
                Route::get('/message/destroy-all', 'permanentDestroy')->name('message.permanentdestroy');
                Route::put('/message/restore-message', 'restoreById')->name('message.restorebyid');
                Route::get('/message/restore-all', 'restore')->name('message.restore');
                Route::post('/message/search', 'search')->name('message.search');
            });

            Route::resource('message', MessageController::class);
        });
    });

});