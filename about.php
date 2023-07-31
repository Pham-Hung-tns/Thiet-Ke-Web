<!doctype html>
<?php
session_start();

?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Geralt English</title>
  <!-- Google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <!-- Template CSS Style link -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!-- header -->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index1.php"><i class="fas fa-graduation-cap"></i>Geralt
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
            <?php if(isset($_SESSION["name"]))
            {
              include('layoutLogout.php'); 
            }
            else
            {
              include("layoutLogin.php");
            }
            ?>

          </ul>
          <!-- search-right -->
          <div class="header-search position-relative">
            <div class="search-right mx-lg-2">
              <a href="#search" class="btn search-btn p-0" title="search">
                <i class="fas fa-search"></i></a>
              <!-- search popup -->
              <div id="search" class="pop-overlay">
                <div class="popup">
                  <form action="#search" method="GET" class="search-box">
                    <input type="search" placeholder="Enter Keyword..." name="search" required="required" autofocus="">
                    <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                  </form>
                </div>
                <a class="close" href="#close">×</a>
              </div>
              <!-- //search popup -->
            </div>
          </div>
          <!--//search-right-->
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="cont-ser-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!-- //header -->

  <!-- inner banner -->
  <section class="inner-banner py-5">
    <div class="w3l-breadcrumb py-lg-5">
      <div class="container pt-4 pb-sm-4">
        <h4 class="inner-text-title pt-5">About Us</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index1.php">Home</a></li>
          <li class="active"><i class="fas fa-angle-right"></i>About Us</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //inner banner -->

  <!-- home image with content block -->
  <?php include("connectUs.php")?>
  <!-- //home image with content block -->

  <!-- stats block -->
  <?php include("statsBlock.php")?>
  <!-- //stats block -->

  <!-- testimonials block -->
  <?php include('celebrityBlock.php') ?>
  <!-- //testimonials block -->

  <!-- team block -->
  <section class="w3l-team-13 py-5" id="team">
    <div class="container py-md-5 py-4">
      <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <p class="text-uppercase">Our Team</p>
        <h3 class="title-style">Meet our Teachers</h3>
      </div>
      <div class="row text-center left-side">
        <div class="col-lg-3 col-6">
          <div class="image-one">
            <a href="#team">
              <img src="assets/images/team1.jpg" class="arrow-png img-responsive" />
              <h4>Turne Leo</h4>
              <div class="buttons-teams2 mt-2">
                <a href="#team"><i class="fab fa-facebook-square"></i></a>
                <a href="#team"><i class="fab fa-twitter-square"></i></a>
                <a href="#team"><i class="fab fa-google-plus-square"></i></a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="image-one">
            <a href="#team">
              <img src="assets/images/team2.jpg" class="arrow-png img-responsive">
              <h4>Enrique Lal</h4>
              <div class="buttons-teams2 mt-2">
                <a href="#team"><i class="fab fa-facebook-square"></i></a>
                <a href="#team"><i class="fab fa-twitter-square"></i></a>
                <a href="#team"><i class="fab fa-google-plus-square"></i></a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6 mt-lg-0 mt-4">
          <div class="image-one">
            <a href="#team">
              <img src="assets/images/team3.jpg" class="arrow-png img-responsive">
              <h4>Smith Ker</h4>
              <div class="buttons-teams2 mt-2">
                <a href="#team"><i class="fab fa-facebook-square"></i></a>
                <a href="#team"><i class="fab fa-twitter-square"></i></a>
                <a href="#team"><i class="fab fa-google-plus-square"></i></a>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6 mt-lg-0 mt-4">
          <div class="image-one">
            <a href="#team">
              <img src="assets/images/team4.jpg" class="arrow-png img-responsive">
              <h4>Forkler Lee</h4>
              <div class="buttons-teams2 mt-2">
                <a href="#team"><i class="fab fa-facebook-square"></i></a>
                <a href="#team"><i class="fab fa-twitter-square"></i></a>
                <a href="#team"><i class="fab fa-google-plus-square"></i></a>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //team block -->

  <!-- about-2 section -->
  <section class="w3l-about-2 pb-5 pt-4">
    <div class="container pb-md-5 pb-4">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6 about-2-secs-right mb-lg-0 mb-4 text-center pe-lg-4">
          <img src="assets/images/image.jpg" alt="" class="img-fluid radius-image m-auto" />
        </div>
        <div class="col-lg-6 about-2-secs-left ps-lg-5">
          <p class="text-uppercase">Our Environment</p>
          <h3 class="title-style mb-sm-3 mb-2">Active Learning, Expert Teachers & Safe Environment</h3>
          <p>Geralt English is a place to connect people with similar goals and passions. You will be living, learning
            and experiencing in a completely new environment. All your comments will always be noted and improved by us.
            For an environment for global language learning.</p>
          <div class="d-flex align-items-center mt-5">
            <a class="btn btn-style btn-style-3" href="contact.php">Contact Us</a>
            <a class="btn btn-style-primary ms-4"
              href="https://www.tuni.fi/en/about-us/campus-development-development-project">Learn More<i
                class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //about-2 section -->

  <!-- call block -->
  <section class="w3l-call-to-action-6">
    <div class="container py-md-5 py-sm-4 py-5">
      <div class="d-lg-flex align-items-center justify-content-between">
        <div class="left-content-call">
          <h3 class="title-big">Call To Enroll For You</h3>
          <p class="text-white mt-1">Begin the change today!</p>
        </div>
        <div class="right-content-call mt-lg-0 mt-4">
          <ul class="buttons">
            <li class="phone-sec me-lg-4"><i class="fas fa-phone-volume"></i>
              <a class="call-style-w3" href="">+84 355 725 203</a>
            </li>
            <li><a href="contact.php" class="btn btn-style btn-style-2 mt-lg-0 mt-3">Join for free</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- //call block -->

  <!-- footer block -->
  <?php include("endLayout.php") ?>
  <!-- //footer block -->

  <!-- Js scripts -->
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
  </button>
  <script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>
  <!-- //move top -->

  <!-- common jquery plugin -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- //common jquery plugin -->

  <!-- counter-->
  <script src="assets/js/counter.js"></script>
  <!-- //counter-->

  <!-- theme switch js (light and dark)-->
  <script src="assets/js/theme-change.js"></script>
  <!-- //theme switch js (light and dark)-->

  <!-- MENU-JS -->
  <script>
  $(window).on("scroll", function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function() {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function() {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
  </script>
  <!-- //MENU-JS -->

  <!-- disable body scroll which navbar is in active -->
  <script>
  $(function() {
    $('.navbar-toggler').click(function() {
      $('body').toggleClass('noscroll');
    })
  });
  </script>
  <!-- //disable body scroll which navbar is in active -->

  <!-- bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap -->
  <!-- //Js scripts -->
</body>

</html>