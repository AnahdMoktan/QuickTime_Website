<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Team</title>
    @include('Client.metacss')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic);

body {
    font-family: 'Source Sans Pro', sans-serif;
    line-height: 1.5;
    color: #323232;
    font-size: 15px;
    font-weight: 400;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}
.heading-title {
    margin-bottom: 30px;
}
.text-center {
    text-align: center;
}
.heading-title h3 {
    margin-bottom: 0;
    letter-spacing: 2px;
    font-weight: normal;
}
.p-top-30 {
    padding-top: 30px;
}
.half-txt {
    width: 60%;
    margin: 0 auto;
    display: inline-block;
    line-height: 25px;
    color: #7e7e7e;
}
.text-uppercase {
    text-transform: uppercase;
}

.team-member, .team-member .team-img {
    position: relative;
}
.team-member {
    overflow: hidden;
}
.team-member, .team-member .team-img {
    position: relative;
}

.team-hover {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: 0;
    border: 20px solid rgba(0, 0, 0, 0.1);
    background-color: rgba(255, 255, 255, 0.90);
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
.team-member:hover .team-hover .desk {
    top: 35%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .desk {
    position: absolute;
    top: 0%;
    width: 100%;
    opacity: 0;
    -webkit-transform: translateY(-55%);
    -ms-transform: translateY(-55%);
    transform: translateY(-55%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    padding: 0 20px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member:hover .team-hover .s-link {
    bottom: 10%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .s-link {
    position: absolute;
    bottom: 0;
    width: 100%;
    opacity: 0;
    text-align: center;
    -webkit-transform: translateY(45%);
    -ms-transform: translateY(45%);
    transform: translateY(45%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    font-size: 35px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member .s-link a {
    margin: 0 10px;
    color: #333;
    font-size: 16px;
}
.team-title {
    position: static;
    padding: 20px 0;
    display: inline-block;
    letter-spacing: 2px;
    width: 100%;
}
.team-title h5 {
    margin-bottom: 0px;
    display: block;
    text-transform: uppercase;
}
.team-title span {
    font-size: 12px;
    text-transform: uppercase;
    color: #a5a5a5;
    letter-spacing: 1px;
}
/* Team Member CSS 
===========================*/

.team-h1 {
  
  position: absolute;
  top: -16px;
  text-align: center;
 
  padding: 0px 20px;
 
}

.cf:before,
.cf:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.cf:after {
    clear: both;
}

/**
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */
.cf {
    *zoom: 1;
}

.team-container {
  max-width: 1000px;
  margin: auto;
  border-top: 1px #b61d1d solid;
  border-bottom: 1px#b61d1d solid;
  padding-top: 20px;
  padding-bottom: 20px;
  margin-top: 20px;  
  position: relative;
}

.team-members {
  width: 16%;
  float: left;
  text-align: center;
  margin-right: 5%;
}

.team-members:last-child {margin-right: 0;}


.team-members span,
.team-members h3 {
  max-width: 200px;
  font-family: sans-serif;
  letter-spacing: -1px;
}

.team-members h3 {
  color: #1CA3A3;
}

.email {
  color: #EA2678;
  
}

.team-members span {
  display: block;
 
}
.team-photo {
  border-radius: 50%;
  text-align: center;
  margin: auto;
  max-width: 100%;
  height: 150px;
  transition: 0.1s transform ease-in-out;
}


.team-photo:hover {
  transform: scale(0.9);
  cursor: pointer;
}


/* code for phone layout */
@media (max-width:850px){
  .team-members {
    width:25%;
    margin-left: 4%;
    margin-right: 4%;
    margin-bottom: 40px;
    
  }
  
}



@media (max-width:650px){
  .team-members {
    float: none;
    display: block;
    margin: 50px auto;
    width: 100%;
    text-align: center;
  }
  
  .team-member h3,
  .team-member span {
    margin: 15px auto;
  }
}


/* ENDS Team Member CSS 
===========================*/


    </style>
</head>
<body>
    @include('Client.header')
    <section>
        <div class="container-fluid" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.7)),url('assets/img/blog/blog_2.png');
    width: 100%; height: 300px; background-repeat:no-repeat;background-size:cover;">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="centered">
                        <h1 style="color: white;">Our Team</h1>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">About Us</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                        </ol>
                      </nav>
                    </div>
                </div>
            </div>
    
        </div>
    </section>
    <section style="padding-top: 25px; background-color: azure;">
        <div class="container">
            <div class="heading-title text-center">
                <h1 class="text-uppercase" style="font-family: Arial, Helvetica, sans-serif; font-weight: bolder;">Our professionals </h1>
            </div>

            <div class="row" style="padding-top: 10px;">
                <div class="col-md-4 col-sm-4">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="assets/img/team/team4.jpg" alt="team member" class="img-responsive" style="    height: 438px;
                            width: 100%;">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4>Hi There !</h4>
                                <p>I love to introduce myself as a hardcore Web Designer.</p>
                            </div>
                            <div class="s-link">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title">
                        <h5>Martin Smith</h5>
                        <span>founder &amp; ceo</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="https://image.freepik.com/free-photo/elegant-man-with-thumbs-up_1149-1595.jpg" alt="team member" class="img-responsive">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4>Hello World</h4>
                                <p>I love to introduce myself as a hardcore Web Designer.</p>
                            </div>
                            <div class="s-link">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title">
                        <h5>Franklin Harbet</h5>
                        <span>HR Manager</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="assets/img/team/team2.jpg" alt="team member" class="img-responsive" style="    height: 438px;
                            width: 100%;">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4>I love to design</h4>
                                <p>I love to introduce myself as a hardcore Web Designer.</p>
                            </div>
                            <div class="s-link">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title">
                        <h5>Linda Anderson</h5>
                        <span>Marketing Manager</span>
                    </div>
                </div>

            </div>

        </div>
        
    </section>
<!-- this section wraps the team members as a container-->

<section class="cf team-container">
    <h1 class="team-uppercase" style="font-family: Arial, Helvetica, sans-serif; font-weight: bolder; text-align:center;">Our Other Teams </h1>
  
      <!-- member-->  
      <div class="team-members">
        <img class="team-photo" src="assets/img/team/team2.jpg">
        <h3>Person's Name</h3>
        <span>This section could be used to show a very short bio description for each member</span>
        <a class="email" href="mailto:email@something.com"><span >email</span></a>
      </div>
  
  
      <!-- member-->
      <div class="team-members">
      <img class="team-photo" src="http://square-vn.com/app/dscms/assets/images/person-4.jpg?v=1495618120">
        <h3>Person's Name</h3>
        <span>This section could be used to show a very short bio description for each member</span>
         <a class="email" href="mailto:email@something.com"><span >email</span></a>
      </div>
  
  
      <!-- member-->
      <div class="team-members">
      <img class="team-photo" src="http://square-vn.com/app/dscms/assets/images/person-4.jpg?v=1495618120">
        <h3>Person's Name</h3>
        <span>This section could be used to show a very short bio description for each member</span>
        <a class="email" href="mailto:email@something.com"><span >email</span></a>
      </div> 
  
  
  
      <!-- member-->
      <div class="team-members">
      <img class="team-photo" src="http://square-vn.com/app/dscms/assets/images/person-4.jpg?v=1495618120">
        <h3>Person's Name</h3>
        <span>This section could be used to show a very short bio description for each member</span>
         <a class="email" href="mailto:email@something.com"><span >email</span></a>
      </div> 
  
  
      <!-- member-->
      <div class="team-members">
      <img class="team-photo" src="http://square-vn.com/app/dscms/assets/images/person-4.jpg?v=1495618120">
        <h3>Person's Name</h3>
        <span>This section could be used to show a very short bio description for each member</span>
         <a class="email" href="mailto:email@something.com"><span >email</span></a>
      </div> 
    
   </section>
    <section style="padding-top: 25px;">
        @include('Client.footer')
        </section>
        @include('Client.metajs')
    </body>
    </html>