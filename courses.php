<?php require 'includes/connect_db.php'; ?>
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

        <link rel="icon" type="image/png" href="images/other/Logo-01.png">

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" media="all" />
        <!--Custom CSS -->
        <link rel="stylesheet" href="assets/css/custom.css" media="all" />

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="assets/libs/fontawesome/css/font-awesome.min.css" media="all" />

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="assets/libs/maginificpopup/magnific-popup.css" media="all" />

        <!-- OWL CAROUSEL CSS -->
        <link rel="stylesheet" href="assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
        <link rel="stylesheet" href="assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />

        <!-- GOOGLE FONT -->
        <!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900%7cLato:400,700,900"/>-->
        <link href="https://fonts.googleapis.com/css?family=Cairo|Changa" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900%7cUbuntu:300,300i,400,500,700" />

        <link rel="stylesheet" href="assets/libs/animate/animate.css" media="all" />

        <!-- MASTER  STYLESHEET  -->
        <link id="lgx-master-style" rel="stylesheet" href="assets/css/style-default.min.css" media="all" />

        <!-- MODERNIZER CSS  -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

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
                                                <!--<li class="login-register"><a href="#">Login/Register</a></li>-->
                                                <a href="en/courses.php" type="button" class="btn btn-warning en">EN</a>
                                               <!--<li><a href=""><i class="fa fa-twitter"></i></a></li>-->
                                                <li><a href="https://web.facebook.com/upskills1/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                                <!--
                                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                                -->
                                                <li><a href="https://www.linkedin.com/in/upskills-academy-b67743154/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                <!--						<li><a href=""><i class="fa fa-instagram"></i></a></li>-->
                                                <!--						<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>-->
                                                <li><a href="https://www.youtube.com/channel/UCIeGyNQeeS-Etd_bwRXEZ5A/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact">
                                            <ul class="list-inline right-menu">
                                                <li><span class="question-text">أيّ أسئلة ؟</span> <i class="fa fa-phone" aria-hidden="true"></i> 900 693 5 (079) </li>
                                                <li><i class="fa fa-envelope" aria-hidden="true"></i> info@upskills-academy.com</li>
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
                                                                <img src="images/other/Logo3.png" alt="Logo" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse navbar-collapse">
                                                        <ul class="nav navbar-nav lgx-nav">
                                                            <li>

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


                                                            <li><a class="lgx-scroll" href="contact.php" >تواصل معنا</a></li>
                                                            <li><a class="lgx-scroll" href="gallery.php">معرض الصور</a></li>
                                                            <li><a class="lgx-scroll" href="courses.php">الدورات</a></li>
                                                            <li><a class="lgx-scroll" href="events.php">الأحداث</a></li>
                                                            <li><a class="lgx-scroll active" href="about.php" >عنّا</a></li>
                                                            <li><a href="index.php" class="dropdown-toggle active" role="button" aria-haspopup="true" aria-expanded="false" >الرئيسية</a></li>

                                                            
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
                                            <h2 class="heading-title"><a href="<?php echo $_SERVER['PHP_SELF']; ?>">الدورات</a></h2>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li><a href="index.php"><i class="icon-home6"></i>الرئيسية</a></li>
                                            <li class="active">الدورات</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--//.ROW-->
                        </div><!-- //.CONTAINER -->
                    </div><!-- //.INNER -->
                </div>
            </section>




            <section>
                <div id="lgx-courses" class="lgx-courses">
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="lgx-heading">
                                        <h2 class="heading-title">الدورات</h2>
                                        <h4 class="heading-subtitle"> الدورات الشائعة والمطلوبة في سوق العمل</h4>
                                    </div>
                                </div>
                            </div>
                            <!--//.ROW-->
                            <div class="lgx-tab">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="lgx-filter-area">
                                            <ul id="lgx-filter" class="lgx-filter list-inline text-center">
                                                <li class="active"><a class="lgx-filter-item" href="javascript:void(0)" data-filter="*">جميع الدورات</a></li>
                                                <?php
                                                $query = "SELECT * FROM category";
                                                $result = mysqli_query($con, $query);
                                                while ($catSet = mysqli_fetch_assoc($result)) {

                                                    echo "<li><a class='lgx-filter-item' href='javascript:void(0)' data-filter='.{$catSet['cat_id']}'>{$catSet['cat_name_ar']}</a></li>";
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
													<img src='images/course/{$courseSet['course_image']}' alt='{$courseSet['course_name']}' height='220'>
													<figcaption>
                                                                                                        
														<div class='lgx-hover-link'>
															<div class='lgx-vertical'>
																<a href='course-single.php?course_id={$courseSet['course_id']}&category_name={$courseSet['cat_name_ar']}'>
																	<i class='fa fa-book'></i>
																</a>
															</div>
														</div>
													</figcaption>
													
												</figure>
												<div class='course-info'>
													<div class='course-author'>
                                                                                                        <a href='course-single.php?course_id={$courseSet['course_id']}&category_name={$courseSet['cat_name_ar']}'>
														<img src='images/category/{$courseSet['cat_image']}' alt='{$courseSet['course_name']}' height='66'>
                                                                                                                
														<div class='author-info'>
															<!--<h4 class='title'><a href='#'>Riaz Sagar</a></h4>-->
															<a href='course-single.php?course_id={$courseSet['course_id']}&category_name={$courseSet['cat_name_ar']}'><h5 class='subtitle'>{$courseSet['cat_name_ar']}</h5></a>
														</div>
													</div>
													<h3 class='title'><a href='course-single.php?course_id={$courseSet['course_id']}&category_name={$courseSet['cat_name_ar']}'> {$courseSet['course_name_ar']}</a></h3>
													<div class='course-bottom'>
                                                                                                        <a href='course-single.php?course_id={$courseSet['course_id']}&category_name={$courseSet['cat_name_ar']}'>
														<ul class='list-inline'>
															<!--<li><a href='#'><i class='fa fa-money'></i> السعر <del>{$courseSet['course_price']}</del> JD</a></li>-->
															<!--<li><a href='#'><i class='fa fa-commenting'></i>55</a></li>-->
															<li align='center'>احصل على خصم <a href='course-single.php?course_id={$courseSet['course_id']}&category_name={$courseSet['cat_name_ar']}'> <span class='discount'>{$courseSet['course_special_price']}</span><span>%</span></a></li>
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



            <?php require'includes/website_footer.php'; ?>
