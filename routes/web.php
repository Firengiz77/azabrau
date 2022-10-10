<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\App;



Route::get('/', function () {
    return view('welcome');
});


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

        });
    
Route::post('/sendmail2', [FrontController::class,'sendmail2'])->name('sendmail2');
    
}
