<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visiting Cards</title>

    @include('Client.metacss')
    <style>
                .container {
  position: relative;
  text-align: center;
 
}

.centered {                                                                 
  position: relative;
  top: 100%;
  /* left: 50%;
  transform: translate(-50%, -50%); */
}
    </style>


</head>
</head>

<body>
    
    @include('Client.header')
    <section>
        <div class="container-fluid" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.7)),url('assets/img/printing services/printing1.jpg');
    width: 100%; height: 300px; background-repeat:no-repeat;background-size:cover;">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="centered">
                        <h1 style="color: white;">Printing Services</h1>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item active" aria-current="page">Printing Services Title</li>
                        </ol>
                      </nav>
                    </div>
                </div>
            </div>
    
        </div>
    </section>

    <section style="  background-image: linear-gradient(to right, rgb(184, 78, 78) , rgb(253, 253, 100)); padding: 15px;">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="main">
                        <div class="slider slider-for">
                            <div><img src="assets/img/visitingcard/visiting1.jpg" alt=""
                                    style="height:450px; width:100%;"></div>
                            <div><img src="assets/img/visitingcard/visiting2.jpg" alt=""
                                    style="height:450px; width:100%;"></div>
                            <div><img src="assets/img/visitingcard/visiting3.jpg" alt=""
                                    style="height:450px; width:100%;"></div>
                            <div><img src="assets/img/visitingcard/visiting4.jpg" alt=""
                                    style="height:450px; width:100%;"></div>
                            <div><img src="assets/img/visitingcard/visiting5.jpg" alt=""
                                    style="height:450px; width:100%;"></div>
                        </div>
                        <div class="slider slider-nav mt-3">
                            <div><img src="assets/img/visitingcard/visiting1.jpg" alt=""
                                    style="height:180px; width:200px;"></div>
                            <div><img src="assets/img/visitingcard/visiting2.jpg" alt=""
                                    style="height:180px; width:200px;"></div>
                            <div><img src="assets/img/visitingcard/visiting3.jpg" alt=""
                                    style="height:180px; width:200px;"></div>
                            <div><img src="assets/img/visitingcard/visiting4.jpg" alt=""
                                    style="height:180px; width:200px;"></div>
                            <div><img src="assets/img/visitingcard/visiting5.jpg" alt=""
                                    style="height:180px; width:200px;"></div>
                        </div>
                    </div>
                    <br>
                    <h4 style="font weight:bold;">Design Tips:</h4><br>
                    <p>Resolution: 300 Dpi <br>
                        Color Mode: CMYK <br>
                        Supported File Format: PDF/JPG/TIFF/PSD</p>

                </div>
                <div class="col-md-6">
                    <h3>Printing Services Title</h3>
                    <p>Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Delectus itaque velit ipsa incidunt aliquam, u
                        t officia ratione excepturi nobis unde explicabo autem exercitationem officiis
                        aspernatur similique illo, pariatur quasi quibusdam? Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit. Porro sequi nihil molestiae quo veniam est
                        voluptatum! Quas facere quo earum.</p>
                    <div class="jumbotron">
                        <label for="" style="font-weight:bold;">Category:</label> &nbsp;&nbsp; <input type="radio"
                            name="single" value="single">
                        &nbsp;&nbsp;<label for="singleside">Single Side</label>
                        &nbsp;&nbsp;<input type="radio" id="female" name="double" value="double">
                        <label for="doubleside">Double Side</label><br>

                        <label for="size" style="font-weight:bold;">Size:</label><br>
                        <label for="color" style="font-weight:bold;">Color:</label><br>
                        <label for="paper weight" style="font-weight:bold;">Paper Weight:</label><br>
                        <label for="lamination" style="font-weight:bold;">Lamination:</label><br>
                        <label for="Requiredquantity" style="font-weight:bold;">Required Quantity:</label> &nbsp; <input
                            type="number"><br>
                        <i>
                            <p>Minimum 500 quantity must have to order.</p>
                        </i><br>
                        <button type="submit" class="btn btn-info btn-lg" data-toggle="modal"
                            data-target="#myModal">Order Now</button>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: burlywood;">
                                      <h4  class="modal-title ">Order Here</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body" style="background-color: rgb(205, 214, 221);">
                                        <form action="" method="POST" enctype="multipart/form-data">


                                            <div class="form-group">
                                                <label class="col-md-12 control-label">Name:</label>
                                                <div class="col-md-12 inputGroupContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-user"></i></span>
                                                        <input name="name" placeholder="First Name" class="form-control"
                                                            type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Text input-->

                                            <div class="form-group">
                                                <label class="col-md-12 control-label">Company Name:</label>
                                                <div class="col-md-12 inputGroupContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-user"></i></span>
                                                        <input name="cname" placeholder="Last Name" class="form-control"
                                                            type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label">Address:</label>
                                                <div class="col-md-12 inputGroupContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-envelope"></i></span>
                                                        <input name="address" placeholder="E-Mail Address"
                                                            class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Text input-->

                                            <div class="form-group">
                                                <label class="col-md-12 control-label">Contact</label>
                                                <div class="col-md-12 inputGroupContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-earphone"></i></span>
                                                        <input name="contact" class="form-control" type="text" placeholder="+977">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Text input-->

                                            <div class="form-group">
                                                <label class="col-md-12 control-label">E-mail:</label>
                                                <div class="col-md-12 inputGroupContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-home"></i></span>
                                                        <input name="email" placeholder="Address" class="form-control"
                                                            type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Text input-->

                                            <div class="form-group">
                                                <label class="col-md-12 control-label">Message:</label>
                                                <div class="col-md-12 inputGroupContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-home"></i></span>
                                                        <textarea name="message" id="" cols="40" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn-info" style="float: right;">Submit</button>
                                        </form>

                                    </div>
                                </div>


                            </div>
                        </div>
    </section>
    </div>
    </div>
    @include('Client.footer')
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>


    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            focusOnSelect: true
        });

        $('a[data-slide]').click(function (e) {
            e.preventDefault();
            var slideno = $(this).data('slide');
            $('.slider-nav').slick('slickGoTo', slideno - 1);
        });


