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
use App\Http\Requests\StoreMessageRequest;
use App\Models\Sales_Point;
use App\Models\Product;
use App\Models\Category;
use App\Helpers\Crud;
use Mail;


class FrontController extends Controller
{

    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }


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
            if(request()->segment(3) !== null || request()->segment(2) !== null){
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
        $page_single = Pages::where('id',8)->first();
        $page_product = Pages::where('id',9)->first();
        $slider1 = Slider::where('id',12)->first();
        $slider2 = Slider::where('id',11)->first();
        $page_about = Pages::where('id',4)->first();
        
        

        // $seos1 = Pages::where('on_off',0)->where('aca_stu',1)->get();
        // $pagescollection1 = PageResource::collection($seos1);
        // $pagess1 = $pagescollection1->toArray($seos1);

        // $feeds = Profile::where('username', 'tuttobellobaku')->first()->refreshFeed(4);
        $feeds = [];
        
            return view('front.page.' . $view,)->
            with([
            'pagess' => $pagess, 'page' => $page, 'slider2'=>$slider2,'slider1'=>$slider1,'page_about'=>$page_about,
            'route' => $route, 'current_slug' => $slug, 
            'current_route' => $current_route, 
            'page_id' => $page_id,
            "fallback"=>$fallback, 'project_slug'=>$project_slug,
            'feeds'=>$feeds, 'seos'=>$seos0,'contact'=>$contact,'page_single'=>$page_single,'page_product'=>$page_product
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



    public function sendmail2(Request $request2,StoreMessageRequest $request){
      
        $this->crud->create('App\Models\Message',$request2);
      
     
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
              
  return redirect()->back()->with('message','Message Send Successfully');

         
    
    }


    public function filter( Request $request){
        $id = $request->id;
        $data = $request->all();
        $checked = $request->input('orderCheck',[]);
        $products = Product::query();
        // $ids = Category::where('cat_id',9)->get()->pluck('id')->toArray();
        // return $ids;
        if($id) { 
            $products = $products->whereIn('cat_id',$id);
        }
        $view = view('front.widget.products')->with('products',$products->get());
      
        return collect([
         'html' => $view->render(),
     ]);


      //  return response()->json(['id'=>$id,'products'=>$products]);
    }

    public function filter_all( Request $request){
    
    
        $ids = Category::where('cat_id',$request->id)->get()->pluck('id')->toArray();
        
        $products = Product::whereIn('cat_id',$ids)->get();
        $view = view('front.widget.products', compact('products'));
      
      
        return collect([
         'html' => $view->render(),
     ]);


      //  return response()->json(['id'=>$id,'products'=>$products]);
    }

    public function search(){
        $search_text=$_GET['search_field'];
        $product = Product::where('name','LIKE','%'.$search_text.'%')->first();
        return view('front.page.search',compact('product')); 
    }





}
