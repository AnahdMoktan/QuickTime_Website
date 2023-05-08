<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Equipments;
use Storage;

class EquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.view.equipments');
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
        
            $equipments= new Equipments();
    
            $equipments->title = $request->input('title');
            $equipments->description = $request->input('description');
            
            if ($request->hasfile('image')) { 
            $file = $request->file('image');

            $filepath = $file->store('public/uploads/equipments'); 

            $equipments->image = $filepath;
         
            } 
            else{
                return $request;
                $equipments->image = '';
            } 
            
            $equipments->save();
    
            return redirect('equipments')->with("success", "File has been Uploaded Successfully!!.");
    
    
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
        $equipments= Equipments::all();
        return view('Admin.view.equipments')->with('equipments',$equipments);
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
        
            $equipments=Equipments::find($id);
    
            $equipments->title = $request->input('title');
            $equipments->description = $request->input('description');
            
            if ($request->hasfile('image')) { 
            $file = $request->file('image');

            $filepath = $file->store('public/uploads/equipments'); 

            $equipments->image = $filepath;
         
            } 
            else{
                return $request;
                $equipments->image = '';
            } 
            
            $equipments->update();
    
            return redirect('equipments')->with("update", "Your Content has been Updated Successfully");
    
    
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
        $equipments = Equipments::where('id',$id)->first();
        if(Storage::delete($equipments->image)) {
              $equipments->delete();
           } 
        return redirect('equipments')->with('delete',"Your data has been Deleted!!");
    }
}