//         $(document).ready(function() {
//     $('#contact_form').bootstrapValidator({
//         // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
//         feedbackIcons: {
//             valid: 'glyphicon glyphicon-ok',
//             invalid: 'glyphicon glyphicon-remove',
//             validating: 'glyphicon glyphicon-refresh'
//         },
//         fields: {
//             first_name: {
//                 validators: {
//                         stringLength: {
//                         min: 2,
//                     },
//                         notEmpty: {
//                         message: 'Please supply your first name'
//                     }
//                 }
//             },
//              last_name: {
//                 validators: {
//                      stringLength: {
//                         min: 2,
//                     },
//                     notEmpty: {
//                         message: 'Please supply your last name'
//                     }
//                 }
//             },
//             email: {
//                 validators: {
//                     notEmpty: {
//                         message: 'Please supply your email address'
//                     },
//                     emailAddress: {
//                         message: 'Please supply a valid email address'
//                     }
//                 }
//             },
//             phone: {
//                 validators: {
//                     notEmpty: {
//                         message: 'Please supply your phone number'
//                     },
//                     phone: {
//                         country: 'US',
//                         message: 'Please supply a vaild phone number with area code'
//                     }
//                 }
//             },
//             address: {
//                 validators: {
//                      stringLength: {
//                         min: 8,
//                     },
//                     notEmpty: {
//                         message: 'Please supply your street address'
//                     }
//                 }
//             },
//             city: {
//                 validators: {
//                      stringLength: {
//                         min: 4,
//                     },
//                     notEmpty: {
//                         message: 'Please supply your city'
//                     }
//                 }
//             },
//             state: {
//                 validators: {
//                     notEmpty: {
//                         message: 'Please select your state'
//                     }
//                 }
//             },
//             zip: {
//                 validators: {
//                     notEmpty: {
//                         message: 'Please supply your zip code'
//                     },
//                     zipCode: {
//                         country: 'US',
//                         message: 'Please supply a vaild zip code'
//                     }
//                 }
//             },
//             comment: {
//                 validators: {
//                       stringLength: {
//                         min: 10,
//                         max: 200,
//                         message:'Please enter at least 10 characters and no more than 200'
//                     },
//                     notEmpty: {
//                         message: 'Please supply a description of your project'
//                     }
//                     }
//                 }
//             }
//         })
//         .on('success.form.bv', function(e) {
//             $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
//                 $('#contact_form').data('bootstrapValidator').resetForm();

//             // Prevent form submission
//             e.preventDefault();

//             // Get the form instance
//             var $form = $(e.target);

//             // Get the BootstrapValidator instance
//             var bv = $form.data('bootstrapValidator');

//             // Use Ajax to submit form data
//             $.post($form.attr('action'), $form.serialize(), function(result) {
//                 console.log(result);
//             }, 'json');
//         });
// });


    </script>

</body>

</html>
