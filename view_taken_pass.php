<!DOCTYPE html>


<?php 
session_start();
if(!isset($_SESSION['username']))
{
  header('location:stud_login.php');
}

 ?>


<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BUSS PASS OFFICIAL SITE</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/logo.png" >

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="index.php" class="scrollto">BUS-PASS</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="view_taken_pass.php">VIEW_TAKEN_PASSES</a></li>
          <li><a href="logout.php" style="color:red;">LOGOUT</a>
</li>
         
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators"></ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
             <div class="carousel-background"><img src="img/bus7.png" alt=""></div>
              <div class="carousel-container">
                  <div class="container-fluid">
                                     <h1 align="center" style="color:cyan">welcome  <?php echo $_SESSION['username'];  ?></h1>
                    <hr>
                      <h3 style="color:red" align="center" class="animated shake "> <b>VIEW PASS AND VALIDITY OF YOUR PASS HERE</b></h3>

                           <form method="post" action="view_taken_pass.php">
                                      <table style="width:50%"  align="right">
                                        <tr>
                                          <td colspan="2"></td>
                                          <td><input type="text" name="user" placeholder="enter your name" style="border:8px solid rgba(211,211,211,0.5);height: 50px;
                                          width: 250px;"required><input type="submit" name="submit" value="view_pass"style="border-radius: 70%;border: 10px solid rgba(211,211,211,0.5);height: 100px;
                                          width: 100px;background-color:#CCFFFF;"></td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" align="center"></td>
                                          <td></td>
                                        </tr>
                                      </table>
                                  </form>
 <?php 
error_reporting(0);
if(isset($_POST['submit']))
{
    $image=$_POST['image'];
    $name=$_POST['user'];
    $collge=$_POST['collge'];
    $route=$_POST['route'];
    $class=$_POST['class'];
    $dob=$_POST['dob'];
    $fee=$_POST['fee'];
    $passid=$_POST['passid'];
    $attested=$_POST['attested'];
    $validity=$_POST['validity'];

  //$fee=$_POST['fee'];

  include('dbcon.php');
  include('taken_pass_function.php');

  viewgivenpassdetails($image,$name,$collge,$route,$class,$age,$fee,$passid,$attested,$validity);
}


 ?>

</div>
 </div>
  </div>
   </div>
    </div>
      </div>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
   

    <!--==========================
      About Us Section
    ============================-->
    <!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    
    <section id="about">
      <div class="container">

       <!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
   <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>We are always available to help the students.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Sangamner Bus Depot,Pune-Nashik Hwy</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+02425 223304</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">msrtc@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form" >
          <form action="feedback.php" method="post">
  <fieldset>   
    <div class="form-group">
      <label for="exampleInputEmail1"><b>Name:</b></label>
       <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1"><b>Email Address:</b></label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1"><b>Subject:</b></label>
       <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1"><b>Message:</b></label>
     <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
    </div>
   <div class="text-center"><button name="submit" type="submit">Send Message</button></div>
  </fieldset>
</form>
 </div>
      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Bus-Pass</h3>
            <p>Our system overcome the problems with current system and issues bus passes to students on a single click, while sitting at home. </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Sangamner <br> Bus Depot, <br>Pune-Nashik Hwy<br>
              <strong>Phone:</strong> +02425 223304<br>
              <strong>Email:</strong> msrtc@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BUS_PASS</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="#">Dipak Aher</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>




