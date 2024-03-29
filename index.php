<?php
error_reporting(0);
session_start(); 
$_SESSION['success_page'] = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>WHD - Science Bazaar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Science Bazaar <div style="opacity: 0.5;">WHD</div></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="application/register.php" class="nav-link">Apply Now</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="committee.php" class="nav-link">Committee</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="room.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="frequently-asked-questions.php">FAQ</a>
              <a class="dropdown-item" href="terms-and-conditions.php">Terms and Conditions</a>

              <?php
              if ($_SESSION['logged_in'] == true) {
                echo '<hr>
                <center style="white-space: nowrap; 
                               width: 200px; 
                               overflow: hidden;
                               text-overflow: ellipsis;">'
                  . $_SESSION['email'] .
                  '</center>
                <a class="dropdown-item" href="auth/logout.php">Logout</a>';
              } else {
                echo '<hr>
                <a class="dropdown-item" href="auth/login.php">Login</a>
                <a class="dropdown-item" href="auth/sign-up.php">Register</a>
                ';
              }
              ?>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="home-slider ftco-degree-bg">
    <div class="slider-item">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-10 ftco-animate text-center">
            <h1 class="mb-4">I love to
              <strong class="typewrite" data-period="4000" data-type='[ "Create.", "Innovate.", "Design."]'>
                <span class="wrap"></span>
              </strong>
            </h1>
            <p>Science has conferred many gifts on modern life. Indeed, they are far too many to be counted.</p>
            <p><a href="application/register.php" class="btn btn-primary btn-outline-white px-4 py-3 popup-vimeo"><span class="ion-ios-paper mr-2"></span> Apply Now</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END slider -->

  <section class="ftco-section-featured ftco-animate">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="carousel owl-carousel">
            <div class="item">
              <img src="images/dashboard_full_2.jpg" class="img-fluid" alt="">
            </div>
            <div class="item">
              <img src="images/dashboard_full_1.jpg" class="img-fluid" alt="">
            </div>
            <div class="item">
              <img src="images/dashboard_full_3.jpg" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">World Humanitarian Drive</span>
          <h2>Science Bazaar</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="d-flex justify-content-center">
              <a href="application/register.php">
                <div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-layers"></span></div>
              </a>
            </div>
            <div class="media-body p-2">
              <h3 class="heading">Apply Now</h3>
              <p>Submit your ideas now!</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="d-flex justify-content-center">
              <a href="committee.php">
                <div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-gears"></span></div>
              </a>
            </div>
            <div class="media-body p-2">
              <h3 class="heading">Committee</h3>
              <p>The Science Bazaar has some committees to make charge of the event.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="d-flex justify-content-center">
              <a href="contact.php">
                <div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-paper-plane"></span></div>
              </a>
            </div>
            <div class="media-body p-2">
              <h3 class="heading">Contact Us</h3>
              <p>You can contact us anytime from anywhere.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="d-flex justify-content-center">
              <a href="frequently-asked-questions.php">
                <div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-live_help"></span></div>
              </a>
            </div>
            <div class="media-body p-2">
              <h3 class="heading">Need Help?</h3>
              <p>There are answered questions. You can take a look over it. Still couldn't find the answer for your question? <a href="contact.php">Contact us</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section-parallax ftco-degree-bg">
    <div class="parallax-img d-flex align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="h1 font-weight-bold">Terms and Conditions</h2>
            <p><a href="terms-and-conditions.php" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">Read Now</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">WHD - Science Bazaar</span>
          <h2>Committee</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="committee/organizing-committe.php" class="block-20" style="background-image: url('images/image_1.jpg');">
            </a>
            <div class="text p-4 d-block">
              <h3 class="heading"><a href="organizing-committee.php">Organizing Committee</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry" data-aos-delay="100">
            <a href="committee/steering-committee.php" class="block-20" style="background-image: url('images/image_2.jpg');">
            </a>
            <div class="text p-4">
              <h3 class="heading"><a href="committee/steering-committee.php">Steering Committee</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry" data-aos-delay="200">
            <a href="committee/judging-committee.php" class="block-20" style="background-image: url('images/image_3.jpg');">
            </a>
            <div class="text p-4">
              <h3 class="heading"><a href="committee/judging-committee.php">Judging Committee</a></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Company</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Quick Links</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Home</a></li>
              <li><a href="#" class="py-2 d-block">About</a></li>
              <li><a href="#" class="py-2 d-block">Services</a></li>
              <li><a href="#" class="py-2 d-block">Portfolio</a></li>
              <li><a href="#" class="py-2 d-block">Contact</a></li>
              <li><a href="#" class="py-2 d-block">Privacy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Contact Information</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">198 West 21th Street, Suite 721 New York NY 10016</a></li>
              <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
              <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
              <li><a href="#" class="py-2 d-block">email@email.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Newsletter</h2>
            <p>Far far away, behind the word mountains, far from the countries.</p>
            <form action="#" class="subscribe-form">
              <div class="form-group">
                <span class="icon icon-paper-plane"></span>
                <input type="text" class="form-control" placeholder="Subscribe">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>