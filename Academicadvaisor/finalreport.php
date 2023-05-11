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
              <li class="breadcrumb-item active">Final Report</li>
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
              <h3 class="card-title">DataTable Final Report</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>#</th>
                <th>name</th>
                <th>size</th>
                <th> download</th>
                <th>name student</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
        



        $con = new mysqli("localhost","root","","traino");
    $st=$con->prepare("SELECT * FROM files INNER JOIN student ON files.id_student = student.id_student
                                               
                                               ");

                                               
                               
                               $st->execute();
                               $rs=$st->get_result();
                               if ($rs->num_rows >0)
                              {
                                  while( $row=$rs->fetch_assoc()){
                                    extract($row);
 
?> <tr>   <td><?php echo $row['id']  ?></td>
<td><?php echo $row['name_file']  ?></td>
<td><?php echo $row['size']  ?></td>
<td><?php echo $row['downloads']  ?></td>
<td> <?php echo $row['name']  ?></td>


<td><a href="downloads.php?id=<?php echo $id  ?>">
    <i style="color:green; font-size:30px" class="fas fa-download" data-toggle="tooltip" title="Show" style="font-size:15px ;padding:0px">
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