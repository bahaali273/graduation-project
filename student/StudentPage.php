<?php include("include/header.php"); 

function progress(){
    $id=$_SESSION["id_student"];
        
         $con = new mysqli("localhost","root","","traino");
             $st=$con->prepare("select 	numHours from attendance where id_student ='$id'");
             $st->execute();
             $rs=$st->get_result();
             while ($row=$rs->fetch_assoc())
             { 
            echo (intval((($row['numHours'])/600)*100));
             }
  
        }


?>
<style>
/* Home Banner Area css
============================================================================================ */
.list {
    list-style: none;}
.home_banner_area {
  position: relative;
  z-index: 1;
  background-image: -moz-linear-gradient(0deg, #766dff 0%, #88f3ff 100%);
  background-image: -webkit-linear-gradient(0deg, #766dff 0%, #88f3ff 100%);
  background-image: -ms-linear-gradient(0deg, #766dff 0%, #88f3ff 100%);
  margin-bottom: 200px; }
  .home_banner_area .box_1620 {
    min-height: 700px;
    border-radius: 12px;
    position: relative;
    bottom: -200px;
    background: #fff;
    padding: 30px;
    box-shadow: 0px 20px 80px 0px rgba(153, 153, 153, 0.3); }
  .home_banner_area .banner_inner {
    position: relative;
    width: 100%;
    min-height: 700px;
    display: flex; }
    .home_banner_area .banner_inner .banner_content {
      color: #222222;
      vertical-align: middle;
      align-self: center;
      text-align: left; }
      .home_banner_area .banner_inner .banner_content .media .d-flex {
        padding-right: 125px; }
      .home_banner_area .banner_inner .banner_content .media .media-body {
        vertical-align: middle;
        align-self: center; }

.blog_banner {
  min-height: 780px;
  position: relative;
  z-index: 1;
  overflow: hidden;
  margin-bottom: 0px; }
  .blog_banner .banner_inner {
    background: #04091e;
    position: relative;
    overflow: hidden;
    width: 100%;
    min-height: 780px;
    z-index: 1; }
    .blog_banner .banner_inner .overlay {
      background: url(../img/banner/banner-2.jpg) no-repeat scroll center center;
      opacity: .5;
      height: 125%;
      position: absolute;
      left: 0px;
      top: 0px;
      width: 100%;
      z-index: -1; }
    .blog_banner .banner_inner .blog_b_text {
      max-width: 700px;
      margin: auto;
      color: #fff; }
      .blog_banner .banner_inner .blog_b_text h2 {
        font-size: 60px;
        font-weight: bold;
        font-family: "Heebo", sans-serif;
        line-height: 66px;
        margin-bottom: 15px;
        text-transform: uppercase; }
      .blog_banner .banner_inner .blog_b_text p {
        font-size: 16px;
        margin-bottom: 35px; }
      .blog_banner .banner_inner .blog_b_text .white_bg_btn {
        line-height: 42px;
        padding: 0px 45px;
        border-radius: 5px; }

.banner_box {
  max-width: 1620px;
  margin: auto; }

.banner_area {
  position: relative;
  z-index: 1;
  min-height: 350px;
  background-image: -moz-linear-gradient(0deg, #766dff 0%, #88f3ff 100%);
  background-image: -webkit-linear-gradient(0deg, #766dff 0%, #88f3ff 100%);
  background-image: -ms-linear-gradient(0deg, #766dff 0%, #88f3ff 100%);
  margin-bottom: 120px; }
  .banner_area .box_1620 {
    background: #fff;
    min-height: 360px;
    border-radius: 12px;
    position: relative;
    bottom: -120px;
    box-shadow: 0px 20px 80px 0px rgba(153, 153, 153, 0.3); }
  .banner_area .banner_inner {
    position: relative;
    overflow: hidden;
    width: 100%;
    min-height: 360px;
    z-index: 1; }
    .banner_area .banner_inner .banner_content h2 {
      color: #222222;
      font-size: 48px;
      font-family: "Heebo", sans-serif;
      margin-bottom: 0px;
      font-weight: bold; }
    .banner_area .banner_inner .banner_content .page_link a {
      font-size: 14px;
      color: #222222;
      font-family: "Roboto", sans-serif;
      margin-right: 32px;
      position: relative; }
      .banner_area .banner_inner .banner_content .page_link a:before {
        content: "\e87a";
        font-family: 'Linearicons-Free';
        position: absolute;
        right: -25px;
        top: 50%;
        transform: translateY(-50%); }
      .banner_area .banner_inner .banner_content .page_link a:last-child {
        margin-right: 0px; }
        .banner_area .banner_inner .banner_content .page_link a:last-child:before {
          display: none; }
      .banner_area .banner_inner .banner_content .page_link a:hover {
        color: #766dff; 
        }
        .personal_text .personal_social {
  margin-top: 45px; }
  .personal_text .personal_social li {
    display: inline-block;
    margin-right: 7px; }
    .personal_text .personal_social li:last-child {
      margin-right: 0px; }
    .personal_text .personal_social li a {
      line-height: 40px;
      width: 40px;
      background: #e8e8e8;
      border-radius: 5px;
      display: inline-block;
      text-align: center;
      color: #fff;
      font-size: 16px; }
    .personal_text .personal_social li:hover a {
      background-image: -moz-linear-gradient(0deg, #766dff 0%, #88f3ff 100%);
      background-image: -webkit-linear-gradient(0deg, #766dff 0%, #88f3ff 100%);
      background-image: -ms-linear-gradient(0deg, #766dff 0%, #88f3ff 100%); 
      }

      .profile_area .col-lg-7 {
  vertical-align: middle;
  align-self: center; }

.profile_inner {
  border-bottom: 1px solid #eeeeee; }
  .profile_inner .personal_text {
    padding-left: 95px; }

.personal_text h6 {
  font-size: 14px;
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  letter-spacing: 2.1px;
  font-weight: normal;
  margin-bottom: 12px;
  color: #222222; }
.personal_text h4 {
  font-size: 16px;
  font-weight: 500;
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  margin-bottom: 20px;
  color: #222222; }
.personal_text h3 {
  font-size: 48px;
  text-transform: uppercase;
  margin-bottom: 15px;
  color: #222222; }
.personal_text p {
  font-family: "Roboto", sans-serif;
  max-width: 540px;
  color: #777777;
  margin-bottom: 40px; }
.personal_text .basic_info li {
  margin-bottom: 15px; }
  .personal_text .basic_info li a {
    position: relative;
    padding-left: 40px;
    font-size: 16px;
    color: #777777; }
    .personal_text .basic_info li a i {
      position: absolute;
      left: 0px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px;
      color: #766dff; }
  .personal_text .basic_info li:last-child {
    margin-bottom: 0px; }
.personal_text .personal_social {
  margin-top: 45px; }
  .personal_text .personal_social li {
    display: inline-block;
    margin-right: 7px; }
    .personal_text .personal_social li:last-child {
      margin-right: 0px; }
    .personal_text .personal_social li a {
      line-height: 40px;
      width: 40px;
      background: #e8e8e8;
      border-radius: 5px;
      display: inline-block;
      text-align: center;
      color: #fff;
      font-size: 16px; }
    .personal_text .personal_social li:hover a {
      background-image: -moz-linear-gradient(0deg, #766dff 0%, #88f3ff 100%);
      background-image: -webkit-linear-gradient(0deg, #766dff 0%, #88f3ff 100%);
      background-image: -ms-linear-gradient(0deg, #766dff 0%, #88f3ff 100%); }


/* End Home Banner Area css*/
</style>
<?php

$id=$_SESSION["id_student"];

      
$con = new mysqli("localhost","root","","traino");
    $st=$con->prepare("SELECT* FROM student
                        INNER JOIN academicadvisor
                        ON student.id_academicadvisor= academicadvisor.academicid
                        INNER JOIN trainingadvisor
                        ON student.id_trainingadvisor= trainingadvisor.phone
                        WHERE id_student ='$id'");
    $st->execute();
    $rs=$st->get_result();
    while ($row=$rs->fetch_assoc())
    {

?>

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
           	<div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex">
								<!-- <img src="../img/JO.jpg" alt=""> -->
                <div
                  class="ldBar label-center"style="width:100%; height:100%;font-size:70px"
                  data-value="<?php progress().'%' ?>"
               
                  data-preset="bubble"
                 ></div>
             
							</div>
							<div class="media-body">
								<div class="personal_text">
               
              
									<h3><?php echo $row['name']  ?></h3>
									<h4><?php echo $row['major']  ?></h4>
									<p>You will begin to realise why this exercise is called the Dickens Pattern (with reference to the ghost showing Scrooge some different futures)</p>
									<ul class="list basic_info ">
										<li><a href="#"><i class="lnr lnr-calendar-full "></i> <?php echo date("Y/m/d") ; ?></a></li>
										<li><a href="#"><i class="lnr lnr-phone-handset"></i> <?php echo $row['personalnumber']  ?></a></li>
                    <li><a href="#"><i class="lnr lnr-phone"></i>  <?php echo $row['homenumber']  ?></a></li>
										<li><a href="#"><i class="lnr lnr-envelope"></i> <?php echo $row['email']  ?></a></li>
										<li><a href="#"><i class="lnr lnr-user"></i>  <?php echo $row['serialNumber']  ?></a></li>
									</ul><?php } ?>
									<ul class="list personal_social">
										<li><a href="#"><i class="fab fa-facebook"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    
									</ul>
                  
     
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

<?php include("include/footer.php");