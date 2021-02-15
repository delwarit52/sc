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
use App\Http\Controllers\ShopAdmin\ProductdetailController;
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
// Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('admin.subcategory');
// Route::post('/create/subcategory', [SubcategoryController::class, 'create'])->name('create.subcategory');
// Route::post('/update/subcategory/{subcategory}', [SubcategoryController::class, 'update'])->name('update.subcategory');
// Route::get('/delete/subcategory/{subcategory}', [SubcategoryController::class, 'delete'])->name('delete.subcategory');


// Brand
Route::get('/brand', [BrandController::class, 'index'])->name('admin.brand');
Route::post('/create/brand', [BrandController::class, 'create'])->name('create.brand');
Route::post('/update/brand/{brand}', [BrandController::class, 'update'])->name('update.brand');
Route::get('/delete/brand/{brand}', [BrandController::class, 'delete'])->name('delete.brand');

// ShopAdmin
Route::get('/shopadmin', [App\Http\Controllers\HomeController::class, 'shopadmin'])->name('shopadmin');

//Product
Route::get('/productlist', [ProductController::class, 'productlist'])->name('product.productlist');
Route::get('/addproduct', [ProductController::class, 'addindex'])->name('product.add');
Route::post('/addproduct/create', [ProductController::class, 'createproduct'])->name('product.create');
Route::get('/product/edit/{id}', [ProductController::class, 'productEdit'])->name('product.edit');
Route::post('/product/update/{product}', [ProductController::class, 'productUpdate'])->name('shopadmin.product.update');
Route::get('/delete/product/{product}', [ProductController::class, 'delete'])->name('delete.product');


Route::get('/addproduct/moredetails/', [ProductdetailController::class, 'detailCreate'])->name('product.moredetails');
Route::post('/product/moredetails/store', [ProductdetailController::class, 'detailStore'])->name('product.detail.store');
Route::get('/productlist/{id}', [ProductController::class, 'productlistsingleshop'])->name('product.productlistsingleshop');


