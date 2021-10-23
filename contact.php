<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Vos informations ont été soumises avec succès');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Medical care  | contact</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  
  

<!--header top-->
<div class="header-top">
      <div class="container clearfix">
            <div class="top-left">
                  <h6>Horaires d'ouverture : du lundi au samedi - de 8h à 22h</h6>
            </div>
            <div class="top-right">
                  <ul class="social-links">
                        <li>
                              <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                              </a>
                        </li>
                  </ul>
            </div>
      </div>
</div>
<!--header top-->
<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="index.html">
                              <img src="images/log.png" alt="" width="230">
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <br>
                              <a href="#">
                                    <span>info@systememedic.com</span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Appellez nous</strong>
                              <br>
                              <span>+ (216) - 23 792 583</span>
                        </li>
                  </ul>
                  <div class="link-btn">
                    <a href="hms/admin" class="btn-style-one">Espace administrateur</a>
                </div>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li >
                              <a href="index.html">Acceuil</a>
                        </li>
                        <li>
                              <a href="about.html">A propos de nous</a>
                        </li>

                        
                        <li class="active">
                            <a href="contact.php">Contact</a>
                      </li>
                  
                      <li>
                        <a href="patient.php">Patient</a>
                  </li>
              
                  <li>
                    <a href="hms/doctor/">Médcin</a>
              </li>
          
           
      
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Contactez nous </h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">Acceuil &nbsp;/</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--==================================
=            Contact Form            =
===================================-->
<section class="section contact">
    <!-- container start -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- address start -->
                <div class="address-block">
                    <!-- Location -->
                    <div class="media">
                        <i class="fa fa-map-o"></i>
                        <div class="media-body">
                            <h3>Adresse</h3>
                            <p>himalaya , NY 5001, charguia Tunis
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h3>Télèphones</h3>
                            <p>
                                (+216 )23-792-583
                                <br>(+216) 97-258-632
                            </p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="media">
                        <i class="fa fa-envelope-o"></i>
                        <div class="media-body">
                            <h3>Email</h3>
                            <p>
                              info@systememedic.com
                                <br>support@systememedic.com
                            </p>
                        </div>
                    </div>
                </div>
                <!-- address end -->
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <!-- contact form start -->
                    <form  name="contactus" method="post" class="row">

                    
                        <!-- name -->
                        <div class="col-md-6">
                              <span><input  class= "form-control main" type="text" name="fullname" required="true" value="" placeholder="Nom"></span>
                        </div>
                        <!-- email -->
                        <div class="col-md-6">
                              <span><input  class= "form-control main"  type="email" name="emailid" required="ture" value=""  placeholder="Email"></span>
                        </div>
                        <!-- phone -->
                        <div class="col-md-12">
                              <span><input  class= "form-control main"  type="text" name="mobileno" required="true" value=""  placeholder="Télèphone"></span>
                        </div>
                        <!-- message -->
                        <div class="col-md-12">
                              <span><textarea  class= "form-control main"  name="description" required="true"  placeholder="Message"> </textarea></span>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one"  type="submit" name="submit" value="Submit">Envoyé</button>
                        </div>
                    </form>
                    <!-- contact form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->

<!--================================
=            Google Map            =
=================================-->
    <!-- Google Map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30391.74648640759!2d10.146837527807504!3d36.805605982927474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd338dd80176d9%3A0x5297dd538ad1cc65!2sH%C3%B4pital%20Charles%20Nicolle!5e0!3m2!1sfr!2stn!4v1633605653211!5m2!1sfr!2stn" width="1800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<!--====  End of Google Map  ====-->

<!--footer-main-->
<footer class="footer-main">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="about-widget">
                <h6>Liens</h6>
                <ul class="location-link">
                  <li class="item">
                    <i class="fa fa-map-marker"></i>
                    <p>himalaya , NY 5001, charguia Tunis </p>
                  </li>
                  <li class="item">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <a href="#">
                      <p>info@systememedic.com</p>
                    </a>
                  </li>
                  <li class="item">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>(216) 23 792 583 </p>
                  </li>
                </ul>
                <ul class="list-inline social-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <h6>Espaces</h6>
              <ul class="menu-link">
              <li>
                  <a href="hms/user-login.php">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>Espace client</a>
                </li>
                <li>
                  <a href="hms/doctor/">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>Espace Medcins</a>
                </li>
                <li>
                  <a href="hms/admin">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>Espace Admin</a>
                </li>
            
              </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="about-widget">
                 
                  </div>
                  <div class="footer-logo">
                    <figure>
                      <a href="index.html">
                        <img src="images/log-removebg-preview.png" alt="" width="270">
                      </a>
                    </figure>
                  </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container clearfix">
          <div class="copyright-text">
            <p>&copy; Copyright 2021
              <a href="index.html">Medic</a>
            </p>
          </div>
          <ul class="footer-bottom-link">
            <li>
              <a href="index.html">Acceuil</a>
            </li>
            <li>
              <a href="about.html">A propos</a>
            </li>
            <li>
              <a href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <!--End footer-main-->
    
</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="plugins/timePicker.js"></script>
<script src="js/script.js"></script>
</body>

</html>