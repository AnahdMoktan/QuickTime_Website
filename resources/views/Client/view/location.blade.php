<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us | Quick Time Print Link </title>
    @include('Client.parts.metacss')
    <style type="text/css">
#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#bae4f7;
	padding:25px;
  height:530px;
}

#contact h3 {
	color: #0b1c39;
	display: block;
	font-size: 33px;
	font-weight: 600;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:16px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 8px;
  width: 100%;
  font-size: 18px;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
  background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}
.cir{
  background-color: #09C;
  color: white;
  font-size: 40px;
  border-radius: 50%;
  padding:15px;
}

       
    </style>
   </head>
</head>
<body>
    @include('Client.parts.header')
     <section>
          <div class="container-fluid top-header" >
              <div class="row justify-content-center">
                  <div class="col-md-3">
                      <div class="centered">
                          <h1 style="color: white;">Contact Us</h1>
                          <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                              </ol>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    <section class="section-padding2">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-center" style="font-weight: 600;">Contact Details</h2>
                <p class="text-center" style="color:rgb(1, 34, 4);">Feel free to contact us!!</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <i class="fa fa-envelope cir"></i>
                <p style="font-weight: 600; font-size: 24px; padding-top:10px;">
                  Email:
                </p><span>info@quicktime.com.np</span>
              </div>
              <div class="col-md-4">
                <i class="fa fa-location-arrow cir" aria-hidden="true"></i>
                <p style="font-weight: 600; font-size: 24px; padding-top:10px;">
                  Location:
                </p><span>VIP Marg, Kathmandu 44600</span>
              </div>
              <div class="col-md-4">
                <i class="fa fa-phone cir"></i>
                <p style="font-weight: 600; font-size: 24px; padding-top:10px;">
                  Contact:
                </p><span>+97714229739</span>
              </div>
            </div>

            <div class="row mt-50 mb-50">
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
                <div class="col-md-6">
                  <form id="contact" method="POST" action="{{ url('location') }}"
                  enctype="multipart/form-data">
                  {{ csrf_field() }}
                          <h3>Give Us Your Feedback!!</h3>
                          <h4>Contact us today, and get reply with in 24 hours!</h4>
                          <fieldset>
                            <input placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
                          </fieldset>
                          <fieldset>
                            <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
                          </fieldset>
                          <fieldset>
                            <input placeholder="Your Phone Number" type="tel" name="contact" tabindex="3" required>
                          </fieldset>
                          <fieldset>
                            <textarea placeholder="Type your Message Here...." name="message" tabindex="5" required></textarea>
                          </fieldset>
                          
                          <fieldset>
                            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                          </fieldset>
                        </form>
                    </div>
        
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2497.748982341961!2d85.32024264888453!3d27.706462876891074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb195b69b8f4f1%3A0x9b605ef745968f8!2sQuick%20Time%20print%20link!5e0!3m2!1sen!2snp!4v1607922367610!5m2!1sen!2snp" width="100%" height="530" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>

    
      @include('Client.parts.footer')

  
    @include('Client.parts.metajs')
</body>
</html>