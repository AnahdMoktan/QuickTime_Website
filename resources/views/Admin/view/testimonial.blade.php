<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel | Dservices</title>
    @include('Admin.parts.metacss')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <style>
        .form-control {
            line-height: 1 !important;
        }

    </style>
</head>
@php
$dservices = App\Dservices::get();
@endphp

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
                            <h1 class="m-0 text-dark">Testimonial</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Testimonial</li>
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
                    <div class="input-group mb-3" style="margin-top: 30px;">
                      <form method="POST" action="{{ url('testimonial') }}"
                      enctype="multipart/form-data">
                      @csrf
                    </div>
                    <div class="form-group">
                    <label class="" for="">Name:</label>
                    <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                    <label class="" for="">Designation:</label>
                    <input type="text" class="form-control" name="designation">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                    <textarea name="description" class="form-control ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="">Image:</label>
                    <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                  </form>
                    <hr style="padding-bottom: 40px;">

                    <h2 style="text-align: center;">Contents Here</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                        </thead>
                        <tbody>
                            @foreach($testimonial as $i=>$tm)
                                <tr>
                                    <td>
                                        {{ $i++ }}
                                    </td>
                                    <td>
                                        {{ $tm['name'] }}
                                    </td>
                                    <td>
                                        {{ $tm['designation'] }}
                                    </td>
                                    <td>
                                      {{ $tm['description'] }}
                                    </td>

                                    <td>
                                        <img height="80" width="80"
                                            src="{{ url(implode('storage',explode('public',$tm['image']))) }}">
                                    </td>
                                    <td>
                                        <a href="#edittestimonial{{ $tm->id }}" data-toggle="modal">
                                            <i class="fas fa-edit">Edit</i>
                                        </a>
                                        &nbsp;
                                        <a
                                            href="{{ url('testimonial/delete',array($tm->id)) }}">
                                            <i class="fas fa-trash">Delete</i>
                                        </a>

                                    </td>
                                    <td style="float:left">

                                        <div class="modal" tabindex="-1" id="edittestimonial{{ $tm->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Here</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ url('testimonial/update',array($tm->id)) }}"
                                                            enctype="multipart/form-data" id="uploadForm">
                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <label for="">Name</label>
                                                                <input class="form-control" name="name"
                                                                    value="{{ $tm['name'] }}" />
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="">Designation</label>
                                                                <input class="form-control" name="designation"
                                                                    value="{{ $tm['designation'] }}" />
                                                                </div>
                                                                    <div class="form-group">
                                                                        <label for="">Description</label>
                                                                    <textarea name="description" class="form-control ckeditor">{{ $tm['description'] }}</textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                <label for="">Image</label>
                                                                <input type="file" class="form-control" name="image"
                                                                    id="file">
                                                                <img height="80" width="80" style="padding-top:10px;"
                                                                    src="{{ url(implode('storage',explode('public',$tm['image']))) }}">
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
</body>

</html>
