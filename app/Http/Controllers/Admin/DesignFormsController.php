<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DesignForms;
use Mail;

class DesignFormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'email'=>'required',
            'contact'=>'required',
            'website'=>'required',
            'message'=>'required'
        ]);
        {
            $designforms = new DesignForms();

            $designforms->name = $request -> input('name');
            $designforms->email = $request -> input('email');
            $designforms->contact = $request -> input('contact');
            $designforms->website = $request -> input('website');
            $designforms->message = $request -> input('message');

            $designforms->save();
            $designforms = DesignForms::all();

            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'contact' => $request->contact,
                'website' => $request->website,
                'bodyMessage' => $request->message,
            );
            Mail::send('Admin.view.form_email', $data, function($message) use ($data){
                $message->from($data ['email']);
                $message->to('anahdmoktan2073@gmail.com');
                $message->subject('Message');
                $message->subject($data['name']);
            });

            // Mail::send('Admin.view.form_email',
            // array(
            //     'name'=> $request->get('name'),
            //     'email' => $request->get('email'),
            //     'contact' => $request->get('contact'),
            //     'website' => $request->get('website'),
            //     'message' => $request->get('message'),
            // ), function($message) use ($request)
            //   {
            //      $message->from($request->email);
            //      $message->to('anahdmoktan2073@gmail.com');
            //   });


            return redirect('designservice')->with("success","You have submitted your information sucessfully.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
