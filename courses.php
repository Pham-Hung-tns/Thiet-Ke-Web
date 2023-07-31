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
        <h4 class="inner-text-title pt-5">Courses</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index1.php">Home</a></li>
          <li class="active"><i class="fas fa-angle-right"></i>Courses</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //inner banner -->

  <!-- courses section -->
  <div class="w3l-grids-block-5 py-5">
    <div class="container py-md-5 py-4">
      <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <p class="text-uppercase">Best Courses</p>
        <h3 class="title-style">Find The Right Course For You</h3>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="coursecard-single">
            <div class="grids5-info position-relative">
              <a href="reading.php">
                <img src="assets/images/reading.jpg" alt="" class="img-fluid" />
              </a>
            </div>
            <div class="content-main-top">
              <div class="content-top mb-4 mt-3">
                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                  <li> <i class="fas fa-book-open"></i> 20 Lesson from B1 to C1</li>
                  <li> <i class="fas fa-star"></i> 5</li>
                </ul>
              </div>
              <h4><a href="reading.php">Reading</a></h4>
              <p>Here you can find activities to practise your reading skills. Reading will help you to improve your
                understanding of the language and build your vocabulary.</p>
              <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                <h6>$40.00</h6>
                <a class="btn btn-style-primary" href="reading.php">Know Details<i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
          <div class="coursecard-single">
            <div class="grids5-info position-relative">
              <a href="Listening.php">
                <img src="assets/images/listening.jpg" alt="" class="img-fluid" />
              </a>
            </div>
            <div class="content-main-top">
              <div class="content-top mb-4 mt-3">
                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                  <li> <i class="fas fa-book-open"></i> 36 Lesson from B1 to C1</li>
                  <li> <i class="fas fa-star"></i> 4.3</li>
                </ul>
              </div>
              <h4><a href="Listening.php">Listening</a></h4>
              <p>Here you can find activities to practise your listening skills. Listening will help you to improve your
                understanding of the language and your pronunciation.</p>
              <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                <h6>$36.00</h6>
                <a class="btn btn-style-primary" href="Listening.php">Know Details<i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
          <div class="coursecard-single">
            <div class="grids5-info position-relative">
              <a href="vocabulary.php">
                <img src="assets/images/c3.jpg" alt="" class="img-fluid" />
              </a>
            </div>
            <div class="content-main-top">
              <div class="content-top mb-4 mt-3">
                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                  <li> <i class="fas fa-book-open"></i> 14 Lesson</li>
                  <li> <i class="fas fa-star"></i> 4.2</li>
                </ul>
              </div>
              <h4><a>Games Program each Week</a></h4>
              <p>The course is in progress. See you soon</p>
              <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                <h6>$30.00</h6>
                <a class="btn btn-style-primary" href="vocabulary.php">Know Details<i
                    class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- pagination -->
      <div class="pagination-style text-center mt-5">
        <ul>
          <li> <a href="#none" class="not-allowed" disabled="">
              <span class="fa fa-angle-double-left" aria-hidden="true"></span>
            </a>
          </li>
          <li><a class="active" href="#page">1</a></li>
          <li>
            <a href="#page">2</a>
          </li>
          <li>
            <a href="#page">3</a>
          </li>
          <li>
            <a href="#page"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
            </a>
          </li>
        </ul>
      </div>
      <!-- //pagination -->
    </div>
  </div>
  <!-- //courses section -->

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