<!DOCTYPE html>
<html lang="en">

    

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;600&family=Nanum+Gothic&display=swap" rel="stylesheet">
  <style>
    .checkmark
    {
      display: block;
      width: 12px;
      height:12px;
      background-color:#595f6e ;
      border-radius:3px;
      position: relative;
    }
    #check:checked ~ .checkmark {
      background: #d4af7a;
    }
    .checkmark::after
    {
      content: "";
      position: absolute;
      width: 9px;
      height: 14px;
      border-right: 2px solid white;
      border-bottom: 2px solid white;
      top:40px;
      left:50px;
      transform: translate(-530%, -310%) rotateZ(40deg) scale(1.1);
      opacity: 0;
      transition: all 0.6s;
    }
    #check:checked ~ .checkmark::after {
      opacity: 1;
    }
    .terms
    {
      color:black;
    }
    .terms:hover
    {
      color: #d4af7a;
    }
    /*end of checkbox button css--*/
    /**for image logo**/
    .pull
    {
      justify-content: Center;
      align-items: Center;
      margin-top: 650px;
      transform: translate(220%, 56%) scale(1.1);
    }
    /** input output inside the box**/
    *,*:before, *:after
    {
      margin:0;
      padding: 0;
      box-sizing: border-box;
    }
    body{
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      /**background:-webkit-linear-gradient(left,#FA8072 ,#d4af7a);**/
      background: #ededed;
    }
    input
    {
      border:none;
      outline: none;
      background: none;
    }
    /**for the white box **/
    .cont
    {
      overflow: hidden;
      position: relative;
      width: 900px;
      height: 550px;
      background:#fff;
    }
    .form
    {
      position: relative;
      width: 640px;
      height: 100%;
      padding:50px 30px;
      -webkit-transition:-webkit-transform 1.2s ease-in-out;
      transition: -webkit-transform 1.2s ease-in-out;
      transition:transform 1.2s ease-in-out;
      transition:transform 1.2s ease-in-out,-webkit-transform 1.2s ease-in-out;
    }
    .form h2{
      width: 100%;
      font-size: 30px;
      text-align: center;
      font-family: 'Quattrocento Sans', sans-serif;
    }
    label
    {
      display: block;
      width: 260px;
      margin: 25px auto;
      text-align: left;
    }
    label span
    {
      font-size: 14px;
      font-weight: 400;
      color: #505f75;
      font-family: 'Quattrocento Sans', sans-serif;
    }
    input
    {
      display: block;
      width: 110%;
      margin-top: 5px;
      font-size: 16px;
      padding-bottom: 5px;
      border-bottom: 1px solid #505f75;
    }
    button
    {
      display: block;
      margin: 0 auto;
      width: 260px;
      height: 36px;
      border-radius: 30px;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      font-family: 'Aclonica', sans-serif;
    }
    /** submit iside box**/
    .submit
    { border: none;
      margin-top: 40px;
      margin-bottom: 30px;
      font-weight: 500;
      background: #d4af7a;
    }
    .submit:hover
    {
      background: #d4af7a;
    }
    /** sbmit inside the image**/
    .submit2
    { border: none;
      margin-top: 40px;
      margin-bottom: 30px;
      font-weight: 500;
      border:2px solid #fff;
      font-family: 'Aclonica', sans-serif;
      font-weight: 500;
      background:-webkit-linear-gradient(left,#FA8072 ,#d4af7a);
    }
    .submit2:hover
    {
      background: rgba(0,0,0,0.5);
    }
    .submit3
    { border: 1px solid #d3dae9;
      color:#b8becc;
      margin-top: 40px;
      margin-bottom: 30px;
      font-weight: 500;
      background:white;
    }
    .submit3:hover
    {
      background:;
    }
    .submit4
    { border: 1px solid #d3dae9;
      color:#b8becc;
      font-weight: 500;
      background:white;
    }
    .forgot-pass
    {
      margin-top:  15px;
      text-align: right;
      font-size: 14px;
      font-weight: 500;
      margin-left: 336px;
      cursor: pointer;
    }
    .forgot-pass:hover
    {
      color:red;
    }
    /**code for the image and the text on it**/
    .sub-cont
    {
      overflow: hidden;
      position: absolute;
      margin-left: 640px;
      top: 0;
      width:900px;
      height: 100%;
      padding-left: 260px;
      background: #fff;
      -webkit-transition: -webkit-transform 1.2s ease-in-out;
      transition :-webkit-transform 1.2s ease-in-out;
      transition:transform 1.2s ease-in-out;
    }
    .img
    {
      overflow: hidden;
      z-index: 2;
      position: absolute;
      left:0;
      top: 0;
      width: 240px;
      height: 100%;
      padding-top: 360px;
    }
    .img:before
    {
      content: '';
      position: absolute;
      right: 0px;
      top: 0px;
      width:900px ;
      height: 100%;
      background-image: url('../img/uni.jpg');
      background-size: cover;
      transition: -webkit-transform 1.2s ease-in-out;
      transition:transform 1.2s ease-in-out,-webkit-transform 1.2s ease-in-out;
    }
    .img:after
    {
      content: '';
      position: absolute;
      top: 0px;
      left: 0px;
      width:100% ;
      height: 100%;
      background: rgba(0,0,0,0.5);
    }
    /**for text on img**/
    .img-text
    {
      z-index: 2;
      position: absolute;
      top: 50px;
      left: 0;
      width: 100%;
      padding:0 20px;
      text-align: center;
      color: #fff;
      -webkit-transition:-webkit-transform 1.2s ease-in-out;
      transition:-webkit-transform 1.2s ease-in-out;
      transition: transform 1.2s ease-in-out,-webkit-transform 1.2s ease-in-out;
    }
    .img-text h2
    {
      font-family: 'Nanum Pen Script', cursive;
      margin-bottom: 10px;
      font-weight: normal;
    }
    .img-text p
    {
      font-family: 'Nanum Pen Script', cursive;
      font-size: 14px;
      line-height: 1.5;
    }
    .sign-in
    {
      padding-top: 65px;
      -webkit-transition-timing-function:ease-out;
      transition-timing-function:ease-out;
    }
    /**button in image**/
    .img-btn
    {
      overflow: hidden;
      z-index:2;
      position: relative;
      width: 100px;
      height: 36px;
      margin:0 auto;
      background:transparent;
      color: #fff;
      text-transform: uppercase;
      font-size:15px ;
      cursor: pointer;
    }
    .img-btn33
    {
      overflow: hidden;
      z-index:2;
      position: relative;
      width: 60px;
      height: 16px;
      border:none;
      background:transparent;
      color: #fff;
      text-transform: uppercase;
      font-size:15px ;
      cursor: pointer;
    }
    .img-btn22
    {
      overflow: hidden;
      z-index:2;
      position: relative;
      width: 100px;
      height: 36px;
      margin:0 auto;
      background:transparent;
      color: #fff;
      text-transform: uppercase;
      font-size:15px ;
      cursor: pointer;
    }
    .img-btn:after{
      content: '';
      z-index: 2;
      position: absolute;
      left: 0;
      width: 100%;
      height: 100%;
      border:2px solid #fff;
      border-radius: 30px;
    }
    .img-btn span
    {
      position: absolute;
      left:0;
      top:0;
      display:flex;
      display:-webkit-box;
      -webkit-box-pack:center;
      justify-content: center;
      align-items: center;
      width:100%;
      height:100%;
      -webkit-transition:-webkit-transform 1.2s;
      transition:-webkit-transform 1.2s;
      transition: transform 1.2s;
      transition: transform 1.2s,-webkit-transform 1.2s;
    }


    .cont .s-signup .sign-in{
      -webkit-transition-timing-function:ease-in-out;
      transition-timing-function:ease-in-out;
      -webkit-transition-duration:1.2s;
      transition-duration:1.2s;
      -webkit-transform:translate3d(640px,0,0);
      transform:translate3d(640px,0,0);
    }
    .cont .s-signup .sub-cont{
      -webkit-transform:translate3d(-640px,0,0);
      transform:translate3d(-640px,0,0);
    }
    .cont.s-signup .img:before
    {
      -webkit-transform:translate3d(640px,0,0);
      transform:translate3d(640px,0,0);
    }
    .cont.s-signup .img-text.m-up{
      -webkit-transform:translateX(520px);
      transform:translateX(520px);
    }
    .img-text.m-in{
      -webkit-transform:translateX(-520px);
      transform:translateX(-520px);
    }
    .cont.s-signup .img-text.m-in{
      -webkit-transform:translateX(0);
      transform:translateX(0);
    }
  </style>

</head>
<body>
<div class="cont">
  <div class="form sign-in">
    <h2>Log In</h2>
    <label>
      <span><i style="margin-right: 5px" class="fas fa-envelope"></i>Email Address</span>
      <input type="email" id="username" name="email" autocomplete="off" required>
    </label>
    <label>
      <span><i style="margin-right: 5px" class="fas fa-lock"></i>Password</span>
      <input type="password" id="password" name="pass" autocomplete="off" required>
    </label>

    <div style="margin-right: 250px" >
      <input type="checkbox" name="sunday" id="check" hidden required>
      <label  for="check" class="checkmark"><label style="padding-left:16px;font-size: 10px">I Accepted <a href="#" class="terms">all Terms<a> thats in this website !</label></label></div>

    <button class="submit" id="submit" type="submit" onclick="validate()">
      Login
    </button>


    <button  class="submit3" type="button">Connect with <span style="font-weight:700;color:#81858f">facebook</span></button>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>If you dont have an account you can get it here!</p>
          <p>first fill our reports inside or outside to accesss our feachers so sign up ,</p>
          <left><img style="max-width:110px;max-height:110px;" src="../img/TRAINO.png"></left>
        </div>
        <div class="img-text m-in">
          <h2>On Of Us?</h2>
          <p> Now you can join us on social media follow us,</p>
          <a style="color: white" href="#"><i  class="fab fa-instagram"></i></a>
          <a style="color: white" href="#"> <i style="margin-left: 10px" class="fab fa-snapchat"></i></a>
          <a style="color: white" href="#"><i style="margin-left: 12px" class="fab fa-facebook"></i></a>
        </div>
        <button  class="submit4 img-btn33"><svg style="margin-left: 0px" class="bi bi-caret-left-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.86 8.753l5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 00-1.659-.753l-5.48 4.796a1 1 0 000 1.506z"/>
          </svg><svg style="margin-left: 10px" class="bi bi-caret-right-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 011.659-.753l5.48 4.796a1 1 0 010 1.506z"/>
          </svg></button><br>
        <button class="submit2 img-btn22"> <a style="color: white" href="../TraininginsideJordan_1.php"> Sign Up</a></button>

      </div>
    </div>

  </div>
</div>
<script type="text/javascript" src="Login/javascript.js"></script>
</body>
</html>



<!--
<div class="container">
    <div class="main">
        <h2>Javascript Login Form Validation</h2>
        <form id="form_id" method="post" name="myform">
            <label>User Name :</label>
            <input type="text" name="username" id="username" />
            <label>Password :</label>
            <input type="password" name="password" id="password" />
            <input type="button" value="Login" id="submit" onclick="validate()" />
        </form>
        <span><b class="note">Note : </b>For this demo use following username and password. <br /><b
                class="valid">User Name : Formget<br />Password : formget#123</b></span>
    </div>
</div> -->
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
<script src="js/login.js"></script>
<script>
  var attempt = 3; // Variable to count number of attempts.
  // Below function Executes on click of login button.
  function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "admin" && password == "123") {

      window.location = "Admin.php"; // Redirecting to other page.
      return false;
    } else {
      attempt--; // Decrementing by one.
      alert("login fail" + attempt + " attempt;");
      // Disabling fields after 3 attempts.
      if (attempt == 0) {
        document.getElementById("username").disabled = true;
        document.getElementById("password").disabled = true;
        document.getElementById("submit").disabled = true;
        return false;
      }
    }
  }

</script>

<script type="text/javascript" src="../admin../login../javascript.js"></script>
</html>
</body>

</html>
