<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Remove these individual routes
/*
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
*/

// Use the resource routes instead
Route::resource('products', ProductController::class);
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::patch('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
//Route::get('/product', [ProductController::class, 'create'])->name('product.create');

Route::get('/permissions/{id}', 'PermissionController@show')->name('permissions.show');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');


    // Other admin-only routes
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

