<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;

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

Route::get('/',[HomeController::class,'index']);


Route::prefix('category')->group(function(){
    Route::get('/marble-edu-games',[ProductController::class,'eduGames']);
    Route::get('/marble-and-friends-kids-games',[ProductController::class,'kidsGames']);
    Route::get('/riri-story-books',[ProductController::class,'storyBooks']);
    Route::get('/kolak-kids-songs',[ProductController::class,'kidsSongs']);
});

Route::get('/news/{id}',[NewsController::class,'news']);

Route::prefix('program')->group(function(){
    Route::get('/karir',[ProgramController::class,'karir']);
    Route::get('/magang',[ProgramController::class,'magang']);
    Route::get('/kunjungan-industri',[ProgramController::class,'kunjungan']);
});
Route::get('/about-us',[AboutController::class,'about']);

Route::get('/contact-us',[ContactController::class,'contact']);