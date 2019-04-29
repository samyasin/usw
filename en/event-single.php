<?php require '../includes/connect_db.php'; ?>

<?php
$event_id = $_GET['event_id'];
$query = "SELECT * FROM event WHERE event_id={$event_id}";
$result = mysqli_query($con, $query);
$eventSet = mysqli_fetch_assoc($result);
?>
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
    <body class="page page-template4">

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
                                                <a href="../event-single.php" type="button" class="btn btn-warning ar">العربية</a>
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
                                            <h2 class="lgx-item-left"><a style="color:white" href="<?php echo $_SERVER['PHP_SELF'] . "?event_id=" . $event_id ?>" class="lgx-item-left">Upcoming Events</a></h2>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li><a href="index.php"><i class="icon-home6"></i>Home</a></li>
                                            <li class="active">Events</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--//.ROW-->
                        </div><!-- //.CONTAINER -->
                    </div><!-- //.INNER -->
                </div>
            </section>


            <!--EVENTS-->
            <section>
                <div id="lgx-course" class="lgx-event lgx-normal-single">
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <article>
                                        <header>
                                            <div class="lgxpage-header">
                                                <figure>
                                                    <img src="../images/event/<?php echo $eventSet['event_image']; ?>" alt="<?php echo $eventSet['event_name']; ?>" height="380" width="1140"/>
                                                    <figcaption>
                                                            <!--<p class="figcaption-text"><span>Capacity 200 Persons</span> ( 2 Interested 2 Going )</p>-->
                                                    </figcaption>
                                                </figure>
                                                <div class="header-text">
                                                    <h1 class="h2 title"><?php echo $eventSet['event_name']; ?></h1>
                                                    <p><span><?php echo $eventSet['location']; ?></span> </p>
                                                    <p><?php echo date("d", strtotime($eventSet['start_date'])); ?> <?php echo date("F", strtotime($eventSet['start_date'])); ?> , <?php echo date("Y"); ?> - <?php echo date("d", strtotime($eventSet['end_date'])); ?> <?php echo date("F", strtotime($eventSet['end_date'])); ?> , <?php echo date("Y"); ?></p>
                                                </div>
                                                <!--<div class="header-action">
                                                        <a class="lgx-btn" href="#">Interested</a>
                                                        <a class="lgx-btn" href="#">Going</a>
                                                </div>-->
                                            </div>
                                            <!--//.page-header-->
                                        </header>
                                        <section>
                                            <div class="lgx-single-section lgx-details">
                                                <p>
                                                    <?php echo $eventSet['event_desc']; ?>
                                                </p>
                                            </div>
                                        </section>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--EVENTS END-->




            <?php require '../includes/website_en_footer.php'; ?>
