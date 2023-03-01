<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use Symfony\Component\HttpFoundation\Request;



Route::get('/homepage', [ProductsController::class, 'index'])->name('products.index');
Route::get('/about', [ProductsController::class, 'about'])->name('products.about');
Route::get('/products', [ProductsController::class, 'products'])->name('products.products');

