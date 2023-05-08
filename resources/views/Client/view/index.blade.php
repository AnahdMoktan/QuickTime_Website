<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        
        <title>Printing Company </title>
        @include('Client.parts.metacss')
        <style>
            /* equal card height */
            .row-equal>div[class*='col-'] {
                display: flex;
                flex: 1 0 auto;
            }
        
            .row-equal .card {
                width: 100%;
            }
        
            /* ensure equal card height inside carousel */
            .carousel-inner>.row-equal.active,
            .carousel-inner>.row-equal.next,
            .carousel-inner>.row-equal.prev {
                display: flex;
            }
        
            /* prevent flicker during transition */
            .carousel-inner>.row-equal.active.left,
            .carousel-inner>.row-equal.active.right {
                opacity: 0.5;
                display: flex;
            }
        
        
            /* control image height */
            .card-img-top-250 {
                max-height: 250px;
                overflow: hidden;
            }
        
            .button {
                background: #021a47;
                border: medium none;
                border-radius: 5px;
                color: #fff;
                cursor: pointer;
                display: inline-block;
                font-size: 10px;
                font-weight: 500;
                letter-spacing: 1px;
                line-height: 0;
                margin-bottom: 5px;
                padding: 25px 22px;
                text-align: center;
                text-transform: capitalize;
                touch-action: manipulation;
                transition: all 0.3s ease 0s;
                vertical-align: middle;
                white-space: nowrap;
                font-family: "Barlow", sans-serif;
                position: relative;
            }
            .heading-title h1
            {
                font-size: 35px;
                font-weight: 600;
                text-transform: uppercase;
                background: #b9e4f8;
                color: #f27420;
                padding: 10px;
                border-radius: 10px;
                    box-shadow: 15px 7px 16px -2px #565656;
            }
            

        </style>
   </head>

   <body>       
   @include('Client.parts.header')
   
    <main>

        <!-- slider Area Start-->
        <div id="carouselExampleCaptions1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($homeSlider as $i=>$hs)
                @if ($i==0)
                <li data-target="#carouselExampleCaptions1" data-slide-to="0" class="active"></li>
                @else
                <li data-target="#carouselExampleCaptions1" data-slide-to="{{$i}}"></li>
                @endif
                @endforeach 
            </ol>
            <div class="carousel-inner">
                @foreach ($homeSlider as $i=>$hs)
                @if ($i==0)

                <div class="carousel-item active">
                <img style="height:550px;width: 100%;object-fit: cover;object-position: center;" src="{{str_replace('public/','storage/',$hs->image) }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: #fff; font-weight: bold; text-shadow: black ;font-size: 45px; background: rgba(0,0,0,0.6);padding:10px;">
                            {{$hs->title}}
                            </h1>
                    </div>
                </div>
                @else
                <div class="carousel-item">
                    <img style="height:550px;width: 100%;object-fit: cover;object-position: center;" src="{{str_replace('public/','storage/',$hs->image) }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: #fff; font-weight: bold; text-shadow: black ;font-size: 45px; background: rgba(0,0,0,0.6);padding:10px;"> {{$hs->title}}
                            </h1>
                    </div>
                </div>
                @endif
                @endforeach 
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- slider Area End-->
        <!-- Safe Industery Start -->
        <div class="safe-industery-area section-padding2">
            <div class="container">
                <div class="row">
                    @if(!$aboutus)
                    @include('Client.view.nodata')
                    @else
                    <div class="col-xl-6 col-lg-6 col-md-6 pr-0">
                        <div class="safe-caption pt-10 mb-40">
                            <h2>{{$aboutus->title}} </h2>
                            <p class="safe-pera-one">{!!strip_tags(substr($aboutus->description,0,600))!!}
                                {{strlen($aboutus->description)>600 ? "..." : "."}}
                            </p>
                            <!-- btn -->
                            <a href="{{url('/ourintro')}}"><button class="btn btn-primary">Read More</button></a> 
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 pl-0">
                        <div class="safe-caption-right">
                            <div class="safe-img">
                                <img src="{{ url(implode('storage',explode('public',$aboutus->image))) }}" alt="" style="height:500px;">
                            </div>
                            <!-- img TOP caption -->
                            <!-- <div class="safe-alert-box">
                                <div class="row">
                                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 d-none d-sm-block">
                                        <div class="safe-alert"
                                            data-background="assets/img/safe_industery/color_bg.png">
                                             @if(!$ourmission)
                                                <h1>Sorry No Data !!!</h1>
                                                <p>Data will be uploaded soon.</p>
                                            @else
                                            <h4>{{$ourmission->title}}</h4>
                                                <p>{!! substr($ourmission->description,0,100) !!}</p>
                                             @endif
                                        </div>
                                    </div>
                                   
                                </div>
                            </div> -->
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        </div>

        <!-- <section class="section-padding2 bg-light">
            <div class="gallery-area pt-15">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-12 text-center  mb-30">
                        <h1>Our Services</h1>
                    </div> 
                </div>
                <div class="row no-gutters">
                    @foreach ($ourservices as $os)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{ url(implode('storage',explode('public',$os['image']))) }}" alt="" style="height: 400px;">
                                </div>
                                <div class="g-caption1">
                                <span>{{$no++}}</span>
                                <h4>{{$os->title}}</h4>
                                </div>
                                <div class="g-caption2">
                                    
                                <h4>{{ $os->title }}</h4>
                                <p>{!!substr($os->description,0,100)!!}</p>
                                <a href="#" style="color: white;">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>                           
                    @endforeach
                </div>
            </div>
        </div>
        </section> -->
        

        <section class="section-padding2 bg-light">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4 text-center mb-30 heading-title">
                        <h1 >Printing Services</h1>
                    </div> 
                </div>
                <div class="row no-gutters gallery-area">
                    @if($printingServices->isEmpty())
                         @include('Client.view.nodata')
                    @else
                    @foreach ($printingServices as $ps)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{ url(implode('storage', explode('public', json_decode($ps->image)[0]))) }}" alt="" style="height: 400px;">
                                     
                                </div>
                                <div class="g-caption1">
                                <span>{{$psno++}}</span>
                                <h4>{{$ps->title}}</h4>
                                </div>
                                <div class="g-caption2">
                                <h4>{{ $ps->title }}</h4>
                                <p>{!!strip_tags(substr($ps->description,0,200))!!}
                                     {{strlen($ps->description)>200 ? "..." : "."}}
                                </p>
                                <a href="{{url('/printing-services/')}}/{{implode('-',explode(' ',strtolower($ps->title)))}}" class="btn btn-primary" >Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>                           
                    @endforeach 
                    @endif                         
                </div>
            </div>
        </section>
        <!-- Gallery End -->

        <!-- Services Area Start -->
        <section  class="section-padding2 ">
            <div class="container-fluid">
               <div class="row justify-content-center">
                    <div class="col-lg-4 text-center mb-30 heading-title">
                        <h1>Design Services</h1>
                    </div> 
                </div>
                <div class="row">
                    @if($designService->isEmpty())
                         @include('Client.view.nodata')
                    @else
                    <div class="services-area d-flex justify-content-lg-between">
                        @foreach ($designService as $ds)
                        <div class="single-services s-bg mb-30">
                            <div class="services-icon">
                                <img src="{{ url(implode('storage', explode('public', $ds['image']))) }}" alt="">
                            </div>
                            <div class="services-caption">
                            <h4>{{ $ds->title }}</h4>
                            <p>{!! strip_tags(substr($ds->description,0,250)) !!}
                                {{strlen($ds->description)>250?"..." : " "}}
                            </p>
                            </div>
                            <div class="services-btn">
                                 <a href="{{url('/designservice//')}}/{{implode('-',explode(' ',strtolower($ds->title)))}}"><button class="btn btn-primary">Read More</button></a> 
                               <!--  <a href="#" class="arrow-btn"><img src="assets/img/icon/arrow_icon.png" alt=""></a> -->
                            </div>
                        </div>               
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </section>
        
        <!-- Services Area End -->

        
        <!-- Testimonial Start -->
        <section class="section-padding2  t-bg">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4 text-center mb-30 heading-title">
                        <h1>Testimonial</h1>
                    </div> 
                </div>
                <div class="row">
                    @if($testimonial->isEmpty())
                         @include('Client.view.nodata')
                    @else
                    <div class="col-md-12">
                        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($testimonial as $i=>$ts)
                            @if ($i == 0)
                            <div class="carousel-item active">
                                <div class="testimonial-area t-bg testimonial-padding">
                                    <div class="h1-testimonial-active">
                                        <div class="single-testimonial text-center">
                                            <div class="testimonial-caption ">
                                                <div class="testimonial-top-cap">
                                                    <p>{!! $ts->description !!}</p>
                                                </div>
                                                <div
                                                    class="testimonial-founder d-flex align-items-center justify-content-center">
                                                    <div class="founder-img">
                                                    <img src="{{ url(implode('storage',explode('public',$ts['image']))) }}" alt="">
                                                    </div>
                                                    <div class="founder-text">
                                                    <span>{{ $ts->name }}</span>
                                                    <p style="text-align: center;">{{ $ts->designation }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Testimonial -->
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="carousel-item">
                                <div class="testimonial-area t-bg testimonial-padding">
                                    <div class="h1-testimonial">
                                        <div class="single-testimonial text-center">
                                            <div class="testimonial-caption ">
                                                <div class="testimonial-top-cap">
                                                    <p>{!! $ts->description !!}</p>
                                                </div>
                                                <div
                                                    class="testimonial-founder d-flex align-items-center justify-content-center">
                                                    <div class="founder-img">
                                                    <img src="{{ url(implode('storage',explode('public',$ts['image']))) }}" alt="">
                                                    </div>
                                                    <div class="founder-text">
                                                    <span>{{ $ts->name }}</span>
                                                    <p>{{ $ts->designation }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Testimonial -->
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach 
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    @endif
                    </div>
    
                </div>
            </div>
        </section>

                    
        
        <!-- Testimonial End -->

         <!-- Team Start -->

         <section class=" section-padding2" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 text-center mb-30 heading-title">
                        <h1>Our Clints</h1>
                    </div> 
                </div>
                <div class="owl-carousel owl-theme mt-50">
                      @if($logo->isEmpty())
                         @include('Client.view.nodata')
                    @else
                    @foreach($logo as $client)
                    <div class="item">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src=" {{ url(implode('storage',explode('public',$client['image']))) }}" alt="">
                            </div>
                            <div class="team-caption">
                                 <span><a href="{{$client->link}}" target="_blank">{{$client->title}}</a></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </section>
        


<!-- <section class="section-padding2" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 text-center mb-30 heading-title">
                <h1>Our Clints</h1>
            </div> 
        </div>
        <div class="row">
            @if($logo->isEmpty())
                @include('Client.view.nodata')
            @else
            @foreach ($logo as $lg)
            <div class="col-md-3 " >
            <img src=" {{ url(implode('storage',explode('public',$lg['image']))) }} " class="card-img-top" style="width: 100%;height: 150px;">
            <h2 class="mt-3">{{$lg->title}}</h2>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section> -->
            

        <!-- Want To Work Start -->
        <div class="wantToWork-area w-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="wantToWork-caption">
                            <h2>Want To Work<br> With Us Hit The Button.</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-4">
                       <div class="wantToWork-btn f-right">
                            <a href="{{url('/letsworktogether')}}" class="white-btn">Let’s Work Together</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Want To Work End -->

    </main>
   @include('Client.parts.footer')
   
    @include('Client.parts.metajs')
    <script>
        (function ($) {
            "use strict";

            // manual carousel controls
            $('.next').click(function () {
                $('.carousel').carousel('next');
                return false;
            });
            $('.prev').click(function () {
                $('.carousel').carousel('prev');
                return false;
            });

        })(jQuery);

    </script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
    loop:true,
    rtl:true,
    autoplay:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
    </script>
        
    </body>
</html>