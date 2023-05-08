<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dservices;
use Storage;

class DservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.view.dservices');
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

        $dservices = new Dservices();
    
            $dservices->title = $request->input('title');
            $dservices->description = $request->input('description');
            
            if ($request->hasfile('image')) { 
            $file = $request->file('image');

            $filepath = $file->store('public/uploads/dservices'); 

            $dservices->image = $filepath;
         
            } 
            else{
                return $request;
                $dservices->image = '';
            } 
            
            $dservices->save();
    
            return redirect('dservices')->with("success", "File has been Uploaded Successfully!!.");
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $dservices = Dservices::all();
        return view('Admin.view.dservices')->with('dservices',$dservices);
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

        $dservices = Dservices::find($id);
    
            $dservices->title = $request->input('title');
            $dservices->description = $request->input('description');
            
            if ($request->hasfile('image')) { 
            $file = $request->file('image');

            $filepath = $file->store('public/uploads/dservices'); 

            $dservices->image = $filepath;
         
            } 
            else{
                return $request;
                $dservices->image = '';
            } 
            
            $dservices->update();
    
            return redirect('dservices')->with("update", "Your Content has been Updated Successfully");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dservices = Dservices::where('id',$id)->first();
        if(Storage::delete($dservices->image)) {
              $dservices->delete();
           } 
        return redirect('dservices')->with('delete',"Your data has been Deleted!!");
    }
}
