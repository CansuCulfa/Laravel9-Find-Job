<?php

use App\Http\Controllers\AdminPanel\AdminJobController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
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

// ******************************HOME PAGE ROUTES *********************
Route::get('/', [HomeController::class,'index'])->name(name:'home');
Route::get('/about', [HomeController::class,'about'])->name(name:'about');
Route::get('/references', [HomeController::class,'references'])->name(name:'references');
Route::get('/contact', [HomeController::class,'contact'])->name(name:'contact');
Route::post('/storemessage', [HomeController::class,'storemessage'])->name(name:'storemessage');
Route::post('/storecomment', [HomeController::class,'storecomment'])->name(name:'storecomment');
Route::view('/loginuser', 'home.login')->name(name:'loginuser');
Route::view('/registeruser', 'home.register')->name(name:'registeruser');
Route::get('/logoutuser', [HomeController::class,'logout'])->name(name:'logoutuser');
Route::view('/loginadmin', 'admin.login')->name(name:'loginadmin');

Route::post('/loginadmincheck', [HomeController::class,'loginadmincheck'])->name(name:'loginadmincheck');


Route::get('/faq', [HomeController::class,'faq'])->name(name:'faq');
// 4- Route -> Controller -> view
Route::get('/test', [HomeController::class,'test'])->name(name:'test');

// 5- Route with parameters
Route::get('/param/{id}/{number}', [HomeController::class,'param'])->name(name:'param');

// 6- Route with post
Route::post('/save', [HomeController::class,'save'])->name(name:'save');

Route::get('/job/{id}', [HomeController::class,'job'])->name(name:'job');
Route::get('/categoryjobs/{id}/{slug}', [HomeController::class,'categoryjobs'])->name(name:'categoryjobs');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ************************ User Auth Control ****************************
Route::middleware('auth')->group(function () {
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)-> group(function () {
        Route::get('/', 'index')->name(name: 'index');

    });

// ************************ Admin Panel Routes ****************************
Route::middleware('admin')->prefix('admin')->name('admin.')-> group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name(name: 'index');

// ************************ General Routes ****************************
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name(name: 'setting');
    Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name(name: 'setting.update');



// ************************ Admin Category Routes ****************************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)-> group(function () {

        Route::get('/', 'index')->name(name: 'index');

        Route::get('/create', 'create')->name(name: 'create');

        Route::post('/store','store')->name(name: 'store');

        Route::get('/edit/{id}', 'edit')->name(name: 'edit');

        Route::post('/update/{id}', 'update')->name(name: 'update');

        Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');

        Route::get('/show/{id}',  'show')->name(name: 'show');

    });

    // ************************ Admin Category Routes ****************************
    Route::prefix('/job')->name('job.')->controller(AdminJobController::class)-> group(function () {

        Route::get('/', 'index')->name(name: 'index');

        Route::get('/create', 'create')->name(name: 'create');

        Route::post('/store','store')->name(name: 'store');

        Route::get('/edit/{id}', 'edit')->name(name: 'edit');

        Route::post('/update/{id}', 'update')->name(name: 'update');

        Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');

        Route::get('/show/{id}',  'show')->name(name: 'show');

    });
    // ************************ Admin Job Images Gallery ****************************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)-> group(function () {

        Route::get('/{jid}', 'index')->name(name: 'index');

        Route::post('/store/{jid}','store')->name(name: 'store');

        Route::get('/destroy/{jid}/{id}', 'destroy')->name(name: 'destroy');

    });
    // ************************ Admin Message Gallery ****************************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)-> group(function () {

        Route::get('/', 'index')->name(name: 'index');
        Route::get('/show/{id}',  'show')->name(name: 'show');
        Route::post('/update/{id}', 'update')->name(name: 'update');
        Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');

    });
    // ************************ Admin Faq Routes ****************************
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)-> group(function () {

        Route::get('/', 'index')->name(name: 'index');

        Route::get('/create', 'create')->name(name: 'create');

        Route::post('/store','store')->name(name: 'store');

        Route::get('/edit/{id}', 'edit')->name(name: 'edit');

        Route::post('/update/{id}', 'update')->name(name: 'update');

        Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');

        Route::get('/show/{id}',  'show')->name(name: 'show');

    });
// ************************ Admin Comment Gallery ****************************
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)-> group(function () {

        Route::get('/', 'index')->name(name: 'index');
        Route::get('/show/{id}',  'show')->name(name: 'show');
        Route::get('/edit/{id}', 'edit')->name(name: 'edit');
        Route::post('/update/{id}', 'update')->name(name: 'update');
        Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');


    });

    // ************************ Admin User ****************************
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)-> group(function () {
        Route::get('/', 'index')->name(name: 'index');
        Route::get('/show/{id}',  'show')->name(name: 'show');
        Route::post('/update/{id}', 'update')->name(name: 'update');
        Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');
        Route::post('/addrole/{id}', 'addrole')->name(name: 'addrole');
        Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name(name: 'destroyrole');

    });

});
});
