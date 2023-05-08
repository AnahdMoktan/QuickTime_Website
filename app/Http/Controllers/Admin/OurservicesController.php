<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\OurServices;
use Storage;

class OurservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.view.ourservices');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);
        {
        
            $ourservices= new OurServices();
    
            $ourservices->title = $request->input('title');
            $ourservices->description = $request->input('description');
            
            if ($request->hasfile('image')) { 
            $file = $request->file('image');

            $filepath = $file->store('public/uploads/ourservices'); 

            $ourservices->image = $filepath;
         
            } 
            else{
                return $request;
                $ourservices->image = '';
            } 
            
            $ourservices->save();
    
            return redirect('ourservices')->with("success", "File has been Uploaded Successfully!!.");
        }


    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $ourservices=OurServices::all();
        return view('Admin.view.ourservices')->with('ourservices',$ourservices);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);
        {
        
            $ourservices= OurServices:: find($id);
    
            $ourservices->title = $request->input('title');
            $ourservices->description = $request->input('description');
            
            if ($request->hasfile('image')) { 
            $file = $request->file('image');

            $filepath = $file->store('public/uploads/ourservices'); 

            $ourservices->image = $filepath;
         
            } 
            else{
                return $request;
                $ourservices->image = '';
            } 
            
            $ourservices->update();
    
            return redirect('ourservices')->with("update", "Your Content has been Updated Successfully");
    
    
        }


    
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ourservices=OurServices::where('id',$id)->first();
        if(Storage::delete($ourservices->image)) {
              $ourservices->delete();
           } 
        return redirect('ourservices')->with('delete',"Your data has been Deleted!!");
    }
}
