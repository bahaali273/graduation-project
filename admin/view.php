<?php include("include/header.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
       
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable Attendance Student</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Serial Number</th>
                <th>name</th>
                <th>Student ID</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>image</th>
                <th>from date</th>
                <th>to date</th>
                <th>states</th>
                <th>numHours</th>
                </tr>
                </thead>
                <tbody>
                <?php
        


        $con = new mysqli("localhost","root","","traino");
    $st=$con->prepare("SELECT * FROM attendance INNER JOIN student ON attendance.id_student = student.id_student
                                               
                                               ");

                                               
                               
                               $st->execute();
                               $rs=$st->get_result();
                               if ($rs->num_rows >0)
                              {
                                  while( $row=$rs->fetch_assoc()){
                              
 
?>  <tr>
<td><?php echo $row['serialNumber']  ?></td>
<td><?php echo $row['name']  ?></td>
<td><?php echo $row['studentid']  ?></td>
<td><?php echo $row['personalnumber']  ?></td>
<td> <?php echo $row['email']  ?></td>
<td><?php echo $row['image']  ?></td>
<td> <?php echo $row['attendance_date']  ?></td>
<td> <?php echo $row['todate']  ?></td>
<td><?php if( $row['numHours']>=40){
  
    echo "<span><i style='color:green' class='fas fa-user-check'></i></span>";
}
else{
    echo "<span><i style='color:red' class='fas fa-user-times'></i></span>";
   
}  ?></td>
 <td> <?php echo $row['numHours']  ?></td>
</tr>

            <?php
               }}?>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("include/footer.php");