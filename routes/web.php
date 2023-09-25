<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::middleware('verify.shopify')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::view('/products','products')->name('products');
    Route::view('/settings','settings')->name('settings');
    Route::view('/customers','customers')->name('customers');
});


