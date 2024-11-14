<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashblard;
use App\Http\Controllers\Shopping;

Route::get('/dashboard',[Dashblard::class,'index'])->middleware('auth');
Route::get('/products',[Dashblard::class,'products'])->name('products')->middleware('auth');
Route::post('/create_newproducts',[Dashblard::class,'create_newproducts'])->name('create_newproducts')->middleware('auth');
Route::get('/shoproductdata',[Dashblard::class,'shoproductdata'])->name('shoproductdata')->middleware('auth');
Route::get('/delete',[Dashblard::class,'delete'])->name('delete')->middleware('auth');

Route::get('/edit/{id}',[Dashblard::class,'edit'])->name('edit')->middleware('auth');
Route::get('/update',[Dashblard::class,'update'])->name('update')->middleware('auth');
Route::get('/showproduct_details',[Dashblard::class,'showproduct_details'])->name('showdet')->middleware('auth');
Route::post('/create_new_details',[Dashblard::class,'create_new_details'])->name('createnewdet')->middleware('auth');
/*
Route::get('/costumers',[Dashblard::class,'costumers'])->name('costumers')->middleware('auth');
Route::post('/create_costumers',[Dashblard::class,'create_costumers'])->name('create_costumers')->middleware('auth');
Route::get('/delete/{id}',[Dashblard::class,'deletecostumers'])->name('delete')->middleware('auth');
*/

Route::get('/showorders_details',[Dashblard::class,'showorders_details'])->name('showorders')->middleware('auth');
Route::post('/create_orders',[Dashblard::class,'create_orders'])->name('createorder')->middleware('auth');


/*Route::get('/shoproductdata',[Dashblard::class,'shoproductdata'])->name('shoproductdata')->middleware('auth');
Route::get('/delete',[Dashblard::class,'delete'])->name('delete')->middleware('auth');
*/


Route::get('/',[Shopping::class,'index'])->name('index');

Route::get('/menu',[Shopping::class,'menu'])->name('menu');
Route::get('/productdetails/{id}',[Shopping::class,'productdetails'])->name('proddet');
Route::get('/add_to_cart',[Shopping::class,'add_to_cart'])->name('add_to_cart');



Route::get('/reservations', [Shopping::class, 'reservations'])->name('shopping.reservations');
Route::post('/reservations', [Shopping::class, 'store'])->name('shopping.store');

Route::get('/dashboard/costumers', [Dashblard::class, 'costumers'])->name('dashboard.costumers');
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
