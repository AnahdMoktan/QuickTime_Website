<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Homeslider;
use Storage;

class HomesliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.view.homeslider');
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
                'image'=>'required',
            ]);
            {
            
                $homeslider= new Homeslider();
        
                $homeslider->title = $request->input('title');
                
                if ($request->hasfile('image')) { 
                $file = $request->file('image');
                $filepath = $file->store('public/uploads/homeslider'); 
                $homeslider->image = $filepath;
             
                } 
                else{
                    return $request;
                    $highlights->image = '';
                } 
                
                $homeslider->save();
        
                return redirect('homeslider')->with("success", "File has been Uploaded Successfully!!.");
        
        
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
            $homeslider = Homeslider::all();
            return view('Admin.view.homeslider')->with('homesliders',$homeslider);
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
        //dd($request->all());
        $homeslider= Homeslider::find($id);
        $homeslider->title = $request->input('title');                
            if ($request->hasfile('image')) { 
                    $file = $request->file('image');
                    $filepath = $file->store('public/uploads/homeslider'); 
                    //dd($filepath);
                    $homeslider->image = $filepath;
                } 
                $homeslider->save();
                return redirect('homeslider')->with("update", "Your Content has been Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $homeslider = Homeslider::where('id',$id)->first();
        if(Storage::delete($homeslider->image)) {
              $homeslider->delete();
           }   
        return redirect('homeslider')->with('delete',"Your data has been Deleted!!");
}
}
