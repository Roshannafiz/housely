<?php

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index']);
Route::get('/buy', [\App\Http\Controllers\Frontend\BuyController::class, 'index']);
Route::get('/about-us', [\App\Http\Controllers\Frontend\AboutUsController::class, 'index']);
Route::get('/feature', [\App\Http\Controllers\Frontend\FeatureController::class, 'index']);
Route::get('/faqs', [\App\Http\Controllers\Frontend\FaqController::class, 'index']);
Route::get('/terms', [\App\Http\Controllers\Frontend\TermsController::class, 'index']);
Route::get('/privacy', [\App\Http\Controllers\Frontend\PrivacyController::class, 'index']);

Route::get('/contact-us', [\App\Http\Controllers\Frontend\ContactController::class, 'index']);
Route::post('/send-message', [\App\Http\Controllers\Frontend\ContactController::class, 'sendEmail']);

// House Detail Route
Route::get('house-details/{id}', [\App\Http\Controllers\Frontend\HouseDetailsController::class, 'house_detail']);
// Search Route
Route::get('/search-house', [\App\Http\Controllers\Frontend\SearchController::class, 'search_house']);

// Profile Route
Route::get('/profile-activity', [\App\Http\Controllers\Frontend\ProfileController::class, 'profile_activity']);
Route::get('/my-profile', [\App\Http\Controllers\Frontend\ProfileController::class, 'index'])->middleware('auth');
Route::post('/profile-update/{id}', [\App\Http\Controllers\Frontend\ProfileController::class, 'profile_update'])->middleware('auth');
Route::get('/user-change-password', [\App\Http\Controllers\Frontend\ProfileController::class, 'change_password'])->middleware('auth');
Route::post('/user-update-password', [\App\Http\Controllers\Frontend\ProfileController::class, 'update_password'])->middleware('auth');
Route::get('/proceed-to-buy/{id}', [\App\Http\Controllers\Frontend\ProfileController::class, 'proceed_to_buy'])->middleware('auth');

// Booking Route
Route::get('/my-booking', [\App\Http\Controllers\Frontend\BookingController::class, 'index'])->middleware('auth');
Route::post('/house-booking/{id}', [\App\Http\Controllers\Frontend\BookingController::class, 'house_booking']);
Route::get('/remove-booking/{id}', [\App\Http\Controllers\Frontend\BookingController::class, 'delete_booking']);

// Order Route
Route::get('/my-order', [\App\Http\Controllers\Frontend\OrderController::class, 'index'])->middleware('auth');
Route::get('/order-details/{id}', [\App\Http\Controllers\Frontend\OrderController::class, 'order_details'])->middleware('auth');

