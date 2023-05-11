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
              <li class="breadcrumb-item active">Rejects Student</li>
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
              <h3 class="card-title">DataTable Rejects Student</h3>
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
        $st=$con->prepare("select*from insidejordan where status ='reject'");
        $st->execute();
        $rs=$st->get_result();
        // echo $rs->num_rows."<br/>";
        

        while ($row=$rs->fetch_assoc())
        { extract($row);

?> <tr> <td><?php echo $row['increment']  ?></td>
<td><?php echo $row['studentName']  ?></td>
<td><?php echo $row['ID']  ?></td>
<td><?php echo $row['major']  ?></td>
<td> <?php echo $row['stdEmail']  ?></td>
<td><?php echo $row['companyName']  ?></td>
<td> <?php echo $row['supervisorEmail']?></td>
<td><?php echo $row['Trainingfield'] ?></td>
 <td><?php echo $row['AcademicSupervisor'] ?></td>
 <td><a href="addStudent.php?increment=<?php echo $increment  ?>"><i class="fas fa-edit btn" data-toggle="tooltip" title="Edit" style="font-size:15px ;padding:0px"></i></a> </td>

</tr>

            <?php
               }
               if(isset($_POST["accept"]))
               { 
                   insertStudant();
               } ?>
                <?php
      function insertStudant(){
       $userPassword=randomPassword();
       echo "aaaa"+$userPassword;
       $con = new mysqli("localhost","root","","traino");
           $st=$con->prepare("select*from insidejordan where status ='inprocess'");
           $st->execute();
           $rs=$st->get_result();
           echo $rs->num_rows."<br/>";
           

           while ($row=$rs->fetch_assoc())
           {
               echo"<tr>";
               $studentName=$row["studentName"];
               echo"<td>". $row["studentName"]."</td>";
               $id=$row["ID"];
               echo"<td>". $row["ID"]."</td>";
               echo"<td>". $row["major"]."</td>";
               $email=$row["email"];
           }
           $sql = "INSERT INTO student (name, studentid, email,password,image)
           VALUES ('".$studentName."'
           ,'".$id."'
           ,'".$email."'
           ,'".$userPassword."'
           ,'null'
           )";
           
           if ($con->query($sql) === TRUE) {
           echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
           } else {
           echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $con->error."');</script>";
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
  
<?php
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
?>
      <?php
         function sendEmail( $to,$message) {
                            require_once "Mail.php";
                            
                            $from = "Sandra Sender <bahaali273@gmail.com>";
                            //$to = "Ramona Recipient <recipient@example.com>";
                            $subject = "Faculty of Information Technology";
                            $body = "Hi,\n\n"+$message;
                            $host = "ssl://mail.gdom.net";
                            $port = "465";
                            $username = "bahaali273@gmail.com";
                            $password = "111197ba";
                            
                            $headers = array ('From' => $from,
                            'To' => $to,
                            'Subject' => $subject);
                            $smtp = Mail::factory('smtp',
                            array ('host' => $host,
                                'port' => $port,
                                'auth' => true,
                                'username' => $username,
                                'password' => $password));
                            
                            $mail = $smtp->send($to, $headers, $body);
                            
                            if (PEAR::isError($mail)) {
                            echo("<p>" . $mail->getMessage() . "</p>");
                            } else {
                            echo("<p>Message successfully sent!</p>");
                            }
             }
          ?>
<?php include("include/footer.php");
