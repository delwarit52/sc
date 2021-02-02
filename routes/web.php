<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\SubcategoryController;

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


// Subcategory
Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('admin.subcategory');
Route::post('/create/subcategory', [SubcategoryController::class, 'create'])->name('create.subcategory');
Route::post('/update/subcategory/{subcategory}', [SubcategoryController::class, 'update'])->name('update.subcategory');
Route::get('/delete/subcategory/{subcategory}', [SubcategoryController::class, 'delete'])->name('delete.subcategory');


// Brand
Route::get('/brand', [BrandController::class, 'index'])->name('admin.brand');
Route::post('/create/brand', [BrandController::class, 'create'])->name('create.brand');
Route::post('/update/brand/{brand}', [BrandController::class, 'update'])->name('update.brand');
Route::get('/delete/brand/{brand}', [BrandController::class, 'delete'])->name('delete.brand');