<?php require '../includes/connect_db.php'; ?>
<!doctype html>
<html class="no-js" lang="en">

    <!-- Mirrored from themearth.com/demo/html/educationplus/view/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 10:33:26 GMT -->

    <head>
        <!-- SITE TITLE -->

        <?php
        $name = basename($_SERVER['PHP_SELF'], ".php");
        $query = "SELECT * FROM meta WHERE page_name='{$name}'";
        $res = mysqli_query($con, $query);
        $metaSet = mysqli_fetch_assoc($res);
        echo "<title>{$metaSet['title_ar']}</title>";
        echo "<meta name='decription'  content='{$metaSet['description_ar']}'";
        echo "<meta name='keywords'  content='{$metaSet['keywords_ar']}'>";
        ?>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- The above 3 meta tags *must* come first in the head -->


        <meta name="author" content="themearth.com" />

        <!-- twitter card starts from here, if you don't need remove this section -->

        <!-- when you post this page url in facebook , this image will be shown -->
        <!-- facebook open graph ends from here -->

        <link rel="icon" type="image/png" href="../images/other/Logo-01.png">

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="../assets/libs/bootstrap/css/bootstrap.min.css" media="all" /><!-- 
        
        <!--BOOTSTRAP CSS -->
        <link rel="stylesheet" href="../assets/css/custom_en.css"	 media="all" />

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="../assets/libs/fontawesome/css/font-awesome.min.css" media="all" />

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="../assets/libs/maginificpopup/magnific-popup.css" media="all" />

        <!-- OWL CAROUSEL CSS -->
        <link rel="stylesheet" href="../assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
        <link rel="stylesheet" href="../assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />

        <!-- GOOGLE FONT -->
        <!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900%7cLato:400,700,900"/>-->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900%7cUbuntu:300,300i,400,500,700" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Cairo" rel="stylesheet">

        <link rel="stylesheet" href="../assets/libs/animate/animate.css" media="all" />

        <!-- MASTER  STYLESHEET  -->
        <link id="lgx-master-style" rel="stylesheet" href="../assets/css/style-default.min.css" media="all" />

        <!-- MODERNIZER CSS  -->
        <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

    </head>

    <body class="page page-template5">

        <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

        <div class="lgx-container ">
            <!-- ***  ADD YOUR SITE CONTENT HERE *** -->


            <!--HEADER-->
            <header>
                <div id="lgx-header" class="lgx-header">
                    <!--lgx-header-container lgx-header-container-white lgx-header-container-brand lgx-header-singlemenu-->
                    <div class="header-top">
                        <!--header-top-white header-top-brand-->
                        <div class="header-top-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact">
                                            <ul class="list-inline">
                                                <li><span class="question-text">Questions?</span> <i class="fa fa-phone" aria-hidden="true"></i>(079)5 693 900 </li>
                                                <li><i class="fa fa-envelope" aria-hidden="true"></i> info@upskills-academy.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="right-menu">
                                            <ul class="list-inline">
                                                <!--<li class="login-register"><a href="#">Login/Register</a></li>-->
                                                <li><a href="https://web.facebook.com/upskills1/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                                <!--
                                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                                -->
                                                <li><a href="https://www.linkedin.com/in/upskills-academy-b67743154/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                <!--						<li><a href=""><i class="fa fa-instagram"></i></a></li>-->
                                                <!--						<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>-->
                                                <li><a href="https://www.youtube.com/channel/UCIeGyNQeeS-Etd_bwRXEZ5A/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                                <a href="../about.php" type="button" class="btn btn-warning ar">العربية</a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//.header-top-->
                    <div class="lgx-header-bottom lgx-header-bottom-fixed-black lgx-header-bottom-scrol-black">
                        <!--lgx-header-bottom-black lgx-header-bottom-brand-->
                        <!--lgx-header-bottom-fixed lgx-header-bottom-fixed-black lgx-header-bottom-fixed-brand lgx-header-bottom-fixed-transparent-->
                        <!--lgx-header-bottom-scrol-black lgx-header-bottom-scrol-brand-->
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <nav class="navbar navbar-default lgx-navbar">
                                        <div class="container">
                                            <nav class="navbar navbar-default lgx-navbar lgx-navbar-search">
                                                <div class="lgxcontainer">
                                                    <div class="navbar-header">
                                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                                            <span class="sr-only">Toggle navigation</span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>
                                                        <a href="#toggle-search" class="hidden-lg hidden-md hidden-sm lgx-search-mobile search-animate"><span class="glyphicon glyphicon-search"></span></a>
                                                        <div class="lgx-logo">
                                                            <a href="index.php" class="lgx-scroll">
                                                                <img src="../images/other/Logo3.png" alt="Logo" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse navbar-collapse">
                                                        <ul class="nav navbar-nav lgx-nav">
                                                            <li>
                                                                <a href="index.php" class="dropdown-toggle active" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                                                                <!--<ul class="dropdown-menu multi-level">
                                                                        <li><a href="index.php">Home (Default)</a></li>
                                                                        <li><a href="home-slider.html">Home Slider</a></li>
                                                                        <li><a href="home-contentslider.html">Home Content Slider</a></li>
                                                                        <li><a href="home-typed.html">Home Typed</a></li>
                                                                        <li><a href="home-five.html">Home Five</a></li>
                                                                        <li><a href="home-six.html">Home Six</a></li>
                                                                        <li><a href="home-seven.html">Home Seven</a></li>
                                                                        <li><a href="home-eight.html">Home Eight</a></li>
                                                                </ul>-->
                                                            <li>
                                                                <!--<li>
                                                                <a href="index.html" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                                                                <ul class="dropdown-menu multi-level">
                                                                        <li><a href="about.html">About</a></li>
                                                                        <li><a href="service.html">Services</a></li>
                                                                        <li class="dropdown-submenu">
                                                                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses<span class="caret"></span></a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li><a href="courses.html">Courses</a></li>
                                                                                        <li><a href="course-single.html">Courses Single</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li><a href="registration.html">Registration</a></li>
                                                                        <li class="dropdown-submenu">
                                                                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teachers<span class="caret"></span></a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li><a href="teachers.html">Teachers</a></li>
                                                                                        <li><a href="teacher-single.html">Teacher Single</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="dropdown-submenu">
                                                                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li><a href="events.html">Events</a></li>
                                                                                        <li><a href="event-single.html">Event Single</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="dropdown-submenu">
                                                                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li><a href="news.html">News</a></li>
                                                                                        <li><a href="news-single.html">News Single</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li><a href="gallery.php">Gallery</a></li>
                                                                        <li><a href="contact.php">Contact</a></li>
                                                                        <li class="dropdown-submenu">
                                                                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li class="dropdown-submenu">
                                                                                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Two<span class="caret"></span></a>
                                                                                                <ul class="dropdown-menu">
                                                                                                        <li><a href="#">Dropdown Three</a></li>
                                                                                                        <li><a href="#">Dropdown Three</a></li>
                                                                                                </ul>
                                                                                        </li>
                                                                                        <li><a href="#">Dropdown Two</a></li>
                                                                                        <li><a href="#">Dropdown Two</a></li>
                                                                                </ul>
                                                                        </li>
                                                                </ul>
                                                        </li>-->
                                                            <li><a class="lgx-scroll active" href="about.php">About Us</a></li>
                                                            <li><a class="lgx-scroll " href="courses.php">Courses</a></li>
                                                            <li><a class="lgx-scroll" href="events.php">Events</a></li>
                                                            <li><a class="lgx-scroll" href="gallery.php" >Gallery</a></li>
                                                            <li><a class="lgx-scroll" href="contact.php">Contact Us</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <!--/.nav-collapse -->
                                                </div>
                                                <div class="lgx-menu-search search-animate">
                                                    <div class="container">
                                                        <form action="#" method="GET" role="search">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="q" placeholder="Search for snippets and hit enter">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </nav>
                                        </div>
                                        <!-- /.container -->
                                    </nav>
                                </div>
                            </div>
                            <!--//.ROW-->
                        </div>
                        <!-- //.CONTAINER -->
                    </div>
                    <!-- //.INNER-->
                </div>
            </header>
            <!--HEADER END-->



            <section>
                <div class="lgx-banner lgx-banner-inner">
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="lgx-heading-area">
                                        <div class="lgx-heading lgx-heading-white">
                                            <h2 class="lgx-item-left"><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="lgx-item-left">About Us</a></h2>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li><a href="index.php"><i class="icon-home6"></i>Home</a></li>
                                            <li class="active">About us</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--//.ROW-->
                        </div><!-- //.CONTAINER -->
                    </div><!-- //.INNER -->
                </div>
            </section>


            <!--ABOUT-->
            <section>
                <div id="lgx-about" class="lgx-about lgx-about-bottom">
                    <!--lgx-about-bottom-->
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                                    <div class="lgx-about-area">
                                        <div class="lgx-heading">
                                            <h2 class="heading-title"><center>Why UPSKILLS</center>
                                            </h2>
                                            <h4 class="heading-subtitle">We offer a set of high quality services to help develop individuals and institutions
                                                 
                                            </h4>
                                        </div>
                                        <div class="lgx-about-content">
                                            <ul class="why">
                                                UpSkills aims to meet the needs of graduates and the labor market by providing practical training programs.
                                                <li> UpSkills Academy offers training programs aimed at university students, graduates, high school graduates and recent entrants to the labor market, as well as those looking for excellence and skills to improve their performance in their current work.
                                                <li>  UpSkills offers professional training content combining scientific theories and practical application.
                                                <li>  UpSkills uses unique training methods based on market knowledge, using interactive workshops, presentations and training competitions.
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <img src="../assets/img/about-team.png" alt="about">
                                </div>
                            </div>
                            <!--//.ROW-->
                        </div>
                        <!-- //.CONTAINER -->
                    </div>
                    <!-- //.INNER -->
                </div>
            </section>
            <!--ABOUT END-->



            <!--SERVICE-->
            <section>
                <div id="lgx-services" class="lgx-services lgx-services-white">
                    <!--lgx-services-white-->
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service lgx-single-service-white">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-flask" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>Practical Experience</a></h2>
                                        <p>Our Academy focuses mostly on how to provide practical experience to qualify our students for the job market in various fields. </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service lgx-single-service-white">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>Expert Teachers</a></h2>
                                        <p>Our team doesn't only include teachers but also leaders who have enough experience to pass on technical skills,general tactics and life lessons.

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service lgx-single-service-white">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-comments" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>Community</a></h2>
                                        <p>Our unit follows strategic planning and team development, we are a whole-system of collaboration, in UPSKILLS you'll be surrounded by your supporting family.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service lgx-single-service-white">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>Skilled Teachers
                                            </a></h2>
                                        <p>Our teachers create an optimal classroom climate for learning. We rely less on praise and more on providing effective feedback. We only hope to create a productive community. </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service lgx-single-service-white">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>Event</a></h2>
                                        <p>We organise a wide range of events to reach out to people in Jordan, discussions lead to sharing ideas and high-yielding thoughts. </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service lgx-single-service-white">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>Self Development</a></h2>
                                        <p>Nowadays, in order to find a job in this competetive market you have to be well experienced and qualified. Have you ever wondered how do I enhance myself? Well we have the answer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- //.CONTAINER -->
                    </div><!-- //.INNER -->
                </div>
            </section>
            <!--SERVICE END-->



            <!--MILESTONE-->
            <section>
                <div id="lgx-milestone-about" class="lgx-milestone-about">
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="lgx-milestone-area">
                                        <div class="lgx-milestone">
                                            <div class="milestone-inner">
                                                <div class="lgx-content">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="lgx-counter-area">
                                                                <img src="../assets/img/trophy.png" alt="teacher icon">
                                                                <div class="counter-text">
                                                                    <span class="lgx-counter">500</span>
                                                                    <small>Competitions</small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--//.COL-->
                                                        <div class="col-sm-3">
                                                            <div class="lgx-counter-area">
                                                                <img src="../assets/img/achievement.png" alt="teacher icon">
                                                                <div class="counter-text">
                                                                    <span class="lgx-counter">12</span>
                                                                    <small>Year of Experience</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--//.COL-->
                                                        <div class="col-sm-3">
                                                            <div class="lgx-counter-area">
                                                                <img src="../assets/img/graduate.png" alt="teacher icon">
                                                                <div class="counter-text">
                                                                    <span class="lgx-counter">7896</span>
                                                                    <small>Regular Students</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--//.COL-->
                                                        <div class="col-sm-3">
                                                            <div class="lgx-counter-area">
                                                                <img src="../assets/img/teacher.png" alt="teacher icon">
                                                                <div class="counter-text">
                                                                    <span class="lgx-counter">600</span>
                                                                    <small>Skilled Teachers</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--//.COL-->
                                                    </div>
                                                    <!--//.ROW-->
                                                </div>
                                                <!--//. lgx CONTENT CONTENT-->
                                            </div>
                                            <!--//.lgx INNER-->
                                        </div>
                                        <!--//.Milestone End -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- //.CONTAINER -->
                    </div><!-- //.INNER -->
                </div>
            </section>
            <!--MILESTONE END-->



            <div>

            </div>
            <!--TEACHERS-->
            <!--<section>
