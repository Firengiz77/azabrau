<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Front\UserController;





Route::prefix('admin')->name('admin.')->group(function () {
    // admin user routes


    // slider routes
    Route::get('/slider',[SliderController::class,'index'])->name('slider');
    Route::get('/slider/edit/{id}',[SliderController::class,'edit'])->name('slider_edit');
    Route::post('/slider/add',[SliderController::class,'create'])->name('slider_add');
    Route::post('/slider/update/{id}',[SliderController::class,'update'])->name('slider_update');
    Route::get('/slider/delete/{id}',[SliderController::class,'destroy'])->name('slider_delete');

  // Contact routes
  Route::get('/contact',[ContactController::class,'index'])->name('contact');
  Route::post('/contact/add',[ContactController::class,'create'])->name('contact_add');
  Route::post('/contact/update/{id}',[ContactController::class,'update'])->name('contact_update');
  Route::get('/contact/delete/{id}',[ContactController::class,'destroy'])->name('contact_delete');

   // Blog routes
   Route::get('/news',[BlogController::class,'index'])->name('blog');
   Route::get('/news/add',[BlogController::class,'show'])->name('blogs_add');
   Route::get('/news/edit/{id}',[BlogController::class,'edit'])->name('blog_edit');
   Route::post('/news/add',[BlogController::class,'create'])->name('blog_add');
   Route::post('/news/update/{id}',[BlogController::class,'update'])->name('blog_update');
   Route::get('/news/delete/{id}',[BlogController::class,'destroy'])->name('blog_delete');

 // Message routes
 Route::get('/messages',[MessageController::class,'index'])->name('message');
 Route::post('/messages/add',[MessageController::class,'create'])->name('message_add');
 Route::get('/messages/delete/{id}',[MessageController::class,'destroy'])->name('message_delete');

/* new routes */
});