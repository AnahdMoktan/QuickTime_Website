<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Homeslider;
use App\AboutUs;
use App\OurServices;
use App\Dservices;
use App\Logo;
use App\Testimonial;
use App\OurIntroduction;
use App\OurTeams;
use App\Equipments;
use App\PrintingServices;
use App\DesignServices;
class PublicController extends Controller
{
    public function index()
    {
        $slider = Homeslider::orderBy('id','desc')->limit(6)->get();
        $aboutus = AboutUs::where('title','About Us')->first();
        $ourmission = AboutUs::where('title',"Our Mission")->first();
        $ourservices = OurServices::orderBy('id','desc')->limit(4)->get();
        $dservices = Dservices::orderBy('id','desc')->limit(3)->get();
        $testimonial = Testimonial::limit(5)->get(); 
        $printingServices =PrintingServices::orderBy('title','asc')->get();
        $logo = Logo::orderBy('id','desc')->limit(4)->get();
        $designService=DesignServices::orderBy('title','asc')->limit(6)->get();
        return view('Client.view.index')->with('homeSlider',$slider)->with('aboutus',$aboutus)->with('ourmission',$ourmission)
        ->with('ourservices',$ourservices)->with('no','1')->with('dservices',$dservices)->with('logo',$logo)->with('testimonial',$testimonial)->with('printingServices',$printingServices)->with('psno','1')->with('designService',$designService);
    }
    public function introduction()
    {
        $ourintro = AboutUs::orderBy('title','asc')->get();
        return view('Client.view.ourintro')->with('ourintro',$ourintro);
    }
    public function ourteam()
    {
        $ourteam = OurTeams::orderBy('id','asc')->limit(4)->get();
        return view('Client.view.ourteam')->with('ourteam',$ourteam);
    }
    public function equipments()
    {
        $equipments = Equipments::orderBy('id','desc')->limit(6)->get();
        return view('Client.view.equipment')->with('equipments',$equipments);    
    }
    public function getprintingservices($title)
    {
        $realsubmenu= implode(' ', explode('-',$title));
        $printingservices = PrintingServices::where('title',$realsubmenu)->first();
        $printingImage = PrintingServices::get();
    return view('Client.view.visitingcard')->with('printingservices',$printingservices)->with('printingImage',$printingImage);  
    }
    public function designservices(){
        $design=DesignServices::where('title','Design Services')->first();
        $designservices = DesignServices::orderBy('id','desc')->get();
        return view('Client.view.designservice')->with('designservices',$designservices)->with('design',$design);
    }

    public function getsingleDesignService($title)
    {
          $realsubmenu= implode(' ', explode('-',$title));
          $singledesignservices = DesignServices::where('title',$realsubmenu)->first();
          return view('Client.view.singleDesignService')->with('singledesignservices',$singledesignservices); 
    }
}

