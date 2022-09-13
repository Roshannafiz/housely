<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index']);
Route::get('/login', [\App\Http\Controllers\Frontend\UserController::class, 'login_view'])->middleware('guest');
Route::get('/sign-up', [\App\Http\Controllers\Frontend\UserController::class, 'sign_up_view'])->middleware('guest');
Route::get('/buy', [\App\Http\Controllers\Frontend\BuyController::class, 'index']);
Route::get('/about-us', [\App\Http\Controllers\Frontend\AboutUsController::class, 'index']);
Route::get('/features', [\App\Http\Controllers\Frontend\FeatureController::class, 'index']);
Route::get('/faqs', [\App\Http\Controllers\Frontend\FaqController::class, 'index']);
Route::get('/terms', [\App\Http\Controllers\Frontend\TermsController::class, 'index']);
Route::get('/privacy', [\App\Http\Controllers\Frontend\PrivacyController::class, 'index']);
Route::get('/contact-us', [\App\Http\Controllers\Frontend\ContactController::class, 'index']);


/*
|--------------------------------------------------------------------------
| Admin / User Custom Auth Routes
|--------------------------------------------------------------------------
*/
Route::post('/login', [\App\Http\Controllers\CustomAuth\CustomAuthController::class, 'login'])->name('login');
Route::post('/register', [\App\Http\Controllers\CustomAuth\CustomAuthController::class, 'register'])->name('register');
Route::get('/logout', [\App\Http\Controllers\CustomAuth\CustomAuthController::class, 'logout'])->name('logout');
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');

    // Banner Route
    Route::get('/banners', [\App\Http\Controllers\Admin\BannerController::class, 'index']);
    Route::get('/banner-create', [\App\Http\Controllers\Admin\BannerController::class, 'banner_create']);
    Route::post('/banner-store', [\App\Http\Controllers\Admin\BannerController::class, 'banner_store']);
    Route::get('/banner-edit', [\App\Http\Controllers\Admin\BannerController::class, 'banner_edit']);
    Route::put('/banner-update', [\App\Http\Controllers\Admin\BannerController::class, 'banner_update']);
    Route::delete('/banner-delete', [\App\Http\Controllers\Admin\BannerController::class, 'banner_delete']);
    Route::get('/banner-status', [\App\Http\Controllers\Admin\BannerController::class, 'change_status'])->name('doctor-status');
});













