@php
$printingServiceSubmenu=App\PrintingServices::orderBy('id','asc')->get();
@endphp

<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src= {{url('assets/img/logo/logo.png')}} alt="" style="width: 100px; height:120px">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->

<header>
    <!-- Header Start -->
   <div class="header-area">
        <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
               <div class="container-fluid row">
                   <div class="col-md-11">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="header-info-left">
                            <ul style="padding-left:55px;">     
                                <i class="fa fa-phone white-color"></i><li>+977-9860656974</li>
                                <i class="fa fa-envelope-square white-color"></i><li>quicktimeprintlink@gmail.com </li>
                            </ul>
                        </div>
                        <div class="header-info-right">
                            <ul>     
                                <li><i class="fa fa-clock white-color"></i> &nbsp; &nbsp;  Sat-Wed: 01- 4:00 / Closed on Weekends </li>
                            </ul>   
                        </div>
           
                     </div>
                   </div>

           
               </div>
            </div>
           <div class="header-bottom  header-sticky" style="height: 80px; background: #010b1d;">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-1 col-md-1 col-sm-2">
                            <div class="logo">
                            <a href="{{url('/')}}"><img src="{{url('assets/img/logo/logo.png')}}" alt="" style="height:80px; width:100px;;"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                                                                     
                                    <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="#">About Us</a>
                                            <ul class="submenu" style="width: 160px;">
                                                <li><a href="{{url('/ourintro')}}">Our Introduction</a></li>
                                                <li><a href="{{url('/ourteam')}}">Our Team</a></li>
                                               <!--  <li><a href="{{url('/career')}}">Careers</a></li>
 -->
                                            </ul>
                                        </li>
                                        <li><a href="#">Printing Services</a>
                                            <ul class="submenu" style="width: 170px;">
                                                @if($printingServiceSubmenu->isEmpty())
                                                    <li>
                                                        <a href="#">No data</a>
                                                    </li>
                                                @else
                                                @foreach($printingServiceSubmenu as $pss)
                                                <li>
                                                    <a href="{{url('/printing-services/')}}/{{implode('-',explode(' ',strtolower($pss->title)))}}">{{$pss->title}}</a>
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/designservice')}}">Design Services</a></li>
                                        <li><a href="{{url('/equipment')}}">Equipments</a></li>
                                        <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>