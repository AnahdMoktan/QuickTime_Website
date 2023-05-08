<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Equipment</title>
    @include('Client.parts.metacss')
    <style>
        html{
            scroll-behavior: smooth;
        }
       
#section1 {
  height: 500px;
  background-color: azure;
}

#section2 {
  height: 500px;
  background-color: azure;
}
#section3 {
  height: 500px;
  background-color: azure;
}
#section4 {
  height: 500px;
  background-color: azure;
}

    </style>
</head>
<body>
    @include('Client.parts.header')
    <section>
        <div class="container-fluid mr-0 top-header">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="centered">
                        <h1 style="color: white;">Equipments</h1>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Equipments</li>
                        </ol>
                      </nav>
                    </div>
                </div>
            </div>
    
        </div>
    </section>
   
    <section  style="padding-top: 25px;">
        <div class="container-fluid">
          @if($equipments->isEmpty())
               @include('Client.view.nodata')
          @else
            @foreach ($equipments as $i=>$eq)
              @if ($loop->even)
                <div class="row">
                    <div class="col-md-6 mr-0">
                      <img src="{{ url(implode('storage',explode('public',$eq['image']))) }}" alt="" style="width: 100%"; height="500px;">      
                    </div>
                    <div class="col-md-6">
                      <h5 style="font-size:25px; font-weight: bold;">{{ $eq->title }}</h5><br>
                      <p style="text-align:justify;">{!!$eq->description!!}</p>
                    </div>
                </div>
                @else
                <div class="row">
                  <div class="col-md-6">
                    <h5 style="font-size:25px; font-weight: bold;">{{ $eq->title }}</h5><br>
                    <p style="text-align:justify;">{!!$eq->description!!}</p>
                  </div>
                  <div class="col-md-6 mr-0">
                      <img src="{{ url(implode('storage',explode('public',$eq['image']))) }}" alt="" style="width: 100%"; height="500px;">  
                  </div>
                </div>
              @endif
            @endforeach
            @endif
        </div>  
    </section>
  
   
    
   
    <section style="padding-top: 25px;">

    @include('Client.parts.footer')
    </section>
    @include('Client.parts.metajs')
</body>
</html>

