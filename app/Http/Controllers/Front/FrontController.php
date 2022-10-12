<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\Slider;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Pages;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\PageResource;
use App\Http\Request\StoreMessageRequest;
use App\Models\Sales_Point;

class FrontController extends Controller
{

    public function getPage( $slug = "/" , $project_slug = null,$project_slug2 = null,$project_slug1 = null)
    {
     
        $lang = App::getlocale();
        
        // $projects_page_slug = Seo::where('id', 1)->first();
        
        if ($lang == "en") {
            // $projects_page_slug = $projects_page_slug->slug_en;
            if(request()->segment(3) !== null){
                $page = Pages::where('slug_en',$slug)->latest()->first();
         }
         else{
            $page = Pages::where("slug_en", $slug)->first();
         }

           
        }
        else if ($lang == "ru") {
            // $projects_page_slug = $projects_page_slug->slug_ru;
         //   $page = Pages::where("slug_ru", $slug)->first();
            if(request()->segment(3) !== null){
                $page = Pages::where('slug_ru',$slug)->latest()->first();
         }
         else{
            $page = Pages::where("slug_ru", $slug)->first();
         }

        }
        else {
            // $projects_page_slug = $projects_page_slug->slug_az;
            if(request()->segment(3) !== null){
                $page = Pages::where('slug_az',$slug)->latest()->first();
         }
         else{
            $page = Pages::where("slug_az", $slug)->first();
         }
           
        }

        $view = $page['viewname'];
        $route = $page['route'];
        $current_route = Route::currentRouteName();
        if (empty($current_route)) {
            $current_route = $route;
        }
        if ($page['parent_id'] > 0) {
            $page_id = $page['parent_id'];
            $current_route = "#";
        } else {
            $page_id = $page['page_id'];
        }
        $fallback = config('app.locale');
        $seos0 = Pages::where('on_off',1)->orderBy('page_id','asc')->get();
        $pagescollection = PageResource::collection($seos0);
        $pagess = $pagescollection->toArray($seos0);
        $contact = Contact::first();
        $maps= Sales_Point::get();
        $page_single = Pages::where('id',8)->first();
        $page_product = Pages::where('id',9)->first();
        

        // $seos1 = Pages::where('on_off',0)->where('aca_stu',1)->get();
        // $pagescollection1 = PageResource::collection($seos1);
        // $pagess1 = $pagescollection1->toArray($seos1);

        // $feeds = Profile::where('username', 'tuttobellobaku')->first()->refreshFeed(4);
        $feeds = [];
        
            return view('front.page.' . $view,)->
            with([
            'pagess' => $pagess, 'page' => $page, 
            'route' => $route, 'current_slug' => $slug, 
            'current_route' => $current_route, 
            'page_id' => $page_id,
            "fallback"=>$fallback, 'project_slug'=>$project_slug,
            'feeds'=>$feeds, 'seos'=>$seos0,'contact'=>$contact,'maps'=>$maps,'page_single'=>$page_single,'page_product'=>$page_product
       ]);
    }


    public static function getChildPage($parent_id): array
    {
        $seos = Pages::where('parent_id', $parent_id)->get();
        $pagescollection = PageResource::collection($seos);
        $childPages = $pagescollection->toArray($seos);

        return $childPages;
    }

    public static function getParentPage($page_id): array
    {
        $seos = Pages::where('page_id', $page_id)->get();
        $pagescollection = PageResource::collection($seos);
        $parentPages = $pagescollection->toArray($seos);
        return $parentPages;
    }



    public function sendmail2(Request $request,StoreMessageRequest $request2){
      
        $valiator = $request2->validated();
        $messagess = Messages::create($request2->all());
        $messagess->save();

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'msj'=>'required',
            'surname'=>'required',
            'phone'=>'required',
       
        ]);
        $email='firengizsariyeva77@gmail.com'; 
        $array = [
           'name'=> $request->name,
           'email'=> $request->email, 
           'msj'=>$request->msj,
           'surname'=>$request->surname,
           'phone'=>$request->phone,
        ]; 
        Mail::send('front.sendmail', $array,  function ($message) use($email)  {
              $message->to( $email, 'Az Abrau');
              $message->subject('Az Abrau');

 
        });  
              
                return redirect()->back();
         
    
    }



}
