<?php

namespace App\Http\Controllers\Admin;


use App\Models\Product;
use Illuminate\Http\Request;
use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Models\Category;



class ProductController extends Controller
{

    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $products = Product::get();
        return view('admin.product.index',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->crud->create('App\Models\Product',$request);

        return redirect()->route('admin.product')->with('message','Product has been created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $categories = Category::get();

        return view('admin.product.add',compact('categories'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //  $slider = Slider::where('id',$id)->first();
    $product =  $this->crud->edit('App\Models\Product',$id);
    $categories = Category::get();
    return view('admin.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$id)
    { 
        $data = Product::find($id);

       
        $data->name = $request->name;
        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->cesid = $request->cesid;
        $data->menseyi = $request->menseyi;
        $data->terkibi = $request->terkibi;
        $data->uygunluq = $request->uygunluq;
        $data->saxlama_formasi = $request->saxlama_formasi;
        $data->istehsal_il = $request->istehsal_il;
        $data->spirt = $request->spirt;
        $data->temp = $request->temp;
        $data->slug_az = $request->slug_az;
        $data->slug_ru = $request->slug_ru;
        $data->sifaris = $request->sifaris;

     

        $data->cat_id = $request->cat_id;

        if ($request->file('thumbnail')) {
            $file = $request->file('thumbnail');
            @unlink(public_path('/upload/product_images/') . $data->thumbnail);
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/upload/product_images'), $filename);
            $data['thumbnail'] = $filename;
        }
        $data->save();
         return redirect()->route('admin.product')->with('message','Product has been updated successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->crud->delete('App\Models\Product',$id);
        return redirect()->route('admin.product')->with('message','Product has been deleted successfully');
    }
}