<div id="lgx-teachers" class="lgx-teachers">
    <div class="lgx-inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="lgx-heading">
                        <h2 class="heading-title">Qualified Teachers</h2>
                        <h4 class="heading-subtitle">Some Special Teachers From The Industry!</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="lgx-single-teacher"> 
                        <figure>
                            <a href="teacher-single.html"><img src="assets/img/teachers/teacher1.jpg" alt="teacher"/></a>
                            <figcaption>
                                <h3 class="teacher-name"><a href="teacher-single.html">Enathon Jackson</a><span>Lecturer</span></h3>
                                <p class="text">Integer sollicitudin molestie ante etme natoque penatibus et magnie nasceur nulla eleifend ollicitudin molestie</p>
                                <div class="teacher-bottom">
                                    <ul class="list-inline social-group">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a class="link" href="teacher-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="lgx-single-teacher"> 
                        <figure>
                            <a href="teacher-single.html"><img src="assets/img/teachers/teacher2.jpg" alt="teacher"/></a>
                            <figcaption>
                                <h3 class="teacher-name"><a href="teacher-single.html">Enathon Jackson</a><span>Lecturer</span></h3>
                                <p class="text">Integer sollicitudin molestie ante etme natoque penatibus et magnie nasceur nulla eleifend ollicitudin molestie</p>
                                <div class="teacher-bottom">
                                    <ul class="list-inline social-group">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a class="link" href="teacher-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="lgx-single-teacher">
                        <figure>
                            <a href="teacher-single.html"><img src="assets/img/teachers/teacher3.jpg" alt="teacher"/></a>
                            <figcaption>
                                <h3 class="teacher-name"><a href="teacher-single.html">Enathon Jackson</a><span>Lecturer</span></h3>
                                <p class="text">Integer sollicitudin molestie ante etme natoque penatibus et magnie nasceur nulla eleifend ollicitudin molestie</p>
                                <div class="teacher-bottom">
                                    <ul class="list-inline social-group">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a class="link" href="teacher-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="lgx-single-teacher">
                        <figure>
                            <a href="teacher-single.html"><img src="assets/img/teachers/teacher2.jpg" alt="teacher"/></a>
                            <figcaption>
                                <h3 class="teacher-name"><a href="teacher-single.html">Enathon Jackson</a><span>Lecturer</span></h3>
                                <p class="text">Integer sollicitudin molestie ante etme natoque penatibus et magnie nasceur nulla eleifend ollicitudin molestie</p>
                                <div class="teacher-bottom">
                                    <ul class="list-inline social-group">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a class="link" href="teacher-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="lgx-single-teacher">
                        <figure>
                            <a href="teacher-single.html"><img src="assets/img/teachers/teacher3.jpg" alt="teacher"/></a>
                            <figcaption>
                                <h3 class="teacher-name"><a href="teacher-single.html">Enathon Jackson</a><span>Lecturer</span></h3>
                                <p class="text">Integer sollicitudin molestie ante etme natoque penatibus et magnie nasceur nulla eleifend ollicitudin molestie</p>
                                <div class="teacher-bottom">
                                    <ul class="list-inline social-group">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a class="link" href="teacher-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="lgx-single-teacher">
                        <figure>
                            <a href="teacher-single.html"><img src="assets/img/teachers/teacher1.jpg" alt="teacher"/></a>
                            <figcaption>
                                <h3 class="teacher-name"><a href="teacher-single.html">Enathon Jackson</a><span>Lecturer</span></h3>
                                <p class="text">Integer sollicitudin molestie ante etme natoque penatibus et magnie nasceur nulla eleifend ollicitudin molestie</p>
                                <div class="teacher-bottom">
                                    <ul class="list-inline social-group">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a class="link" href="teacher-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="lgx-single-teacher">
                        <figure>
                            <a href="teacher-single.html"><img src="assets/img/teachers/teacher3.jpg" alt="teacher"/></a>
                            <figcaption>
                                <h3 class="teacher-name"><a href="teacher-single.html">Enathon Jackson</a><span>Lecturer</span></h3>
                                <p class="text">Integer sollicitudin molestie ante etme natoque penatibus et magnie nasceur nulla eleifend ollicitudin molestie</p>
                                <div class="teacher-bottom">
                                    <ul class="list-inline social-group">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a class="link" href="teacher-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="lgx-single-teacher">
                        <figure>
                            <a href="teacher-single.html"><img src="assets/img/teachers/teacher3.jpg" alt="teacher"/></a>
                            <figcaption>
                                <h3 class="teacher-name"><a href="teacher-single.html">Enathon Jackson</a><span>Lecturer</span></h3>
                                <p class="text">Integer sollicitudin molestie ante etme natoque penatibus et magnie nasceur nulla eleifend ollicitudin molestie</p>
                                <div class="teacher-bottom">
                                    <ul class="list-inline social-group">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a class="link" href="teacher-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="lgx-single-teacher">
                        <figure>
                            <a href="teacher-single.html"><img src="assets/img/teachers/teacher3.jpg" alt="teacher"/></a>
                            <figcaption>
                                <h3 class="teacher-name"><a href="teacher-single.html">Enathon Jackson</a><span>Lecturer</span></h3>
                                <p class="text">Integer sollicitudin molestie ante etme natoque penatibus et magnie nasceur nulla eleifend ollicitudin molestie</p>
                                <div class="teacher-bottom">
                                    <ul class="list-inline social-group">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a class="link" href="teacher-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</section>-->
            <!--TEACHERS END-->


            <!--TESTIMONIAL -->
            <!--    <section>
