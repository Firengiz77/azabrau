<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;




// front routes
Route::name('front.')->group(function () {

// pages routes
    Route::get('/',[FrontController::class,'index'])->name('index');
    Route::get('/contact',[FrontController::class,'contact'])->name('contact');
    Route::get('/xeberler',[FrontController::class,'blog'])->name('blog');
    Route::get('/mehsullar',[FrontController::class,'shop'])->name('shop');
    Route::get('/xeberler/{slug}',[FrontController::class,'blog_single'])->name('blog_single');
});



