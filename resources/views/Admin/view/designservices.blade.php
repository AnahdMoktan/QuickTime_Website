<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | designservices</title>
 @include('Admin.parts.metacss')
 <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
 <style>
     .form-control{
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
                    <h1 class="m-0 text-dark">Equipments</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">About Us</a></li>
                        <li class="breadcrumb-item active">Equipments</li>
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

            <form method="POST" action="{{ url('designservices') }}"
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
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image">

                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @php
            $designservices = App\DesignServices::get();
            @endphp
            <hr style="padding-top: 40px;">
            <h3 style="text-align:center">Design Services Contents</h3>
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
                    @foreach($designservices as $i=>$ds)
                        <tr>
                            <td>
                                {{ $i++ }}
                            </td>
                            <td>
                                {{ $ds['title'] }}
                            </td>
                            <td>
                              {!! substr($ds['description'],0,280) !!}
                          </td>

                            <td>
                                <img height="80" width="80"
                                    src="{{ url(implode('storage',explode('public',$ds['image']))) }}">
                            </td>
                            <td>
                            <a href="#editdesignservices{{$ds->id}}" data-toggle="modal">
                                    <i class="fas fa-edit">Edit</i>
                                </a>
                                &nbsp;
                                <a
                                    href="{{ url('designservices/delete',array($ds->id)) }}">
                                    <i class="fas fa-trash">Delete</i>
                                </a>

                            </td>
                            <td style="float:left">
                               
                            <div class="modal" tabindex="-1" id="editdesignservices{{$ds->id}}">
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
                                                <form method="POST"  action="{{ url('designservices/update',array($ds->id)) }}" enctype="multipart/form-data" id="uploadForm">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                      <label for="">Title</label>
                                                    <input class="form-control" name="title" value="{{$ds['title']}}"/>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="">Description</label>
                                                <textarea name="description" class="form-control ckeditor" >{{$ds['description']}}</textarea>
                                                </div>
                                                  <div class="form-group">
                                                      <label for="">Image</label>
                                                      <input type="file" class="form-control" name="image" id="file">
                                                      <img height="80"  width="80" style="padding-top:10px;"
                                                      src="{{ url(implode('storage',explode('public',$ds['image']))) }}">
                                                  </div>
                                                  <script type="text/javascript">
                                                    function filePreview(input){
                                                      if (input.files && input.files[0]){
                                                        var reader = new FileReader();
                                                        reader.onload = function (e){
                                                          $('#uploadForm + img').remove();
                                                          $('#uploadForm').after('<img src="'+e.target.result+'" width="80" height="80"/>');
                                                        };
                                                        reader.readAsDataURL(input.files[0]);
                                                      }
                                                    }
                                                    $('#file').change(function(){
                                                      filePreview(this);
                                                    });
                                                  </script>
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
