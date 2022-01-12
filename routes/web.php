<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\CapchaController;

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
/*
Route::get('/', function () {
    return view('index.home.myindex');
});
 */
Route::get('/refresh-captcha', [CapchaController::class, 'refreshCaptcha']);

Route::name('index.')->group(function () {

    Route::get('/', [IndexController::class, 'index'])->name('home');
    Route::get('/service/{id}', [IndexController::class, 'service'])->name('service');
    Route::get('/faqs', [IndexController::class, 'faqs'])->name('faqs');
    Route::get('/contactus', [IndexController::class, 'contactus'])->name('contactus');
    Route::put('/contactus', [IndexController::class, 'store_contact'])->name('contact.store');
    Route::get('/tracking', [IndexController::class, 'tracking'])->name('tracking');
    Route::put('/tracking', [IndexController::class, 'tracking_result'])->name('tracking.result');
    Route::get('/blogs', [IndexController::class, 'blogs'])->name('blogs');
    Route::get('/blog/{id}', [IndexController::class, 'blog'])->name('blog');

});





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/demo', function () {
    return view('admin.faq.create');
});

Route::get('/metronic/demo', function () {
    // return view('admin.faq.create');

    return view('admin.faq.create');
})->name('metronic.dem');



Route::get('/mydashboard', [TestController::class, 'index'])->name('index.dem');



Route::namespace('Auth')->prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');
    });


 //Clear route cache
 Route::get('/route-cache', function() {
    Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache
Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'Config cache cleared';
});

// Clear application cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache cleared';
});

// Clear view cachee
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache cleared';
});

// Clear cache using reoptimized class
Route::get('/optimize-clear', function() {
    Artisan::call('optimize:clear');
    return 'View cache cleared';
});



 
