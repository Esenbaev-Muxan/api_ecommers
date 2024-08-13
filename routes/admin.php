<?php

use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\StatsController;
use Illuminate\Support\Facades\Route;



Route::prefix('stats')->group(function () {
    Route::get('orders-count', [StatsController::class, 'ordersCount']);
    Route::get('orders-sales-sum', [StatsController::class, 'ordersSalesSum']);
    Route::get('delivery-method-ratio', [StatsController::class, 'deliveryMethodRation']);
    Route::get('orders-count-by-day', [StatsController::class, 'ordersCountByDays']);
});


Route::apiResource('orders', AdminOrderController::class);