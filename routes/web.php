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

Route::get('/asd', function () {
    return view('layouts.home');
//    return view('welcome');
});
Route::redirect('/anasayfa', 'home')->name('anasayfa');
Route::redirect('/', 'home')->name('anasayfa');

Route::get('/home', [HomeController::class, 'index']);


Route::get('logout', [HomeController::class, 'logout'])->name('logout');





Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware(\App\Http\Middleware\Authenticate::class);

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_login_check');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');

//profile
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');
    Route::get('/rents', [\App\Http\Controllers\UserController::class, 'getRents'])->name('myrents');

});




Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/cars/{id}/{slug}', [HomeController::class, 'cars'])->name('cars');
Route::get('/cardetail/{id}/{slug}', [HomeController::class, 'carDetail'])->name('cardetail');
Route::get('/Acardetail/{id}/', [HomeController::class, 'AcarDetail'])->name('Acardetail');
Route::post('/getcar', [HomeController::class, 'getcar'])->name('getcar');
Route::get('/carlist/{search}', [HomeController::class, 'carlist'])->name('carlist');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/allcars', [HomeController::class, 'allcars'])->name('all_cars');



Route::post('/makereservation/{id}/{userid}', [HomeController::class, 'makeReservation'])->name('makereservation');


//User
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('userprofile');

    #Reservation
    Route::prefix('house')->group(function () {
        Route::get('/', [HouseController::class, 'index'])->name('user_house');
        Route::get('/create', [HouseController::class, 'create'])->name('user_house_add');
        Route::post('store', [HouseController::class, 'store'])->name('user_house_store');
        Route::get('edit/{id}', [HouseController::class, 'edit'])->name('user_house_edit');
        Route::post('update/{id}', [HouseController::class, 'update'])->name('user_house_update');
        Route::get('delete/{id}', [HouseController::class, 'destroy'])->name('user_house_delete');
        Route::get('show', [HouseController::class, 'show'])->name('user_house_show');
    });
    

});



Route::middleware('auth')->prefix('admin')->group(function () {
    

    #Admin Role
    Route::middleware('admin')->group(function () {
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
            Route::get('car_detail/{id}', [\App\Http\Controllers\Admin\CarController::class, 'car_detail'])->name('admin_car_detail');
        });

        #Car
        Route::prefix('reserved_cars')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('admin_reserved_car');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'edit'])->name('admin_reserved_car_edit');
            Route::post('update{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'update'])->name('admin_reserved_car_update');
            Route::get('delete/{id}/{car_id}', [\App\Http\Controllers\Admin\ReservationController::class, 'destroy'])->name('admin_reserved_car_delete');
        });

        #Car Image Gallery
        Route::prefix('image')->group(function () {
            Route::get('/create/{car_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{car_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{car_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });

        #Setting
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

        #Message
        Route::prefix('message')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
        });

        #Faq
        Route::prefix('faq')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
            Route::get('/create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');
        });

        #User
        Route::prefix('user')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::post('/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });

    });
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
