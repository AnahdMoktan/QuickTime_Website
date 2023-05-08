<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Team</title>
    @include('Client.parts.metacss')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       



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
    border: 15px solid rgb(186 228 247);
    background-color: rgb(185 228 247/0.8);
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
.team-member:hover .team-hover .desk {
    top: 50%;
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
    font-size: 25px;
    font-weight: 600;
    color: #000;
}
.desk span
{
  font-size: 15px;
    font-weight: 600;
    color: #000  
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



    </style>
</head>
<body>
    @include('Client.parts.header')
    <section>
        <div class="container-fluid top-header">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="centered">
                        <h1 style="color: white;">Our Team</h1>
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
    <section style="padding-top: 25px; background-color: azure;">
        <div class="container">
            <div class="heading-title text-center">
                <h1 class="text-uppercase" style="font-family: Arial, Helvetica, sans-serif; font-weight: bolder;">Our Team </h1>
            </div>

            <div class="row" style="padding-top: 10px;">
                @foreach ($ourteam as $ot)
                <div class="col-md-3 col-sm-3">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="{{ url(implode('storage',explode('public',$ot['image']))) }}" alt="team member" class="img-responsive" style="    height: 320px;
                            width: 100%;">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                            <h4>{{ $ot->name }}</h4>
                            <span>{{ $ot->designation }}</span>
                            </div>
                        </div>
                    </div>
            
                </div>   
                @endforeach

            </div>

        </div>
        
    </section>
<!-- this section wraps the team members as a container-->

{{-- <section class="cf team-container">
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
    
   </section> --}}
    <section style="padding-top: 25px;">
        @include('Client.parts.footer')
        </section>
        @include('Client.parts.metajs')
    </body>
    </html>