<div id="lgx-testimonials" class="lgx-testimonials">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading-title">Testimonials</h2>
                            <h4 class="heading-subtitle">What Clients Saying About Educationplus</h4>
                        </div>
                    </div>
                </div>
                <div id="lgx-owltestimonial" class="owl-carousel lgx-owltestimonial">

                    <div class="item">
                        <div class="lgx-testi-single">
                            <figure class="lgx-client-image">
                                <img src="assets/img/news/author3.jpg" alt="testpersion1"/>
                            </figure>
                            <div class="testi-info-area">
                                <p class="lgx-review">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                                <h4 class="lgx-client-name">Jenelia Desuza</h4>
                                <h5 class="lgx-client-title">Ceo Logichunt</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="lgx-testi-single">
                            <figure class="lgx-client-image">
                                <img src="assets/img/news/author2.jpg" alt="testpersion1"/>
                            </figure>
                            <div class="testi-info-area">
                                <p class="lgx-review">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                                <h4 class="lgx-client-name">Jonathon Doe</h4>
                                <h5 class="lgx-client-title">Themearth</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="lgx-testi-single">
                            <figure class="lgx-client-image">
                                <img src="assets/img/news/author4.jpg" alt="testpersion1"/>
                            </figure>
                            <div class="testi-info-area">
                                <p class="lgx-review">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                                <h4 class="lgx-client-name">Romana Talukdar</h4>
                                <h5 class="lgx-client-title">Ceo Logichunt</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
            <!--TESTIMONIAL END-->




            <?php require '../includes/website_en_footer.php'; ?>
