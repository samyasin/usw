<?php require 'includes/connect_db.php'; ?>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    if (!empty($name && $email && $subject && $message)) {

        $query = "INSERT INTO `contact`(`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`,`contact_add_date`) VALUES (null,'$name','$email','$subject','$message',NOW())";
        if (mysqli_query($con, $query)) {
            $alert = "<div class='lgx-btn alert' style='width:75%;margin-top:20px;margin-right:20px;margin-bottom:-30px; direction: rtl;
    float: right;'>
		<strong>.. تم إرسال الرسالة بنجاح</strong>
		</div>";
        } else {
            $alert = mysqli_error($con);
        }
    }
}
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

    <body class="page page-template3">

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
                                                <a href="en/contact.php" type="button" class="btn btn-warning en">EN</a>
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


                                                            <li><a class="lgx-scroll" href="contact.php">تواصل معنا</a></li>
                                                            <li><a class="lgx-scroll" href="gallery.php">معرض الصور</a></li>
                                                            <li><a class="lgx-scroll" href="courses.php">الدورات</a></li>
                                                            <li><a class="lgx-scroll" href="events.php">الأحداث</a></li>
                                                            <li><a class="lgx-scroll active" href="about.php">عنّا</a></li>
                                                            <li><a href="index.php" class="dropdown-toggle active" role="button" aria-haspopup="true" aria-expanded="false">الرئيسية</a></li>

                                                            
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
                                            <h2 class="heading-title"><a href="<?php echo $_SERVER['PHP_SELF']; ?>">تواصل معنا</a></h2>
                                          
                                        </div>
                                        <ul class="breadcrumb">
                                            <li><a href="index.php"><i class="icon-home6"></i>الرئيسية</a></li>
                                            <li class="active">تواصل معنا</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--//.ROW-->
                        </div><!-- //.CONTAINER -->
                    </div><!-- //.INNER -->
                </div>
            </section>
            <?php
            if (isset($alert)) {
                echo $alert;
            }
            ?>
            <section>
                <div id="lgx-contact" class="lgx-contact">
                    <div class="lgx-inner">
                        <div class="container">



                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="contact-info">
                                        <div class="lgx-box">
                                                <!--<span class="lgx-icon"><i class="fa fa-map-marker"></i></span>-->
                                            <div class="address">
                                                <h3 class="title">الموقع</h3>
                                                المدينة الرياضية , شارع الشهيد , عمان - الأردن

                                                                                        <!--<p>SKYPE:jhon.doe</p>-->
                                            </div>
                                        </div>
                                        <div class="lgx-box">
                                                <!--<span class="lgx-icon"><i class="fa fa-headphones"></i></span>-->
                                            <div class="address">
                                                <h3 class="title">تفاصيل</h3>
                                                <p> هاتف : 900 693 5 (079) </p>
                                            </div>
                                        </div>
                                        <div class="lgx-box">
                                                <!--<span class="lgx-icon"><i class="fa fa-envelope"></i></span>-->
                                            <div class="address">
                                                <h3 class="title">البريد الإلكتروني</h3>
                                                <p>info@upskills-academy.com</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--//.COL-->

                                <div class="col-sm-12 col-md-6">

                                    <form method="POST" class="">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control lgxname" id="lgxname" placeholder="ادخل اسمك" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control lgxemail" id="lgxemail" placeholder="ادخل بريدك الإلكتروني" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control lgxsubject" id="lgxsubject" placeholder="ادخل الموضوع" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control lgxmessage" name="message" id="lgxmessage" rows="5" placeholder="ادخل الرسالة" required></textarea>
                                        </div>


                                        <button type="submit" name="submit" class="lgx-btn "><span>إرسال</span></button>
                                    </form>

                                    <!-- MODAL SECTION -->
                                    <div id="lgx-form-modal" class="modal fade lgx-form-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content lgx-modal-content">
                                                <div class="modal-header lgx-modal-header">
                                                    <button type="button" class="close brand-color-hover" data-dismiss="modal" aria-label="Close">
                                                        <i class="fa fa-power-off"></i>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="alert lgx-form-msg" role="alert"></div>
                                                </div>
                                                <!--//MODAL BODY-->

                                            </div>
                                        </div>
                                    </div> <!-- //MODAL -->

                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="innerpage-section">
                                        <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13536.077755815664!2d35.9031799!3d31.9874885!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc9535598d200ad!2supskills+academy!5e0!3m2!1sar!2sjo!4v1550067494111" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                                        
                                    </div>
                                </div>
                                <!--//.ROW-->

                            </div><!-- //.CONTAINER -->

                        </div><!-- //.INNER -->
                    </div>
                </div>
            </section>





            <?php require'includes/website_footer.php' ?>
