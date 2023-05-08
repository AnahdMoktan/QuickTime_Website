<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Quick Time</title>
    @include('Client.parts.metacss')
    <style>

        .bigger-smalls {
            width: 100%;
        }

        .slide {
            padding: 35px;
        }

        .visual {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size:cover;
        }

        .visual:before {
            display: block;
            height: 400px;
            width: 100%;
            content: '';
        }

        .slide p {
            font-family: Arial, Helvetica, sans-serif;
            color: #030a01;
            font-size: 18px;
            line-height: 1.8em;
        }

        .slide h2 {
            font-weight: bolder;
        }

    </style>
</head>

<body>
    @include('Client.parts.header')
    <section>
        <div class="container-fluid top-header" >
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="centered">
                        <h1 style="color: white;">Our Introduction</h1>
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
    <section class="section-padding2">
        <div class="container">
            <!-- <div class="row ">
                <div class="bigger-smalls">
                    @foreach ($ourintro as $intro)
                    <div class="slide">
                    <h2>{{ $intro->title }}</h2>
                    <p>{!! $intro->description !!}</p>
                    </div>
                    <div class="visual" style="background-image: url('{{implode('storage',explode('public',$intro['image']))}}')">
                    </div>  
                    @endforeach
                </div>
            </div> -->
            @foreach($ourintro as $i=>$about)
                @if($loop->even)
                    <div class="row mb-50">
                        <div class="col-md-6 col-sm-12 col-12">
                            <img src="{{implode('storage',explode('public',$about['image']))}}" style="width: 100%;height: auto;">
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <h3 style="font-weight: 600; font-size: 35px; text-align: center;color: #fbad15;">{{ $about->title }}</h3>
                            <p>{!! $about->description !!}</p>
                        </div>
                    </div>
                @else
                    <div class="row mb-50">
                        <div class="col-md-6 col-sm-12 col-12">
                            <h3 style="font-weight: 600; font-size: 35px; text-align: center;color: #fbad15;">{{ $about->title }}</h3>
                            <p>{!! $about->description !!}</p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <img src="{{implode('storage',explode('public',$about['image']))}}" style="width: 100%;height: auto;">
                        </div>
                    </div>
                @endif
            @endforeach        

        </div>
    </section>
    
        @include('Client.parts.footer')
        @include('Client.parts.metajs')
</body>

</html>
