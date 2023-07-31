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
  <link rel="stylesheet" href="./assets/css/progess.css">
  <script src="./assets/js/search.js"></script>
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
          <li class="active"><i class="fas fa-angle-right"></i>Notebook</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //inner banner -->

  <!-- courses section -->
  <div class="w3l-grids-block-5">
    <div class="wp-content">
      <div class="progess">
        <div class="wp-progress">
          <input type="radio" class="radio" name="progress" value="five" id="five">
          <label for="five" class="label">
            <div class="lv-name">Cấp độ 1</div>
            <div class="lv-1 d-flex">
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/star.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/star.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/star.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/star.png" width="15px" height="15px" alt="">
              </div>
            </div>
          </label>

          <input type="radio" class="radio" name="progress" value="twentyfive" id="twentyfive" checked>
          <label for="twentyfive" class="label">
            <div class="lv-name">Cấp độ 2</div>
            <div class="lv-1 d-flex">
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/star.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/star.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/star.png" width="15px" height="15px" alt="">
              </div>
            </div>
          </label>

          <input type="radio" class="radio" name="progress" value="fifty" id="fifty">
          <label for="fifty" class="label">
            <div class="lv-name">Cấp độ 3</div>
            <div class="lv-1 d-flex">
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/star.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/star.png" width="15px" height="15px" alt="">
              </div>
            </div>
          </label>

          <input type="radio" class="radio" name="progress" value="seventyfive" id="seventyfive">
          <label for="seventyfive" class="label">
            <div class="lv-name">Cấp độ 4</div>
            <div class="lv-1 d-flex">
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/star.png" width="15px" height="15px" alt="">
              </div>
            </div>
          </label>

          <input type="radio" class="radio" name="progress" value="onehundred" id="onehundred">
          <label for="onehundred" class="label">
            <div class="lv-name">Cấp độ 5</div>
            <div class="lv-1 d-flex">
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
              <div class="lv-star"><img src="./assets/images/gstar.png" width="15px" height="15px" alt="">
              </div>
            </div>
          </label>
          <div class="progress">
            <div class="progress-bar"></div>
          </div>
        </div>
      </div>
      <div class="content-search py-2">
        <div class="search-box">
          <button class="btn-search"><i class="fas fa-search text-dark"></i></button>
          <input type="text" class="input-search" placeholder="Type to Search...">
        </div>
      </div>
      <div class="new-words wp-progress">
        <ul>
          <li class="word-1 ms-5">
            <div class="wp-word d-flex justify-content-around py-2">
              <div class="name-word"><span><img src="./assets/images/checked.png" height="20px" width="20px"
                    alt=""></span> copilot <br><span class="spell-word">/ɑːˈkeɪd/</span> </div>
              <div class="type-word">(n)</div>
              <div class="mean-word">Phi công phụ</div>
            </div>
          </li>
          <li class="word-1 ms-5">
            <div class="wp-word d-flex justify-content-around py-2">
              <div class="name-word"><span><img src="./assets/images/checked.png" height="20px" width="18px"
                    alt=""></span> fundraiser <br><span class="spell-word">/ɑːˈkeɪd/</span> </div>
              <div class="type-word">(n)</div>
              <div class="mean-word">Sự kiện gây quỹ</div>
            </div>
          </li>
          <li class="word-1 ms-5">
            <div class="wp-word d-flex justify-content-around py-2">
              <div class="name-word"><span><img src="./assets/images/checked.png" height="20px" width="20px"
                    alt=""></span>loner<br><span class="spell-word">/ɑːˈkeɪd/</span> </div>
              <div class="type-word"><span>(n)</span></div>
              <div class="mean-word">Người thích một mình</div>
            </div>
          </li>
          <li class="word-1 ms-5">
            <div class="wp-word d-flex justify-content-around py-2">
              <div class="name-word"><span><img src="./assets/images/checked.png" height="20px" width="20px"
                    alt=""></span> workaholic <br><span class="spell-word">/ɑːˈkeɪd/</span> </div>
              <div class="type-word">(n)</div>
              <div class="mean-word">Nguời đam mê công việc</div>
            </div>
          </li>
          <li class="word-1 ms-5">
            <div class="wp-word d-flex justify-content-around py-2">
              <div class="name-word"><span><img src="./assets/images/checked.png" height="20px" width="20px"
                    alt=""></span> raffle <br><span class="spell-word">/ɑːˈkeɪd/</span> </div>
              <div class="type-word">(n)</div>
              <div class="mean-word">chương trình mua bán xổ số</div>
            </div>
          </li>
          <li class="word-1 ms-5">
            <div class="wp-word d-flex justify-content-around py-2">
              <div class="name-word"><span><img src="./assets/images/checked.png" height="20px" width="20px"
                    alt=""></span> adventurous <br><span class="spell-word">/ɑːˈkeɪd/</span> </div>
              <div class="type-word">(adj)</div>
              <div class="mean-word">thích phiêu lưu</div>
            </div>

          </li>
          <li class="word-1 ms-5">
            <div class="wp-word d-flex justify-content-around py-2">
              <div class="name-word"><span><img src="./assets/images/checked.png" height="20px" width="20px"
                    alt=""></span> arcade <br><span class="spell-word">/ɑːˈkeɪd/</span> </div>
              <div class="type-word">(n)</div>
              <div class="mean-word">Máy chơi game</div>
            </div>
          </li>
          <li class="word-1 ms-5">
            <div class="wp-word d-flex justify-content-around py-2">
              <div class="name-word"><span><img src="./assets/images/checked.png" height="20px" width="20px"
                    alt=""></span> arcade <br><span class="spell-word">/ɑːˈkeɪd/</span> </div>
              <div class="type-word">(n)</div>
              <div class="mean-word">Máy chơi game</div>
            </div>
          </li>
          <li class="word-1 ms-5">
            <div class="wp-word d-flex justify-content-around py-2">
              <div class="name-word"><span><img src="./assets/images/checked.png" height="20px" width="20px"
                    alt=""></span> arcade <br><span class="spell-word">/ɑːˈkeɪd/</span> </div>
              <div class="type-word">(n)</div>
              <div class="mean-word">Máy chơi game</div>
            </div>
          </li>
          <li class="word-1 ms-5">
            <div class="wp-word d-flex justify-content-around py-2">
              <div class="name-word"><span><img src="./assets/images/checked.png" height="20px" width="20px"
                    alt=""></span> arcade <br><span class="spell-word">/ɑːˈkeɪd/</span> </div>
              <div class="type-word">(n)</div>
              <div class="mean-word">Máy chơi game</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </div>
  <!-- pagination -->
  <div class="pagination-style text-center mt-5 mb-2">
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