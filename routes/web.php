<?php
use App\Http\Controller\User\HomepageController;
use App\Http\Controllers\authmanager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
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

// Route::get('/', function () {
//     return view('welcome');

// });
// Uncomment this line if you want to use the controller method
// Route::get('/signin', 'App\Http\Controllers\AuthManager@signIn')->name('users.signin');

// OR use this line if you want to use the controller method with the correct class name

Route::get('/', [authmanager::class, 'homepage'])->name('welcomehome');
Route::get('/signin', [authmanager::class, 'signin'])->name('signin');
// Route::get('/'[authmanager::class,'homepage'])->name('homepage');
Route::post('/signin', [authmanager::class, 'signinPost'])->name('signin.Post');
Route::get('/logout', [authmanager::class, 'logoutPost'])->name('logout.Post');
Route::get('/signup', [authmanager::class, 'signup'])->name('signup');
Route::post('/signup', [authmanager::class, 'signupPost'])->name('signup.Post');
Route::get('/user_home', [authmanager::class, 'user_home'])->name('user_home');
// Route::post('/profile', [authmanager::class, 'profile'])->name('signup.Post');
Route::get('/welcome', [authmanager::class, 'productlist'])->name('welcome');


// Route::get('/orders', [authmanager::class, 'orders'])->name('orders');
Route::get('/orders/selectaddress', [authmanager::class, 'selectaddress'])->name('selectaddress');
Route::post('/orders/checkout', [authmanager::class, 'checkout'])->name('checkout');
Route::post('/orders/confirm', [authmanager::class, 'confirmorder'])->name('confirmorder');


Route::get('/address', [authmanager::class, 'address'])->name('address');
// Route::post('/address', [AddressController::class, 'updateAddress'])->name('update.address');
Route::post('/address/update', [AddressController::class, 'updateAddress'])->name('update.address');
// Route::get('/address/delete {addressID}', [AddressController::class, 'deleteAddress'])->name('delete.address');
Route::get('/address/delete/{encryptedAddressID}', [AddressController::class, 'deleteAddress'])->name('delete.address');
Route::get('user_home/cart/delete/{id}', [authmanager::class, 'deletecart'])->name('delete.cart');



Route::get('/orders', [authmanager::class, 'showOrderDetails'])->name('orders');


Route::get('/productdetails{id}', [authmanager::class, 'productdetails'])->name('productdetails');



// Route::post('address/store', 'AddressController@store')->name('address.store');
// Route::post('/addresse', [AddressController::class, 'store'])->middleware('auth')->name('address.store');
Route::post('/address/store', [AddressController::class, 'store'])->middleware('auth')->name('address.store');

Route::get('/addresses', [AddressController::class, 'showAddresses'])->name('addresses');

Route::get('user_home/cart', [authmanager::class, 'cart'])->name('use_home.cart');
Route::post('user_home/addcart',[authmanager::class,'addcart'])->name('use_home.addcart');
// Route::get('/user_home/cart/{encryptedproductID}', [authmanager::class, 'deletecart'])->name('delete.cart');



Route::get('user_home/personalinfo', [authmanager::class, 'personalinfo'])->name('use_home.personalinfo');
Route::post('user_home/personalinfo', [authmanager::class, 'update'])->name('update');
