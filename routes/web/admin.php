<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\ComidController;
use App\Http\Controllers\Admin\FetchController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\SettingController;

use App\Http\Controllers\Admin\TextdesController;

use App\Http\Controllers\Admin\SpotliteController;
use App\Http\Controllers\Admin\TrackingController;

/*
use App\Http\Controllers\Admin\GetwaypaymentController; */


Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/*
Route::get('/demo', [AdminController::class, 'admindemo'])->name('demo');
Route::get('/index', [AdminController::class, 'demoindex'])->name('index');
Route::get('/mysite', [AdminController::class, 'mysite'])->name('mysite');




Route::prefix('user')
->name('user.')->group(function () {
    Route::get('/createuser', [UserController::class, 'create'])->name('create');
    Route::put('/create', [UserController::class, 'store'])->name('store');
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('update');
    Route::put('/{id}/secret', [UserController::class, 'secret'])->name('secret');
    Route::delete('/', [UserController::class, 'destroy'])->name('destroy');
    Route::put('/{id}/status', [UserController::class, 'status'])->name('status');
    Route::put('/{id}/login', [UserController::class, 'login'])->name('login');
});
 */

/*
Verb          Path                        Action  Route Name
GET           /users                      index   users.index
GET           /users/create               create  users.create
POST          /users                      store   users.store
GET           /users/{user}               show    users.show
GET           /users/{user}/edit          edit    users.edit
PUT|PATCH     /users/{user}               update  users.update
DELETE        /users/{user}               destroy users.destroy

 */



Route::prefix('tracking')
->name('tracking.')->group(function () {

    Route::get('/', [TrackingController::class, 'index'])->name('index');
    Route::get('/create', [TrackingController::class, 'create'])->name('create');
    Route::post('/', [TrackingController::class, 'store'])->name('store');
    Route::get('/{id}', [TrackingController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [TrackingController::class, 'edit'])->name('edit');
    Route::put('/{id}', [TrackingController::class, 'update'])->name('update');
    Route::delete('/{id}', [TrackingController::class, 'destroy'])->name('destroy');
    Route::put('/{id}/status', [TrackingController::class, 'status'])->name('status');


});



Route::prefix('faq')
->name('faq.')->group(function () {
    Route::get('/indexfaq', [FaqController::class, 'index'])->name('index');
    Route::get('/create', [FaqController::class, 'create'])->name('create');
    Route::post('/', [FaqController::class, 'store'])->name('store');
    Route::get('/{id}', [FaqController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [FaqController::class, 'edit'])->name('edit');
    Route::put('/{id}', [FaqController::class, 'update'])->name('update');
    Route::delete('/{id}', [FaqController::class, 'destroy'])->name('destroy');

});


Route::prefix('page')
->name('page.')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/create', [PageController::class, 'create'])->name('create');
    Route::post('/', [PageController::class, 'store'])->name('store');
    Route::get('/{id}', [PageController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [PageController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PageController::class, 'update'])->name('update');
    Route::delete('/{id}', [PageController::class, 'destroy'])->name('destroy');
    Route::put('/{id}/status', [PageController::class, 'status'])->name('status');
});


Route::prefix('blog')
->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/create', [BlogController::class, 'create'])->name('create');
    Route::post('/', [BlogController::class, 'store'])->name('store');
    Route::get('/{id}', [BlogController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BlogController::class, 'update'])->name('update');
    Route::delete('/{id}', [BlogController::class, 'destroy'])->name('destroy');
});

