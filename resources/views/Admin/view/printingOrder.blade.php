<!DOCTYPE html>
<html>

<head>
    <title>Printing Order</title>
    @include('Admin.parts.metacss')
   <style type="text/css">
       .dol{
       columns: 2;
       -webkit-columns: 2;
       -moz-columns: 2;
       
    }
    @media (max-width: 767px)
    {
       .dol{
       columns: 1;
       -webkit-columns: 1;
       -moz-columns: 1;
       
    } 
    }
    .dol li{
        list-style: none;
        padding-bottom: 10px;
        font-size:20px;
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
                            <h1 class="m-0 text-dark">Printing Orders</h1>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-info">
                              <thead>
                                <tr>
                                  <th scope="col">Sn.</th>
                                  <th scope="col">Product</th>
                                  <th scope="col">Category</th>
                                  <th scope="col">Size</th>
                                  <th scope="col">Color</th>
                                  <th scope="col">Paper Weight</th>
                                  <th scope="col">Lamination</th>
                                  <th scope="col">Quantity</th>
                                  <th scope="col">Full Details</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($printingOrder as $po)
                                <tr>
                                  <th scope="row">{{$no++}}</th>
                                  <td>{{$po->product}}</td>
                                  <td>{{$po->category}}</td>
                                  <td>{{$po->size}}</td>
                                  <td>{{$po->color}}</td>
                                  <td>{{$po->paperweight}}</td>
                                  <td>{{$po->lamination}}</td>
                                  <td>{{$po->quantity}} Piece</td>
                                  <td>
                                        <a href="#Order{{ $po->id }}" data-toggle="modal">
                                                <i class="fas fa-info fa-lg"></i>
                                            </a>
                                    </td>
                                    <div class="modal" tabindex="-1" id="Order{{$po->id}}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="color:#000;font-weight: 600;font-size: 35px;text-align: center;">Full Detail Of Order</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul class="dol">
                                                        <li><i class="far fa-dot-circle mr-2"></i><b>Product:</b> {{$po->product}}</li>
                                                        <li><i class="far fa-dot-circle mr-2"></i><b>Category:</b> {{$po->category}}</li>
                                                        <li><i class="far fa-dot-circle mr-2"></i><b>Size:</b> {{$po->size}}</li>
                                                        <li><i class="far fa-dot-circle mr-2"></i><b>Product Colors:</b> {{$po->color}}</li>
                                                        <li><i class="far fa-dot-circle mr-2"></i><b>Paper Weight:</b> {{$po->paperweight}}</li>
                                                        <li><i class="far fa-dot-circle mr-2"></i><b>Lamination:</b> {{$po->lamination}}</li>
                                                        <li><i class="far fa-dot-circle mr-2"></i><b>Quantity:</b> {{$po->quantity}} Piece</li>
                                                        <li><i class="far fa-dot-circle mr-2"></i><b>Name:</b> {{$po->name}}</li>
                                                        <li><i class="far fa-dot-circle mr-2"></i><b>Company Name:</b> {{$po->company_name}}d</li>
                                                        <li><i class="far fa-dot-circle mr-2"></i><b>Address:</b> {{$po->address}}</li>
                                                        <li><i class="far fa-dot-circle mr-2"></i><b>Contact:</b> {{$po->contact}}</li>
                                                        <li><i class="far fa-dot-circle mr-2"></i><b>Email:</b> {{$po->email}}</li>
                                                        <li><i class="far fa-dot-circle mr-2"></i><b>Message:</b> {{$po->message}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('Admin.parts.footer')
        </footer>
        @include('Admin.parts.metajs')
</body>

</html>
