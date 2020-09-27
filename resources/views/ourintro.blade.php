<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introduction</title>
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

 .bigger-smalls {
	 width: 100%;
}
 .slide {
	 padding: 35px;
}
 .visual {
	 background-attachment: fixed;
	 background-position: center center;
	 background-repeat: no-repeat;
     background-size: cover;
}
 .visual:before {
	 display: block;
	 height: 400px;
     width: 100%;
	 content: '';
}
 #visual-one {
	 background-image: url('assets/img/intro/intro2.jpg');
     width:100%;
}
 #visual-two {
	 background-image: url('assets/img/intro/intro1.jpg');
     width:100%;
}
#visual-three {
	 background-image: url('assets/img/intro/intro3.jpg');
     width:100%;
}
.slide p {
            font-family: Arial, Helvetica, sans-serif;
            color: #030a01;
            font-size: 18px;
            line-height: 1.8em;
        }       
.slide h2{
    font-weight:bolder;
}

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
                        <h1 style="color: white;">Our Introduction</h1>
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
    <section style="padding-top: 0px;">
        <div class="bigger-smalls">
            <div class="slide">
              <h2>Who We Are</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis urna leo, at sodales nisl. 
                  Nunc vel ligula sit amet magna malesuada tincidunt a in diam. Aliquam erat volutpat. Cras sodales
                   nec ipsum. Donec dui quam, vestibulum sit amet scelerisque a, viverra vitae lectus. Duis ac neque et 
                   orci vehicula scelerisque. Sed ultricies viverra dui nec lobortis. Phasellus quam ipsum, bibendum id
                    mollis eu, suscipit a sem. Nam vitae justo est.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis urna leo, at sodales nisl. 
                  Nunc vel ligula sit amet magna malesuada tincidunt a in diam. Aliquam erat volutpat. Cras sodales
                   commodo interdum. Ut id malesuada velit. Nullam nisl sapien, ornare non consectetur ut, porta nec
                    orci vehicula scelerisque. Sed ultricies viverra dui nec lobortis. Phasellus quam ipsum, bibendum 
                    id mollis eu, suscipit a sem. Nam vitae justo est.</p>
            </div>
            <div class="visual" id="visual-one">
              
            </div>
            <div class="slide">
              <h2>Our Mission and Objectives</h2>
              <p>Lorem ipsum dolor sit amet, c ligula sit amet magna malesuada tincidunt a in diam. Aliquam erat volutpat. Cras sodales commodo interdum. Ut id malesuada velit. Nullam nisl sapien, ornare non consectetur ut, porta nec ipsum. Donec dui quam, vestibulum sit amet scelerisque a, viverra vitae lectus. Duis ac neque et orci vehicula scelerisque. Sed ultricies viverra dui nec lobortis. Phasellus quam ipsum, bibendum id mollis eu, suscipit a sem. Nam vitae justo est.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis urna leo, at sodales nisl. Nunc vel ligula sit amet magna malesuada tincidunt a in diam. Aliquam erat volutpat. Cras sodales commodo interdum. Ut id malesuada velit. Nullam nisl sapien, ornare non consectetur ut, porta nec ipsum. Donec dui quam, vestibulum sit amet scelerisque a, viverra vitae lectus. Duis ac neque et orci vehicula scelerisque. Sed ultricies viverra dui nec lobortis. Phasellus quam ipsum, bibendum id mollis eu, suscipit a sem. Nam vitae justo est.</p>
            </div>
            <div class="visual" id="visual-two">
              
            </div>
            <div class="slide">
              <h2>Customer Satisfaction</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis urna leo, at sodales nisl. Nunc vel ligula sit amet magna malesuada tincidunt a in diam. Aliquam erat volutpat. Cras sodales commodo interdum. Ut id malesuada velit. Nullam nisl sapien, ornare non consectetur ut, porta nec ipsum. Donec dui quam, vestibulum sit amet scelerisque a, viverra vitae lectus. Duis ac neque et orci vehicula scelerisque. Sed ultricies viverra dui nec lobortis. Phasellus quam ipsum, bibendum id mollis eu, suscipit a sem. Nam vitae justo est.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis urna leo, at sodales nisl. Nunc vel ligula sit amet magna malesuada tincidunt a in diam. Aliquam erat volutpat. Cras sodales commodo interdum. Ut id malesuada velit. Nullam nisl sapien, ornare non consectetur ut, porta nec ipsum. Donec dui quam, vestibulum sit amet scelerisque a, viverra vitae lectus. Duis ac neque et orci vehicula scelerisque. Sed ultricies viverra dui nec lobortis. Phasellus quam ipsum, bibendum id mollis eu, suscipit a sem. Nam vitae justo est.</p>
            </div>
            <div class="visual" id="visual-three">

            </div>
            <div class="slide">
                <h2>Our History</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis urna leo, at sodales nisl. Nunc vel ligula sit amet magna malesuada tincidunt a in diam. Aliquam erat volutpat. Cras sodales commodo interdum. Ut id malesuada velit. Nullam nisl sapien, ornare non consectetur ut, porta nec ipsum. Donec dui quam, vestibulum sit amet scelerisque a, viverra vitae lectus. Duis ac neque et orci vehicula scelerisque. Sed ultricies viverra dui nec lobortis. Phasellus quam ipsum, bibendum id mollis eu, suscipit a sem. Nam vitae justo est.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis urna leo, at sodales nisl. Nunc vel ligula sit amet magna malesuada tincidunt a in diam. Aliquam erat volutpat. Cras sodales commodo interdum. Ut id malesuada velit. Nullam nisl sapien, ornare non consectetur ut, porta nec ipsum. Donec dui quam, vestibulum sit amet scelerisque a, viverra vitae lectus. Duis ac neque et orci vehicula scelerisque. Sed ultricies viverra dui nec lobortis. Phasellus quam ipsum, bibendum id mollis eu, suscipit a sem. Nam vitae justo est.</p>
            </div>
            </div>

    </section>
<section style="padding-top: 25px;">
@include('Client.footer')
</section>
@include('Client.metajs')
</body>
</html>