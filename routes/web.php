<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('home.index');
});
Route::get('/home', function () {
    return view('home.index');
});
Route::get('/home', [HomeController::class, 'index']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware(\App\Http\Middleware\Authenticate::class);

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_login_check');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');

});


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/cars/{id}/{slug}', [HomeController::class, 'cars'])->name('cars');
Route::get('/cardetail/{id}/{slug}', [HomeController::class, 'carDetail'])->name('cardetail');


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
   
    #Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    #Car
    Route::prefix('car')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\CarController::class, 'index'])->name('admin_cars');
        Route::get('/create', [\App\Http\Controllers\Admin\CarController::class, 'create'])->name('admin_car_add');
        Route::post('store', [\App\Http\Controllers\Admin\CarController::class, 'store'])->name('admin_car_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\CarController::class, 'edit'])->name('admin_car_edit');
        Route::post('update{id}', [\App\Http\Controllers\Admin\CarController::class, 'update'])->name('admin_car_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\CarController::class, 'destroy'])->name('admin_car_delete');
        Route::get('show', [\App\Http\Controllers\Admin\CarController::class, 'show'])->name('admin_car_show');
    });

    #Car Image Gallery
    Route::prefix('image')->group(function () {
        Route::get('/create/{car_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{car_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{car_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });

    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\settingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\settingController::class, 'update'])->name('admin_setting_update');



});