<?php
use App\Http\Controller\User\HomepageController;
use App\Http\Controllers\authmanager;
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

Route::get('/', function () {
    return view('welcome');

});
// Uncomment this line if you want to use the controller method
// Route::get('/signin', 'App\Http\Controllers\AuthManager@signIn')->name('users.signin');

// OR use this line if you want to use the controller method with the correct class name
Route::get('/signin', [authmanager::class, 'signin'])->name('signin');
// Route::get('/'[authmanager::class,'homepage'])->name('homepage');
Route::post('/signin', [authmanager::class, 'signinPost'])->name('signin.Post');
Route::get('/signup', [authmanager::class, 'signup'])->name('signup');
Route::post('/signup', [authmanager::class, 'signupPost'])->name('signup.Post');
Route::get('/user_home', [authmanager::class, 'user_home'])->name('user_home');
// Route::post('/profile', [authmanager::class, 'profile'])->name('signup.Post');
Route::get('/orders', [authmanager::class, 'orders'])->name('orders');
Route::get('/address', [authmanager::class, 'address'])->name('address');
Route::get('user_home/cart', [authmanager::class, 'cart'])->name('use_home.cart');
Route::get('user_home/personalinfo', [authmanager::class, 'personalinfo'])->name('use_home.personalinfo');
