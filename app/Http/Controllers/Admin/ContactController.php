<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Crud;

class ContactController extends Controller
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
        $contacts = Contact::get();
        return view('admin.contact.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->crud->create('App\Models\Contact',$request);
        return redirect()->route('admin.contact')->with('message','Contact has been created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    { 
        $data = Contact::find($id);
     
        $data->phone = $request->phone;
        $data->phone_2 = $request->phone_2;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->fb_link = $request->fb_link;
        $data->wp_link = $request->wp_link;
        $data->insta_link = $request->insta_link;
        
        $data->save();


    return redirect()->route('admin.contact')->with('message','Contact has been edited successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->crud->delete('App\Models\Contact',$id);
        return redirect()->route('admin.contact')->with('message','Contact has been deleted successfully');
    }
}
