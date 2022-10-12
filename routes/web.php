<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\App;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/filter',[FrontController::class,'filter'])->name('filter');
Route::get('/filter_all',[FrontController::class,'filter_all'])->name('filter_all');
Route::get('/en/filter',[FrontController::class,'filter'])->name('filter_en');
Route::get('/en/filter_all',[FrontController::class,'filter_all'])->name('filter_all_en');
Route::get('/ru/filter',[FrontController::class,'filter'])->name('filter_ru');
Route::get('/ru/filter_all',[FrontController::class,'filter_all'])->name('filter_all_ru');
Route::get('search',[FrontController::class, 'search']);



if(Request::segment(1) !== 'admin'){


    Route::get('/{locale}/lang', function ($locale) {
        App::setLocale($locale);
        Session::put('locale', $locale);
        return redirect()->back();
    });
    
    
    
    $lang = Request::segment(1);
    
    if(in_array($lang, ['az','en','ru'])){
        app()->setLocale($lang);
    }else{
        app()->setLocale('az');
    
        $lang = '';
    }
    
Route::get('/', function () {
        return redirect(app()->getLocale());
    });
    
    
Route::group([
        'prefix' => $lang
      ], function(){ 
        Route::get('/', [FrontController::class,'getPage'])->name('index');
        Route::get('/single', [FrontController::class,'getSinglePage'])->name('single');
        Route::get('{slug}/{project_slug?}', [FrontController::class,'getPage'])->name('single2');
        Route::get('{slug2}/{project_slug1?}/{project_slug2?}', [FrontController::class,'getPage'])->name('single3');
        });
    
Route::post('/sendmail2', [FrontController::class,'sendmail2'])->name('sendmail2');
    
}
