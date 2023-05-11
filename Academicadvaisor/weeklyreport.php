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
              <li class="breadcrumb-item active">Weakly Report</li>
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
              <h3 class="card-title">DataTable Weakly Report</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Week Number</th>
                <th>Date</th>
                <th>Trainee Name</th>
                <th>Description</th>
                <th>Info</th>
                <th>Supervisor Name</th>
                <th>Student Name</th>
                <th>Action</th>
             
            
                </tr>
                </thead>
                <tbody>
                <?php
        

        $id=$_SESSION["academicid"];
        $con = new mysqli("localhost","root","","traino");
    $st=$con->prepare('SELECT * FROM weekly_report 
                       INNER JOIN    student
                        ON           weekly_report.id_student = student.id_student
                        WHERE        student.id_academicadvisor= "'.$id .'"    
                                               
                                               ');

                                               
                               
                               $st->execute();
                               $rs=$st->get_result();
                               if ($rs->num_rows >0)
                              {
                                  while( $row=$rs->fetch_assoc()){
                                    extract($row);
                              
 
?>   <tr>
<td><?php echo $row['Week_number']  ?></td>
<td><?php echo $row['date']  ?></td>
<td><?php echo $row['trainee_Name']  ?></td>
<td><?php echo $row['description']  ?></td>
<td> <?php echo $row['info']  ?></td>
<td><?php echo $row['Supervisor_Name']  ?></td>
<td> <?php echo $row['name']  ?></td>
<td><a href="WeekReport1.php?Week_number=<?php echo $Week_number  ?>">
    <i class="fas fa-eye" data-toggle="tooltip" title="Show" style="font-size:15px ;padding:0px">
    </i></a>
</td>

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