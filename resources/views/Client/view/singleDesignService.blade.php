<!DOCTYPE html>
<html lang="en">
<head>
    <title>Design Services | Quick Time</title>
    @include('Client.parts.metacss')

    </style>
</head>
<body>
    @include('Client.parts.header')
    <section>
        <div class="container-fluid mr-0 top-header" >
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="centered">
                        <h1 style="color: white;">{{$singledesignservices->title}}</h1>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                          <li class="breadcrumb-item" aria-current="page">
                            <a href="{{url('designservice')}}">Design Services</a>
                          </li>
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
          <div class="col-md-6">
            <img src="{{ url(implode('storage', explode('public', $singledesignservices['image']))) }}" alt="" style="width: 100%">
          </div> 

           <div class="col-md-6">
            <div class="safe-caption pt-10 mb-40">
                <h2>{{$singledesignservices->title}} </h2>
                <p class="safe-pera-one">{!!$singledesignservices->description!!}</p>
            </div>
          </div> 
        </div>
      </div>
    </section>
   

    @include('Client.parts.footer')
    @include('Client.parts.metajs')
</body>
</html>

