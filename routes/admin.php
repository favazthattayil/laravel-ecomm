<?php
use App\Http\Controller\User\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\loginController;
use App\Http\Controllers\Admin\dashboardcontroller;
use App\Http\Controllers\Admin\productController;

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

    Route::get('admin/login', [loginController::class,'login'])->name('login');
    Route::post('admin/do-login', [loginController::class,'doLogin'])->name('do.login');







    Route::middleware('auth:admin')->group(function (){
    Route::get('admin/logout', [loginController::class,'Logout'])->name('logout');
   

    Route::name('products.')->prefix('admin/products')->group(function (){
       Route::get('/', [productController::class,'list'])->name('list');
       Route::get('create', [productController::class,'create'])->name('create');
       Route::post('save', [productController::class,'save'])->name('save');
       Route::get('edit/{id}', [productController::class,'edit'])->name('edit');
       Route::post('update', [productController::class,'update'])->name('update');
       Route::get('delete/{id}', [productController::class,'delete'])->name('delete');

    });
});
});
