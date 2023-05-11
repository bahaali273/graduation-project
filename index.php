<!DOCTYPE html>
<html lang="en">
<!--==========================
  Header Section
  ============================-->

<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="#hero"><img src="img/TRAINO.png" alt="" /></img></a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="#hero">Header 1</a></h1>-->
        </div>
      
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#hero">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#section-photo">Training companies</a></li>
                <i><a href="TraininginsideJordan_1.php">Inside Jordan</a></i>
                <i><a href="TrainingoutsideJordan.php">outside Jordan</a></i>

                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>

    </div>
</header>
<!-- #header -->

<head>
    <meta charset="utf-8">
    <title>TRAINO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">
    <!-- fontawsom pro -->
    <link href="fontawesome/css/all.min.css'" rel="stylesheet" />
    <script src="fontawesome/js/all.min.js"></script>


    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div id="preloader"></div>

    <!--==========================
  Hero Section
  ============================-->
    <section id="hero">
        <div class="hero-container navbar-light">
            <div class="wow fadeIn">
                <div class="hero-logo">
                    <img src="img/TRAINO.png" alt="" />
                </div>
                <h1>Welcome to TRAINO</h1>
                <div class="section-title-divider " style="background-color:#b61c23;width: 100px;"></div>

                <h2>TRAINO FOR <span class="rotating">ASU, TRAINIG, STUDENT</span></h2>

                <div class="col-md-12 text-center">
                    <a href="#about" class="btn btn-light btn-lg mr-2">Get Strated</a>
                    <a href="#services" class="btn btn-light btn-lg ml-2">Our Services</a>
                </div>
            </div>
        </div>
    </section>


    <!--==========================
  About Section
  ============================-->
    <section id="about" class="bg-danger">
        <div class=" container wow fadeInUp">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h3 class="section-title h1 mt-5">Introduction</h3>
                    <div class="section-title-divider"></div>

                    <div class="col-md-12 text-center">
                        <p class="section-description h3 mt-5 text-white">
                            Training Field program is a compulsory subject for all
                            specializations
                            offered by the faculty. All Faculty students are required to undergo the training field
                            program
                            at an approved private,
                            government, or semi- government IT enterprise.
                            The field training formal period is during the summer semester of the third academic year.

                        </p>
                    </div>


                </div>
                <div class="col-md-12 text-center">
                    <a href="#contact" class="btn btn-light btn-lg">Contact Us</a>
                </div>
            </div>
        </div>

    </section>

    <!--==========================
  Services Section
  ============================-->
    <section id="services" class="bg-white">
        <div class="container wow fadeInUp">
            <div class="row mt-5">
                <div class="col-md-12 mb-5 ">
                    <h3 class="section-title text-danger">At Your Service</h3>
                    <div class="section-title-divider " style="background-color:#b61c23"></div>

                </div>
            </div>

            <div class="row text-center mt-5">
                <div class="col-md-3 service-item">
                    <i class=" fa-8x fad fa-user-graduate text-danger "></i>
                    <h3 class="mt-3 text-danger"> STUDENT</h3>
                    <h4>All you need to know about graduation projects 1 and 2</h4>
                    <form action="student\login.php">
                        <button type="submit" class="btn btn-outline-danger p-3 h3">login as student</button>
                    </form>


                </div>
                <div class="col-md-3 service-item">
                    <i class=" fas fa-user-chart text-danger fa-8x"></i>
                    <h3 class="mt-3 text-danger"> ACADEMIC </h3>
                    <h4>All you need to know about graduation projects 1 and 2</h4>
                    <form action="Academicadvaisor\login.php">
                        <button type="submit" class="btn btn-outline-danger p-3 h3">login as academic</button>
                    </form>


                </div>
                <div class="col-md-3 service-item">
                    <i class="fal fas fa-users-crown text-danger fa-8x"></i>
                    <h3 class="mt-3 text-danger"> ADMIN</h3>
                    <h4>All you need to know about graduation projects 1 and 2</h4>
                    <form action="admin\login.php">
                        <button type="submit" class="btn btn-outline-danger p-3 h3">login as admin</button>
                    </form>



                </div>
                <div class="col-md-3 service-item">
                    <i class="fas fa-user-tie text-danger fa-8x"></i>
                    <h3 class="mt-3 text-danger"> TRAINER</h3>
                    <h4>All you need to know about graduation projects 1 and 2</h4>
                    <form action="Traineradvaisor\login.php">
                        <button type="submit" class="btn btn-outline-danger h3 p-3">login as
                            trainer</button>
                    </form>


                </div>

            </div>
        </div>
    </section>


    <section id="section-photo"  class="section-photo clearfix">
        <ul class="photos-showcase ">
            <li>
                <figure class="company-photo">
                    <img src="img/2aeb0730-c5cd-4fd4-8c90-e37c4d361d18.jpg" alt=""/>
                </figure>
            </li>   <li>

                <figure class="company-photo">
                   
                    <img src="img/3f0d5d82-a5e5-419d-b956-465e4193a48d.jpg" alt=""/>
                </figure>
            </li>   <li>
                <figure class="company-photo">
                    
                    <img src="img/49e36abe-e267-42e1-8ef1-54c80609409f.jpg" alt=""/>
                </figure>
            </li>   <li>
                <figure class="company-photo">
                  
                    <img src="img/946b33e3-6404-42c6-a9fd-aa34ff59a9a7.jpg" alt=""/>
                </figure>
            </li>

        </ul>

        <ul class="photos-showcase ">
            <li>
                <figure class="company-photo">
                    
                    <img src="img/a47ab22f-79cb-4524-9e19-3480b473ea74.jpg" alt=""/>
                </figure>
            </li>   <li>
                <figure class="company-photo">
                    
                    <img src="img/be095e9f-09ef-4e1f-9564-b4a6cd5461b5.jpg" alt=""/>
                </figure>
            </li>   <li>
                <figure class="company-photo">
                  
                    <img src="img/e6e1a4cb-e637-454a-9ea4-f3f63a297d48.jpg" alt=""/>
                </figure >
            </li>   <li>
                <figure class="company-photo">
                  
                    <img src="img/f0f6a7cf-c46c-4767-9e8f-a30d4dc0026a.jpg" alt=""/>
                </figure>
            </li>

        </ul>

    </section>



    <!--==========================
  Team Section
  ============================-->



    <!-- Contact Section -->
    <section class="page-section " id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">

                    <hr class="divider my-4">
                    <p class="text-muted mb-5 h2">For further information, give us a call or send us an email and we
                        will
                        get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone text-danger fa-4x"></i>
                    <div class="h2">00962-6560​9999</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope text-danger fa-4x"></i>
                    <!-- Make sure to change the email address in anchor text AND the link below! -->
                    <a class="d-block h2" href="mailto:y_alqasrawi@asu.edu.jo">y_alqasrawi@asu.edu.jo</a>
                </div>
            </div>
        </div>
    </section>


    <head>
        <meta charset="utf-8">
        <title>TRAINO</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Fonts -->
        <link
            href="../https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
            rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Libraries CSS Files -->
        <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../lib/animate-css/animate.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="../css/style.css" rel="stylesheet">
    </head>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright h2">
                        <P>Copyright © 2020 - Applied science university</P>
                    </div>
                    <div class="credits">
                        <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
            -->

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/morphext/morphext.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/stickyjs/sticky.js"></script>
    <script src="lib/easing/easing.js"></script>

    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>


    <script src="contactform/contactform.js"></script>


</body>

</html>