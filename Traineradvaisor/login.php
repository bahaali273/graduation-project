<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Student</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login/css/main.css">
<!--===============================================================================================-->
</head>
<?php
session_start();

require_once 'C:\xampp\htdocs\AdminLTE-master\Traineradvaisor\chat\class\user.php';
$user2 = new user();
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






			  if($_SERVER["REQUEST_METHOD"] == "POST"){

				//تشييك ع التيكست فيلد فارغ او في داخله محتوى
				 if(empty($_POST['email'])||empty($_POST['password'])){
					 
					 echo "<div class='alert alert-light' role='alert'>
						   All fields are required
						  </div>";
				 }else{
						$email=htmlspecialchars(strip_tags($_POST['email']));
						$password=htmlspecialchars(strip_tags($_POST['password']));
						 // تشفير الباس
						$hashPass=sha1($password);
				
						  $stmLogin=$con->prepare("SELECT
															phone,
															email ,
															password 
													FROM    trainingadvisor 
													WHERE   email=:email
													AND     password =:password
													-- AND     group_id = 1
													
												  ");
				
						  $stmLogin->bindParam(':email' ,$email);
						  $stmLogin->bindParam(':password',$password);
						  $stmLogin->execute();
						
						 
								if($stmLogin->rowCount()>0){
									$rowLogin= $stmLogin->fetch(PDO::FETCH_ASSOC);
									$_SESSION["email"]= $email;
									$_SESSION["phone"]= $rowLogin['phone'];
									$logincheck = $user2->login_check($email,$password);
				
									if($logincheck){
										$user2->insert_login_details($logincheck);
									  
									}
									else{
										$msg="Wrong Credinatials";
									}
								   
									header("location:view.php");
								   
								   
								   
								   }else{
									 echo "<div class='alert alert-danger' role='alert'>
									 <strong>اسم المستخدم الذي أدخلته لا يطابق أي حساب</strong>
									 </div>";
									}
					   }   
				}
?>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178"  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="email" name="email" placeholder="email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="#" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


    
<!--===============================================================================================-->
<script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/bootstrap/js/popper.js"></script>
	<script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login/js/main.js"></script>
</body>
</html>