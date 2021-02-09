<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\ShopAdmin\ShopController;
use App\Http\Controllers\ShopAdmin\ProductController;
use App\Http\Controllers\ShopAdmin\ProductMoreDetailsController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

// Division
Route::get('/division', [DivisionController::class, 'index'])->name('admin.division');
Route::post('/create/division', [DivisionController::class, 'create'])->name('create.division');
Route::post('/update/division/{division}', [DivisionController::class, 'update'])->name('update.division');
Route::get('/delete/division/{division}', [DivisionController::class, 'delete'])->name('delete.division');


// District
Route::get('/district', [DistrictController::class, 'index'])->name('admin.district');
Route::post('/create/district', [DistrictController::class, 'create'])->name('create.district');
Route::post('/update/district/{district}', [DistrictController::class, 'update'])->name('update.district');
Route::get('/delete/district/{district}', [DistrictController::class, 'delete'])->name('delete.district');


// Category
Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
Route::post('/create/category', [CategoryController::class, 'create'])->name('create.category');
Route::post('/update/category/{category}', [CategoryController::class, 'update'])->name('update.category');
Route::get('/delete/category/{category}', [CategoryController::class, 'delete'])->name('delete.category');

//Shop Manage
// Route::get('Shopadmin/dashboard/', [ShopController::class, 'shopDashboard'])->name('shopadmin.dashboard');
Route::get('/shop/list', [ShopController::class, 'shopIndex'])->name('shopadmin.shop.list');
Route::get('/shop/create/', [ShopController::class, 'shopCreate'])->name('shopadmin.shop.create');
Route::post('/shop/store/', [ShopController::class, 'shopStore'])->name('shopadmin.shop.store');
Route::get('/shop/edit/{shop}', [ShopController::class, 'shopEdit'])->name('shopadmin.edit.shop');
Route::post('/shop/update/{shop}', [ShopController::class, 'shopUpdate'])->name('shopadmin.update.shop');
Route::get('/delete/shop/{shop}', [ShopController::class, 'delete'])->name('shopadmin.delete.shop');

// Subcategory
Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('admin.subcategory');
Route::post('/create/subcategory', [SubcategoryController::class, 'create'])->name('create.subcategory');
Route::post('/update/subcategory/{subcategory}', [SubcategoryController::class, 'update'])->name('update.subcategory');
Route::get('/delete/subcategory/{subcategory}', [SubcategoryController::class, 'delete'])->name('delete.subcategory');



// Subcategory
Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('admin.subcategory');
Route::post('/create/subcategory', [SubcategoryController::class, 'create'])->name('create.subcategory');
Route::post('/update/subcategory/{subcategory}', [SubcategoryController::class, 'update'])->name('update.subcategory');
Route::get('/delete/subcategory/{subcategory}', [SubcategoryController::class, 'delete'])->name('delete.subcategory');


// ShopAdmin
Route::get('/shopadmin', [App\Http\Controllers\HomeController::class, 'shopadmin'])->name('shopadmin');

//Product
Route::get('/addproduct', [ProductController::class, 'addindex'])->name('product.add');
Route::post('/addproduct/create', [ProductController::class, 'createproduct'])->name('product.create');
Route::post('/addproduct/update', [ProductController::class, 'update'])->name('product.update');
Route::get('/addproduct/moredetails', [ProductMoreDetailsController::class, 'moredetails'])->name('product.moredetails');
Route::post('/addproduct/moredetails/create', [ProductMoreDetailsController::class, 'createmoredetails'])->name('product.createmoredetails');

Route::get('/productlist', [ProductController::class, 'productlist'])->name('product.productlist');
Route::get('/productlist/{id}', [ProductController::class, 'productlistsingleshop'])->name('product.productlistsingleshop');

Route::get('/product/basicedit/{id}', [ProductController::class, 'productbasicedit'])->name('product.basicedit');
Route::post('/product/basicedit/update/{id}', [ProductController::class, 'productbasiceditupdate'])->name('product.basicedit.update');

