<?php

use App\Http\Controllers\CategoryController;
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
Route::get('contact' /* this is path */ , function () { return view('contact' );  });
Route::get('about' /* this is path */ , function () { return view('about' ); });
Route::get('service' /* this is path */ , function () { return view('service' ); });
Route::get('cart' /* this is path */ , function () { return view('cart' ); });
Route::get('dashboard' /* this is path */ , function () { return view('admin/dashboard' ); });
Route::get('profile' /* this is path */ , function () { return view('admin/profile' ); });
Route::get('blog' /* this is path */ , function () { return view('blog' ); });
Route::get('add_service' /* this is path */ , function () { return view('partner/add_service' ); });


Route::resource('category' , CategoryController::class);
Route::controller(users::class)->group(function(){
    Route::get('login', 'index')->name('login');
    Route::post('login', 'login')->name('go.login');
    Route::get('register', 'create')->name('register');
    Route::post('register', 'store')->name('register');
    Route::get('logout', 'destroy')->name('logout');
});