<?php  include("include/header.php");
$id=$_SESSION['academicid'];



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
if(isset($_POST["submit"]))
{

    if(!empty($_FILES["file"]["type"])){
        $upload_dir_img='C:/xampp/htdocs/AdminLTE-master/uploads/';
        $img_title=time().'_'.$_FILES["file"]["name"];
        $vaild_exe=array("png", "jpg","jpeg");
        $temporary=explode(".",$_FILES["file"]["name"]);
        $file_extension=end($temporary);
        if(($_FILES["file"]["type"]=="image/png")||($_FILES["file"]["type"]=="image/jpeg") ||($_FILES["file"]["type"]=="image/jpg") && in_array($file_extension,$valid_extensions))
         {
             $sourcePath=$_FILES["file"]['tmp_name'];
            move_uploaded_file($sourcePath,$upload_dir_img.$img_title);
            $hostImg='../uploads/'.$img_title;
           
            $stm=$con->prepare("UPDATE academicadvisor SET image ='$hostImg' where 	academicid ='$id'");
            $stm->bindParam(':hostImg',$hostImg);
           if($stm->execute())
           {
             echo "done";
           }else{
             echo "error";
           }

         }


    }

    


}


?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h2>Change Image Profile</h2>
      <div class="container mt-5">
        <div class="row mb-2">

        <div class="col-12">

        <form method="post" action="" enctype="multipart/form-data">

<i class="fas fa-paperclip " aria-hidden="true"></i>
<input type="file" name="file" class="btn btn-info"/>
<input type="submit" name="submit" value="submit" class="btn btn-info btn-lg"/>





</form><!-- close first form-->

</div>
        </div>
        </div>
        </section>
        </div>






<?php include("include/footer.php");  ?>