<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
 @include('Admin.parts.metacss')
 <style>
            #head123 {
              width: 400px;
              height: 100px;
              background-color: red;
              position: relative;
              animation-name: example;
              animation-duration: 4s;
              animation-iteration-count: infinite;
              padding-top: 29px;
              padding-left:48px;
              font-weight: bolder;
              font-size:30px;
            }
            @keyframes example {
              0%   {background-color:red; left:0px; top:0px;}
              25%  {background-color:yellow; left:670px; top:0px;}
              50%  {background-color:blue; left:670px; top:380px;}
              75%  {background-color:green; left:0px; top:380px;}
              100% {background-color:red; left:0px; top:0px;}
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
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
            <div class="card-header">
             <h2 style="font-weight: 600;font-size: 35px;text-transform: uppercase;text-align: center;color:#f7a118;"><i class="fas fa-fingerprint mr-3"></i>Successfully Loged In!!</h2>
            </div>
            <div class="card-body">
              <h3 class="text-center">Welcome to Dashboard of Quick Time Print Link</h3>
              <p class="card-text text-center">You have full control over the content of your website</p>
            </div>
          </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
  

 @include('Admin.parts.footer')
</footer>
@include('Admin.parts.metajs')
</body>
</html>
