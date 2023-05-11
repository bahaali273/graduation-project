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
              <li class="breadcrumb-item active">Academic Advisor</li>
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
              <h3 class="card-title">DataTable Academic Advisor</h3>
              <a href="addAcademic.php" class="btn btn-info float-right " style="float:right; margin-top:20px" role="button" aria-pressed="true"><i class="fas fa-plus-square"></i>ADD RECEIPT CASH</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                
              <table id="example1" class="table table-bordered table-striped">
                
              <thead>
                <tr>
                <th>name</th>
                <th>Academic ID</th>
                <th>Email</th>
                <th>image</th>
                </tr>
                </thead>
                <tbody>
                <?php
        


        $con = new mysqli("localhost","root","","traino");
        $st=$con->prepare("SELECT * FROM academicadvisor");
    
                                                   
                                   
                                   $st->execute();
                                   $rs=$st->get_result();
                                   if ($rs->num_rows >0)
                                  {
                                      while( $row=$rs->fetch_assoc()){
                                  
     
    ?> <tr> <td><?php echo $row['nameac']  ?></td>
    <td><?php echo $row['academicid']  ?></td>
    <td> <?php echo $row['email']  ?></td>
    <td><?php echo $row['image']  ?></td>
   
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