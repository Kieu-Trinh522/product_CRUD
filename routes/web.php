<?php

use App\Http\Controllers\ProductController;
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

Route::prefix('product')->group(function (){
    Route::get('/',[ProductController::class,'index'])->name('product.index');
    Route::get('/add',[ProductController::class,'create'])->name('product.create');
    Route::post('/add',[ProductController::class,'store'])->name('product.store');
    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/edit/{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('/delete/{id}',[ProductController::class,'destroy'])->name('product.destroy');
    Route::get('/search',[ProductController::class,'search'])->name('product.search');
    Route::post('/search',[ProductController::class,'getCitySearch'])->name('product.getCitySearch');

});
