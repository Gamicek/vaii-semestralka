<?php

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
    Route::resource("/contact", ContactController::class)->only(["index", "store", "destroy"]);
    Route::resource("/posts", PostController::class)->only(["index", "create", "store", "show", "edit", "update", "destroy"]);
    Route::get('/services', [FrontEndController::class, 'servicesPage'])->name('services-page');
    Route::get('/about-us', [FrontEndController::class, 'aboutUsPage'])->name('aboutUs-page');

    //AlreadyLoggedIn

    Route::resource("/registration", RegistrationController::class)->only(["index", "create", "store", "destroy"])->middleware('AlreadyLoggedIn');
    Route::resource("/login", LoginController::class)->only(["index", "create", "store", "destroy"])->middleware('AlreadyLoggedIn');
    Route::post('login-user', [LoginController::class, 'loginUser'])->name('login-user');
    Route::get('/dashboarad', [LoginController::class, 'dashboarad'])->middleware('isLoggedIn');
    Route::get('/logout', [LoginController::class, 'logout']);
});
