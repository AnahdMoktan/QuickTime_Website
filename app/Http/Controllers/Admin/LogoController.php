<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Logo;
use Storage;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.view.logo');
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
            'link'=>'required',
            'image'=>'required'
        ]);

        $logo = new Logo();

        $logo->title = $request->input('title');
        $logo->link = $request->input('link');

        if ($request->hasfile('image')) { 
            $file = $request->file('image');

            $filepath = $file->store('public/uploads/homeslider'); 

            $logo->image = $filepath;
         
            } 
            else{
                return $request;
                $highlights->image = '';
            } 
            
            $logo->save();
    
            return redirect('logo')->with("success", "File has been Uploaded Successfully!!.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $logo = Logo::all();
        return view('Admin.view.logo')->with('logo',$logo);
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
            'link'=>'required',
            'image'=>'required'
        ]);

        $logo = Logo::find($id);

        $logo->title = $request->input('title');
        $logo->link = $request->input('link');

        if ($request->hasfile('image')) { 
            $file = $request->file('image');

            $filepath = $file->store('public/uploads/homeslider'); 

            $logo->image = $filepath;
         
            } 
            else{
                return $request;
                $highlights->image = '';
            } 
            
            $logo->update();
    
            return redirect('logo')->with("update", "Your Content has been Updated Successfully");   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logo = Logo::where('id',$id)->first();
        if(Storage::delete($logo->image)) {
              $logo->delete();
           } 
        return redirect('logo')->with('delete',"Your data has been Deleted!!");
    }
}
