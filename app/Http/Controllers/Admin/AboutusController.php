<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AboutUs;
use Storage;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.view.aboutus');
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
            'image'=>'required'
        ]);
        
        
            $aboutus= new AboutUs();          
            
            $aboutus->title = $request->input('title');
            $aboutus->description = $request->input('description');

            
            if ($request->hasfile('image')) { 
            $file = $request->file('image');

            $filepath = $file->store('public/uploads/aboutus'); 

            $aboutus->image = $filepath;
         
            } 
            else{
                return $request;
                $highlights->image = '';
            } 
            
            $aboutus->save();
    
            return redirect('aboutus')->with("success", "File has been Uploaded Successfully!!.");


    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $aboutus= AboutUs::all();
        return view('Admin.view.aboutus')->with('aboutus',$aboutus);
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
            'image'=>'required'
        ]);
        
        
            $aboutus = AboutUs::find($id);          
            
            $aboutus->title = $request->input('title');
            $aboutus->description = $request->input('description');

            
            if ($request->hasfile('image')) { 
            $file = $request->file('image');

            $filepath = $file->store('public/uploads/aboutus'); 

            $aboutus->image = $filepath;
         
            } 
            else{
                return $request;
                $highlights->image = '';
            } 
            
            $aboutus->save();
    
            return redirect('aboutus')->with("update", "Your Content has been Updated Successfully");

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutus = AboutUs::where('id',$id)->first();
        if(Storage::delete($aboutus->image)) {
              $aboutus->delete();
           }    
        return redirect('aboutus')->with('delete',"Your data has been Deleted!!");
    }
}
