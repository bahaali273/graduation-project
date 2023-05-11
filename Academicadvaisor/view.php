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
                <th>Serial Number</th>
                <th>name</th>
                <th>Student ID</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>image</th>
                <th>from date</th>
                <th>to date</th>
                <th>trainingadvisor name</th>
                <th>trainingadvisor phone</th>
                <th>states</th>
                <th>numHours</th>
                </tr>
                </thead>
                <tbody>
                <?php
        

$academicid=$_SESSION['academicid'];

$stm=$con->prepare("SELECT *,trainingadvisor.name as train_name,trainingadvisor.phone as train_phone FROM attendance,trainingadvisor,student WHERE attendance.id_student= student.id_student AND attendance.id_trainingadvisor= trainingadvisor.phone AND attendance.id_academicadvisor = :academicid
");
$stm->bindParam(':academicid' ,$academicid);
$stm->execute();
// exit;
if($stm->rowCount()>0){
while($row=$stm->fetch(PDO::FETCH_ASSOC)){
extract($row);
// $idCom=$rowMangRecVou['id'] 


?>
                 <tr>
                 <td><?php echo $row['serialNumber']  ?></td>
                <td><?php echo $row['name']  ?></td>
                <td><?php echo $row['studentid']  ?></td>
                <td><?php echo $row['personalnumber']  ?></td>
                <td> <?php echo $row['email']  ?></td>
                <td><?php echo $row['image']  ?></td>
                <td> <?php echo $row['attendance_date']  ?></td>
                <td> <?php echo $row['todate']  ?></td>
                <td> <?php echo $row['train_name']  ?></td>
                <td> <?php echo $row['train_phone']  ?></td>

                <td><?php if( $row['numHours']>=40){
                  
                    echo "<span><i style='color:green' class='fas fa-user-check'></i></span>";
                }
                else{
                    echo "<span><i style='color:red' class='fas fa-user-times'></i></span>";
                   
                }  ?></td>
                 <td> <?php echo $row['numHours']  ?></td>
            </tr>

            <?php
               }

            }
        ?>

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