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
              <h3 class="card-title">DataTable Student</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>num</th>
                <th>studentName</th>
                <th>ID</th>
                <th>major</th>
                <th>email</th>
                <th>companyName</th>
                <th>supervisorEmail</th>
                <th>Trainingfield</th>
                <th>AcademicSupervisor</th>
                <th>State</th>
                </tr>
                </thead>
                <tbody>
                <?php
        
        $con = new mysqli("localhost","root","","traino");
        $st=$con->prepare("select*from insidejordan where status ='inprocess'");
        $st->execute();
        $rs=$st->get_result();
        // echo $rs->num_rows."<br/>";
        

        while ($row=$rs->fetch_assoc())
        { extract($row);

?>
                  <tr>
                <td><?php echo $row['increment']  ?></td>
                <td><?php echo $row['studentName']  ?></td>
                <td><?php echo $row['ID']  ?></td>
                <td><?php echo $row['major']  ?></td>
                <td> <?php echo $row['stdEmail']  ?></td>
                <td><?php echo $row['companyName']  ?></td>
                <td> <?php echo $row['supervisorEmail']?></td>
                <td><?php echo $row['Trainingfield'] ?></td>
                 <td><?php echo $row['AcademicSupervisor'] ?></td>
                 <td><a href="addStudent.php?increment=<?php echo $increment  ?>"><i class="fas fa-edit btn text-info " data-toggle="tooltip" title="Edit" style="font-size:15px ;padding:0px"></i></a> </td>
            </tr>

            <?php
               }?>
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