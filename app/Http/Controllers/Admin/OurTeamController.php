<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\OurTeams;
use Storage;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.view.ourteams');
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
            'image'=>'required'

        ]);
        {
            $ourteams = new OurTeams();

            $ourteams->name=$request->input('name');
            $ourteams->designation=$request->input('designation');

            if($request -> hasfile('image')){
                $file=$request->file('image');

                $filepath= $file->store('public/uploads/ourteams');
                $ourteams->image=$filepath;
            }
            else{
                return $request;
                $ourteams->image= '';
            }
            $ourteams->save();

            return redirect('ourteams')->with("success", "File has been Uploaded Successfully!!.");

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
        $ourteams= OurTeams::all();
        return view('Admin.view.ourteams')->with('ourteams',$ourteams);
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
        ]);
        {
            $ourteams = OurTeams::find($id);

            $ourteams->name=$request->input('name');
            $ourteams->designation=$request->input('designation');

            if($request -> hasfile('image')){
                $file=$request->file('image');

                $filepath= $file->store('public/uploads/ourteams');
                $ourteams->image=$filepath;
            }
            
            $ourteams->update();

            return redirect('ourteams')->with("update", "Your Content has been Updated Successfully");

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
        $ourteams=OurTeams::where('id',$id)->first();
        if(Storage::delete($ourteams->image)) {
              $ourteams->delete();
           } 
        return redirect('ourteams')->with('delete',"Your data has been Deleted!!");
    }
}
