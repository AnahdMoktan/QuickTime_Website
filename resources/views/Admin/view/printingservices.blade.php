<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel | Printing Services</title>
    @include('Admin.parts.metacss')

    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

    <style>
        .form-control {
            line-height: 1 !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('Admin.parts.topnav')

        @include('Admin.parts.sidenav')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Printing Services</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Printing Services</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    @if (session('success'))
                          <div class="alert alert-success " id="success_alert" role="alert">
                             {{session('success')}}
                          </div>
                        @endif
                         @if (session('update'))
                            <div class="alert alert-info" role="alert" id="update_alert">
                             {{session('update')}}
                            </div>
                        @endif
                         @if (session('delete'))                  
                              <div class="alert alert-danger " id="success_danger" role="alert">
                                  {{ session('delete')}}
                              </div>
                            @endif

                            @if($errors->any())
                              <div class="alert alert-danger" role="alert" id="errors-alert" >
                                  <ul>
                                      @foreach($errors->all() as $error)
                                      <li>
                                          {{$error}}
                                      </li>
                                      @endforeach
                                  </ul>
                              </div>
                            @endif
                    <form method="POST" action="{{ url('printingservices') }} "
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Title:</label>
                            <input class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                        <textarea name="description" class="form-control ckeditor"></textarea>
                        </div>
                      
                        <div class="form-group">
                            <label for="images">Image:</label>
                            <input type="file" class="form-control" name="images[]" id="file-input" multiple>
                            <div id="preview"></div>

                        </div>



                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @php
            $printingservices = App\PrintingServices::get();
            @endphp
                <hr style="padding-top: 40px;">
                <h3 style="text-align:center">Our Services Contents</h3>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                </thead>
                <tbody>
            @foreach($printingservices as $i=>$ps)
                        <tr>
                            <td>
                                {{ $i++ }}
                    </td>
                    <td>
                        {{ $ps['title'] }}
                    </td>
                    <td style="width: 50%;">
                        {!! substr($ps['description'],0,200) !!}
                        {{strlen($ps['description']>200 ? "..."  : ".")}}
                    </td>
                    
                    <td style="width:10%;">
                        
                    <div id="carouselExampleControls{{$ps->id}}" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach(json_decode($ps->image) as $i=>$images)
                                @if($i==0)
                                <div class="carousel-item active">
                                    <img src="{{ url(implode('storage',explode('public',$images))) }}" style="width: 100px;height:100px;object-fit:contain;object-position:center;">
                                </div>
                                @else
                                <div class="carousel-item">
                                    <img src="{{ url(implode('storage',explode('public',$images))) }}" style="width: 100px;height:100px;object-fit:contain;object-position:center;">
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls{{$ps->id}}" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" style="background-color: black;" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls{{$ps->id}}" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" style="background-color: black; aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                         
                    </td>
                    
                    <td>
                        <a href="#editprintingservices{{ $ps->id }}" data-toggle="modal">
                            <i class="fas fa-edit">Edit</i>
                        </a>
                        &nbsp;
                        <a href="{{ url('printingservices/delete',array($ps->id)) }}">
                            <i class="fas fa-trash">Delete</i>
                        </a>

                    </td>
                    <td style="float:left">

                        <div class="modal" tabindex="-1" id="editprintingservices{{ $ps->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Here</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST"
                                            action="{{ url('printingservices/update',array($ps->id)) }}"
                                            enctype="multipart/form-data" id="uploadForm">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="">Title</label>
                                                <input class="form-control" name="title" value="{{ $ps['title'] }}" />
                                            </div>
                                            <div class="form-group">
                                                <label for="">Description</label>
                                            <textarea name="description" class="form-control ckeditor">{{ $ps['description'] }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="images">Image:</label>
                                                <input type="file" class="form-control" name="images[]" id="file-input" multiple>                        
                                                @foreach (json_decode($ps->image) as $images)
                                                
                                                <img height="80" width="80" style="padding-top:10px;"
                                                    src="{{ url(implode('storage',explode('public',$images))) }}">
                                                    @endforeach
                                                <div id="preview"></div>
                                                
                                            </div>
                                    </div>
                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary">
                                            Update</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </td>
                </tr>
            @endforeach

                </tbody>
                </table>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->




        @include('Admin.parts.footer')
        </footer>
        @include('Admin.parts.metajs')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script>
            function previewImages() {

                var preview = document.querySelector('#preview');

                if (this.files) {
                    [].forEach.call(this.files, readAndPreview);
                }

                function readAndPreview(file) {

                    // Make sure `file.name` matches our extensions criteria
                    if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                        return alert(file.name + " is not an image");
                    } // else...

                    var reader = new FileReader();

                    reader.addEventListener("load", function () {
                        var image = new Image();
                        image.height = 100;
                        image.title = file.name;
                        image.src = this.result;
                        preview.appendChild(image);
                    });

                    reader.readAsDataURL(file);

                }

            }

            document.querySelector('#file-input').addEventListener("change", previewImages);
        </script>

</body>

</html>