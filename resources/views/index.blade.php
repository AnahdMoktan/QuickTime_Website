<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Printing Company </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('Client.metacss')
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
        
        </style>
   </head>

   <body>
       
   @include('Client.header')
    <main>

        <!-- slider Area Start-->
        <div id="carouselExampleCaptions1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions1" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions1" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="height:600px" src="assets/img/printing/print1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1
                            style="color: white; font-weight: bold; text-shadow: black ;  padding-bottom: 190px; font-size: 95px">
                            OUR PRINTING PRESS</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="height:600px" src="assets/img/printing/print2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: white; font-weight: bold; padding-bottom: 190px; font-size: 95px">OUR PRINTING
                            PRESS</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="height:600px" src="assets/img/printing/print3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: white; font-weight: bold; padding-bottom: 190px; font-size: 95px">OUR PRINTING
                            PRESS</h1>

                    </div>
                </div>
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
        <div class="safe-industery-area pt-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md pr-0">
                        <div class="safe-caption pt-10 mb-40">
                            <h2>ABOUT OUR PRINTING </h2>
                            <p class="safe-pera-one">Logisti Group is a representative logistics operator providing full
                                range of service in the sphere of customs clearance and transportation worldwide for any
                                type of cargo.</p>
                            <p class="safe-pera-two">Lorem ipsum dolor sit amet, consectetur ipis adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna oris aliqua. Ut enim ad minim
                                veniam, quis nostrud.</p>
                            <p class="safe-pera-three"> exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                nsequat. Duis aute irure dolor in repr.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim ratione maiores minus
                                ipsam animi obcaecati minima dignissimos voluptas blanditiis sequi, maxime recusandae
                                repellat, consectetur,
                                quo laudantium et. Dicta doloremque fugiat velit nisi facere, aspernatur similique sint,
                                sed illum quaerat aliquam? Error tempore odio neque architecto laboriosam eligendi, eos
                                voluptate rerum.</p>
                            <!-- btn -->
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 pl-0">
                        <div class="safe-caption-right">
                            <div class="safe-img">
                                <img src="assets/img/safe_industery/safe_industery_1.jpg" alt="">
                            </div>
                            <!-- img TOP caption -->
                            <div class="safe-alert-box">
                                <div class="row">
                                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 d-none d-sm-block">

                                        <div class="safe-alert"
                                            data-background="assets/img/safe_industery/color_bg.png">
                                            <img src="assets/img/icon/aleart_icon.png" alt="">
                                            <h4>Our Mission</h4>
                                            <p>Quis ipsum suspendisse ultrices gravidae Risus commodo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-xs-12 col-md-12 text-center"><a href="industries.html" class="btn">Our Services</a>
        </div>
        <!-- Safe Industery End -->
        <!-- Gallery Start-->
        <div class="gallery-area pt-25">
            <div class="container-fluid ">
                <div class="row no-gutters">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="assets/img/gallery/gallery_1.png" alt="">
                                </div>
                                <div class="g-caption1">
                                    <span>01.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                </div>
                                <div class="g-caption2">
                                    <span>01.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur smo adipiscing elit, sed do eiusmod
                                        tempor inciut labore et dolore magna ali.</p>
                                    <a href="work.html" class="read-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="assets/img/gallery/gallery_2.png" alt="">
                                </div>
                                <div class="g-caption1">
                                    <span>02.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                </div>
                                <div class="g-caption2">
                                    <span>02.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur smo adipiscing elit, sed do eiusmod
                                        tempor inciut labore et dolore magna ali.</p>
                                    <a href="work.html" class="read-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="assets/img/gallery/gallery_3.png" alt="">
                                </div>
                                <div class="g-caption1">
                                    <span>03.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                </div>
                                <div class="g-caption2">
                                    <span>03.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur smo adipiscing elit, sed do eiusmod
                                        tempor inciut labore et dolore magna ali.</p>
                                    <a href="work.html" class="read-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="assets/img/gallery/gallery_2.png" alt="">
                                </div>
                                <div class="g-caption1">
                                    <span>04.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                </div>
                                <div class="g-caption2">
                                    <span>04.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur smo adipiscing elit, sed do eiusmod
                                        tempor inciut labore et dolore magna ali.</p>
                                    <a href="work.html" class="read-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End -->

        <!-- Services Area Start -->
        <div class="services-area d-flex justify-content-lg-between">
            <div class="single-services s-bg mb-30">
                <div class="services-icon">
                    <img src="assets/img/icon/services_icon_1.png" alt="">
                </div>
                <div class="services-caption">
                    <h4>Automotive Production</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.</p>
                </div>
                <div class="services-btn">
                    <a href="#" class="arrow-btn"><img src="assets/img/icon/arrow_icon.png" alt=""></a>
                </div>
            </div>
            <div class="single-services mb-30">
                <div class="services-icon">
                    <img src="assets/img/icon/services_icon_2.png" alt="">
                </div>
                <div class="services-caption">
                    <h4>Marketing Areas</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.</p>
                </div>
                <div class="services-btn">
                    <a href="#" class="arrow-btn"><img src="assets/img/icon/arrow_icon.png" alt=""></a>
                </div>
            </div>
            <div class="single-services s-bg mb-30">
                <div class="services-icon">
                    <img src="assets/img/icon/services_icon_3.png" alt="">
                </div>
                <div class="services-caption">
                    <h4>Production analysis</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.</p>
                </div>
                <div class="services-btn">
                    <a href="#" class="arrow-btn"><img src="assets/img/icon/arrow_icon.png" alt=""></a>
                </div>
            </div>
        </div>
        <!-- Services Area End -->

         <!-- Team Start -->
         <section class="container p-t-3">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style=" element.style :not(:disabled):not(.disabled) ;
                    cursor: pointer;
                
                    -moz-user-select: none;
                    background: #021a47;
                    border: medium none;
                    border-radius: 5px;
                    color: #fff;
                    cursor: pointer;
                    display: inline-block;
                    font-size: 20px;
                    font-weight: 500;
                    letter-spacing: 1px;
                    line-height: 0;
                    margin-top: 30px;
                    padding: 25px 22px;
                    text-align: center;
                    text-transform: capitalize;
                    touch-action: manipulation;
                    transition: all 0.3s ease 0s;
                    vertical-align: middle;
                    white-space: nowrap;
                    font-family: " Barlow", sans-serif; position: relative;">Our Team's Best Members</h1>
                </div>
            </div>
        </section>
        <section class="carousel slide" data-ride="carousel" id="postCarousel">
            <div class="container">
                <div class="row " style="padding-left: 15px">
                    <div class="col-xs-12 ">
                        <a class="button btn-outline-secondary prev" href="#postCarousel" title="go back"><i
                                class="fa fa-lg fa-chevron-left"></i></a>
                        <a class="button btn-outline-secondary next" href="#postCarousel" title="more"><i
                                class="fa fa-lg fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="container p-t-0 m-t-2 carousel-inner">
                <div class="row row-equal carousel-item active m-t-0">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/team/h1__team_1.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span><a href="#">Bruce Roberts</a></span>
                                <p>Team Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/team/h1__team_5.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span><a href="#">Bruce Roberts</a></span>
                                <p>Team Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/team/h1__team_4.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span><a href="#">Bruce Roberts</a></span>
                                <p>Team Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-equal carousel-item m-t-0">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/team/h1__team_3.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span><a href="#">Bruce Roberts</a></span>
                                <p>Team Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/team/h1__team_2.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span><a href="#">Bruce Roberts</a></span>
                                <p>Team Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/team/h1__team_5.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span><a href="#">Bruce Roberts</a></span>
                                <p>Team Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team End -->
        
        <!-- Testimonial Start -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial-area t-bg testimonial-padding">
                        <div class="container ">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-11 col-lg-11 col-md-9">
                                    <div class="h1-testimonial-active">
                                        <!-- Single Testimonial -->
                                        <div class="single-testimonial text-center">
                                            <!-- Testimonial Content -->
                                            <div class="testimonial-caption ">
                                                <div class="testimonial-top-cap">
                                                    <img src="assets/img/icon/testimonial.png" alt="">
                                                    <p>Logisti Group is a representative logistics operator providing
                                                        full range of ser
                                                        of customs clearance and transportation worl.</p>
                                                </div>
                                                <!-- founder -->
                                                <div
                                                    class="testimonial-founder d-flex align-items-center justify-content-center">
                                                    <div class="founder-img">
                                                        <img src="assets/img/testmonial/Homepage_testi.png" alt="">
                                                    </div>
                                                    <div class="founder-text">
                                                        <span>Jessya Inn</span>
                                                        <p>Co Founder</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Testimonial -->
                                        <div class="single-testimonial text-center">
                                            <!-- Testimonial Content -->
                                            <div class="testimonial-caption ">
                                                <div class="testimonial-top-cap">
                                                    <img src="assets/img/icon/testimonial.png" alt="">
                                                    <p>Logisti Group is a representative logistics operator providing
                                                        full range of ser
                                                        of customs clearance and transportation worl.</p>
                                                </div>
                                                <!-- founder -->
                                                <div
                                                    class="testimonial-founder d-flex align-items-center justify-content-center">
                                                    <div class="founder-img">
                                                        <img src="assets/img/testmonial/Homepage_testi.png" alt="">
                                                    </div>
                                                    <div class="founder-text">
                                                        <span>Jessya Inn</span>
                                                        <p>Co Founder</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/gallery/gallery_2.png" style="height:600px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/gallery/gallery_2.png" style="height:600px" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>  
        <!-- Testimonial End -->
        

       <!--Our Clients -->
       <div style="background-color: azure; padding-bottom: 25px">

        <section class="container p-t-3">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="
                element.style :not(:disabled):not(.disabled) ;
                    cursor: pointer;
                
                    -moz-user-select: none;
                    background: #021a47;
                    border: medium none;
                    border-radius: 5px;
                    color: #fff;
                    cursor: pointer;
                    display: inline-block;
                    font-size: 20px;
                    font-weight: 500;
                    letter-spacing: 1px;
                    line-height: 0;
                    margin-top: 30px;
                    padding: 25px 22px;
                    text-align: center;
                    text-transform: capitalize;
                    touch-action: manipulation;
                    transition: all 0.3s ease 0s;
                    vertical-align: middle;
                    white-space: nowrap;
                    font-family: " Barlow", sans-serif; position: relative;">Our Valuable Client Members</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/img/card/kavre.png" class="card-img-top" style="width: 80%">
                    &nbsp;&nbsp;&nbsp; <u><a href="#">kavreprintingpress.com</a></u>
                </div>
                <div class="col-md-3">

                    <img src="assets/img/card/sagar.png" class="card-img-top" style="width: 80%">

                    &nbsp;&nbsp;&nbsp;<u><a href="#">sagarprintingpress.com</a></u>

                </div>
                <div class="col-md-3">

                    <img src="assets/img/card/emerge.png" class="card-img-top" style="width: 80%">


                    &nbsp;&nbsp;&nbsp;<u><a href="#">emergeprintingpress.com</a></u>

                </div>
                <div class="col-md-3">

                    <img src="assets/img/card/trisakti.png" class="card-img-top" style="width: 80%">
                    &nbsp;&nbsp;&nbsp; <u><a href="#">trisaktiprintingpress.com</a></u>

                </div>
            </div>
            </div>
        </section>
       </div>

        <!-- Want To Work Start -->
        <div class="wantToWork-area w-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="wantToWork-caption">
                            <h2>Want To Work<br> With Us? Hit The Button.</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-4">
                       <div class="wantToWork-btn f-right">
                            <a href="#" class="white-btn">Let’s Work Toghter</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Want To Work End -->

    </main>
   @include('Client.footer')
   
    @include('Client.metajs')
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
        
    </body>
</html>