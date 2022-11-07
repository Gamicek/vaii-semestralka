<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontEndController;
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

Route::group(['as' => 'fe-pages.'], function() {
    Route::get('/', [FrontEndController::class, 'homePage'])->name('home-page');
    Route::resource("/contact", ContactController::class)->only(["index","store","destroy"]);
    Route::resource("/posts", PostController::class)->only(["index","show","destroy"]);
    Route::get('/services',[FrontEndController::class,'servicesPage'])->name('services-page');
    Route::get('/about-us',[FrontEndController::class,'aboutUsPage'])->name('aboutUs-page');
});


