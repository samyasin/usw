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
        echo "<title>{$metaSet['title']}</title>";
        echo "<meta name='decription'  content='{$metaSet['description']}'";
        echo "<meta name='keywords'  content='{$metaSet['keywords']}'>";
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
        <link rel="stylesheet" href="../assets/libs/bootstrap/css/bootstrap.min.css" media="all" />

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../assets/css/custom_en.css" media="all" />

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
        <!--photo Gallery-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
        <link rel="stylesheet" href="../assets/css/compact-gallery.css">


        <link rel="stylesheet" href="../assets/libs/animate/animate.css" media="all" />

        <!-- MASTER  STYLESHEET  -->
        <link id="lgx-master-style" rel="stylesheet" href="../assets/css/style-default.min.css" media="all" />

        <!-- MODERNIZER CSS  -->
        <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

    </head>

    <body class="page page-template">

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
                                                <a href="../index.php" type="button" class="btn btn-warning ar">العربية</a>
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
            <!--SLIDER-->
            <section>
                <div class="lgx-slider">
                    <!--lgx-slider-content -->
                    <div class="lgx-banner-style">
                        <div class="lgx-inner">

                            <div id="lgx-main-slider" class="owl-carousel">

                                <!--SLIDER ITEM 1-->
                                <?php
                                $query = "SELECT * FROM slider limit 6";
                                $result = mysqli_query($con, $query);
                                while ($sliderSet = mysqli_fetch_assoc($result)) {
                                    echo"<div class='lgx-item-common'>
                        <div class='col-sm-12g'>
                        <div class='opacity'></div>
                            <div class='slider-text-single'>
                                <figure>
                                    <img src='../images/slider/{$sliderSet['image_src']}' alt='cv'/>
                                    <figcaption>
                                        <div class='lgx-container'>
                                            <div class='lgx-hover-link'>
                                                <div class='lgx-vertical'>
                                                        <div class='lgx-banner-info slider-opa lgx-banner-info-{$sliderSet['text_alignment']}' >  <!--lgx-banner-info-white-->
                                                        <h3 class='subtitle lgx-zoomIn-one' ><span class='slide'>{$sliderSet['english_title']}</span></h3>
                                                        <p class='text lgx-zoomIn-three'><span class='slide'>{$sliderSet['english_desc']}</span></br></p>
                                                        <div class='btn-area lgx-zoomIn-four'>
                                                            <a class='lgx-btn' href='courses.php'>view more information about courses</a>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div> <!--//.col-->
                    </div>";
                                }
                                ?>
                                <!--SLIDER ITEM 1 End-->

                                <!--SLIDER ITEM 2-->

                                <!--SLIDER ITEM 3 End-->

                            </div>
                            <!--//.lgx-main-slider-->


                            <!-- //.CONTAINER -->
                        </div>
                        <!-- //.INNER -->
                    </div>
                </div>
            </section>
            <!--SLIDER END-->

            <!--ABOUT-->
            <section>
                <div id="lgx-about" class="lgx-about lgx-about-bottom">
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
                                                <li> UpSkills aims to meet the needs of graduates and the labor market by providing practical training programs.</li>
                                                <li> UpSkills Academy offers training programs aimed at university students, graduates, high school graduates and recent entrants to the labor market, as well as those looking for excellence and skills to improve their performance in their current work.</li>
                                                <li> UpSkills offers professional training content combining scientific theories and practical application.</li>
                                                <li> UpSkills uses unique training methods based on market knowledge, using interactive workshops, presentations and training competitions.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <img src="../assets/img/about-team.png" alt="about">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--ABOUT END-->



            <!--SERVICE-->
            <section>
                <div id="lgx-services" class="lgx-services">
                    <!--lgx-services-white-->

                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">

                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service">

                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-flask" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>Practical Experience</a></h2>
                                        <p>Our Academy focuses mostly on how to provide practical experience to qualify our students for the job market in various fields. </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>Expert Teachers</a></h2>
                                        <p>Our team doesn't only include teachers but also leaders who have enough experience to pass on technical skills,general tactics and life lessons.

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-comments" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>Community</a></h2>
                                        <p>Our unit follows strategic planning and team development, we are a whole-system of collaboration, in UPSKILLS you'll be surrounded by your supporting family.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>Skilled Teachers
                                            </a></h2>
                                        <p>Our teachers create an optimal classroom climate for learning. We rely less on praise and more on providing effective feedback. We only hope to create a productive community. </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>Event</a></h2>
                                        <p>We organise a wide range of events to reach out to people in Jordan, discussions lead to sharing ideas and high-yielding thoughts. </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service">
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


            <section>
                <div id="lgx-courses" class="lgx-courses">
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="lgx-heading">
                                        <h2 class="heading-title"><center>Offerd Courses</center></h2>
                                        <h4 class="heading-subtitle">Some Trendy And Popular Courses Offerd</h4>
                                    </div>
                                </div>
                            </div>
                            <!--//.ROW-->
                            <div class="lgx-tab">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="lgx-filter-area">
                                            <ul id="lgx-filter" class="lgx-filter list-inline text-center">
                                                <li class="active"><a class="lgx-filter-item" href="javascript:void(0)" data-filter="*">All</a></li>
                                                <?php
                                                $query = "SELECT * FROM category";
                                                $result = mysqli_query($con, $query);
                                                while ($catSet = mysqli_fetch_assoc($result)) {

                                                    echo "<li><a class='lgx-filter-item' href='javascript:void(0)' data-filter='.{$catSet['cat_id']}'>{$catSet['cat_name']}</a></li>";
                                                }
                                                ?>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--//. ROW-->

                                <div class="row">
                                    <div id="lgx-grid-wrapper" class="lgx-grid-wrapper">
                                        <!--lgx-list-wrapper-->
                                        <?php
                                        $q = "SELECT * FROM category,course 
									WHERE category.cat_id = course.category_id";
                                        $res = mysqli_query($con, $q);
                                        while ($courseSet = mysqli_fetch_assoc($res)) {
                                            echo"<div class='lgx-grid-item col-xs-12 col-sm-6 col-md-4 {$courseSet['cat_id']}'>
										<div class='lgx-single-course'>
                                                                                    
											<div class='lgx-single-course-inner'>
												<figure>
													<img src='../images/course/{$courseSet['course_image']}' alt='course' height='220'>
													<figcaption>
                                                                                                        
														<div class='lgx-hover-link'>
															<div class='lgx-vertical'>
																<a href='course-single.php?course_id={$courseSet['course_id']}&category_name={$courseSet['cat_name']}'>
																	<i class='fa fa-book'></i>
																</a>
															</div>
														</div>
													</figcaption>
													
												</figure>
												<div class='course-info'>
													<div class='course-author'>
                                                                                                        <a href='course-single.php?course_id={$courseSet['course_id']}&category_name={$courseSet['cat_name']}'>
														<img src='../images/category/{$courseSet['cat_image']}' alt='course' height='66'>
                                                                                                                
														<div class='author-info'>
															<!--<h4 class='title'><a href='#'>Riaz Sagar</a></h4>-->
															<a href='course-single.php?course_id={$courseSet['course_id']}&category_name={$courseSet['cat_name']}'><h5 class='subtitle'>{$courseSet['cat_name']}</h5></a>
														</div>
													</div>
													<h3 class='title'><a href='course-single.php?course_id={$courseSet['course_id']}&category_name={$courseSet['cat_name']}'> {$courseSet['course_name']}</a></h3>
													<div class='course-bottom'>
                                                                                                        <a href='course-single.php?course_id={$courseSet['course_id']}&category_name={$courseSet['cat_name_ar']}'>
														<ul class='list-inline'>
															<!--<li><a href='#'><i class='fa fa-money'></i> Price <del>{$courseSet['course_price']}</del> JD</a></li>-->
															<!--<li><a href='#'><i class='fa fa-commenting'></i>55</a></li>-->
															<li align='center'>Get Discount <a href='course-single.php?course_id={$courseSet['course_id']}&category_name={$courseSet['cat_name']}'> <span class='discount'>{$courseSet['course_special_price']}</span><span>%</span></a></li>
														</ul>

													</div>
                                                                                                        </a>
												</div>
											
                                                                                      </div>
										</div>
									</div>";
                                        }
                                        ?>
                                        <!--//ITEM-->
                                    </div>
                                </div>
                                <!--//. ROW-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <!--MILESTONE-->
            <section>
                <div id="lgx-register" class="lgx-register">
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="lgx-registration-area">
                                        <div class="lgx-heading-registration">
                                            <h3 class="subtitle">Here's a compressed video inclusive of UPSKILLS' family.
                                            </h3>
                                            <br>

                                        </div>
                                        <div class="lgx-registration-info">
                                            <p class="text"><b>Alone we can do so little; together we can do so much.</b>
                                                <br>
                                                "It is literally true that you can succeed best and quickest by helping others to succeed." – Napolean Hill

                                                <!--</p>
                        <a class="lgx-btn registration-btn" href="registration.php">Registration</a>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="lgx-video-area">
                                        <figure>
                                            <figcaption>
                                                <div class="video-icon">
                                                    <div class="lgx-vertical">
                                                        <span>Watch</span>
                                                        <a id="myModalLabel" class="icon" href="#" data-toggle="modal" data-target="#lgx-modal">
                                                            <i class="fa fa-play " aria-hidden="true"></i>
                                                        </a>
                                                        <span>Video</span>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <!-- Modal-->
                                        <div id="lgx-modal" class="modal fade lgx-modal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/QzBwa_u7w00" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- //.Modal-->
                                    </div>
                                </div>
                            </div>
                        </div><!-- //.CONTAINER -->
                    </div><!-- //.INNER -->
                </div>
            </section>
            <!--MILESTONE END-->



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
                                    <div id="lgx-owlteachers" class="owl-carousel lgx-owlteachers">

                                            <div class="item">
                                                    <div class="lgx-single-teacher lgx-teacher-circle">
                                                            <figure>
                                                                    <a href="teacher-single.html"><img src="assets/img/teachers/teacher1.jpg" alt="teacher" /></a>
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
                                            <div class="item">
                                                    <div class="lgx-single-teacher lgx-teacher-circle">
                                                            <figure>
                                                                    <a href="teacher-single.html"><img src="assets/img/teachers/teacher2.jpg" alt="teacher" /></a>
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
                                            <div class="item">
                                                    <div class="lgx-single-teacher lgx-teacher-circle">
                                                            <figure>
                                                                    <a href="teacher-single.html"><img src="assets/img/teachers/teacher3.jpg" alt="teacher" /></a>
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
                                            <div class="item">
                                                    <div class="lgx-single-teacher lgx-teacher-circle">
                                                            <figure>
                                                                    <a href="teacher-single.html"><img src="assets/img/teachers/teacher2.jpg" alt="teacher" /></a>
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
    </div>