Route::prefix('award')
->name('award.')->group(function () {
    Route::get('/', [AwardController::class, 'index'])->name('index');
    Route::get('/create', [AwardController::class, 'create'])->name('create');
    Route::post('/', [AwardController::class, 'store'])->name('store');
    Route::get('/{id}', [AwardController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [AwardController::class, 'edit'])->name('edit');
    Route::put('/{id}', [AwardController::class, 'update'])->name('update');
    Route::delete('/{id}', [AwardController::class, 'destroy'])->name('destroy');
});


Route::prefix('slider')
->name('slider.')->group(function () {
    Route::get('/', [SliderController::class, 'index'])->name('index');
    Route::get('/create', [SliderController::class, 'create'])->name('create');
    Route::post('/', [SliderController::class, 'store'])->name('store');
    Route::get('/{id}', [SliderController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [SliderController::class, 'edit'])->name('edit');
    Route::put('/{id}', [SliderController::class, 'update'])->name('update');
    Route::delete('/{id}', [SliderController::class, 'destroy'])->name('destroy');
    Route::put('/{id}/status', [SliderController::class, 'status'])->name('status');
});


Route::prefix('setting')
->name('setting.')->group(function () {
    Route::get('/logo_management', [SettingController::class, 'logo_management'])->name('logo_management');
    Route::put('/logo_management', [SettingController::class, 'update_logo'])->name('update_logo');

    Route::get('/all_management', [SettingController::class, 'all_management'])->name('all_management');
    Route::put('/all_management', [SettingController::class, 'update_management'])->name('update_management');

    Route::get('/txtdes_management', [TextdesController::class, 'index'])->name('txtdes_management');
    Route::get('/txtdes_management/{id}/edit', [TextdesController::class, 'edit'])->name('txtdes_management_edit');
    Route::put('/txtdes_management/{id}', [TextdesController::class, 'update'])->name('txtdes_management_update');


    Route::get('/laws', [SettingController::class, 'laws'])->name('laws');
    Route::put('/laws', [SettingController::class, 'update_laws'])->name('update_laws');

/*
    Route::get('/finical', [SettingController::class, 'finical'])->name('finical');
    Route::put('/finical', [SettingController::class, 'update_finical'])->name('update_finical');


    Route::get('/getway_payment', [GetwaypaymentController::class, 'index'])->name('getway_payment');
    Route::get('/getway_payment/{id}/edit', [GetwaypaymentController::class, 'edit'])->name('getway_payment_edit');
    Route::put('/getway_payment/{id}', [GetwaypaymentController::class, 'update'])->name('getway_payment_update');
    Route::put('/getway_payment/statuse/{status}/{id}', [GetwaypaymentController::class, 'status'])->name('getway_payment_status');
 */

});





Route::prefix('manegement')
->name('manegement.')->group(function () {


    Route::get('/spotlites', [SpotliteController::class, 'index'])->name('spotlites');
    Route::get('/spotlites/{id}/edit', [SpotliteController::class, 'edit'])->name('spotlites_edit');
    Route::put('/spotlites/{id}', [SpotliteController::class, 'update'])->name('spotlites_update');
    Route::put('/spotlites/{id}/status', [SpotliteController::class, 'status'])->name('spotlites_status');

/*
    Route::get('/comid/{status}'  , [ComidController::class, 'index'])->name('comid_index');
    Route::put('/comid/{status}'  , [ComidController::class, 'store'])->name('comid_store');
    Route::get('/comid/{status}/{id}/edit'  , [ComidController::class, 'edit'])->name('comid_edit');
    Route::put('/comid/{status}/{id}', [ComidController::class, 'update'])->name('comid_update');
    Route::delete('/comid/{status}/delete/{id}', [ComidController::class, 'destroy'])->name('comid_destroy');
    */

});



/*

Route::prefix('content')
->name('content.')->group(function () {
    Route::get('/webservice', [ContentController::class, 'index'])->name('index');
    Route::get('/webservice/{id}/edit', [ContentController::class, 'edit'])->name('edit');
    Route::put('/webservice/{id}', [ContentController::class, 'update'])->name('update');
});

Route::prefix('fetch')
->name('fetch.')->group(function () {
    Route::get('/font/{value}', [FetchController::class, 'font'])->name('font');
});
 */

