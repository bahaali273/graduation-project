<?php include("include/header.php");
 $dsn='mysql:host=localhost;dbname=traino';
 $user='root';
 $pass='';
 $option= array(
     PDO::MYSQL_ATTR_INIT_COMMAND  => 'SET NAMES utf8',
 
               );
               try{
                   $con=new PDO($dsn,$user,$pass,$option);
                   $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                  
                   
               }
               catch(PDOException $e){
                   echo 'failed to connect' . $e->getMessage();
 
               }

?>

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
              <li class="breadcrumb-item active">Confidential Report</li>
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
              <h3 class="card-title">DataTable Confidential Report</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Student Name</th>
                <th>Major</th>
                <th>College</th>
                <th>date</th>
                <th>Organization Name</th>
                <th>supervisorName</th>
                <th>action</th>
                </tr>
                </thead>
                <tbody>
                <?php
        


        $stm=$con->prepare("SELECT * FROM confidentialreport

        ");
        
        $stm->execute();
        if($stm->rowCount()>0){
        while($row=$stm->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        // $idCom=$rowMangRecVou['id'] 
 
?> <tr>   <td><?php echo $row['studentname']  ?></td>
<td><?php echo $row['major']  ?></td>
<td><?php echo $row['college']  ?></td>
<td><?php echo $row['date']  ?></td>
<td> <?php echo $row['organizationName']  ?></td>
<td><?php echo $row['supervisorName']  ?></td>
<td><a href="confidentialreport.php?id_confidentialreport=<?php echo $id_confidentialreport  ?>">
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