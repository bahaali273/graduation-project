<?php include("include/header.php");


// connect to the database
$con = new mysqli("localhost","root","","traino");

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];
    
    // destination of the file on the server
 
    $destination =  'C:/xampp/htdocs/AdminLTE-master/uploads/'. $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
  

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];


    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 2000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        $id= $_SESSION["id_student"];
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name_file, size, downloads,id_student) VALUES ('$filename', $size, 0,$id)";
            if (mysqli_query($con, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}



?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
          <form action="" method="post" enctype="multipart/form-data" >
          <h1>Upload File</h1>
          <input type="file" name="myfile" class="btn btn-info mt-3 " > <br>
          <button type="submit" name="save" class="btn btn-info mt-5 ">upload</button>
        </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    </div>

   
<?php include("include/footer.php");