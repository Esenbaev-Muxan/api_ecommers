<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\DeliveryMethodController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentCardTypeController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPhotoControlller;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StatusOrderController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPaymentCardsController;
use App\Http\Controllers\UserPhotoController;
use App\Http\Controllers\UserSettingController;
use App\Models\Discount;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

Route::get('products/{product}/related', [ProductController::class, 'related']);
Route::post('roles/assign', [RoleController::class, 'assign']);
Route::post('permissions/assign', [PermissionController::class, 'assign']);





//////////////////////////////////
Route::apiResource('users', UserController::class);
Route::apiResource('users.photos', UserPhotoController::class);
Route::apiResource('favorites', FavoriteController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('categories.products', CategoryProductController::class);
Route::apiResource('statuses', StatusController::class);
Route::apiResource('statuses.orders', StatusOrderController::class);
Route::apiResource('orders', OrderController::class);
Route::apiResource('delivery-methods', DeliveryMethodController::class);
Route::apiResource('payment-types', PaymentTypeController::class);
Route::apiResource('user-addresses', UserAddressController::class);
Route::apiResource('reviews', ReviewController::class);
Route::apiResource('products.reviews', ProductReviewController::class);
Route::apiResource('settings', SettingController::class);
Route::apiResource('user-settings', UserSettingController::class);
Route::apiResource('payment-card-types', PaymentCardTypeController::class);
Route::apiResource('user-payment-cards', UserPaymentCardsController::class);
Route::apiResource('products.photos', ProductPhotoControlller::class);
Route::apiResource('photos', PhotoController::class);
Route::apiResource('discounts', DiscountController::class);
Route::apiResource('roles', RoleController::class);
Route::apiResource('permissions', PermissionController::class);
