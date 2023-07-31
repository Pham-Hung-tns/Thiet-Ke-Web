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
        <h4 class="inner-text-title pt-5">Become A Teacher</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index1.php">Home</a></li>
          <li class="active"><i class="fas fa-angle-right"></i>Become A Teacher</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //inner banner -->

  <!-- contact block -->
  <section class="w3l-contact py-5" id="contact">
    <div class="container py-md-5 py-4">
      <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <p class="text-uppercase">Get In Touch</p>
        <h3 class="title-style">Contact Us</h3>
      </div>
      <div class="row contact-block">
        <div class="col-md-7 contact-right">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="form1"
            class="signin-form">
            <div class="input-grids">
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" name="w3lName" id="w3lName" placeholder="Your Name" class="contact-input"
                    required="" />
                </div>
                <div class="col-sm-6">
                  <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email" class="contact-input"
                    required="" />
                </div>
              </div>
              <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Major" class="contact-input"
                required="" />
              <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="BioLink" class="contact-input"
                required="" />
            </div>
            <div class="form-input">
              <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here" required=""></textarea>
            </div>
            <div class="text-start">
              <button id="form1" class="btn btn-style btn-style-3">Send Message</button>
            </div>
          </form>


          <?php
              require 'vendor/autoload.php';
              if($_SERVER["REQUEST_METHOD"] == "POST"){
                $client = new MongoDB\Client("mongodb://localhost:27017");
                $db = $client->Contact;
                $collection = $db->Information;
                $insertDocument = $collection->insertOne(
                ["Name" => $_POST["w3lName"], "Email" => $_POST["w3lSender"], "Major" => $_POST["w3lSubect"], "BioLink" => $_POST["w3lWebsite"], "Message" => $_POST["w3lMessage"]]
              );
    }
?>

        </div>
        <div class="col-md-5 ps-lg-5 mt-md-0 mt-5">
          <div class="contact-left">
            <div class="cont-details">
              <div class="d-flex contact-grid">
                <div class="cont-left text-center me-3">
                  <i class="fas fa-building"></i>
                </div>
                <div class="cont-right">
                  <h6>Company Address</h6>
                  <p>Sài Gòn</p>
                </div>
              </div>
              <div class="d-flex contact-grid mt-4 pt-lg-2">
                <div class="cont-left text-center me-3">
                  <i class="fas fa-phone-alt"></i>
                </div>
                <div class="cont-right">
                  <h6>Call Us</h6>
                  <p><a href="tel:+84 234 4567">+84 355 725 203</a></p>
                </div>
              </div>
              <div class="d-flex contact-grid mt-4 pt-lg-2">
                <div class="cont-left text-center me-3">
                  <i class="fas fa-envelope-open-text"></i>
                </div>
                <div class="cont-right">
                  <h6>Email Us</h6>
                  <p><a href="mailto:aquaman@mail.com" class="mail">thewitcher@mail.com</a></p>
                </div>
              </div>
              <div class="d-flex contact-grid mt-4 pt-lg-2">
                <div class="cont-left text-center me-3">
                  <i class="fas fa-headphones-alt"></i>
                </div>
                <div class="cont-right">
                  <h6>Customer Support</h6>
                  <p><a href="mailto:info@support.com" class="mail">thewitcher@support.com</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- map -->
  <div class="map">
    <iframe
      src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Thành Phố Hồ Chí Minh&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
      width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
  </div>
  <!-- //contact block -->

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