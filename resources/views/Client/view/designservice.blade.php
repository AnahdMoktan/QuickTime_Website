<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design Service</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    @include('Client.parts.metacss')
    <style>
       
        /* form */
        .ready{
            background-color: #010b1d;
            text-align: center;
        }
        fieldset{
            padding: 12px;
        }
        fieldset input{
            padding: 12px;
        }
        textarea{
            width: 405px;
        }
        .sub{
            width: 405px;
            padding: 12px;
            background-color: #010b1d;
            color: #f5f0f0;
            font-weight: bold;
            font-size: 18px;
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
.single-services-block_1 {
    padding:30px 30px;
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    text-align: center;
    overflow: hidden;
    position: relative;
    display: block;
    height: 360px;
    margin-bottom: 10px;
    transition: 0.6s;
}
.single-services-block_1 p{
    color: #f1e5e5;
    display: none;
}
.single-services-block_1:hover {
    color: #fff;
    background:rgb(50, 38, 90);
}

.single-services-block_1:hover h3 a {
    color: #fff;
    margin-top: 10px;
}
.single-services-block_1:hover p {
    display:block;
}
.single-services-block_1 i{
    top: 50%;
    left: 0%;
    transform: translate(0%, 50%);
    background: rgb(50, 38, 90);
    color: #fff;
    border-radius: 50%;
    height: 100px;
    width: 100px;
    font-size: 40px;
    line-height: 100px; 
    transition: 0.6s;
}
.single-services-block_1  h3 a {
    color: #f5f0f0;
    margin-bottom: 15px;
    margin-top: 80px;
    display: block;
    overflow: hidden;
    transition: 0.5s;
}

 .single-services-block_1:hover i{
    color: rgb(231, 229, 238);
    font-size: 30px;
    height: 80px;
    width: 80px;
    line-height: 80px;
    text-align: center;
    background: #bd0000;
    border-radius: 50%;
    top: 50%;
    left: 0%;
    transform: translateY(-20%);
    
} 




</style>
</head>

<body>
    @include('Client.parts.header')
    
        <div class="container-fluid top-header">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="centered">
                        <h1 style="color: white;">Design Services</h1>
                        <nav aria-label="breadcrumb">   
                            <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
        <section style="padding-top:20px;">
            <div class="container">
            <div class="row">
                <div class="col-md-8">
                     <img src="{{ url('assets/img/deign.jpg')}}" alt="" style="padding-left:10px; width:100%;">
                    <div class="safe-caption pt-10 mb-40">
                        <h2>We Serve Following Design Services</h2>
                        <p class="safe-pera-one">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        
                    </div>
                </div>
               
                {{-- form --}}
                <div class="col-md-4">
                    <div class="cta-container">
                        <div class="ready">
                        <h4 style="color: #ffff;">Ready to get started?</h4>
                        <p style="color: #ffff;">Contact us online or call us today!</p>
                        </div>
                   
                        <form id="contact" method="POST" action="{{ url('designservice') }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                           
                                <fieldset>
                                    <input placeholder="Your name" type="text" name="name" size="49" required>
                                </fieldset>
                                <fieldset>
                                    <input placeholder="Your Email Address" type="email" size="49" name="email" required>
                                </fieldset>
                                <fieldset>
                                    <input placeholder="Your Contact Number" size="49" type="tel" name="contact" required>
                                </fieldset>
                                <fieldset>
                                    <input placeholder="Your Web Site (optional)"  size="49" name="website" required>
                                </fieldset>
                                <fieldset>
                                    <textarea placeholder="Type your message here...." name="message" required></textarea>
                                </fieldset>
                                @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif


                                @if(session('success'))
                                    <div class="alert alert-success">
                                    {{ session('success') }}
                                    </div>
                                @endif
                                <fieldset>
                                    <button class="sub" type="submit">Submit</button>
                                </fieldset>
                            </form>
                    </div>
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
                    @if($designservices->isEmpty())
                        @include('Client.view.nodata')
                    @else
                        @foreach ($designservices as $ds)
                            @if($ds->title!='Design Services')
                            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="single-services-block_1 blur-bg" style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('{{ url(implode('storage',explode('public',$ds['image']))) }}');background-repeat: no-repeat;background-size: cover;background-position: center;">
                                  <i class="fas fa-pencil-ruler"></i>
                                    <h3>
                                        <a href="{{url('/designservice//')}}/{{implode('-',explode(' ',strtolower($ds->title)))}}">{{$ds->title}}</a>
                                    </h3>
                                    <p>{!! substr($ds->description,0,150) !!}</p>
                                </div>
                            </div>
                            @endif   
                        @endforeach
                    @endif
                  
                </div>
          </div>
    </section><!--/Services Area-->
      </div>
    </section>
     

    <section style="padding-top: 20px;">
        @include('Client.parts.footer')
    </section>
    @include('Client.parts..metajs')
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