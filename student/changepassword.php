<?php  include("include/header.php");
$id=$_SESSION['id_student'];


?>

<style>
.pass_show{position: relative} 

.pass_show .ptxt { 

position: absolute; 

top: 50%; 

right: 10px; 

z-index: 1; 

color: #f36c01; 

margin-top: -10px; 

cursor: pointer; 

transition: .3s ease all; 

} 

.pass_show .ptxt:hover{color: #333333;} 
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h2>Change Password</h2>
      <div class="container mt-5">
        <div class="row mb-2">


        <div class="col-9">
     
		    <form  action="" method="POST">
		    <label>Current Password</label>
		    <div class="form-group pass_show"> 
                <input type="password" name="oldpass" class="form-control" placeholder="Current Password"> 
            </div> 
		       <label>New Password</label>
            <div class="form-group pass_show"> 
                <input type="password" name="newpass"  class="form-control" placeholder="New Password"> 
            </div> 
		       <label>Confirm Password</label>
            <div class="form-group pass_show"> 
                <input type="password" name="confpass" class="form-control" placeholder="Confirm Password"> 
            </div> 
            <input type="submit" class="btn btn-info" value="save" name="submit">
            </form>
        </div>
        </div>
        </section>
    </div>
    <?php  
   if($_SERVER["REQUEST_METHOD"] == "POST"){
       
    if(isset($_POST['submit'])){
    
  

     $password = htmlspecialchars(strip_tags($_POST["oldpass"]));
     
     $newpassword = htmlspecialchars(strip_tags($_POST["newpass"]));
     $confirmnewpassword = htmlspecialchars(strip_tags($_POST["confpass"]));
      
     $con = new mysqli("localhost","root","","traino");
         $st=$con->prepare("select 	password from student where id_student ='$id'");
         $st->execute();
         $rs=$st->get_result();
         $row=$rs->fetch_assoc();
         echo $row["password"];
         if ($password == $row["password"]) {
            
            if($newpassword === $confirmnewpassword){
    
                $stm=$con->prepare("update student set password = '$newpassword' where id_student ='$id'");
                $stm->execute();
    
    
            }else{
                echo "<div class='alert alert-info text-center' role='alert'>
               password not match
               </div>";
            }
    
    
    
         }else{
             echo "<div class='alert alert-info text-center' role='alert'>
            password is failed
           </div>";
         }
        }}
       ?>


<?php include("include/footer.php")   ?>
<script>  
$(document).ready(function(){
$('.pass_show').append('<span class="ptxt">Show</span>');  
});
  

$(document).on('click','.pass_show .ptxt', function(){ 

$(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

});  
</script>