<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('Client.view.index');
    }
    public function introduction(){
        return view('Client.view.ourintro');
    }
    public function ourteam(){
        return view('Client.view.ourteam');
    }
    public function equipment(){
        return view('Client.view.equipment');
    }
    public function career(){
        return view('Client.view.career');
    }
    public function visitingcard(){
        return view('Client.view.visitingcard');
    }
    public function designservice(){
        return view('Client.view.designservice');
    }
    public function location(){
        return view('Client.view.location');
    }
    public function letsworktogether(){
        return view('Client.view.letsworktogether');
    }
}
