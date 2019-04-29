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

        <link rel="icon" type="image/png" href="images/other/Logo-01.png" alt="icon">

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
                                                <!--<li class="login-register"><a href="#">Login/Register</a></li>-->
                                                <a href="en/about.php" type="button" class="btn btn-warning en">EN</a>
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
                                            <h2 class="heading-title"><a href="<?php echo $_SERVER['PHP_SELF']; ?>" >عنّا</a></h2>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li><a href="index.php"><i class="icon-home6"></i>الرئيسية</a></li>
                                            <li class="active">عنّا</li>
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
                                            <h2 class="heading-title">لماذا أكاديمية تطوير المهارات للإستشارات التعليمية
                                            </h2>
                                            <h4 class="heading-subtitle">نحن نقدم مجموعة من الخدمات عالية الجودة للمساعدة في تطوير الأفراد والمؤسسات

                                            </h4>
                                        </div>
                                        <div class="lgx-about-content">
                                            <ul class="why">
                                                <li>تهدف أكاديمية تطوير المهارات للإستشارات التعليمية إلى تلبية احتياجات الخريجين وسوق العمل من خلال توفير برامج تدريبية عملية وتطبيقية متكاملة </li>
                                                <li>تقدم أكاديمية تطوير المهارات للإستشارات التعليمية برامج تدريبية تستهدف طلبة الجامعات وخريجيها وخريجي الثانوية العامة وممن التحقوا مؤخراً بسوق العمل، بالإضافة إلى الباحثين عن التميز واكتساب المهارات لتحسين أدائهم في عملهم الحالي</li>
                                                <li>تتميز أكاديمية تطوير المهارات للإستشارات التعليمية بتقديم محتوى تدريبي احترافي يجمع بين النظريات العلمية والتطبيق العملي </li>
                                                <li>تستخدم أكاديمية تطوير المهارات للإستشارات التعليمية طرق تدريب متميزة قائمة على معرفة احتياجات السوق وتستخدم ورش العمل التفاعلية والعروض التقديمية والمسابقات التدريبية
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <img src="assets/img/about-team.png" alt="about">
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
                                        <h2 class="title"><a>الخبرة العملية</a></h2>
                                        <p>تركز أكاديميتنا في الغالب على كيفية توفير الخبرة العملية لتأهيل طلابنا لسوق العمل في مختلف المجالات </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service lgx-single-service-white">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>معلمون خبراء</a></h2>
                                        <p>لا يضم فريقنا فقط المعلمين ولكن أيضًا القادة الذين لديهم خبرة كافية لتمرير المهارات الفنية والتكتيكات العامة ودروس الحياة

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service lgx-single-service-white">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-comments" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>تواصل إجتماعي</a></h2>
                                        <p> وتتبع وحدتنا التخطيط الاستراتيجي وتطوير الفريق ، فنحن نظام تعاون كامل ، في أكاديمية تطوير المهارات للإستشارات سوف تكون محاطًا بأسرتك الداعمة


                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service lgx-single-service-white">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>البيئة المُحفزة
                                            </a></h2>
                                        <p>ينشئ مدرسونا مناخًا مثاليًا للفصول الدراسية للتعلم. نعتمد أقل على الثناء والمزيد على تقديم ردود فعل فعالة نأمل فقط في إنشاء مجتمع منتج</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service lgx-single-service-white">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>الأحداث</a></h2>
                                        <p>ننظم مجموعة واسعة من الأحداث للتواصل مع الناس في الأردن ، وتؤدي المناقشات إلى تبادل الأفكار والأفكار عالية العائد </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="lgx-single-service lgx-single-service-white">
                                        <!--lgx-single-service-white-->
                                        <span class="icon"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></span>
                                        <h2 class="title"><a>تطوير الذات</a></h2>
                                        <p>في الوقت الحاضر ، من أجل العثور على وظيفة في هذه السوق التنافسية يجب أن تكون من ذوي الخبرة والمؤهلين. هل تساءلت يومًا كيف يمكنني تحسين نفسي؟ حسنا، نحن نمتلك الاجابة
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
                                                                <img src="assets/img/trophy.png" alt="teacher icon">
                                                                <div class="counter-text">
                                                                    <span class="lgx-counter">500</span>
                                                                    <small>المنافسات</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--//.COL-->
                                                        <div class="col-sm-3">
                                                            <div class="lgx-counter-area">
                                                                <img src="assets/img/achievement.png" alt="teacher icon">
                                                                <div class="counter-text">
                                                                    <span class="lgx-counter">12</span>
                                                                    <small>سنوات الخبرة</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--//.COL-->
                                                        <div class="col-sm-3">
                                                            <div class="lgx-counter-area">
                                                                <img src="assets/img/graduate.png" alt="teacher icon">
                                                                <div class="counter-text">
                                                                    <span class="lgx-counter">7896</span>
                                                                    <small>الطلاب</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--//.COL-->
                                                        <div class="col-sm-3">
                                                            <div class="lgx-counter-area">
                                                                <img src="assets/img/teacher.png" alt="teacher icon">
                                                                <div class="counter-text">
                                                                    <span class="lgx-counter">600</span>
                                                                    <small>المعلمون</small>
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




            <?php require 'includes/website_footer.php'; ?>
