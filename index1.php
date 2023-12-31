<!doctype html>
<?php
session_start();

?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>English Geralt</title>
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
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
            </li>
            <?php if(isset($_SESSION["name"]))
            {
              include('layoutLogout.php'); 
            }
            else
            {
              include("layoutLogin.php");
            }
            ?>
            <!-- <li class="nav-item">
              <a class="nav-link" href="courses.php">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="notebook.php">Notebook</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li> -->

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

  <!-- banner section -->
  <section id="home" class="w3l-banner py-5">
    <div class="banner-content">
      <div class="container py-4">
        <div class="row align-items-center pt-sm-5 pt-4">
          <div class="col-md-6">
            <h3 class="mb-lg-4 mb-3">English With Geralt<span class="d-block">Best Education</span>
            </h3>
            <p class="banner-sub">Learn, Earn and Grow</p>
            <div class="d-flex align-items-center buttons-banner">
              <a href="contact.php" class="btn btn-style mt-lg-5 mt-4">Contact Us</a>
            </div>
          </div>
          <div class="col-md-6 right-banner-2 text-end position-relative mt-md-0 mt-5">
            <div class="sub-banner-image mx-auto">
              <img src="assets/images/banner.png" class="img-fluid position-relative" alt=" ">
            </div>
            <div class="banner-style-1 position-absolute">
              <div class="banner-style-2 position-relative">
                <h4>Hi <?php
                if (isset($_SESSION["name"])) {
                  echo $_SESSION["name"];
                }
                else{
                  echo "Human. How are you?";
                }
                                ?></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //banner section -->

  <!-- home 4grids block -->
  <section class="services-w3l-block py-5" id="features">
    <div class="container py-md-5 py-4">
      <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <p class="text-uppercase">Best Features</p>
        <h3 class="title-style">Achieve Your Goals With English Geralt</h3>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
          <div class="icon-box icon-box-clr-1">
            <div class="icon"><i class="fas fa-user-friends"></i></div>
            <h4 class="title"><a href="#about">Expert Teachers</a></h4>
            <p>Teachers have many years of experience in teaching at major universities across the country</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-md-0 mt-4">
          <div class="icon-box icon-box-clr-2">
            <div class="icon"><i class="fas fa-book-reader"></i></div>
            <h4 class="title"><a href="#about">Quality Education</a></h4>
            <p>Top quality in the world with courses tailored to you: office and distance</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
          <div class="icon-box icon-box-clr-3">
            <div class="icon"><i class="fas fa-user-graduate"></i></div>
            <h4 class="title"><a href="#about">Life Time Support</a></h4>
            <p>Our team of experts will support you until you reach your goal</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
          <div class="icon-box icon-box-clr-4">
            <div class="icon"><i class="fas fa-university"></i></div>
            <h4 class="title"><a href="#about">Best Scholarships</a></h4>
            <p>Valuable scholarships are waiting for you to discover...</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- home 4grids block -->

  <!-- home image with content block -->
  <?php include("connectUs.php")?>
  <!-- //home image with content block -->

  <!-- courses section -->
  <div class="w3l-grids-block-5 home-course-bg py-5" id="courses">
    <div class="container py-md-5 py-4">
      <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <p class="text-uppercase">Best Courses</p>
        <h3 class="title-style">Find The Right Course For You</h3>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="coursecard-single">
            <div class="grids5-info position-relative">
              <img src="assets/images/reading.jpg" alt="" class="img-fluid" />
              <div class="meta-list">
                <a href="reading.php">Reading</a>
              </div>
            </div>
            <div class="content-main-top">
              <div class="content-top mb-4 mt-3">
                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                  <li> <i class="fas fa-book-open"></i> 20 Lesson from B1 to C1</li>
                  <li> <i class="fas fa-star"></i> 5</li>
                </ul>
              </div>
              <h4><a href="reading.php">Reading</a></h4>
              <p> Here you can find activities to practise your reading skills. Reading will help you to improve your
                understanding of the language and build your vocabulary. </p>
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
              <img src="assets/images/listening.jpg" alt="" class="img-fluid" />
              <div class="meta-list">
                <a href="Listening.php" class="sec-2">Listening</a>
              </div>
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
              <img src="assets/images/game.jpg" alt="" class="img-fluid" />
              <div class="meta-list">
                <a class="sec-3">Games</a>
              </div>
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
                <a class="btn btn-style-primary">Know Details<i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-sm-5 mt-4 pt-sm-0 pt-1">
        <a class="btn btn-style btn-style-secondary mt-sm-3" href="courses.php">
          Browse more courses</a>
      </div>
    </div>
  </div>
  <!-- //courses section -->

  <!-- why choose block -->
  <section class="w3l-service-1 py-5">
    <div class="container py-md-5 py-4">
      <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <p class="text-uppercase">Why Choose Us</p>
        <h3 class="title-style">Tools For Teachers And Learners</h3>
      </div>
      <div class="row content23-col-2 text-center">
        <div class="col-md-6">
          <div class="content23-grid content23-grid1">
            <h4><a href="about.php">Expert Teachers</a></h4>
          </div>
        </div>
        <div class="col-md-6 mt-md-0 mt-4">
          <div class="content23-grid content23-grid2">
            <h4><a href="about.php">Awards</a></h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //why choose block -->

  <!-- stats block -->
  <?php include("statsBlock.php")?>
  <!-- //stats block -->

  <!-- testimonials block -->
  <?php include('celebrityBlock.php') ?>
  <!-- //testimonials block -->

  <!-- blog block -->
  <div class="w3l-blog-block-5 py-5" id="blog">
    <div class="container py-md-5 py-4">
      <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <p class="text-uppercase">Our News</p>
        <h3 class="title-style">Latest <span>Blog</span> Posts</h3>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="blog-card-single">
            <div class="grids5-info">
              <a href="#blog"><img src="assets/images/blog2.jpg" alt="" /></a>
              <div class="blog-info">
                <h4><a href="#blog">Education Programs...</a></h4>
                <p>What is newthings? (See you soon)</p>
                <div class="d-flex align-items-center justify-content-between mt-4">
                  <a class="d-flex align-items-center" href="#blog" title="23k followers">
                    <img class="img-fluid" src="assets/images/testi2.jpg" alt="admin" style="max-width:40px"> <span
                      class="small ms-2">Eetey Cruis</span>
                  </a>
                  <p class="date-text"><i class="far fa-calendar-alt me-1"></i>June 23, 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
          <div class="blog-card-single">
            <div class="grids5-info">
              <a href="#blog"><img src="assets/images/blog1.jpg" alt="" /></a>
              <div class="blog-info">
                <h4><a href="#blog">Games Programs...</a></h4>
                <p> Practice everything through mini games (See you soon)</p>
                <div class="d-flex align-items-center justify-content-between mt-4">
                  <a class="d-flex align-items-center" href="#blog" title="23k followers">
                    <img class="img-fluid" src="assets/images/testi3.jpg" alt="admin" style="max-width:40px"> <span
                      class="small ms-2">Molive Joe</span>
                  </a>
                  <p class="date-text"><i class="far fa-calendar-alt me-1"></i>June 20, 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
          <div class="blog-card-single">
            <div class="grids5-info">
              <a href="#blog"><img src="assets/images/blog3.jpg" alt="" /></a>
              <div class="blog-info">
                <h4><a href="#blog">Articles Programs...</a></h4>
                <p> There is a lot of articles about us posted on Tedtalk (See you soon)</p>
                <div class="d-flex align-items-center justify-content-between mt-4">
                  <a class="d-flex align-items-center" href="#blog" title="23k followers">
                    <img class="img-fluid" src="assets/images/testi1.jpg" alt="admin" style="max-width:40px"> <span
                      class="small ms-2">Turne Leo
                    </span>
                  </a>
                  <p class="date-text"><i class="far fa-calendar-alt me-1"></i>June 28, 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- //blog block -->

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
              <a class="call-style-w3" href="tel:+84">+84 355 725 203</a>
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

  <!-- /counter-->
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