<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// FRONTEND

Route::get('/', [\App\Http\Controllers\FrontEnd\HomeController::class,'index'])->name('home');

// ADMİN


Route::get('/admin/login',[App\Http\Controllers\Admin\LoginController::class,'index'])->name('login');
Route::post('/admin/loginCheck',[App\Http\Controllers\Admin\LoginController::class,'loginCheck'])->name('login_check');
Route::get('/admin/logout',[\App\Http\Controllers\Admin\LogoutController::class,'index'])->name('logout');


Route::middleware('auth')
    ->prefix('/admin')
    ->group(function (){

        Route::get('',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminHome');

        // CATEGORY
        Route::get('/category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])
            ->name('category');

        Route::get('/category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])
            ->name('category_create');

        Route::post('/category/store',[\App\Http\Controllers\Admin\CategoryController::class,'store'])
            ->name('category_store');

        Route::get('/category/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])
            ->name('category_delete');

        Route::get('/category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])
            ->name('category_edit');

        Route::post('category/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])
            ->name('category_update');

        // PRODUCT

        Route::middleware('auth')
            ->prefix('/product')
            ->group(function (){

                Route::get('',[\App\Http\Controllers\Admin\ProductControler::class,'index'])
                    ->name('product');

                Route::get('/create',[\App\Http\Controllers\Admin\ProductControler::class,'create'])
                    ->name('product_create');
            });
    });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
