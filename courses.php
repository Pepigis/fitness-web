<!doctype html>
<html class="no-js" lang="cs">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Gym trainer | Template </title>
  <meta name="description" content="">

  <meta name="robots" content="noindex, nofollow">
  <link rel="preconnect" href="../../../fonts.googleapis.com/index.html">
  <link rel="preconnect" href="../../../fonts.gstatic.com/index.html" crossorigin>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

<?php
include "assets/Db.php";

define('_DB_HOST', 'localhost');
define('_DB_NAME', 'cernyjo1');
define('_DB_USER', 'cernyjo1');
define('_DB_PASSWORD', 'Ew12345678!');


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    Db::connect(_DB_HOST, _DB_NAME, _DB_USER, _DB_PASSWORD);
} catch (Exception $ex) {
    echo "Chyba připojení k databázi: " . $ex->getMessage();
    exit;
}

$allRecords = Db::queryAll('SELECT * FROM project_courses');

?>

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/gijgo.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/animated-headline.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="black-bg">
<!-- ? Preloader Start -->
<div id="preloader-active">
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="preloader-inner position-relative">
      <div class="preloader-circle"></div>
      <div class="preloader-img pere-text">
        <img src="assets/img/logo/loder.png" alt="" fetchpriority="high" decoding="sync">
      </div>
    </div>
  </div>
</div>
<!-- Preloader Start -->
<header>
  <!-- Header Start -->
  <div class="header-area header-transparent">
    <div class="main-header header-sticky">
      <div class="container-fluid">
        <div class="menu-wrapper d-flex align-items-center justify-content-between">
          <!-- Logo -->
          <div class="logo">
            <a href="index.html"><img src="assets/img/logo/logo.png" alt="" fetchpriority="high" decoding="sync"></a>
          </div>
          <!-- Main-menu -->
          <div class="main-menu f-right d-none d-lg-block">
            <nav>
              <ul id="navigation">
                <li><a href="index.php">ÚVOD</a></li>
                <li><a href="about.php">O NÁS</a></li>
                <li><a href="courses.php">LEKCE</a></li>
                <li><a href="pricing.php">CENÍK</a></li>
                <li><a href="gallery.html">GALERIE</a></li>
                <li><a href="blog.html">Blog</a>
                  <ul class="submenu">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog_details.html">Blog Details</a></li>
                    <li><a href="elements.html">Elements</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">KONTAKT</a></li>
              </ul>
            </nav>
          </div>
          <!-- Header-btn -->
          <div class="header-btns d-none d-lg-block f-right">
            <a href="contact.html" class="btn">KONTAKTUJ NÁS</a>
          </div>
          <!-- Mobile Menu -->
          <div class="col-12">
            <div class="mobile_menu d-block d-lg-none"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->
</header>
<main>
  <!--? Hero Start -->
  <div class="slider-area2">
    <div class="slider-height2 d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="hero-cap hero-cap2 pt-70">
              <h2>Courses</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->
  <!--? Team -->




    <section class="team-area fix section-padding30">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section-tittle text-center mb-55">
            <h2>What I Offer</h2>
          </div>
        </div>
      </div>
            <div class="row">
