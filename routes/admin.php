<?php
use App\Http\Controller\User\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\loginController;
use App\Http\Controllers\Admin\dashboardcontroller;

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
Route::name('admin.')->group(function (){

Route::get('admin/login', [loginController::class,'login'])->name('users.signin');
Route::post('admin/do-login', [loginController::class,'doLogin'])->name('do.login');

Route::get('admin/dashboard', [dashboardcontroller::class,'dashboard'])->name('dashboard');
Route::get('admin/products', [productcontroller::class,'list'])->name('product.list');
});
