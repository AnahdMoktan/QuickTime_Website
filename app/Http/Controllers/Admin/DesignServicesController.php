<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DesignServices;
use Storage;

class DesignServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.view.designservices');
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        {
            $designservices = new DesignServices();

            $designservices->title = $request -> input('title');
            $designservices->description = $request -> input('description');

            if($request->hasfile('image')){
                $file = $request ->file('image');

                $filepath = $file-> store('public/uploads/designservices');
                $designservices->image = $filepath;
            }
            else{
                return $request;
                $designservices->image = ' ';
            }
            $designservices -> save();

            return redirect('designservices')->with("success", "File has been Uploaded Successfully!!.");

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
        $designservices = DesignServices::all();
        return view('Admin.view.designservices')->with('designservices',$designservices);
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
            'title' => 'required',
            'description' => 'required',
        ]);
        {
            $designservices = DesignServices::find($id);

            $designservices->title = $request -> input('title');
            $designservices->description = $request -> input('description');

            if($request->hasfile('image')){
                $file = $request ->file('image');

                $filepath = $file-> store('public/uploads/designservices');
                $designservices->image = $filepath;
            }
           
            $designservices -> update();

            return redirect('designservices')->with("update", "Your Content has been Updated Successfully");

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
        $designservices = DesignServices::where('id',$id)->first();
       if(Storage::delete($designservices->image)) {
              $designservices->delete();
           }
        return redirect('designservices')->with('delete',"Your data has been Deleted!!");
    }
}