// Payment Route
Route::post('/pay-with-paypal', [\App\Http\Controllers\Frontend\PaymentController::class, 'pay']);
Route::get('/success', [\App\Http\Controllers\Frontend\PaymentController::class, 'success']);
Route::get('/error', [\App\Http\Controllers\Frontend\PaymentController::class, 'error']);
Route::get('/payment-success', [\App\Http\Controllers\Frontend\PaymentController::class, 'payment_success_view'])->middleware('auth');
Route::get('/payment-error', [\App\Http\Controllers\Frontend\PaymentController::class, 'payment_error_view'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Admin / User Custom Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', [\App\Http\Controllers\CustomAuth\CustomAuthController::class, 'login_view'])->middleware('guest');
Route::get('/sign-up', [\App\Http\Controllers\CustomAuth\CustomAuthController::class, 'sign_up_view'])->middleware('guest');
Route::post('/login', [\App\Http\Controllers\CustomAuth\CustomAuthController::class, 'login'])->name('login');
Route::post('/register', [\App\Http\Controllers\CustomAuth\CustomAuthController::class, 'register'])->name('register');
Route::get('/logout', [\App\Http\Controllers\CustomAuth\CustomAuthController::class, 'logout'])->name('logout');

// Forgot Password
Route::get('/forgot-password', function () {
    return view('auth-view.forgot-password');
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
    return view('auth-view.reset-password', ['token' => $token]);
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
    // Dashboard Route
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');

    // Banner Route
    Route::get('/banners', [\App\Http\Controllers\Admin\BannerController::class, 'index']);
    Route::get('/banner-create', [\App\Http\Controllers\Admin\BannerController::class, 'banner_create']);
    Route::post('/banner-store', [\App\Http\Controllers\Admin\BannerController::class, 'banner_store']);
    Route::get('/banner-edit/{id}', [\App\Http\Controllers\Admin\BannerController::class, 'banner_edit']);
    Route::put('/banner-update/{id}', [\App\Http\Controllers\Admin\BannerController::class, 'banner_update']);
    Route::get('/banner-status', [\App\Http\Controllers\Admin\BannerController::class, 'change_status'])->name('banner-status');
    Route::get('/banner-delete/{id}', [\App\Http\Controllers\Admin\BannerController::class, 'destroy']);

    // Feature Route
    Route::get('/features', [\App\Http\Controllers\Admin\FeatureController::class, 'index']);
    Route::get('/feature-create', [\App\Http\Controllers\Admin\FeatureController::class, 'feature_create']);
    Route::post('/feature-store', [\App\Http\Controllers\Admin\FeatureController::class, 'feature_store']);
    Route::get('/feature-edit/{id}', [\App\Http\Controllers\Admin\FeatureController::class, 'feature_edit']);
    Route::put('/feature-update/{id}', [\App\Http\Controllers\Admin\FeatureController::class, 'feature_update']);
    Route::get('/feature-status', [\App\Http\Controllers\Admin\FeatureController::class, 'change_status'])->name('feature-status');
    Route::get('/feature-delete/{id}', [\App\Http\Controllers\Admin\FeatureController::class, 'destroy']);

    // How To Work Route
    Route::get('/works', [\App\Http\Controllers\Admin\WorkController::class, 'index']);
    Route::get('/work-create', [\App\Http\Controllers\Admin\WorkController::class, 'work_create']);
    Route::post('/work-store', [\App\Http\Controllers\Admin\WorkController::class, 'work_store']);
    Route::get('/work-edit/{id}', [\App\Http\Controllers\Admin\WorkController::class, 'work_edit']);
    Route::put('/work-update/{id}', [\App\Http\Controllers\Admin\WorkController::class, 'work_update']);
    Route::get('/work-status', [\App\Http\Controllers\Admin\WorkController::class, 'change_status'])->name('work-status');
    Route::get('/work-delete/{id}', [\App\Http\Controllers\Admin\WorkController::class, 'destroy']);

    // Brand Route
    Route::get('/brands', [\App\Http\Controllers\Admin\BrandController::class, 'index']);
    Route::get('/brand-create', [\App\Http\Controllers\Admin\BrandController::class, 'brand_create']);
    Route::post('/brand-store', [\App\Http\Controllers\Admin\BrandController::class, 'brand_store']);
    Route::get('/brand-edit/{id}', [\App\Http\Controllers\Admin\BrandController::class, 'brand_edit']);
    Route::put('/brand-update/{id}', [\App\Http\Controllers\Admin\BrandController::class, 'brand_update']);
    Route::get('/brand-status', [\App\Http\Controllers\Admin\BrandController::class, 'change_status'])->name('brand-status');
    Route::get('/brand-delete/{id}', [\App\Http\Controllers\Admin\BrandController::class, 'destroy']);

    // Agent Route
    Route::get('/agents', [\App\Http\Controllers\Admin\AgentController::class, 'index']);
    Route::get('/agent-create', [\App\Http\Controllers\Admin\AgentController::class, 'agent_create']);
    Route::post('/agent-store', [\App\Http\Controllers\Admin\AgentController::class, 'agent_store']);
    Route::get('/agent-edit/{id}', [\App\Http\Controllers\Admin\AgentController::class, 'agent_edit']);
    Route::put('/agent-update/{id}', [\App\Http\Controllers\Admin\AgentController::class, 'agent_update']);
    Route::get('/agent-status', [\App\Http\Controllers\Admin\AgentController::class, 'change_status'])->name('agent-status');
    Route::get('/agent-delete/{id}', [\App\Http\Controllers\Admin\AgentController::class, 'destroy']);

    // Social Route
    Route::get('/socials', [\App\Http\Controllers\Admin\SocialController::class, 'index']);
    Route::get('/social-create', [\App\Http\Controllers\Admin\SocialController::class, 'social_create']);
    Route::post('/social-store', [\App\Http\Controllers\Admin\SocialController::class, 'social_store']);
    Route::get('/social-edit/{id}', [\App\Http\Controllers\Admin\SocialController::class, 'social_edit']);
    Route::put('/social-update/{id}', [\App\Http\Controllers\Admin\SocialController::class, 'social_update']);
    Route::get('/social-status', [\App\Http\Controllers\Admin\SocialController::class, 'change_status'])->name('social-status');
    Route::get('/social-delete/{id}', [\App\Http\Controllers\Admin\SocialController::class, 'destroy']);

    // Achievement Route
    Route::get('/achievements', [\App\Http\Controllers\Admin\AchievementController::class, 'index']);
    Route::get('/achievement-create', [\App\Http\Controllers\Admin\AchievementController::class, 'achievement_create']);
    Route::post('/achievement-store', [\App\Http\Controllers\Admin\AchievementController::class, 'achievement_store']);
    Route::get('/achievement-edit/{id}', [\App\Http\Controllers\Admin\AchievementController::class, 'achievement_edit']);
    Route::put('/achievement-update/{id}', [\App\Http\Controllers\Admin\AchievementController::class, 'achievement_update']);
    Route::get('/achievement-status', [\App\Http\Controllers\Admin\AchievementController::class, 'change_status'])->name('achievement-status');
    Route::get('/achievement-delete/{id}', [\App\Http\Controllers\Admin\AchievementController::class, 'destroy']);

    // Privacy Route
    Route::get('/privacys', [\App\Http\Controllers\Admin\PrivacyController::class, 'index']);
    Route::get('/privacy-create', [\App\Http\Controllers\Admin\PrivacyController::class, 'privacy_create']);
    Route::post('/privacy-store', [\App\Http\Controllers\Admin\PrivacyController::class, 'privacy_store']);
    Route::get('/privacy-edit/{id}', [\App\Http\Controllers\Admin\PrivacyController::class, 'privacy_edit']);
    Route::put('/privacy-update/{id}', [\App\Http\Controllers\Admin\PrivacyController::class, 'privacy_update']);
    Route::get('/privacy-status', [\App\Http\Controllers\Admin\PrivacyController::class, 'change_status'])->name('privacy-status');
    Route::get('/privacy-delete/{id}', [\App\Http\Controllers\Admin\PrivacyController::class, 'destroy']);

    // Footer Route
    Route::get('/footers', [\App\Http\Controllers\Admin\FooterController::class, 'index']);
    Route::get('/footer-create', [\App\Http\Controllers\Admin\FooterController::class, 'footer_create']);
    Route::post('/footer-store', [\App\Http\Controllers\Admin\FooterController::class, 'footer_store']);
    Route::get('/footer-edit/{id}', [\App\Http\Controllers\Admin\FooterController::class, 'footer_edit']);
    Route::put('/footer-update/{id}', [\App\Http\Controllers\Admin\FooterController::class, 'footer_update']);
    Route::get('/footer-view/{id}', [\App\Http\Controllers\Admin\FooterController::class, 'footer_view']);
    Route::get('/footer-status', [\App\Http\Controllers\Admin\FooterController::class, 'change_status'])->name('footer-status');
    Route::get('/footer-delete/{id}', [\App\Http\Controllers\Admin\FooterController::class, 'destroy']);

    // Category Route
    Route::get('/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('/category-create', [\App\Http\Controllers\Admin\CategoryController::class, 'category_create']);
    Route::post('/category-store', [\App\Http\Controllers\Admin\CategoryController::class, 'category_store']);
    Route::get('/category-edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'category_edit']);
    Route::put('/category-update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'category_update']);
    Route::get('/category-status', [\App\Http\Controllers\Admin\CategoryController::class, 'change_status'])->name('category-status');
    Route::get('/category-delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    // House Route
    Route::get('/houses', [\App\Http\Controllers\Admin\HouseController::class, 'index']);
    Route::get('/house-create', [\App\Http\Controllers\Admin\HouseController::class, 'house_create']);
    Route::post('/house-store', [\App\Http\Controllers\Admin\HouseController::class, 'house_store']);
    Route::get('/house-edit/{id}', [\App\Http\Controllers\Admin\HouseController::class, 'house_edit']);
    Route::put('/house-update/{id}', [\App\Http\Controllers\Admin\HouseController::class, 'house_update']);
    Route::get('/house-view/{id}/{category_id}', [\App\Http\Controllers\Admin\HouseController::class, 'house_view']);
    Route::get('/house-feature', [\App\Http\Controllers\Admin\HouseController::class, 'change_feature'])->name('house-feature');
    Route::get('/house-status', [\App\Http\Controllers\Admin\HouseController::class, 'change_status'])->name('house-status');
    Route::get('/house-delete/{id}', [\App\Http\Controllers\Admin\HouseController::class, 'destroy']);

    // User Route
    Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('/user-create', [\App\Http\Controllers\Admin\UserController::class, 'user_create']);
    Route::post('/user-store', [\App\Http\Controllers\Admin\UserController::class, 'user_store']);
    Route::get('/user-edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_edit']);
    Route::put('/user-update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_update']);
    Route::get('user-view/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_view']);
    Route::get('/user-status', [\App\Http\Controllers\Admin\UserController::class, 'change_status'])->name('user-status');
    Route::get('/user-change-password/{id}', [\App\Http\Controllers\Admin\UserController::class, 'change_password']);
    Route::post('/user-update-password/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update_password']);
    Route::get('/user-delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy']);

    // Booking Route
    Route::get('/bookings', [\App\Http\Controllers\Admin\BookingController::class, 'index']);
    Route::get('/booking-view/{id}', [\App\Http\Controllers\Admin\BookingController::class, 'booking_view']);
    Route::get('/booking-delete/{id}', [\App\Http\Controllers\Admin\BookingController::class, 'destroy']);

    // Order Route
    Route::get('/orders', [\App\Http\Controllers\Admin\OrderController::class, 'index']);
    Route::get('/order-view/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'order_view']);
    Route::get('/order-edit/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'order_edit']);
    Route::put('/order-update/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'order_update']);
    Route::get('/order-delete/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'destroy']);

    // Admin - Profile Setting Route
    Route::get('/profiles', [\App\Http\Controllers\Admin\ProfileController::class, 'index']);
    Route::get('/profile-edit', [\App\Http\Controllers\Admin\ProfileController::class, 'profile_edit']);
    Route::put('/profile-update/{id}', [\App\Http\Controllers\Admin\ProfileController::class, 'profile_update']);
    Route::get('/change-password', [\App\Http\Controllers\Admin\ProfileController::class, 'change_password']);
    Route::post('/update-password', [\App\Http\Controllers\Admin\ProfileController::class, 'update_password']);
});






