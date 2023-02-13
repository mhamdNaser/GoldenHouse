<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\users;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('home'); });
Route::get('home', function () { return view('home'); });
Route::get('about' /* this is path */ , function () { return view('about' ); });
Route::get('HomeService' /* this is path */ , function () { return view('HomeService' ); });
Route::get('cart' /* this is path */ , function () { return view('cart' ); });
Route::get('dashboard' /* this is path */ , function () { return view('admin/dashboard' ); });
Route::get('profile' /* this is path */ , function () { return view('admin/profile' ); });
Route::get('add_service' /* this is path */ , function () { return view('partner/add_service' ); });

Route::resource('service' , ServiceController::class);
Route::resource('category' , CategoryController::class);



// controller message
Route::controller(MassageController::class)->group(function(){
    Route::get('contact', 'create')->name('contact');
    Route::post('contact', 'store')->name('contact');
    Route::resource('massage', MassageController::class);
});

// Controller Posts
Route::controller(PostController::class)->group(function(){
    Route::get('blog', 'create')->name('blog');
    Route::post('blog', 'store')->name('blog');
    Route::resource('blog', PostController::class);
});

// Controller Comment
// Route::controller(CommentController::class)->group(function(){
//     Route::get('blog', 'create')->name('blog');
//     Route::post('blog', 'store')->name('blog');
//     Route::resource('blog', CommentController::class);
// });

// controler user
Route::controller(users::class)->group(function(){
    // for dashboard
    Route::resource('users', users::class);
    Route::get('add', 'add')->name('add');
    Route::post('add', 'save')->name('add');
    Route::get('edit', 'edit')->name('edit');
    // for login and register
    Route::get('login', 'register')->name('login');
    Route::post('login', 'login')->name('go.login');
    Route::get('register', 'create')->name('register');
    Route::post('register', 'store')->name('register');
    Route::get('logout', 'logout')->name('logout');
});
