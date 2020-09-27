<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design Service</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
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
        /* form */
        .ready{
            background-color: #010b1d;
            text-align: center;
        }
        fieldset{
            padding: 10px;
        }
/* services */
.design-container{
  border-top: 1px #b61d1d solid;
  border-bottom: 1px#b61d1d solid;
  background-color: azure;
  
}


.section-padding {
    padding-top: 5px;
    padding-bottom: 35px;
}

.section-title {
    margin-bottom: 50px;
}


.section-title h2 {
    font-size: 40px;
    line-height: 45px;
    position: relative;
    margin-bottom: 20px;
  color: #f1e5e5;
  text-transform: capitalize;
}

.services-area {
  /* margin-bottom: -10px; */
}
.services-block  {
   padding-top: 10px;
}
.single-services-block_1,.single-services-block_2,.single-services-block_3{
padding-top: 10px;
} 
.single-services-block_1, .single-services-block_2, .single-services-block_3 {
    padding:30px 30px;
    background-color: #010b1d !important;
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    text-align: center;
    overflow: hidden;
    position: relative;
    display: block;
    height: 360px;
    margin-bottom: 10px;
}
.single-services-block_1 p, .single-services-block_2 p, .single-services-block_3 p {
    color: #f1e5e5;
}
.single-services-block_1:hover {
    background:url('assets/img/design/design1.jpg');
    color: #fff;
}
.single-services-block_2:hover {
    background:url('assets/img/design/design2.jpg');
    color: #fff;
}
.single-services-block_3:hover {
    background:url('assets/img/design/design3.jpg');
    color: #fff;
}
.single-services-block_1:hover h3 a,.single-services-block_2:hover h3 a,.single-services-block_3:hover h3 a {
    color: #fff;
    margin-top: 180px;
}
.single-services-block_1:hover p,.single-services-block_2:hover p,.single-services-block_3:hover p {
    display: none;
}
.single-services-block_1:hover i,.single-services-block_2:hover i,.single-services-block_3:hover i {
    top: 50%;
    left: 50%;
    transform: translate(-50%, -90%);
    background: rgb(50, 38, 90);
    color: #6b012d;
    height: 100px;
    width: 100px;
    font-size: 40px;
    line-height: 100px; 
}
.single-services-block_1  h3 a,.single-services-block_2  h3 a,.single-services-block_3 h3 a {
    color: #f5f0f0;
    margin-bottom: 15px;
    margin-top: 80px;
    display: block;
    overflow: hidden;
    transition: 0.5s;
}

.single-services-block_1 i,.single-services-block_2 i,.single-services-block_3 i {
    color: rgb(231, 229, 238);
    font-size: 50px;
    height: 140px;
    width: 140px;
    line-height: 170px;
    text-align: center;
    background: #bd0000;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: 50%;
    transform: translateX(-50%);
    transition: 0.6s;
}




    </style>
</head>
</head>

<body>
    @include('Client.header')
    
        <div class="container-fluid" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.7)),url('assets/img/design/design1.jpg');
  width: 100%; height: 300px; background-repeat:no-repeat;background-size:cover;">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="centered">
                        <h1 style="color: white;">Design Services</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Design Services </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
        <section style="padding-top:20px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/img/design/design2.jpg" alt="" style="padding-left:10px; width:100%;">
                </div>
                <div class="col-md-4">
                  <h3>Design Services</h3><br>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, veritatis animi corporis 
                    libero nesciunt non saepe blanditiis neque, consequuntur quaerat, nisi autem iusto maiores
                     natus delectus! Iure corrupti, sed aspernatur, beatae delectus itaque consectetur incidunt
                     at, quisquam quia ad.</p><br>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum sed ex quia, eum
                        voluptatibus ullam consectetur consequuntur debitis laborum sapiente. Veritatis asperiores 
                        ducimus quam maxime animi facere, cum qui quasi?</p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ducimus recusandae alias?
                         Quaerat sit beatae soluta accusamus repellat facilis possimus exercitationem. Pariatur,
                          iure. Eos atque quidem temporibus eius, laudantium mollitia aut consequatur at doloribus,
                           eaque autem, officiis aliquam reprehenderit exercitationem!</p>

                </div>
                {{-- form --}}
                <div class="col-md-4">
                    <div class="cta-container">
                        <div class="ready">
                        <h4 style="color: #ffff;">Ready to get started?</h4>
                        <p style="color: #ffff;">Contact us online or call us today!</p>
                        </div>
                   
                            <form id="contact" action="" method="post">
                           
                                <fieldset>
                                    <input placeholder="Your name" type="text" name="name" required>
                                </fieldset>
                                <fieldset>
                                    <input placeholder="Your Email Address" type="email" name="email" required>
                                </fieldset>
                                <fieldset>
                                    <input placeholder="Your Phone Number (optional)" type="tel" name="phone" required>
                                </fieldset>
                                <fieldset>
                                    <input placeholder="Your Web Site (optional)" type="url" name="website" required>
                                </fieldset>
                                <fieldset>
                                    <textarea placeholder="Type your message here...." name="message" required></textarea>
                                </fieldset>
                                <fieldset>
                                    <button name="submit" type="submit">Submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
            </div>
    </section>
    <section style="padding-top: 20px;">
      <div class="design-container">
        <section class="services-area section-padding">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="section-title text-center">
                          
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                      <div class="single-services-block_1">
                        <i class="fas fa-address-card"></i>
                          <h3><a href="#">Post Cards</a></h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="single-services-block_2">
                        <i class="fas fa-table"></i>
                          <h3><a href="#">Variable Data</a></h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
                      <div class="single-services-block_3">
                        <i class="fab fa-wpforms"></i>
                          <h3><a href="#">Business Form</a></h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                  </div>
              </div>
          </div>
      </section><!--/Services Area-->

      </div>
    </section>
    <section style="padding-top: 20px;">
        @include('Client.footer')
    </section>
    @include('Client.metajs')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>