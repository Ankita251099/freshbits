<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


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
Route::post('user-register', [RegistrationController::class, 'store'])->name('user-register');
Route::get('/forget-password', [ForgotPasswordController::class,'getEmail'])->name('get-email');
Route::post('/forget-password', [ForgotPasswordController::class,'postEmail']);
Route::get('/reset-password/{token}', 'ResetPasswordController@getPassword');
Route::post('/reset-password', 'ResetPasswordController@updatePassword');
Auth::routes();
Route::group(['middleware' =>'auth'],function(){
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');

Route::get('product/create', [ProductController::class,'create'])->name('product.create');
Route::post('product/add', [ProductController::class, 'store'])->name('product.add');
Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
});