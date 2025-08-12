<?php

use App\Http\Controllers\Admin\ImportController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified'])->name('user.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    // products CRUD
    Route::resource('/admin/products', ProductController::class, [
        'as' => 'admin'
    ]);

    // categories CRUD
    Route::resource('/admin/categories', CategoryController::class, [
        'as' => 'admin'
    ]);


    // orders CRUD
    Route::resource('/admin/orders', OrderController::class, [
        'as' => 'admin'
    ]);

    // users CRUD
    Route::resource('/admin/users', UserController::class, [
        'as' => 'admin'
    ]);

});

require __DIR__.'/auth.php';
