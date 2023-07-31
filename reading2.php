<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Template CSS Style link -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="./assets/css/quiz.css">
  <link rel="stylesheet" href="./assets/css/deepcourse.css">
  <link rel="stylesheet" href="./assets/css/quiz2.css">
  <script src="./assets/js/quiz_1.js"></script>
  <script src="./assets/js/deepcourse.js"></script>
  <script src="./assets/js/quiz2_1.js"></script>
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
          <li class="active"><i class="fas fa-angle-right"></i><a href="courses.php">Courses</a></li>
          <li class="active"><i class="fas fa-angle-right"></i>Reading</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //inner banner -->

  <!-- courses section -->
  <div class="w3l-grids-block-5 py-5">
    <div class="container py-md-5 py-4">
      <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <p class="text-uppercase">Reading Train</p>
        <h3 class="title-style">Lesson 2
          <?php
        require 'vendor/autoload.php';
          $client = new MongoDB\Client("mongodb://localhost:27017");
          $db = $client->Progess;
          $collection = $db->Reading2;
          $findDocument = $collection->findOne(
            ["Email" => $_SESSION["email"], "Finish" => "true"]
          );
          if (isset($findDocument)) {
            echo "(Successed)";
          } else {
            echo " ";
          }
        ?></h3>
      </div>
      <div class="row justify-content-center">
        <ul id="accordion" class="accordion">
          <li>
            <div class="link"><i class="fa fa-database"></i>Instruction<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <div class="wp-text-submenu" style="min-height: 100px;  display: table-cell; /* Important */ 
                        vertical-align: middle; /* Important */ ">
                <p class="ps-3 pe-3 text-white">Do the preparation task first. Then read the text and do the exercises.
              </div>
              </p>
            </ul>
          </li>
          <li>
            <div class="link"><i class="fa fa-code"></i>Preparation<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li class="text-white">
                <h1 class="header-sub mt-0 pt-3">Reading B2: A short story extract</h1>
                <h6 class="sub-header-sub ps-3 text-white pb-4">Match the words with the definitions.</h6>
              </li>
              <li>
                <div>
                  <h1 class="mt-0 pb-2">Simple Quiz</h1>
                  <div id="quiz">
                    <h3 id="question" class="text-center"></h3>
                    <div class="wp-btn-ans">
                      <button id="choice0" class="text-center"></button>
                      <button id="choice1" class="text-center"></button>
                      <button id="choice2" class="text-center"></button>
                    </div>
                    <p class="pb-2"><span id="progress"></span><span id="score"></span></p>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li>
            <div class="link"><i class="fa fa-mobile"></i>Reading text<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <div class="col-12 justify-content-center">
                <img src="./assets/images/bgReading2.jpg" class="align-item-center"
                  style="max-width: 800px; margin: 0 auto; display: block;" alt="">
                <p class="text-white ps-3 pe-3">Sam squinted against the sun at the distant dust trail raked up by the
                  car on its way up to the Big House. The horses kicked and flicked their tails at flies, not caring
                  about their owner's first visit in ten months. Sam waited. Mr Carter didn't come out here unless he
                  had to, which was just fine by Sam. The more he kept out of his boss's way, the longer he'd have a
                  job.</p>

                <p class="text-white ps-3 pe-3">Carter came by later while Sam was chopping wood. Carter lifted his hat
                  as if he were waiting for an
                  appointment with the town priest, and then removed it completely as if he were talking to his mother.
                  He pulled out a pile of paper from his back pocket and held it out.</p>

                <p class="text-white ps-3 pe-3">'Don't pick up your mail often, do you?'</p>

                <p class="text-white ps-3 pe-3">Sam took it without a glance and dropped the envelopes onto the bench.
                </p>

                <p class="text-white ps-3 pe-3">'Never,' he replied and waited for Carter to say why he was here. The
                  fact it was Carter's house was
                  no explanation and they both knew it. Carter twisted his hat round and round, licking his lips and
                  clearing his throat.</p>

                <p class="text-white ps-3 pe-3">'Nice work fixing those fences,' he said finally.</p>

                <p class="text-white ps-3 pe-3">'I'll be back to the beginning soon,' Sam said. It wasn't a complaint. A
                  fence that took a year to
                  repair meant another year's work to the man who did it well.</p>

                <p class="text-white ps-3 pe-3">'Don't you ever want to take a holiday?'</p>

                <p class="text-white ps-3 pe-3">'And go where?' A holiday meant being back out in the real world, a
                  place even people like Carter
                  travelled to escape from. Sam's escape was his reality and he wasn't going back.</p>

                <p class="text-white ps-3 pe-3">Mr Carter wiped the sweat from the back of his neck. The damp patches on
                  his shirt drew together like
                  shapes in an atlas. His skin was already turning ruddy in the June sun. Otherwise he had the indoor
                  tan of a man that made money while other people did the work.</p>

                <p class="text-white ps-3 pe-3">'I've brought my son with me on this trip. He's had some trouble at
                  school.' Mr Carter's eyes flicked
                  up, blinked rapidly and then shifted back to the hat occupying his hands. 'Not much trouble out here
                  for a young boy.' He attempted a laugh but it came out like a dog's bark.</p>

                <p class="text-white ps-3 pe-3">The two men looked towards the northern end of the property. It
                  stretched as far as the eye could see.
                  Even the fences were barely visible from where they stood. However bored and rebellious a teenage boy
                  might get, it wasn't possible to escape on foot. Sam looked at the biggest of the horses, kicking at
                  the ground with its heavy hooves. Could the boy ride? he wondered. There was a whole load of trouble a
                  good rider could get into out here, miles away from anyone. But maybe there was even more trouble for
                  someone who knew nothing about horses and wanted to get away from his father.</p>
              </div>
            </ul>
          </li>
          <li>
            <div class="link"><i class="fa fa-globe"></i>Task<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <div class="quizArea">
                <div class="multipleChoiceQues">
                  <h1 class="mc_quiz text-white">
                    Choose correct Answer.
                  </h1>
                  <div class="my-progress">
                    <progress class="my-progress-bar" min="0" max="100" value="0" step="9"
                      aria-labelledby="my-progress-completion"></progress>
                    <p id="my-progress-completion" class="js-my-progress-completion sr-only" aria-live="polite">0%
                      complete</p>
                  </div>
                  <div class="quizBox">
                    <div class="question"> </div>
                    <div class="answerOptions"></div>
                    <div class="buttonArea">
                      <button id="next" class="hidden">Next</button>
                      <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <button id="submit" type="submit" class="hidden">Submit</button>
                        </from>
                        <?php
                          require 'vendor/autoload.php';
                          if ($_SERVER["REQUEST_METHOD"] == "GET") 
                            {
                              $client = new MongoDB\Client("mongodb://localhost:27017");
                              $db = $client->Progess;
                              $collection = $db->Reading2;
                              $findDoc = $collection->findOne(
                                    ["Email" => $_SESSION["email"], "Finish" => "true"]
                              );
                          if ($findDoc == null) {
                            $insertDocument = $collection->insertOne(
                              ["Email" => $_SESSION["email"], "Finish" => "true"]
                            );
                          }
    }
                ?>
                    </div>
                  </div>
                </div>
                <div class="resultArea">
                  <div class="resultPage1">
                    <div class="resultBox">
                      <h1 class="text-white">Result Summary</h1>
                    </div>
                    <div class="briefchart">
                      <svg height="300" width="300" id="_cir_progress">
                        <g>
                          <rect x="0" y="1" width="30" height="15" fill="#ab4e6b" />
                          <text x="32" y="14" font-size="14" class="_text_incor">Incorrect : 12 </text>
                        </g>
                        <g>
                          <rect x="160" y="1" width="30" height="15" fill="#968089" />
                          <text x="192" y="14" font-size="14" class="_text_cor">Correct : 12</text>
                        </g>
                        <circle class="_cir_P_x" cx="150" cy="150" r="120" stroke="#ab4e6b" stroke-width="20"
                          fill="none" onmouseover="evt.target.setAttribute('stroke', 'rgba(171, 78, 107,0.7)');"
                          onmouseout="evt.target.setAttribute('stroke','#ab4e6b');"></circle>

                        <circle class="_cir_P_y" cx="150" cy="150" r="120" stroke="#968089" stroke-width="20"
                          stroke-dasharray="0,1000" fill="none"
                          onmouseover="evt.target.setAttribute('stroke', 'rgba(150, 128, 137,0.7)');"
                          onmouseout="evt.target.setAttribute('stroke','#968089');"></circle>
                        <text x="50%" y="50%" text-anchor="middle" stroke="none" stroke-width="1px" dy=".3em"
                          class="_cir_Per">0%</text>
                      </svg>
                    </div>

                    <div class="resultBtns">
                      <button class="viewanswer">View Answers</button>
                      <button class="viewchart">View Chart</button>
                      <button class="replay"><i class="fa fa-repeat" style="font-size:1em;"></i> <br />Replay</button>
                    </div>
                  </div>

                  <div class="resultPage2">
                    <h1 class="text-white">Your Result</h1>
                    <div class="chartBox">
                      <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                    <button class="backBtn">Back</button>
                  </div>

                  <div class="resultPage3">
                    <h1 class="text-white">Your Answers</h1>
                    <div class="allAnswerBox">

                    </div>
                    <button class="backBtn text-white">Back</button>
                  </div>

                </div>
              </div>
            </ul>
          </li>
        </ul>
      </div>
      <!-- pagination -->
      <div class="pagination-style text-center mt-5">
        <ul class=" d-flex justify-content-center">
          <li> <a href="#none" class="not-allowed" disabled="">
              <span class="fa fa-angle-double-left" aria-hidden="true"></span>
            </a>
          </li>
          <li><a href="reading.php">1</a></li>
          <li>
            <a class="active" href="reading2.php">2</a>
          </li>
          <li>
            <a href="reading3.php">3</a>
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