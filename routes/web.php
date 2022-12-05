<?php

use App\Http\Controllers\CarftController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Models\Carft;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Cast;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Auth::routes();
Route::group(['prefix' => 'home'] , function () {
    Route::get('/',[HomeController::class,'list']);
    Route::get('/getProductByCat/{id}',[HomeController::class,'getProductByCat']);
    Route::get('view/{id}',[HomeController::class,'view']);


});
Route::group(['prefix'=> 'category'],function () {
    Route::get('/',[CategoryController::class,'list']);
    Route::get('create',[CategoryController::class,'create']);
    Route::post('store',[CategoryController::class,'store']);
    Route::get('delete/{id}',[CategoryController::class,'delete']);
    Route::get('update/{id}',[CategoryController::class,'update']);
    Route::post('edit/{id}',[CategoryController::class,'edit']);

});
Route::group(['prefix' => 'product'], function () {
    Route::get('/',[ProductController::class,'list']);
    Route::get('create',[ProductController::class,'create']);
    Route::post('store',[ProductController::class,'store']);
    Route::get('delete/{id}',[ProductController::class,'delete']);
    Route::get('update/{id}',[ProductController::class,'update']);
    Route::post('edit/{id}',[ProductController::class,'edit']);

});
Route::group(['prefix' => 'slider'] , function () {
Route::get('/',[SliderController::class,'list']);
Route::get('create',[SliderController::class,'create']);
Route::post('store',[SliderController::class,'store']);
Route::get('delete/{id}',[SliderController::class,'delete']);
Route::get('update/{id}',[SliderController::class,'update']);
Route::post('edit/{id}',[SliderController::class,'edit']);

});
Route::group(['prefix' => 'user'] ,function () {
    Route::get('/',[UserController::class,'list']);
    Route::get('delete/{id}',[UserController::class,'delete']);
    Route::get('update/{id}',[UserController::class,'update']);
    Route::post('edit/{id}',[UserController::class,'edit']);
});
Route::group(['prefix' => 'carft'],function(){
    Route::get('/',[CarftController::class,'list']);
    Route::get('create/{id}',[CarftController::class,'create']);
    Route::post('store',[CarftController::class,'store']);
    Route::get('delete/{id}',[CarftController::class,'delete']);

});

