@php
$printingServiceSubmenu=App\PrintingServices::orderBy('id','asc')->get();
$about=App\AboutUs::where('title','About Us')->first();
@endphp
<style>
    .footer-padding1{
        padding-top: 60px;
        padding-bottom: 50px;
    }
    .f-right1{
        display: block;
        float:left;
    }
   .lists{
        text-decoration: none;
        columns:2;
        -webkit-columns:2;
        -moz-columns:2;
    }
   .lists li a{
    text-decoration: none;
    font-weight:600 !important;
   }
   .f-left a{
    padding: 13px;
    color:#888888;
    font-size: 20px;
   }
   .f-left a:hover{
       color:#f27420;
   }

</style>
<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-bg footer-padding1">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <a href="{{url('/')}}"> <h4>Quick Time Print Link</h4></a>
                           <!--  <a href="index.html"><img src={{url('assets/img/logo/logo.png')}} alt="" style="height:150px; width:60%"></a> -->
                            <div class="footer-area">
                                 @if(!$about)
                                    @include('Client.view.nodata')
                                @else
                                <p style="color: #fff; margin-top:10px; text-align:justify;">
                                    {!!strip_tags(substr($about->description,0,250))!!}
                                    {{strlen($about->description)>250? "..." : " "}}
                                </p>
                                 <a href="{{url('/ourintro')}}"><button class="btn btn-primary">Read More</button></a>
                                 @endif
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle" style="text-align: left;">
                            <h4>Printing Services</h4>

                            <ul class="lists" >
                                @foreach($printingServiceSubmenu as $pss)
                            <li>
                                <a href="{{url('/printing-services/')}}/{{implode('-',explode(' ',strtolower($pss->title)))}}"><i class="fab fa-slack-hash mr-2"></i>{{$pss->title}}</a>
                            </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle" style="text-align: left;">
                            <h4>Contact Info</h4>
                            <ul>
                                <li>
                                <a href="">Address :&nbsp;Banepa, Chardobato</a>
                                </li>
                                <li><a href="#">Phone :&nbsp;+9979860656974</a></li>
                                <li><a href="#">Email :&nbsp;quicktimeprintlink@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="footer-social f-left">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom aera -->
    <div class="footer-bottom-area footer-bg">
        <div class="container">
            <div class="footer-border">
                 <div class="row d-flex justify-content-between align-items-center">
                     <div class="col-xl-10 col-lg-10 ">
                         <div class="footer-copy-right f-left">
                             <p>2020@Copyright QuickTime. All Rights Reserved. | Developed By <a href="#"> Emerge Infosys</a></p>
                         </div>
                     </div>
                     <div class="col-xl-2 col-lg-2">
                         <div class="footer-social f-right">
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href=""><i class="fab fa-instagram"></i></a>
                             <a href=""><i class="fab fa-linkedin"></i></a>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>