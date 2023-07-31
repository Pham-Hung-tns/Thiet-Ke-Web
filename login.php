<!doctype html>
<?php 
session_start()
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
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- JS Login -->
  <script src="./assets/js/login.js"></script>
</head>

<body>
  <!--php-->
  <?php
  $name = $email = "";
  $nameErr = $emailErr = $passwordErr = "";
  $checkName = false;
  $checkEmail = false;
  $checkPassword = false;
    require 'vendor/autoload.php';
    if($_SERVER["REQUEST_METHOD"] =="POST")
    {
      if(empty($_POST["FullName"])){
        $nameErr="";
      }
      elseif (!preg_match("/^[a-zA-Z ']*$/",$_POST["FullName"])) 
      {
                  $nameErr = "Tên chỉ chứa các ký tự a-z, A-Z và khoảng trắng";
        $checkName = false;
      }
      else
      {
        $checkName = true;
      }
    
      if(empty($_POST["Email"]))
      {
        $emailErr = "";
      }
      elseif (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) 
      {
        $emailErr = "Email không hợp lệ";
        $checkEmail = false;
      }
      else
      {
        $checkEmail = true;
      }
    
      if(empty($_POST["Password"])){
        $passwordErr ="";
      }
      elseif (!preg_match("/^[a-zA-Z0-9']*$/",$_POST["Password"])) 
      {
                  $passwordErr = "Mật khẩu chỉ bao gồm A-Z, a-z và 0-9";
        $checkPassword = false;
      }
      else
      {
        $checkPassword = true;
      $passwordErr = "";
      }

      if ($checkEmail && $checkName && $checkPassword) 
      {
        $client = new MongoDB\Client("mongodb://localhost:27017");
        $db = $client->companydb;
        $collection = $db->empcollection;
        $findDocument = $collection -> findOne(
          ["Email" => $_POST["Email"]]
        );
        if($findDocument != null)
        {
          $emailErr = "Email đã tồn tại";
        }
        else
        {
        $emailErr = "";
        $insertOneCollection = $collection->insertOne(
          ["Name" => $_POST["FullName"], "Email" => $_POST["Email"], "Password" => $_POST["Password"]]
        );
      }
      }
    } 
    ?>
  <?php

    $emailErrLogin = "";
    $passwordErrLogin = "";
    if(isset($_POST["EmailLogin"]) && isset($_POST["PasswordLogin"]))
    {
        $client = new MongoDB\Client("mongodb://localhost:27017");
        $db = $client->companydb;
        $collection = $db->empcollection;

         $findDocumentLogin = $collection -> findOne(
          ["Email" => $_POST["EmailLogin"]]
        );
        if($findDocumentLogin == null){
      $emailErrLogin = "Email không tồn tại";
        } 
        else 
        {
          $findDocumentLogin = $collection->findOne(
            ["Email" => $_POST["EmailLogin"], "Password" => $_POST["PasswordLogin"]]
            );
          if ($findDocumentLogin == null) {
            $passwordErrLogin = "Mật khẩu không chính xác";
              }
          else
          {
        $_SESSION["name"] = $findDocumentLogin["Name"];
        $_SESSION['email'] = $findDocumentLogin["Email"];
        header("Location: index1.php");
        exit();
          }
    }
  }?>
  <!--  -->
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
            <?php include("layoutLogin.php");?>
            <!-- <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index1.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="courses.php">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="notebook.php">Notebook</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="login.php">Login</a>
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

  <!-- inner banner -->
  <section class="inner-banner py-5">
    <div class="w3l-breadcrumb py-lg-5">
      <div class="container pt-4 pb-sm-4">
        <h4 class="inner-text-title pt-5">Login</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index1.php">Home</a></li>
          <li class="active"><i class="fas fa-angle-right"></i>Login</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //inner banner -->

  <!-- login section -->
  <div class="w3l-grids-block-5 py-5">
    <div class="container py-md-5 py-4">
      <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <p class="text-uppercase">Best Way</p>
        <h3 class="title-style">Choose Me Choose Life</h3>
      </div>
      <div class="row justify-content-center">
        <section class="user">
          <div class="user_options-container">
            <div class="user_options-text">
              <div class="user_options-unregistered">
                <h2 class="user_unregistered-title text-white">Don't have an account?</h2>
                <p class="user_unregistered-text text-white">Sign up for an account now, and start your goal!</p>
                <button class="user_unregistered-signup" id="signup-button">Sign up</button>
              </div>

              <div class="user_options-registered">
                <h2 class="user_registered-title text-white">Have an account?</h2>
                <p class="user_registered-text text-white"> Sign in and keep moving towards your goal!</p>
                <button class="user_registered-login" id="login-button">Login</button>
              </div>
            </div>

            <div class="user_options-forms" id="user_options-forms">
              <div class="user_forms-login">
                <h2 class="forms_title">Login</h2>

                <form class="forms_form" method="POST">
                  <fieldset class="forms_fieldset">
                    <div class="forms_field">
                      <input type="email" name="EmailLogin" placeholder="Email" class="forms_field-input" required />
                      <span class="error"><?php echo $emailErrLogin;?></span>
                    </div>
                    <div class="forms_field">
                      <input type="password" name="PasswordLogin" placeholder="Password" class="forms_field-input"
                        required />
                      <span class="error"><?php echo $passwordErrLogin;?></span>
                    </div>
                  </fieldset>
                  <div class="forms_buttons">
                    <button type="button" class="forms_buttons-forgot">Forgot password?</button>
                    <input type="submit" value="Log In" class="forms_buttons-action">
                  </div>
                </form>

              </div>
              <div class="user_forms-signup">
                <h2 class="forms_title">Sign Up</h2>
                <form class="forms_form" method="POST">
                  <fieldset class="forms_fieldset">
                    <div class="forms_field">
                      <input type="text" name="FullName" placeholder="Full Name" class="forms_field-input" required />
                      <span class="error"><?php echo $nameErr;?></span>
                    </div>
                    <div class="forms_field">
                      <input type="email" name="Email" placeholder="Email" class="forms_field-input" required />
                      <span class="error"><?php echo $emailErr;?></span>
                    </div>
                    <div class="forms_field">
                      <input type="password" name="Password" placeholder="Password" class="forms_field-input"
                        required />
                      <span class="error"><?php echo $passwordErr;?></span>
                    </div>
                  </fieldset>
                  <div class="forms_buttons">
                    <input type="submit" value="Sign up" class="forms_buttons-action">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- //login section -->
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