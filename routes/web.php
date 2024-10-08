<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RealisationController;

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

Route::get('/', [HomeController::class, 'index'] )->name('home') ;

Route::get('/contact/{contact}', [DashboardController::class, 'contact'])->middleware('auth')->name('contact.show') ; 

Route::post('/contact', [HomeController::class, 'contact'] )->name('contact') ; 

Route::prefix('/articles')->name('articles.')->group(function() {
    Route::get('/', [ ArticleController::class, 'index'])->name('index') ; 
    Route::get('/{slug}-{post}', [ArticleController::class, 'show'] )->name('show')->where([
        'slug' => '[a-z0-9\-]+',
        'post' => '[0-9]+'
    ]) ;
}) ; 

Route::prefix('/realisations')->name('realisations.')->group(function(){
    Route::get('/', [RealisationController::class, 'index'])->name('index') ; 
    Route::get('/{work}', [RealisationController::class, 'show'] )->name('show') ; 

}) ; 

Route::post('comment/{post}', [CommentController::class, 'comment'] )->name('comment') ;

Route::resource('posts', PostController::class) ; 
Route::resource('works', WorkController::class) ; 

Route::get('/dashboard642447', [DashboardController::class, 'index'] )->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile642447', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile642447', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile642447', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php' ;