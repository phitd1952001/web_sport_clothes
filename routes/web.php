<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminOrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingAdminController;
use App\Http\Controllers\AdminSliderController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CategoryFrontEnd;
use App\Http\Controllers\Fe_Home;
use App\Http\Controllers\FrontEndCart;
use App\Http\Controllers\FrontEndLoginCheckout;
use App\Http\Controllers\FrontEndProduct;
use App\Http\Controllers\AdminRolesController;
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
Auth::routes();
// back-end

// login
Route::get('/admin', [
    AdminController::class,'loginAdmin'
])->name('login');
Route::post('/admin',[
    AdminController::class,'postLoginAdmin'
]);
Route::get('/logout', [
    AdminController::class, 'logoutAdmin'
])->name('logoutAdmin');
//

Route::prefix('admin')->group(function(){
    Route::prefix('settings')->group(function(){
        Route::get('/', [
            SettingAdminController::class, 'index'
        ])->name('settings.index')->middleware('can:setting_list');
        Route::get('/create', [
            SettingAdminController::class, 'create'
        ])->name('settings.create')->middleware('can:setting_add');
        Route::post('/store', [
            SettingAdminController::class, 'store'
        ])->name('settings.store');
        Route::get('/edit/{id}', [
            SettingAdminController::class, 'edit'
        ])->name('settings.edit')->middleware('can:setting_edit');
        Route::post('/update/{id}', [
            SettingAdminController::class, 'update'
        ])->name('settings.update');
        Route::get('/delete/{id}', [
            SettingAdminController::class, 'delete'
        ])->name('settings.delete')->middleware('can:setting_delete');
    });
    Route::prefix('slider')->group(function () {
        Route::get('/', [
            AdminSliderController::class, 'index'
        ])->name('slider.index')->middleware('can:slider_list');
        Route::get('/create', [
            AdminSliderController::class, 'create'
        ])->name('slider.create')->middleware('can:slider_add');
        Route::post('/store', [
            AdminSliderController::class, 'store'
        ])->name('slider.store');
        Route::get('/edit/{id}', [
            AdminSliderController::class, 'edit'
        ])->name('slider.edit')->middleware('can:slider_edit');
        Route::post('/update/{id}', [
            AdminSliderController::class, 'update'
        ])->name('slider.update');
        Route::get('/delete/{id}', [
            AdminSliderController::class, 'delete'
        ])->name('slider.delete')->middleware('can:slider_delete');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [
            AdminCategoryController::class, 'index'
        ])->name('categories.index')->middleware('can:category_list');
        Route::get('/create', [
            AdminCategoryController::class, 'create'
        ])->name('categories.create')->middleware('can:category_add');
        Route::post('/store', [
            AdminCategoryController::class, 'store'
        ])->name('categories.store');

        Route::get('/edit/{id}', [
            AdminCategoryController::class, 'edit'
        ])->name('categories.edit')->middleware('can:category_edit');
        Route::get('/delete/{id}', [
            AdminCategoryController::class, 'delete'
        ])->name('categories.delete');
        Route::post('/update/{id}', [
            AdminCategoryController::class, 'update'
        ])->name('categories.update')->middleware('can:category_delete');
    });

    Route::prefix('product')->group(function () {
        Route::get('/', [
            AdminProductController::class, 'index'
        ])->name('product.index')->middleware('can:product_list');
        Route::get('/create', [
            AdminProductController::class, 'create'
        ])->name('product.create')->middleware('can:product_add');
        Route::post('/store', [
            AdminProductController::class, 'store'
        ])->name('product.store');
        Route::get('/edit/{id}', [
            AdminProductController::class, 'edit'
        ])->name('product.edit')->middleware('can:product_edit');
        Route::post('/update/{id}', [
            AdminProductController::class, 'update'
        ])->name('product.update');
        Route::get('/delete/{id}', [
            AdminProductController::class, 'delete'
        ])->name('product.delete')->middleware('can:product_delete');
    });

    
});
//end- front-end