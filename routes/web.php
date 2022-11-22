<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use Illuminate\Auth\Events\Logout;

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

Route::group(['as' => 'fe-pages.'], function () {
    Route::get('/', [FrontEndController::class, 'homePage'])->name('home-page');
    Route::resource("/contact", ContactController::class)->only(["index"]);

    Route::resource("/posts", PostController::class);

    Route::get('/services', [FrontEndController::class, 'servicesPage'])->name('services-page');
    Route::get('/about-us', [FrontEndController::class, 'aboutUsPage'])->name('aboutUs-page');

    // registration
    Route::get("/registration", [RegistrationController::class, 'create'])->name('register');
    Route::post("/registration", [RegistrationController::class, 'store'])->name('register.store');

    // login
    Route::get("/login", [LoginController::class, 'create'])->name('login');
    Route::post("/login", [LoginController::class, 'store'])->name('login.store');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboardPage']);
        Route::get('/logout', [LoginController::class, 'destroy']);
    });
});
