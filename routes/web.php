<?php

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| frontend Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index']);
Route::get('/login', [\App\Http\Controllers\Frontend\UserController::class, 'login_view'])->middleware('guest');
Route::get('/sign-up', [\App\Http\Controllers\Frontend\UserController::class, 'sign_up_view'])->middleware('guest');
Route::get('/buy', [\App\Http\Controllers\Frontend\BuyController::class, 'index']);
Route::get('/about-us', [\App\Http\Controllers\Frontend\AboutUsController::class, 'index']);
Route::get('/feature', [\App\Http\Controllers\Frontend\FeatureController::class, 'index']);
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

// Forgot Password
Route::get('/forgot-password', function () {
    return view('frontend.user.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('frontend.user.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');

    // Navbar Route
    Route::get('/navbars', [\App\Http\Controllers\Admin\NavbarController::class, 'index']);
    Route::get('/navbar-create', [\App\Http\Controllers\Admin\NavbarController::class, 'navbar_create']);
    Route::post('/navbar-store', [\App\Http\Controllers\Admin\NavbarController::class, 'navbar_store']);
    Route::get('/navbar-edit/{id}', [\App\Http\Controllers\Admin\NavbarController::class, 'navbar_edit']);
    Route::put('/navbar-update/{id}', [\App\Http\Controllers\Admin\NavbarController::class, 'navbar_update']);
    Route::get('/navbar-delete/{id}', [\App\Http\Controllers\Admin\NavbarController::class, 'destroy']);
    Route::get('/navbar-status', [\App\Http\Controllers\Admin\NavbarController::class, 'change_status'])->name('navbar-status');

    // Banner Route
    Route::get('/banners', [\App\Http\Controllers\Admin\BannerController::class, 'index']);
    Route::get('/banner-create', [\App\Http\Controllers\Admin\BannerController::class, 'banner_create']);
    Route::post('/banner-store', [\App\Http\Controllers\Admin\BannerController::class, 'banner_store']);
    Route::get('/banner-edit/{id}', [\App\Http\Controllers\Admin\BannerController::class, 'banner_edit']);
    Route::put('/banner-update/{id}', [\App\Http\Controllers\Admin\BannerController::class, 'banner_update']);
    Route::get('/banner-delete/{id}', [\App\Http\Controllers\Admin\BannerController::class, 'destroy']);
    Route::get('/banner-status', [\App\Http\Controllers\Admin\BannerController::class, 'change_status'])->name('banner-status');

    // Feature Route
    Route::get('/features', [\App\Http\Controllers\Admin\FeatureController::class, 'index']);
    Route::get('/feature-create', [\App\Http\Controllers\Admin\FeatureController::class, 'feature_create']);
    Route::post('/feature-store', [\App\Http\Controllers\Admin\FeatureController::class, 'feature_store']);
    Route::get('/feature-edit/{id}', [\App\Http\Controllers\Admin\FeatureController::class, 'feature_edit']);
    Route::put('/feature-update/{id}', [\App\Http\Controllers\Admin\FeatureController::class, 'feature_update']);
    Route::get('/feature-delete/{id}', [\App\Http\Controllers\Admin\FeatureController::class, 'destroy']);
    Route::get('/feature-status', [\App\Http\Controllers\Admin\FeatureController::class, 'change_status'])->name('feature-status');

    // Brand Route
    Route::get('/brands', [\App\Http\Controllers\Admin\BrandController::class, 'index']);
    Route::get('/brand-create', [\App\Http\Controllers\Admin\BrandController::class, 'brand_create']);
    Route::post('/brand-store', [\App\Http\Controllers\Admin\BrandController::class, 'brand_store']);
    Route::get('/brand-edit/{id}', [\App\Http\Controllers\Admin\BrandController::class, 'brand_edit']);
    Route::put('/brand-update/{id}', [\App\Http\Controllers\Admin\BrandController::class, 'brand_update']);
    Route::get('/brand-delete/{id}', [\App\Http\Controllers\Admin\BrandController::class, 'destroy']);
    Route::get('/brand-status', [\App\Http\Controllers\Admin\BrandController::class, 'change_status'])->name('brand-status');

    // Category Route
    Route::get('/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('/category-create', [\App\Http\Controllers\Admin\CategoryController::class, 'category_create']);
    Route::post('/category-store', [\App\Http\Controllers\Admin\CategoryController::class, 'category_store']);
    Route::get('/category-edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'category_edit']);
    Route::put('/category-update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'category_update']);
    Route::get('/category-delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']);
    Route::get('/category-status', [\App\Http\Controllers\Admin\CategoryController::class, 'change_status'])->name('category-status');
});













