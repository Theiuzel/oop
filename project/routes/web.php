<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\InventoryController;

Route::get('/inventories/index', function () {
    return view('inventories.index');
});

Route::resource('products', ProductsController::class);
Route::resource('inventories', InventoryController::class);
