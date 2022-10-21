<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sales_Point;
use App\Http\Requests\StoreSales_PointRequest;
use App\Http\Requests\UpdateSales_PointRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Crud;

class SalesPointController extends Controller
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
        $sales_points = Sales_Point::get();
        return view('admin.sales_point.index',compact('sales_points'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->crud->create('App\Models\Sales_Point',$request);

        return redirect()->route('admin.sales_point')->with('message','Sales Point has been created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSales_PointRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSales_PointRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales_Point  $sales_Point
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.sales_point.add');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales_Point  $sales_Point
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //  $slider = Slider::where('id',$id)->first();
      $sales_point =  $this->crud->edit('App\Models\Sales_Point',$id);
        return view('admin.sales_point.edit',compact('sales_point'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSales_PointRequest  $request
     * @param  \App\Models\Sales_Point  $sales_Point
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$id)
    { 
        $data = Sales_Point::find($id);

        $data->address = $request->address;
        $data->name = $request->name;
        $data->phone_1 = $request->phone_1;
        $data->phone_2 = $request->phone_2;
        $data->txtLat = $request->txtLat;
        $data->txtLng = $request->txtLng;


        $data->save();
         return redirect()->route('admin.sales_point')->with('message','Sales Point has been created successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales_Point  $sales_Point
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->crud->delete('App\Models\Sales_Point',$id);
        return redirect()->route('admin.sales_point')->with('message','Sales Point has been deleted successfully');
    }
}
