<!DOCTYPE html>
<html lang="en">

<head>
    <title>Career | Quick Time</title>
    @include('Client.parts.metacss')
    <link rel="stylesheet" href="{{ url('assets/css/career.css') }}">
   
</head>

<body>
    @include('Client.parts.header')
    <section>
        <div class="container-fluid top-header">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="centered">
                        <h1 style="color: white;">Career</h1>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                      </nav>
                    </div>
                </div>
            </div>
    
        </div>
    </section>

<section>
        <div class="container-fluid">
            <div class="row">
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

        @include('Client.parts.footer')

    @include('Client.parts.metajs')
</body>

</html>
