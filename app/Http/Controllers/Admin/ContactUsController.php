<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactUs;
use Mail;

class ContactUsController extends Controller
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
            'message'=>'required'
        ]);
        {
            $letswork = new ContactUs();

            $letswork->name = $request -> input('name');
            $letswork->email = $request -> input('email');
            $letswork->contact = $request -> input('contact');
            $letswork->message = $request -> input('message');

            $letswork->save();
            $letswork = ContactUs::all();

            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'contact' => $request->contact,
                'bodyMessage' => $request->message,
            );
            Mail::send('Admin.view.form2_email', $data, function($message) use ($data){
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


            return redirect('location')->with("success","Thank You for contactng Us.");
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
