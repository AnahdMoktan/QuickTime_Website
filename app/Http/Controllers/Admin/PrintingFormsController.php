<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PrintingForm;
use Mail;

class PrintingFormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $printingOrder=PrintingForm::orderBy('id','desc')->get();
        return view('Admin.view.printingOrder')->with('printingOrder',$printingOrder)->with('no','1');
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
            'category'=>'required',
            'product'=>'required',
            'size'=>'required',
            'color'=>'required',
            'paperweight'=>'required',
            'lamination'=>'required',
            'quantity'=>'required',
            'name'=>'required',
            'company_name'=>'required',
            'address'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        {
            $printingforms = new PrintingForm;
            $printingforms->product = $request -> input('product');
            $printingforms->category = $request -> input('category');
            $printingforms->size = $request -> input('size');
            $printingforms->color = $request -> input('color');
            $printingforms->paperweight = $request -> input('paperweight');
            $printingforms->lamination = $request -> input('lamination');
            $printingforms->quantity = $request -> input('quantity');
            $printingforms->name = $request -> input('name');
            $printingforms->company_name = $request -> input('company_name');
            $printingforms->address = $request -> input('address');
            $printingforms->contact = $request -> input('contact');
            $printingforms->email = $request -> input('email');
            $printingforms->message = $request -> input('message');

            $printingforms->save();
            
            $printingforms = PrintingForm::all();
        
                    $data = array(
                        'category' => $request->category,
                        'product' => $request->product,
                        'size' => $request->size,
                        'color' => $request->color,
                        'paperweight' => $request->paperweight,
                        'lamination' => $request->lamination,
                        'quantity' => $request->quantity,
                        'name' => $request->name,
                        'company_name' => $request->company_name,
                        'address' => $request->address,
                        'contact' => $request->contact,
                        'email' => $request->email,
                        'bodyMessage' => $request->message,
                    );
                    Mail::send('Admin.view.printingform_email', $data, function($message) use ($data){
                        $message->from($data ['email']);
                        $message->to('anahdmoktan2073@gmail.com');
                        $message->subject('Message');
                        $message->subject($data['name']);
                    });
            return back()->with("success","Thank You for the submission.Our team will contact you soon");
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
