<footer class="main-footer">
    <div class=" d-none d-sm-block">
    
    </div>
    <strong>Copyright &copy; 2014-2019 </strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- progessbar -->
<script type="text/javascript" src="dist/loading-bar.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script type="text/javascript">

      $("document").ready(function(){
        $(".custom-select").change(function(){
           var selectedValue= $(".custom-select").val();
              console.log(selectedValue);
             
            $("#se").val(selectedValue) ;
  
        });
        

        var sum = 0;
  
      $("#Sun").blur(function(){
    
  
      result= parseInt($("#Sun").val());
   
      sum +=result;
 
      $("#numHours").html(sum);
      $(".numHours").val(sum);
      });

     $("#Mon").blur(function(){
   
    result=parseInt($("#Mon").val());
  
     sum +=result;
  
     $("#numHours").html(sum);
     $(".numHours").val(sum);
 
  });

  $("#Tues").blur(function(){
   
   result= parseInt($("#Tues").val());
   
    sum +=result;
  
    $("#numHours").html(sum);
    $(".numHours").val(sum);

 });

 $("#Wed").blur(function(){
   
   result= parseInt($("#Wed").val());
   
    sum +=result;
   
    $("#numHours").html(sum);
    $(".numHours").val(sum);

 });
 $("#Thurs").blur(function(){
   
   result= parseInt($("#Thurs").val());
   
    sum +=result;

    $("#numHours").html(sum);
    $(".numHours").val(sum);

 });


      });
      </script>
</body>
</html>