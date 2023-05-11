<?php include("include/header.php"); ?>

<style>
    .pad {
        font-family:sans-serif;
        margin-left:400px;

    }

    .b{
        border-style: inset;
        border-width: 4px;
        border-color: darckgray;

    }

    .b1
    {
border-style:solid;
        border-width:1px;
        width:200;
        border-radius: 3px;	
        border-color:white;
        font-size:110%;
        border-bottom-color: black

    }

    .hh
    {
        font-size:130%;


    }
    
    .aa
    {
        border-style:solid;
        border-width:2px;
        border-radius:7px;
        padding-left:40px;
        padding-right:40px;
        margin-right:206px;
        background-color: white;
        
    }
    </style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
<form method="post"id="Weeklyreport">

<div class="pad aa">

    <img src="../img/ttt.png" class="mt-5" alt="my form" text-align="Center"/>


    <div style="width:728px">
        <p class="b hh">  Weekly Report</p>
    </div>



    <div action="/action_page.php" style="width:600px" >
        
        <label class="hh" for="Week no.">Week no: </label>
        <input  type="text" class="b1" name="Week_number"/><br><br>

        <label class="hh" for="Date" >Date :</label>
        <input class="b1 hh" type="date"name="date"/><br><br>

        <label class="hh" for="Trainee name" >Trainee Name :</label>
        <?php
$id=$_SESSION["id_student"];
  
$con = new mysqli("localhost","root","","traino");
 $st=$con->prepare("select 	name from student where id_student ='$id'");
 $st->execute();
 $rs=$st->get_result();
 while ($row=$rs->fetch_assoc())
 {

?>
        <input class="b1" type="text" name="trainee_Name" value="<?php echo $row['name'] ?>" /><br><br><br>  <?php  }?>
        <label for="Description" class="hh">Description of Tasks/Assignments :</label> 
        <br><br>
    </div>




    <div action="/action_page.php" style="width:728px">
        <textarea class="b1" rows="17" cols="89"name="description"></textarea><br><br>
    </div>


    <div action="/action_page.php" style="width:728px">
        <label for="Training Supervisor Remarks" class="hh" >Training Supervisor Remarks : </label>  <br><br>
        <textarea class="b1" rows="9" cols="89"name="info"></textarea>
    </div><br><br>




    <div action="/action_page.php" style="width:600px">
        <label class="hh" for="Training Supervisor">Training Supervisor Name :</label>
        <?php
$id=$_SESSION["id_student"];
  
$con = new mysqli("localhost","root","","traino");
 $st1=$con->prepare("SELECT trainingadvisor.name FROM student
                     INNER JOIN trainingadvisor
                     ON student.id_trainingadvisor= trainingadvisor.phone
                     WHERE id_student ='$id'");
 $st1->execute();
 $rs1=$st1->get_result();
 while ($row1=$rs1->fetch_assoc())
 {

?>
        <input class="b1" type="text" value="<?php echo $row1['name'] ?>" name="Supervisor_Name"/><br><br><?php }?>
        <br><br>
    </div>
    
<input type="submit" name="s" value="save"
                                   class="btn btn-danger  btn-lg"/><br>   
     
</div>
                
                       
                            <?php
                            if (isset($_POST["s"])) {
                             
                                $con = new mysqli("localhost", "root", "", "traino");
                                $id=$_SESSION["id_student"];
                                $st = $con->prepare('insert into weekly_report (Week_number,date,trainee_Name,description,info,	Supervisor_Name,id_student) values("'. $_POST["Week_number"].'","'. $_POST["date"].'","'. $_POST["trainee_Name"].'","'. $_POST["description"].'","'. $_POST["info"].'","'. $_POST["Supervisor_Name"].'","'. $id.'")');
                                $st->execute();
                                echo "<script>window.location='StudentPage.php';</script>";
                            }
                            ?>
</form>



<form style="justify-content-center">
<div class="container " > 
<div class="row">
<div class ="col-9"></div>
<div class ="col-3">
    <input type="button" class="btn btn-success btn-lg" onclick="myPrint('Weeklyreport')" value="print Report">
    </div>
</div>
</div>
</form>

<script>
function myPrint(Weeklyreport) {
    var printdata = document.getElementById(Weeklyreport);
    newwin = window.open("");
    newwin.document.write(printdata.outerHTML);
    newwin.print();
    newwin.close();
}
</script>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("include/footer.php");