<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PrintingServices;
use Storage;

class PrintingServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.view.printingservices');
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
        //dd($request->all());
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'images' => 'required|max:2048',
            'image.*' => 'mimes:jpg,jpeg,png,gif'
          ]);      
                  
          $printingservices= new PrintingServices;
    
          $printingservices->title = $request->title;
          $printingservices->description = $request->description;
          
          if($request->hasfile('images')){
                $data = array();
              foreach($request->file('images') as $file)
               {
                $filepath = $file->store('public/uploads/printingservices');                 
                array_push($data,$filepath);
                }
                $printingservices->image=json_encode($data);
            }

              $printingservices->save();
              return redirect('printingservices')->with("success", "File has been Uploaded Successfully!!.");
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $printingservices = PrintingServices:: all();
        return view('Admin.view.printingservices')->with('printingservices',$printingservices);
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
        // dd($request->all());
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'images' => 'required|max:100048',
            'image.*' => 'mimes:jpg,jpeg,png,gif'
          ]);      
                  
          $printingservices=PrintingServices::find($id);
    
          $printingservices->title = $request->title;
          $printingservices->description = $request->description;
          
          if($request->hasfile('images')){
                $data = array();
              foreach($request->file('images') as $file)
               {
                $filepath = $file->store('public/uploads/printingservices');                 
                array_push($data,$filepath);
                }
                $printingservices->image=json_encode($data);
            }

              $printingservices->update();
              return redirect('printingservices')->with("update", "Your Content has been Updated Successfully");
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $printingservices = PrintingServices::where('id',$id)->first();
        if(Storage::delete($printingservices->image)) {
              $printingservices->delete();
           } 
        return redirect('printingservices')->with('delete',"Your data has been Deleted!!");
    }
}
