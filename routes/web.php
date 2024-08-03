<?php

use App\Http\Controllers\AdminRouteOneController;
use App\Http\Controllers\AdminRouteThreeController;
use App\Http\Controllers\AdminRouteTwoController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductFourController;
use App\Http\Controllers\ProductOneController;
use App\Http\Controllers\ProductThreeController;
use App\Http\Controllers\ProductTwoController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', HomepageController::class)->name('homepage');

// Products
Route::get('product-one', ProductOneController::class)->name('product-one');
Route::get('product-two', ProductTwoController::class)->name('product-two');
Route::get('product-three', ProductThreeController::class)->name('product-three');
Route::get('product-four/{user}', ProductFourController::class)->name('product-four');

// Admin
Route::get('admin-one', AdminRouteOneController::class)->name('admin-one');
Route::get('admin-two', AdminRouteTwoController::class)->name('admin-two');
Route::get('admin-three', AdminRouteThreeController::class)->name('admin-three');
