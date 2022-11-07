<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about',function(){
    return "หน้าเกี่ยวกับเรา";
});

// route::view('/','promotepage.home')->name('home');

Route::get('/', [IndexController::class, 'index'])->name('promotepage.index');

// Authenticated
Auth::routes();

// profile
Route::get('/home', [HomeController::class, 'index'])->name('home');

// admin index
Route::get('/admin/index',[HomeController::class, 'admin'])->name('admin');

// user
Route::get('/admin/user/index',[UserController::class,'index'])->name('user.index');
Route::get('/admin/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::post('/admin/user/update/{id}',[Usercontroller::class, 'update'])->name('user.update');
Route::get('/admin/user/delete/{id}',[Usercontroller::class, 'delete'])->name('user.delete');


// category
Route::get('/admin/category/index',[CategoryController::class,'index'])->name('category.index');
Route::get('/admin/category/create',[CategoryController::class,'createfome'])->name('category.create');
Route::post('/admin/category/insert',[CategoryController::class,'insert'])->name('category.insert');
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/admin/category/update/{id}',[CategoryController::class,'update'])->name('category.update');;
Route::get('/admin/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');



// product
Route::get('/admin/product/index',[ProductController::class,'index'])->name('product.index');
Route::get('/admin/Product/create',[ProductController::class,'createfome'])->name('product.create');
Route::post('/admin/Product/insert',[ProductController::class,'insert'])->name('product.insert');
Route::get('/admin/Product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/admin/Product/update/{id}',[ProductController::class,'update'])->name('product.update');;
Route::get('/admin/Product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');

// content
Route::get('/admin/content/index',[ContentController::class,'index'])->name('content.index');
Route::get('/admin/content/create',[ContentController::class,'createfome'])->name('content.create');
Route::post('/admin/content/insert',[ContentController::class,'insert'])->name('content.insert');
Route::get('/admin/content/edit/{id}',[ContentController::class,'edit'])->name('content.edit');
Route::get('/admin/content/delete/{id}',[ContentController::class,'delete'])->name('content.delete');
Route::post('/admin/content/update/{id}',[ContentController::class,'update'])->name('content.update');;

// about
Route::get('/admin/about/index',[AboutController::class,'index'])->name('about.index');
Route::get('/admin/about/create',[AboutController::class,'createfome'])->name('about.create');
Route::post('/admin/about/insert',[AboutController::class,'insert'])->name('about.insert');
Route::get('/admin/about/edit/{id}',[AboutController::class,'edit'])->name('about.edit');
Route::get('/admin/about/delete/{id}',[AboutController::class,'delete'])->name('about.delete');
Route::post('/admin/about/update/{id}',[AboutController::class,'update'])->name('about.update');;