<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="admin/plugins/moment/moment.min.js"></script>
<script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="admin/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/js/demo.js"></script>


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


    <script type="text/javascript">
        setTimeout(function() {
            $('#success_danger').fadeOut('fast');
        }, 3000);
        
    </script>
    <script type="text/javascript">
        setTimeout(function() {
            $('#success_alert').fadeOut('fast');
        }, 3000);
        
    </script>
    <script type="text/javascript">
        setTimeout(function() {
            $('#errors-alert').fadeOut('fast');
        }, 3000);
        
    </script>

    <script type="text/javascript">
        setTimeout(function() {
            $('#update_alert').fadeOut('fast');
        }, 3000);
        
    </script>