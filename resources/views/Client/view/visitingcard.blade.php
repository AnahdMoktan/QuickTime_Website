<!DOCTYPE html>
<html lang="en">

<head>
    <title>Printing Services | {{$printingservices->title}}</title>
    @include('Client.parts.metacss')
    <style>
.slick-next:before, .slick-prev:before {

    color: #17a2b8 !important;
}
</style>


</head>
</head>

<body>
    
    @include('Client.parts.header')
    <section>
    <div class="container-fluid top-header">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="centered">
                        <h1 style="color: white;">{{$printingservices->title}}</h1>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">Printing Services</li>
                        </ol>
                      </nav>
                    </div>
                </div>
            </div>
    
        </div>
    </section>

    <section>
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="main mt-5">
                        <div class="slider slider-for">
                            @foreach (json_decode($printingImage[0]->image) as $pi)
                            <div>
                                <img src="{{ url(implode('storage',explode('public',$pi))) }}" alt=""
                                    style="height:450px; width:100%;">
                            </div>
                             @endforeach
                        </div>
                        <div class="slider slider-nav mt-3">
                            @foreach(json_decode($printingImage[0]->image) as $pi)
                            <div>
                                <img src="{{ url(implode('storage',explode('public',$pi))) }}" alt=""
                                    style="height:180px; width:200px;">
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                    <br>
                    <div>
                    <h4 style="font-weight:bold; text-align:left">Design Tips:</h4>
                    <p style="text-align:left">Resolution: 300 Dpi <br>
                        Color Mode: CMYK <br>
                        Supported File Format: PDF/JPG/TIFF/PSD</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                <h3 style="font-weight: 600; font-size: 35px; text-align: center;color: #fbad15;">{{ $printingservices->title }}</h3>
                    <p>{!! $printingservices->description !!}</p>
                        <form action="#" method="" enctype="multipart/form-data">
                    <div class="jumbotron">
                        <label for="" style="font-weight:bold;">Product Title:</label> 
                        <select name="" id="product" class="form-control" required>
                            @foreach($printingImage as $pt)
                            <option value="">{{$pt->title}}</option>
                            @endforeach
                        </select><br>

                        <label for="" style="font-weight:bold;">Category:</label> 
                        <select name="" id="category" class="form-control" required>
                            <option value="">Single Side</option>
                            <option value="">Double Side</option>
                        </select><br>
                        <label for="size" style="font-weight:bold;">Size:</label>
                        <input type="text" id="size" class="form-control" required >
                        <label for="color" style="font-weight:bold;">Color:</label>
                        <input type="text" id="color" class="form-control" required>
                        <label for="paper weight" style="font-weight:bold;">Paper Weight:</label>
                        <select class="form-control"  id="paperweight" required>
                            <option  value="">130gsm</option>
                            <option  value="">140gsm</option>
                            <option  value="">150gsm</option>
                            <option  value="">160gsm</option>
                            <option  value="">170gsm</option>
                        </select><br>
                        <label for="lamination" style="font-weight:bold;">Lamination:</label>
                        <select class="form-control" id="lamination" required>
                            <option  value="">gloss</option>
                            <option  value="">matt</option>
                            <option  value="">silk</option>
                        </select><br>
                        <label for="Requiredquantity" style="font-weight:bold;">Required Quantity:</label>
                         <input type="number" class="form-control" id="quantity" min="500" max="" required>
                        <i>
                            <p>Minimum 500 and maximum as per your demand  must have to order.</p>
                        </i><br>
                        <button class="btn btn-info btn-lg" data-toggle="modal" onclick="OnClickOrderNow()"
                            data-target="#MyModal">Order Now</button>
                            <script>
                                var category, size, color, paperweight, lamination, quantity, product;
                                function OnClickOrderNow(){
                                    category = document.getElementById('category').options[document.getElementById('category').selectedIndex].text;
                                    product = document.getElementById('product').options[document.getElementById('product').selectedIndex].text;
                                    size = document.getElementById('size').value;
                                    color = document.getElementById('color').value;
                                    paperweight = document.getElementById('paperweight').options[document.getElementById('paperweight').selectedIndex].text;
                                    lamination = document.getElementById('lamination').options[document.getElementById('lamination').selectedIndex].text;
                                    quantity = document.getElementById('quantity').value; 
                                    
                                }

                                function OnSubmit(){

                                    console.log('value category: '+ category ,'value size:' + size, 'value color:' + color, 
                                    'value lamination:' + lamination ,'value paper weight:' + paperweight, 'Quantity value:' + quantity);

                                    var name, company_name, address, contact, email, message;

                                    name = document.getElementById('name').value;
                                    company_name = document.getElementById('company_name').value;
                                    address = document.getElementById('address').value;
                                    contact = document.getElementById('contact').value;
                                    email = document.getElementById('email').value;
                                    message = document.getElementById('message').value;
                                    
                                    var _token = "{{session()->all()['_token']}}";
                                    console.log('name:' +name,'company_name:' +company_name, 'address:' +address, 'contact:' +contact,'email:' +email, 'message:' +message );

                                    post('visitingcard',{product: product,category: category,size: size,color: color,paperweight: paperweight,lamination: lamination,quantity: quantity
                                    ,name: name,company_name: company_name,address: address,contact: contact,email: email,message: message,_token: _token});
                                }
                                function post(path, params, method='post') {
                                    // The rest of this code assumes you are not using a library.
                                    // It can be made less wordy if you use one.
                                    const form = document.createElement('form');
                                    form.method = method;
                                    form.action = path;
                                    for (const key in params) {
                                        if (params.hasOwnProperty(key)) {
                                        const hiddenField = document.createElement('input');
                                        hiddenField.type = 'hidden';
                                        hiddenField.name = key;
                                        hiddenField.value = params[key];
                                        form.appendChild(hiddenField);
                                        }
                                    }
                                    document.body.appendChild(form);
                                    form.submit();
                                    }
                            </script>
                        <!-- Modal -->
                        <div class="modal fade" id="MyModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: burlywood;">
                                      <h4  class="modal-title ">Order Here</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body" style="background-color: rgb(205, 214, 221);">
                                            <div class="form-group">
                                                <label class="col-md-12 control-label">Name:</label>
                                                <div class="col-md-12 inputGroupContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-user"></i></span>
                                                        <input name="name" placeholder=" Your Name " class="form-control"
                                                            type="text" id="name" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            
                                            <div class="form-group">
                                                <label class="col-md-12 control-label">Company Name:</label>
                                                <div class="col-md-12 inputGroupContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-user"></i></span>
                                                        <input name="cname" placeholder="Company Name" class="form-control"
                                                            type="text" id="company_name">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-12 control-label">Address:</label>
                                                <div class="col-md-12 inputGroupContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-envelope"></i></span>
                                                        <input name="address" placeholder="Your Address"
                                                            class="form-control" type="text" id="address" required>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Text input-->

                                            <div class="form-group">
                                                <label class="col-md-12 control-label">Contact</label>
                                                <div class="col-md-12 inputGroupContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-earphone"></i></span>
                                                        <input name="contact" class="form-control" type="text" placeholder="+977" id="contact" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Text input-->

                                            <div class="form-group">
                                                <label class="col-md-12 control-label">E-mail:</label>
                                                <div class="col-md-12 inputGroupContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-home"></i></span>
                                                        <input name="email" placeholder="Your E-mail Address" class="form-control"
                                                            type="text" id="email" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Text input-->

                                            <div class="form-group">
                                                <label class="col-md-12 control-label">Message:</label>
                                                <div class="col-md-12 inputGroupContainer">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-home"></i></span>
                                                        <textarea name="message" id="message" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <button type="submit" class="btn-info" style="float: right;" onclick="OnSubmit()">Submit</button>

                                    </div>
                                    
                                </div>

                            </form>
                            </div>
                        </div>

    </section>
    </div>
    </div>
    @include('Client.parts.footer')
    @include('Client.parts.metajs')
   

    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            focusOnSelect: true
        });

        $('a[data-slide]').click(function (e) {
            e.preventDefault();
            var slideno = $(this).data('slide');
            $('.slider-nav').slick('slickGoTo', slideno - 1);
        });

    </script>

</body>

</html>