<?php
  foreach ($allRecords as $record) {
    echo('

        <div class="col-lg-4 col-md-6">
          <div class="single-cat text-center mb-30">
            <div class="cat-icon">
              <img src="assets/img/gallery/'. $record["image_path"].'" alt="" loading="lazy" decoding="async">
            </div>
            <div class="cat-cap">
              <h5><a href="services.html">'. $record["title"]. '</a></h5>
              <p>'. $record["description"]. '</p>
            </div>
          </div>
        </div>

    ');
}
?>


  
  ?>

          </div>
      </div>
    </div>
  </section>
  <!-- Services End -->




  <!-- Traning categories Start -->
  <section class="traning-categories black-bg">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6 col-lg-6">
          <div class="single-topic text-center mb-30">
            <div class="topic-img">
              <img src="assets/img/gallery/cat1.png" alt="" loading="lazy" decoding="async">
              <div class="topic-content-box">
                <div class="topic-content">
                  <h3>Personal traning</h3>
                  <p>You’ll look at graphs and charts in Task One, how to approach the task and <br> the language needed
                    for a successful answer.</p>
                  <a href="courses.html" class="border-btn">View Courses</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="single-topic text-center mb-30">
            <div class="topic-img">
              <img src="assets/img/gallery/cat2.png" alt="" loading="lazy" decoding="async">
              <div class="topic-content-box">
                <div class="topic-content">
                  <h3>Group traning</h3>
                  <p>You’ll look at graphs and charts in Task One, how to approach the task and <br> the language needed
                    for a successful answer.</p>
                  <a href="courses.html" class="btn">View Courses</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Traning categories End-->
  <!--? video_start -->
  <div class="video-area section-bg2 d-flex align-items-center" data-background="assets/img/gallery/video-bg.png">
    <div class="container">
      <div class="video-wrap position-relative">
        <div class="video-icon">
          <a class="popup-video btn-icon" href="../../../www.youtube.com/watchbeee.html?v=up68UAfH0d0"><i
            class="fas fa-play"></i></a>
        </div>
      </div>
    </div>
  </div>


  <!-- video_end -->
  <!-- ? services-area -->
  <section class="services-area">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
          <div class="single-services mb-40">
            <div class="features-icon">
              <img src="assets/img/icon/icon1.svg" alt="" loading="lazy" decoding="async">
            </div>
            <div class="features-caption">
              <h3>Location</h3>
              <p>You’ll look at graphs and charts in Task One, how to approach </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
          <div class="single-services mb-40">
            <div class="features-icon">
              <img src="assets/img/icon/icon2.svg" alt="" loading="lazy" decoding="async">
            </div>
            <div class="features-caption">
              <h3>Phone</h3>
              <p>(90) 277 278 2566</p>
              <p> (78) 267 256 2578</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
          <div class="single-services mb-40">
            <div class="features-icon">
              <img src="assets/img/icon/icon3.svg" alt="" loading="lazy" decoding="async">
            </div>
            <div class="features-caption">
              <h3>Email</h3>
              <p>jacson767@gmail.com</p>
              <p>contact56@zacsion.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<footer>
  <!--? Footer Start-->
  <div class="footer-area black-bg">
    <div class="container">
      <div class="footer-top footer-padding">
        <!-- Footer Menu -->
        <div class="row">
          <div class="col-xl-12">
            <div class="single-footer-caption mb-50 text-center">
              <!-- logo -->
              <div class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <a href="index-2.html"><img src="assets/img/logo/logo2_footer.png" alt="" loading="lazy"
                                            decoding="async"></a>
              </div>
              <!-- Menu -->
              <!-- Header Start -->
              <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="main-header main-header2">
                  <div class="menu-wrapper menu-wrapper2">
                    <!-- Main-menu -->
                    <div class="main-menu main-menu2 text-center">
            <nav>
              <ul id="navigation">
                <li><a href="index.html">ÚVOD</a></li>
                <li><a href="about.html">O NÁS</a></li>
                <li><a href="courses.php">LEKCE</a></li>
                <li><a href="pricing.php">CENÍK</a></li>
                <li><a href="gallery.html">GALERIE</a></li>
                <li><a href="contact.html">KONTAKT</a></li>
              </ul>
            </nav>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Header End -->
              <!-- social -->
              <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s" data-wow-delay=".8s">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="../../../www.facebook.com/sai4ull.html"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div class="row d-flex align-items-center">
          <div class="col-lg-12">
            <div class="footer-copy-right text-center">
              <p>Vytvořil tým Lukáše Fidlera a Daniela Fuťka pod dohledem pedagoga Bc. Mikuláše Slavíka v rámci studia
                T3A 2025/26 a vývoje seminárního projektu předmětu PRG na SPŠ ELIT Dobruška.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top">
  <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/animated.headline.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="assets/js/contact.js"></script>
<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/mail-script.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>