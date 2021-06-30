<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MainController;

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

//Suppliers Route

//Customers Route

//Admin Authentication Routes

Route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check_credentials'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'admin_logout'])->name('auth.logout');
//Admin Routes


Route::group(['middleware'=>['AuthCheck']],function(){
    Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class,'register'])->name('auth.register');
    Route::get('/admin/dashboard',[MainController::class, 'dashboard'])->name('admin.dashboard');
    
    Route::resource('/customers', CustomerController::class);
    Route::resource('/suppliers', SupplierController::class);
});