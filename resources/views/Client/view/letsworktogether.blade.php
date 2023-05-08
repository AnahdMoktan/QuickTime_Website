<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('Client.parts.metacss')
    <title>Lets Work Together</title>
    <style>
.bg{
    background-image: url('assets/img/background/bg3.webp');
}

#clr {
  color: #010b1d;
  text-shadow: 0 4px 4px rgba(0, 0, 0, 0.2);
}

#contact {
  color: white;
  text-shadow: 0 4px 4px rgba(0, 0, 0, 0.2);
}
#logofooter3 {
  padding-left: 20px;
}
#logofooter3 {
  color: #372528;
  text-shadow: 0 4px 4px rgba(0, 0, 0, 0.2);
}

body{
  box-sizing: border-box;
}
aside{
  padding-left:20px;
}


textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #282e34;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

.container1 {
  border-radius: 5px;
  background-color:#010b1d;
  padding: 20px;
  width:40%;
  margin: auto;
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
#logofooter3{
  text-align:center;
  padding-bottom:80px
}

fieldset{
            padding: 12px;
        }
        fieldset input{
            padding: 12px;
            width: 473px;
        }
        textarea{
            width: 473px;
        }
        .sub{
            width: 473px;
            padding: 12px;
            background-color: #58ae55;
            color: #f5f0f0;
            font-weight: bold;
            font-size: 18px;
        }

    </style>
</head>
<body>
@include('Client.parts.header')
<body>
    <section class="bg">
    <!-- Contact form -->
    <aside style="text-align:center; padding-top:80px;">
      <h1 id="clr">LETS WORK TOGETHER</h1>
      <h4 id="contact">Feel free to contact us <em>info@emergeinfosys.com</em></h4>
  
    </aside>
    <form id="contact" method="POST" action="{{ url('letsworktogether') }}"
    enctype="multipart/form-data">
    {{ csrf_field() }}
      <div class="container1">
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
      </div>
    </form>
    
  <h4 id="logofooter3"><mark><code>emergeinfosys</code></mark>QuickTime Print Link</h4>
  
</section>
@include('Client.parts.footer')

@include('Client.parts.metajs')
</body>
</html>