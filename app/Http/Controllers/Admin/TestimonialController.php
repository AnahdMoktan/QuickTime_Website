<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
use Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.view.testimonial');
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
            'name'=>'required',
            'designation'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);

        $testimonial = new Testimonial();
    
            $testimonial->name = $request->input('name');
            $testimonial->designation = $request->input('designation');
            $testimonial->description = $request->input('description');
            
            if ($request->hasfile('image')) { 
            $file = $request->file('image');

            $filepath = $file->store('public/uploads/testimonial'); 

            $testimonial->image = $filepath;
         
            } 
            else{
                return $request;
                $testimonial->image = '';
            } 
            
            $testimonial->save();
    
            return redirect('testimonial')->with("success", "File has been Uploaded Successfully!!.");
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $testimonial = Testimonial::get();
        return view('Admin.view.testimonial')->with('testimonial',$testimonial);
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
            'name'=>'required',
            'designation'=>'required',
            'description'=>'required',
        ]);

        $testimonial = Testimonial::find($id);
    
            $testimonial->name = $request->input('name');
            $testimonial->designation = $request->input('designation');
            $testimonial->description = $request->input('description');
            
            if ($request->hasfile('image')) { 
            $file = $request->file('image');

            $filepath = $file->store('public/uploads/testimonial'); 

            $testimonial->image = $filepath;
         
            } 
           
            $testimonial->save();
    
            return redirect('testimonial')->with("update", "Your Content has been Updated Successfully");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        if(Storage::delete($testimonial->image)) {
              $testimonial->delete();
           } 
        return redirect('testimonial')->with('delete',"Your data has been Deleted!!");
    }
}
