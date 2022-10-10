<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SalesPointController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PagesController;




Route::prefix('admin')->name('admin.')->group(function () {
    // admin user routes


    // slider routes
    Route::get('/slider',[SliderController::class,'index'])->name('slider');
    Route::get('/slider/edit/{id}',[SliderController::class,'edit'])->name('slider_edit');
    Route::post('/slider/add',[SliderController::class,'create'])->name('slider_add');
    Route::get('/sliders/add',[SliderController::class,'show'])->name('sliders_add');
    Route::post('/slider/update/{id}',[SliderController::class,'update'])->name('slider_update');
    Route::get('/slider/delete/{id}',[SliderController::class,'destroy'])->name('slider_delete');

  // Contact routes
  Route::get('/contact',[ContactController::class,'index'])->name('contact');
  Route::post('/contact/add',[ContactController::class,'create'])->name('contact_add');
  Route::post('/contact/update/{id}',[ContactController::class,'update'])->name('contact_update');
  Route::get('/contact/delete/{id}',[ContactController::class,'destroy'])->name('contact_delete');


   // Blog news routes
   Route::get('/news',[BlogController::class,'index'])->name('blog');
   Route::get('/news/add',[BlogController::class,'show'])->name('blogs_add');
   Route::get('/news/edit/{id}',[BlogController::class,'edit'])->name('blog_edit');
   Route::post('/news/add',[BlogController::class,'create'])->name('blog_add');
   Route::post('/news/update/{id}',[BlogController::class,'update'])->name('blog_update');
   Route::get('/news/delete/{id}',[BlogController::class,'destroy'])->name('blog_delete');
   
    // Category routes
    Route::get('/category',[CategoryController::class,'index'])->name('category');
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category_edit');
    Route::post('/category/add',[CategoryController::class,'create'])->name('category_add');
    Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category_update');
    Route::get('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category_delete');



        // sales_point routes
        Route::get('/sales_point',[SalesPointController::class,'index'])->name('sales_point');
        Route::get('/sales_point/edit/{id}',[SalesPointController::class,'edit'])->name('sales_edit');
        Route::post('/sales_point/add',[SalesPointController::class,'create'])->name('sales_add');
        Route::get('/sales_points/add',[SalesPointController::class,'show'])->name('sales_point_add');
        Route::post('/sales_point/update/{id}',[SalesPointController::class,'update'])->name('sales_update');
        Route::get('/sales_point/delete/{id}',[SalesPointController::class,'destroy'])->name('sales_delete');


         // product routes
    Route::get('/product',[ProductController::class,'index'])->name('product');
    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product_edit');
    Route::post('/product/add',[ProductController::class,'create'])->name('product_add');
    Route::get('/products/add',[ProductController::class,'show'])->name('products_add');
    Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product_update');
    Route::get('/product/delete/{id}',[ProductController::class,'destroy'])->name('product_delete');


   // pages routes
   Route::get('/page',[PagesController::class,'index'])->name('page');
   Route::get('/page/edit/{id}',[PagesController::class,'edit'])->name('page_edit');
   Route::post('/page/add',[PagesController::class,'create'])->name('page_add');
   Route::get('/pages/add',[PagesController::class,'show'])->name('pages_add');
   Route::post('/page/update/{id}',[PagesController::class,'update'])->name('page_update');
   Route::get('/page/delete/{id}',[PagesController::class,'destroy'])->name('page_delete');



 // Message routes
 Route::get('/messages',[MessageController::class,'index'])->name('message');
 Route::post('/messages/add',[MessageController::class,'create'])->name('message_add');
 Route::get('/messages/delete/{id}',[MessageController::class,'destroy'])->name('message_delete');

/* new routes */
});