</section>-->
            <!--TEACHERS END-->


            <!--EVENTS-->
            <section>
                <div id="lgx-events" class="lgx-events">
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="lgx-heading">
                                        <h2 class="heading-title"><a></a><center>Events</center></h2>
                                        <h4 class="heading-subtitle">Our Upcoming Seminars You Dont Miss Out!</h4>
                                    </div>
                                </div>
                            </div>
                            <!--//.ROW-->
                            <?php
                            $query = "SELECT * FROM event limit 1";
                            $res = mysqli_query($con, $query);
                            $eventSet = mysqli_fetch_assoc($res);
                            if (empty($eventSet)) {
                                echo "<center><h2>لا يوجد أحداث بعد..</h2></center>";
                            } else {
                                 echo "<div class='col-md-6'>
									<div class='lgx-single-event'>
										<div class='thumb'>
											<a href='event-single.php?event_id={$eventSet['event_id']}'><img src='../images/event/{$eventSet['event_image']}' alt='event'></a>
										</div>
										<div class='event-info'>
											<a class='date' href='#'>";
                                echo date("F", strtotime($eventSet['start_date']));
                                echo " ";
                                echo date("d", strtotime($eventSet['start_date']));
                                echo ",";
                                echo date("Y");
                                echo "</a>
											<h4 class='location'>{$eventSet['location']}</h4>
											<h3 class='title'><a href='event-single.php?event_id={$eventSet['event_id']}'>{$eventSet['event_name']}</a></h3>
										</div>
									</div>
								</div>";
                            }
                            ?>                                        

                           <?php
                            $query = "SELECT * FROM event limit 5 OFFSET 1";
                            $result = mysqli_query($con, $query);
                            while ($eventSet = mysqli_fetch_assoc($result)) {
                                echo "<div class='col-md-6'>
									<div class='lgx-single-event'>
										<div class='thumb'>
											<a href='event-single.php?event_id={$eventSet['event_id']}'><img src='../images/event/{$eventSet['event_image']}' alt='event'></a>
										</div>
										<div class='event-info'>
											<a class='date' href='#'>";
                                echo date("F", strtotime($eventSet['start_date']));
                                echo " ";
                                echo date("d", strtotime($eventSet['start_date']));
                                echo ",";
                                echo date("Y");
                                echo "</a>
											<h4 class='location'>{$eventSet['location']}</h4>
											<h3 class='title'><a href='event-single.php?event_id={$eventSet['event_id']}'>{$eventSet['event_name']}</a></h3>
										</div>
									</div>
								</div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
        </div>
        <!--//.ROW-->
    </div>
    <!-- //.CONTAINER -->
</div>
<!-- //.INNER -->
</div>
</section>
<!--EVENTS END-->



<!--BLOG -->
<!--<section>
<div id="lgx-blog" class="lgx-blog">
        <div class="lgx-inner">
                <div class="container">
                        <div class="row">
                                <div class="col-xs-12">
                                        <div class="lgx-heading lgx-heading-white">
                                                <h2 class="heading-title">News Updates</h2>
                                                <h4 class="heading-subtitle">Latest News Updates You Dont Miss Out!</h4>
                                        </div>
                                </div>
                        </div>
                        <div class="row">
                                <div id="lgx-owlnews" class="owl-carousel lgx-owlnews">

                                        <div class="item">
                                                <div class="lgx-news-single">
                                                        <figure>
                                                                <img src="assets/img/news/news1.jpg" alt="Adv" title="Adv" />
                                                                <figcaption>
                                                                        <div class="figcaption">
                                                                                <div class="lgx-hover-link">
                                                                                        <div class="lgx-vertical">
                                                                                                <a href="news-single.html"><i class="fa fa-book"></i></a>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="author">
                                                                                <div class="author-info">
                                                                                        <img src="assets/img/news/author1.jpg" alt="author">
                                                                                        <div class="author-info">
                                                                                                <h4 class="title"><a href="#">Jonathon Doe</a></h4>
                                                                                                <h5 class="subtitle">Lecturar of Education</h5>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </figcaption>
                                                        </figure>
                                                        <div class="text-area">
                                                                <h3 class="title"><a href="news-single.html">The 10 best educational websites apps to learn new stuff for free</a></h3>
                                                                <p class="text">Lorem ipsum dolor sit amet, consectetuer adir elit. Aenean commodo ligula eget ...</p>
                                                                <div class="hits-area">
                                                                        <span class="date"></span>
                                                                </div>
                                                                <div class="text-bottom">
                                                                        <a class="date" href="#">25 July 2016</a>
                                                                        <a class="link" href="news-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="item">
                                                <div class="lgx-news-single">
                                                        <figure>
                                                                <img src="assets/img/news/news2.jpg" alt="Adv" title="Adv" />
                                                                <figcaption>
                                                                        <div class="figcaption">
                                                                                <div class="lgx-hover-link">
                                                                                        <div class="lgx-vertical">
                                                                                                <a href="news-single.html"><i class="fa fa-book"></i></a>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="author">
                                                                                <div class="author-info">
                                                                                        <img src="assets/img/news/author2.jpg" alt="author">
                                                                                        <div class="author-info">
                                                                                                <h4 class="title"><a href="#">Riazul Islam</a></h4>
                                                                                                <h5 class="subtitle">Head of Education</h5>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </figcaption>
                                                        </figure>
                                                        <div class="text-area">
                                                                <h3 class="title"><a href="news-single.html">UX Education: Designing free Online Learning Curriculum</a></h3>
                                                                <p class="text">Lorem ipsum dolor sit amet, consectetuer adir elit. Aenean commodo ligula eget ...</p>
                                                                <div class="hits-area">
                                                                        <span class="date"></span>
                                                                </div>
                                                                <div class="text-bottom">
                                                                        <a class="date" href="#">25 July 2016</a>
                                                                        <a class="link" href="news-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="item">
                                                <div class="lgx-news-single">
                                                        <figure>
                                                                <img src="assets/img/news/news3.jpg" alt="Adv" title="Adv" />
                                                                <figcaption>
                                                                        <div class="figcaption">
                                                                                <div class="lgx-hover-link">
                                                                                        <div class="lgx-vertical">
                                                                                                <a href="news-single.html"><i class="fa fa-book"></i></a>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="author">
                                                                                <div class="author-info">
                                                                                        <img src="assets/img/news/author3.jpg" alt="author">
                                                                                        <div class="author-info">
                                                                                                <h4 class="title"><a href="#">Jewel Jonathon</a></h4>
                                                                                                <h5 class="subtitle">Professor of Education</h5>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </figcaption>
                                                        </figure>
                                                        <div class="text-area">
                                                                <h3 class="title"><a href="news-single.html">The digital revolution in higher education has already happened</a></h3>
                                                                <p class="text">Lorem ipsum dolor sit amet, consectetuer adir elit. Aenean commodo ligula eget ...</p>
                                                                <div class="hits-area">
                                                                        <span class="date"></span>
                                                                </div>
                                                                <div class="text-bottom">
                                                                        <a class="date" href="#">25 July 2016</a>
                                                                        <a class="link" href="news-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="item">
                                                <div class="lgx-news-single">
                                                        <figure>
                                                                <img src="assets/img/news/news4.jpg" alt="Adv" title="Adv" />
                                                                <figcaption>
                                                                        <div class="figcaption">
                                                                                <div class="lgx-hover-link">
                                                                                        <div class="lgx-vertical">
                                                                                                <a href="news-single.html"><i class="fa fa-book"></i></a>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="author">
                                                                                <div class="author-info">
                                                                                        <img src="assets/img/news/author4.jpg" alt="author">
                                                                                        <div class="author-info">
                                                                                                <h4 class="title"><a href="#">Devid Talukdar</a></h4>
                                                                                                <h5 class="subtitle">Master of Education</h5>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </figcaption>
                                                        </figure>
                                                        <div class="text-area">
                                                                <h3 class="title"><a href="news-single.html">I no longer understand my PhD dissertation on Education</a></h3>
                                                                <p class="text">Lorem ipsum dolor amet, consectetuer adir elit. Aenean commodo ligula dolor ...</p>
                                                                <div class="hits-area">
                                                                        <span class="date"></span>
                                                                </div>
                                                                <div class="text-bottom">
                                                                        <a class="date" href="#">25 July 2016</a>
                                                                        <a class="link" href="news-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
</section>-->
<!--BLOG END-->



<!--PHOTO GALLERY-->
<section class="gallery-block compact-gallery">
    <div class="container">
        <div class="lgx-heading">
            <h2 class="heading-title"><a></a><center>Photo Gallery</center></h2>
            <h4 class="heading-subtitle">Some of amazing Screenshots for UpSkills Academy</h4>
        </div>
        <div class="row no-gutters">

            <?php
            $query = "SELECT image_src,album_name FROM image,album
						                    WHERE image.album_id = album.album_id limit 6 ";
            $res = mysqli_query($con, $query);
            while ($imageSet = mysqli_fetch_assoc($res)) {
                echo "<div class='col-md-6 col-lg-4  item zoom-on-hover'>
                    <a class='lightbox' href='../images/albums/{$imageSet['album_name']}/{$imageSet['image_src']}'>
                        <img class='img-fluid image' height='247' width='370' src='../images/albums/{$imageSet['album_name']}/{$imageSet['image_src']}'>
                        <span class='description'>
                            <span class='description-heading'>UpSkills Academy</span>

                        </span>
                    </a>
                </div>";
            }
            ?>
        </div>
    </div>
    <!--//.CONAINER-->


</section>
<!--PHOTO GALLERY END-->

<!--photo gallery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.compact-gallery', {animation: 'slideIn'});
</script>

<?php require '../includes/website_en_footer.php'; ?>
