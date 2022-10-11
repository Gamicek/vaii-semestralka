<?php

use App\Http\Controllers\FrontEndController;
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
    Route::get('/contact',[FrontEndController::class, 'contactPage'])->name('contact-page');
    Route::get('/blog', [FrontEndController::class, 'blogPage'])->name('blog-page');
    Route::get('/services',[FrontEndController::class,'servicesPage'])->name('services-page');
    Route::get('/aboutUs',[FrontEndController::class,'aboutUsPage'])->name('aboutUs-page');
});



