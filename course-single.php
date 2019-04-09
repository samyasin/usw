<?php require 'includes/connect_db.php'; ?>

<?php
$course_id = $_GET['course_id'];
$query = "SELECT * FROM course WHERE course_id={$course_id}";
$result = mysqli_query($con, $query);
$courseSet = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $major = $_POST['major'];
    $query = "INSERT INTO `student`(`course_id`, `std_name`, `std_email`, `std_major`, `phone_number`) VALUES ($course_id,'$name','$email','$major','$mobile') ";
    if (mysqli_query($con, $query)) {
        echo "<meta http-equiv='refresh' content='0'>";
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">

    <!-- Mirrored from themearth.com/demo/html/educationplus/view/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 10:33:26 GMT -->

    <head>
        <!-- SITE TITLE -->

        <?php
        $query = "SELECT * FROM course WHERE course_id ={$course_id}";
        $res = mysqli_query($con, $query);
        $metaSet = mysqli_fetch_assoc($res);
        echo "<title>{$metaSet['meta_title_ar']}</title>";
        echo "<meta name='decription'  content='{$metaSet['meta_desc_ar']}>'";
        echo "<meta name='keywords'  content='{$metaSet['meta_keys_ar']}'>";
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
                                                <a href="en/index.php" type="button" class="btn btn-warning en">EN</a>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="https://web.facebook.com/upskills1/"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                                <!--
                                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                                -->
                                                <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                                <li><a href="https://www.youtube.com/channel/UCIeGyNQeeS-Etd_bwRXEZ5A/"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
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
                                                        <div class="lgx-logo" style="margin-top:8px">
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
                                                            <li><a class="lgx-scroll" href="courses.php" style="color:#e39a31">الدورات</a></li>
                                                            <li><a class="lgx-scroll" href="events.php">الأحداث</a></li>
                                                            <li><a class="lgx-scroll active" href="about.php">عنّا</a></li>
                                                            <li><a href="index.php" class="dropdown-toggle active" role="button" aria-haspopup="true" aria-expanded="false">الرئيسية</a></li>

                                                            <li class="hidden-xs"><a href="#toggle-search" class="search-animate"><span class="glyphicon glyphicon-search"></span></a></li>
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
                <div class="lgx-banner lgx-banner-inner" style="background-image:url('images/course/<?php echo $courseSet['course_image']; ?>')">
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="lgx-heading-area">
                                        <div class="lgx-heading lgx-heading-white">
                                            <h2 class="heading-title"><span class='opacity' ><a href="<?php echo $_SERVER['PHP_SELF'] . "?course_id=" . $_GET['course_id'] . "&category_name=" . $_GET['category_name']; ?>" style="color:white"><?php echo $courseSet['course_name_ar']; ?></a><span></h2>
                                                        </div>

                                                        </div>
                                                        </div>
                                                        </div>
                                                        <!--//.ROW-->
                                                        </div><!-- //.CONTAINER -->
                                                        </div><!-- //.INNER -->
                                                        </div>
                                                        </section>
                                                        <section>
                                                            <div id="lgx-course" class="lgx-course lgx-normal-single">
                                                                <ul class="breadcrumb">
                                                                    <li><a href="index.php"><i class="icon-home6"></i>الرئيسية</a></li>
                                                                    <li class="active">الدورات</li>
                                                                    <li class="active">
                                                                        <?php echo $_GET['category_name']; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="lgx-inner">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <article>
                                                                                    <header>
                                                                                        <div class="text-area">
                                                                                                <!--<h1 class="title"><a href="<?php echo " course-single.php?course_id=" . $_GET['course_id'] . " &category_name=" . $_GET['category_name_ar']; ?>">
                                                                                            <?php echo $courseSet['course_name_ar']; ?></a></h1>-->
                                                                                            <div class="course-hits-area">

                                                                                                <ul class="list-inline course-hit">
                                                                                                    <!--<li>
                                                <div class="course-author">
                                                    <img src="" class="avatar" alt="Admin bar avatar">
                                                    <div class="author-info">
                                                        <h4 class="title"><a href="#">Jonathon</a></h4>
                                                        <h5 class="subtitle">Lecturar</h5>
                                                    </div>
                                                </div>
                                            </li>-->
                                                                                                    <li>
                                                                                                        <div class="course-hit-info">

                                                                                                            <h4 class="title"><a href="#">الفئات</a></h4>
                                                                                                            <h5 class="subtitle"><a href="#" rel="tag">
                                                                                                                    <?php echo $_GET['category_name']; ?></a></h5>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li>

                                                                                                </ul>

                                                                                                <div class="course-hitcourse-payment">
                                                                                                    <!--<div class="course-price">
                                                                                            <div class="value free-course"><del>
                                                                                                            </del>$<br>

                                                                                            </div>
                                                                                    </div>-->

                                                                                                    <button class="button lgx-btn" data-toggle='modal' data-target='#exampleModalCenter'> اسألنا عن التفاصيل </button>

                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <!--<figure>
        
                                                                                                <a href="#"><img src="images/course/<?php echo $courseSet['course_image']; ?>" class="img-thumbnail" style="height:380px;width:60%" alt="New" width="1140" /></a>
        
                                                                                        </figure>-->
                                                                                    </header>
                                                                                    <section>
                                                                                        <div class="lgx-course-feature-area">
                                                                                            <h3 class="title">تفاصيل الدورة</h3>
                                                                                            <ul class="list-unstyled lgx-course-feature">
                                                                                                <li class="duration-feature"> <i class="fa fa-clock-o"></i> <span class="label"> المدة </span> <span class="value"> 
                                                                                                        <span dir="ltr">ساعة</span> <?php echo $courseSet['course_hours']; ?> </span></li>
                                                                                        <!--<li class="skill-feature"> <i class="fa fa-level-up"></i> <span class="label">level</span> <span class="value">
                                                                                                <?php echo $courseSet['course_level']; ?></span></li>-->
                                                                                                <li class="language-feature"> <i class="fa fa-language"></i> <span class="label"> اللغة </span> <span class="value"> عربي / إنجليزي </span></li>
                                                                                                <!--<li class="students-feature"> <i class="fa fa-dollar"></i> <span class="label">Price</span> <span class="value"><del>
                                                                                                <?php echo $courseSet['course_price']; ?></del> JD</span></li>-->
                                                                                                <li class="students-feature"> <i class="fa fa-money"></i> <span class="label"> الخصم</span> <span class="value">
                                                                                                        <?php echo $courseSet['course_special_price']; ?> %</span></li>
                                                                                                <li class="assessments-feature">  <i class="fa fa-calendar-o"> </i>   <span class="label"> تاريخ البدء </span> <span class="value">
                                                                                                        <?php echo date('Y-m-d', strtotime($courseSet['start_date'])); ?></span></li>
                                                                                                <li class="assessments-feature"> <i class="fa fa-calendar-check-o"> </i> <span class="label"> تاريخ الإنتهاء </span> <span class="value">
                                                                                                        <?php echo date('Y-m-d', strtotime($courseSet['end_date'])); ?></span></li>


                                                                                            </ul>
                                                                                        </div>
                                                                                        <h3>تفاصيل الدورة</h3>
                                                                                        <p>
                                                                                            <?php echo $courseSet['course_desc_ar']; ?>
                                                                                        </p>

                                                                                        <h3>محتويات الدورة</h3>

                                                                                        <?php echo $courseSet['course_content_ar']; ?>

                                                                                        <h3>أهداف الدورة</h3>
                                                                                        <p>
                                                                                            <?php echo $courseSet['course_outcome_ar']; ?>
                                                                                        </p>
                                                                                    </section>

                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- //.CONTAINER -->
                                                                </div><!-- //.INNER -->
                                                            </div>
                                                        </section>

                                                        <!--//.NEWS-->
                                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">اسألنا عن التفاصيل</h5>
                                                                        <img src="./images/other/Logo-01.png"  height="80" width="80">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>

                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <form method="POST">

                                                                            <div class="form-group">
                                                                                <label class="form-control-label">الأسم</label>
                                                                                <input type="text" name="name" class="form-control " placeholder="ادخل اسمك" required>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="form-control-label">رقم الهاتف</label>
                                                                                <input type="number" name="mobile" class="form-control" placeholder="ادخل رقم هاتفك" required>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="form-control-label">البريد الإلكتروني</label>
                                                                                <input type="email" name="email" class="form-control" placeholder="ادخل بريدك الإلكتروني" required>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="form-control-label">الدرجة العلمية</label>
                                                                                <select name="major" >
                                                                                    <option value="High School">توجيهي</option>
                                                                                    <option value="Bachelors">بكالوريس</option>
                                                                                    <option value="Master">ماجستير</option>
                                                                                </select>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button type="submit" name="submit" value="Create" class=" lgx-btn">Send</button>
                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php require 'includes/website_footer.php'; ?>
