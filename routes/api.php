<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuProductController;

Route::apiResource('products', ProductController::class);
Route::apiResource('menus', MenuController::class);
Route::apiResource('menu-products', MenuProductController::class);
