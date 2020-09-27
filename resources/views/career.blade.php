<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Career</title>
    <style>
        .banner {
            background: url(https://p.w3layouts.com/demos/career/web/images/bg.jpg) no-repeat 0px 0px;
            background-size: 100%;
            min-height: 350px;
        }

        .banner-info {
            float: right;
            margin-top: 8%;
            text-align: right;
        }

        .banner-info h1 {
            color: #fff;
            background: #1A202C;
            padding: 19px 13px;
            text-transform: uppercase;
            font-size: 2.1em;
        }

        .banner-info h2 {
            color: #1A202C;
            background: #fff;
            padding: 19px 14px 15px 15px;
            text-transform: uppercase;
            display: inline-block;
            font-size: 1.7em;
        }

        .content {
            padding-top: 25px;
        }

        .content-left {
            padding: 0;
        }

        .content-left-top {
            background: #FFFFFF;
            padding: 40px;
            text-align: left;
        }

        .content-left-top h1 {
            color: #D13F31;
            text-transform: uppercase;
        }

        .content-left-top h3 {
            font-family: 'Droid Serif', serif;
            color: #2E817B;
            margin: 1em 0;
            font-size: 22px;
        }

        .content-left-top p {
            font-family: Arial, Helvetica, sans-serif;
            color: #030a01;
            font-size: 18px;
            line-height: 1.8em;
        }     
        /* modal_form_css   */
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);


body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 14px;    
	line-height:30px;
	color:rgb(143, 120, 120);
	background:#0CF;
}


#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
    background:#F9F9F9;
	padding: 25px;
	padding-top:25px;
}

#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 5px;
	width: 100%;
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

        

    </style>
    @include('Client.metacss')
</head>

<body>
    @include('Client.header')
    <section style="padding-top: 25px; background-color: azure;">
        <div class="container-fluid">
            <div class="banner">
                <div class="banner-info">
                    <h1>Carrer in our Company</h1>
                    <h2>For brighter future</h2>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="content">
                <div class="col-md-12 content-left">
                    <div class="content-left-top">
                        <h1>Let's team up and build carrer on our Company</h1>
                        <h3> “Work to become, not to acquire." —Elbert Hubbard </h3>
                        <p>We look for many qualities in the individuals we hire—the ability to communicate effectively,
                            a high level of organization, strong interpersonal skills, and so on. Regardless of an
                            applicant's qualifications, we always look for one attribute in particular—the desire to
                            provide high quality products with excellent customer service.

                            <br> can train people how to work with clients or run pieces of equipment, but to have
                            passion for customer service and pride for your work takes a unique individual.

                           <br> If these are qualities you possess, we're sure you'll find a rewarding career with us. We
                            supply our team with the latest technology, afford them the best training available, and
                            provide every opportunity for growth within our company.<p>
                                <button class="btn btn-primary">MORE INFO</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding-top: 25px;">
            <div class="content">
                <div class="col-md-12 content-left">
                    <div class="content-left-top">
            <h1>Customer Service Representative</h1>
                <p>  May 2018: Wanted, Experienced Customer Service Representative for Commercial Printer. <br>
                Come grow with us! We are looking for an experienced (min 3-5 years) client service/ support professional
                 to be part of our rapidly growing team on Chardobato, Banepa. MUST have experience in the print
                  and/or promotional products industry.</p> <br>
                 
                <br>
                <p style="color: rgb(235, 5, 63)"> If you are interested in submitting your resume to us clicking following button.</p>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Contact Us
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center" id="exampleModalLabel">Fill up your information</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
                <form id="contact" action="" method="post">
                  <fieldset>
                    <input placeholder="Your name" type="text" tabindex="1" required autofocus>
                  </fieldset>
                  <fieldset>
                    <input placeholder="Your Email Address" type="email" tabindex="2" required>
                  </fieldset>
                  <fieldset>
                    <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
                  </fieldset>
                  <fieldset>
                    <input placeholder="Your Web Site starts with http://" type="url" tabindex="4" required>
                  </fieldset>
                  <fieldset>
                    <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
                  </fieldset>
              
                </form>
        <button type="button" class="btn btn-primary" style="float: right;">Submit</button>

      </div>
    </div>
  </div>
        </div>
                </div>
            </div>

    </section>
    <section style="padding-top: 25px;">
        @include('Client.footer')
    </section>
    @include('Client.metajs')
</body>

</html>
