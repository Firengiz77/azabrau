<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Crud;


class PagesController extends Controller
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
        $pages = Pages::get();
        return view('admin.pages.index',compact('pages'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->crud->create('App\Models\Pages',$request);

        return redirect()->route('admin.page')->with('message','Pages has been created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.pages.add');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
      //  $slider = Slider::where('id',$id)->first();
      $page =  $this->crud->edit('App\Models\Pages',$id);
        return view('admin.pages.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePagesRequest  $request
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$id)
    { 
        $data = Pages::find($id);

       
        $data->page_az = $request->page_az;
        $data->page_en = $request->page_en;
        $data->page_ru = $request->page_ru;

        $data->slug_az = $request->slug_az;
        $data->slug_en = $request->slug_en;
        $data->slug_ru = $request->slug_ru;

        $data->title_az = $request->title_az;
        $data->title_en = $request->title_en;
        $data->title_ru = $request->title_ru;

        $data->description_az = $request->description_az;
        $data->description_en = $request->description_en;
        $data->description_ru = $request->description_ru;

        $data->keywords_az = $request->keywords_az;
        $data->keywords_en = $request->keywords_en;
        $data->keywords_ru = $request->keywords_ru;

        $data->viewname = $request->viewname;
        $data->route = $request->route;
        $data->parent_id = $request->parent_id;
        $data->page_id = $request->page_id;

        if(!isset($request->on_off)){
            $data->on_off = 0;
        }else{
            $data->on_off = 1;
        }


        $data->save();
         return redirect()->route('admin.page')->with('message','Pages has been created successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->crud->delete('App\Models\Pages',$id);
        return redirect()->route('admin.page')->with('message','Pages has been deleted successfully');
    }
}
