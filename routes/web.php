<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservisionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HouseServiceController;
use App\Http\Controllers\CleanServiceController;
use App\Http\Controllers\DeliveryServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PioController;
use App\Http\Controllers\chartController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\FriendController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about' /* this is path */ , function () { return view('about' ); });
Route::get('categoryService' /* this is path */ , function () { return view('admin/service/categoryService' ); });
Route::get('add_service' /* this is path */ , function () { return view('partner/add_service' ); });
// Route::get('notfound' /* this is path */ , function () { return view('notfound' ); });


Route::resource('friend' , FriendController::class);
Route::resource('likes' , LikeController::class);
Route::resource('address' , AddressController::class);
Route::resource('dashboard' , chartController::class);
Route::resource('reservision' , ReservisionController::class);
Route::resource('category' , CategoryController::class);
Route::resource('HouseService' , HouseServiceController::class);
Route::resource('CleanService' , CleanServiceController::class);
Route::resource('DeliveryService' , DeliveryServiceController::class);


// controller frined
// Route::controller(FriendController::class)->group(function(){
//     Route::resource('friend' , FriendController::class);
// });

// controller message
Route::controller(ProfileController::class)->group(function(){
    Route::get('userProfile', 'show')->name('userProfile');
    Route::resource('profile' , ProfileController::class);
});

// controller message
Route::controller(ServiceController::class)->group(function(){
    Route::get('seviceshow', 'allshow')->name('seviceshow');
    Route::resource('service' , ServiceController::class);
});

// controller message
Route::controller(PioController::class)->group(function(){
    Route::resource('pio', PioController::class);
});

// controller message
Route::controller(MassageController::class)->group(function(){
    Route::get('contact', 'create')->name('contact');
    Route::post('contact', 'store')->name('contact');
    Route::resource('massage', MassageController::class);
});

// Controller Posts
Route::controller(PostController::class)->group(function(){
    Route::resource('post', PostController::class);
    Route::get('posts', 'adminpost')->name('posts');
    Route::post('post', 'destroy')->name('post');
    Route::get('blog', 'create')->name('blog');
    Route::post('blog', 'store')->name('blog');
    Route::resource('blog', PostController::class);
});

// Controller Comment
Route::controller(CommentController::class)->group(function(){
    Route::get('comment', 'create')->name('comment');
    Route::post('comment', 'store')->name('comment');
    Route::resource('comment', CommentController::class);
});

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
