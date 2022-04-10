<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
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
// 1- Do sth in route
Route::get('/hello', function () {
    return 'Hello World';
});

// 2-Call view in roue
Route::get('/welcome', function () {
    return view('welcome');
});

// 3- Call controller function
Route::get('/', [HomeController::class,'index'])->name(name:'home');

// 4- Route -> Controller -> view
Route::get('/test', [HomeController::class,'test'])->name(name:'test');

// 5- Route with parameters
Route::get('/param/{id}/{number}', [HomeController::class,'param'])->name(name:'param');

// 6- Route with post
Route::post('/save', [HomeController::class,'save'])->name(name:'save');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ************************ Admin Panel Routes ****************************
Route::get('/admin', [AdminHomeController::class,'index'])->name(name:'admin');

// ************************ Admin Category Routes ****************************
Route::get('/admin/category', [App\Http\Controllers\AdminPanel\CategoryController::class,'index'])->name(name:'admin_category');

Route::get('/admin/category/create', [App\Http\Controllers\AdminPanel\CategoryController::class,'create'])->name(name:'admin_category_create');

Route::post('/admin/category/store', [App\Http\Controllers\AdminPanel\CategoryController::class,'store'])->name(name:'admin_category_store');
