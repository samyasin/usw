<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit;
}
require 'connect_db.php';
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashbord</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

        <!-- Fontastic Custom icon font-->
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

        <!-- Google fonts - Poppins -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/Logo-01.png">
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/charts-home.js"></script>
        <script src="../assets/js/ajax.js"></script>
        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

        <!-- Tweaks for older IEs-->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>

    <body>
        <div class="page">
            <!-- Main Navbar-->
            <header class="header">
                <nav class="navbar">
                    <!-- Search Box-->
                    <div class="search-box">
                        <button class="dismiss"><i class="icon-close"></i></button>
                        <form id="searchForm" action="#" role="search">
                            <input type="search" placeholder="What are you looking for..." class="form-control">
                        </form>
                    </div>
                    <div class="container-fluid">
                        <div class="navbar-holder d-flex align-items-center justify-content-between">
                            <!-- Navbar Header-->
                            <div class="navbar-header">
                                <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                                    <div class="brand-text d-none d-lg-inline-block"><span>UpSkills </span><strong>Dashboard</strong></div>
                                    <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>UpSkills </strong>DB</div>
                                </a>
                                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                            </div>
                            <!-- Navbar Menu -->
                            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">


                                <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="page-content d-flex align-items-stretch">
                <!-- Side Navbar -->
                <nav class="side-navbar">
                    <!-- Sidebar Header-->
                    <?php
                    $username = $_SESSION['username'];
                    $query = "SELECT * FROM admin WHERE admin_email='" . $username . "'";
                    $res = mysqli_query($con, $query);
                    $admin = mysqli_fetch_assoc($res);
                    //echo '<pre>';print_r($admin);die;
                    ?>
                    <div class="sidebar-header d-flex align-items-center">
                        <div class="avatar"><img src="../images/adminProfile/<?php echo $admin['admin_image']; ?>" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="title">
                            <h6 class="s">
                                <?php echo $admin['full_name']; ?>
                            </h6>
                            <p>Admin</p>
                        </div>
                    </div>
                    <!-- Sidebar Navidation Menus-->
                    <ul class="list-unstyled">
                        <li <?php echo (basename($_SERVER['PHP_SELF'], ".php")) == "index" ? "class='active'" : ''; ?> ><a href="index.php"> <i class="icon-home"></i> Home </a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF'], ".php")) == "admin" ? "class='active'" : ''; ?> ><a href="admin.php"> <i class="icon-user"></i>&nbsp; Manage Admin </a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF'], ".php")) == "register" ? "class='active'" : ''; ?> ><a href="register.php"> <i class="icon-user"></i>&nbsp; Register Student </a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF'], ".php")) == "class_room" ? "class='active'" : ''; ?> ><a href="class_room.php"> <i class="icon-group"></i>&nbsp; Manage Class Room </a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF'], ".php")) == "display" ? "class='active'" : ''; ?> ><a href="display_register.php"> <i class="icon-user"></i>&nbsp; Register Table </a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF'], ".php")) == "students" ? "class='active'" : ''; ?> ><a href="students.php"> <i class="icon-group"></i>&nbsp; Manage Students </a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF'], ".php")) == "categories" ? "class='active'" : ''; ?> ><a href="categories.php"> <i class="icon-list"></i> Manage Categories </a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF'], ".php")) == "courses" ? "class='active'" : ''; ?> ><a href="courses.php"> <i class="icon-book"></i> Manage Courses </a></li>
                        <!--<li <? //php echo (basename($_SERVER['PHP_SELF'], ".php")) == "events" ? "class='active'" : '';  ?> ><a href="certification.php"> <i class="icon-calendar"></i> Manage Certification </a></li>-->
                        <li <?php echo (basename($_SERVER['PHP_SELF'], ".php")) == "events" ? "class='active'" : ''; ?> ><a href="events.php"> <i class="icon-calendar"></i> Manage Events </a></li>
                        <li <?php echo ((basename($_SERVER['PHP_SELF'], ".php")) == "albums" || (basename($_SERVER['PHP_SELF'], ".php")) == "images" ) ? "class='active'" : ''; ?> ><a href="albums.php"> <i class="icon-picture"></i> Manage Gallary </a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF'], ".php")) == "slider" ? "class='active'" : ''; ?> ><a href="slider.php"><i class="fa fa-toggle-on"></i>Manage Slider </a></li><li <?php echo (basename($_SERVER['PHP_SELF'], ".php")) == "settings" ? "class='active'" : ''; ?> ><a href="settings.php"><i class="fa fa-cog"></i>Manage Pages </a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF'], ".php")) == "contact" ? "class='active'" : ''; ?> ><a href="contact.php"> <i class="fa fa-envelope"></i> Contact / Queries </a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF'], ".php")) == "newsletter" ? "class='active'" : ''; ?> ><a href="newsletter.php"> <i class="fa fa-envelope-open-o"></i> Newsletter Emails </a></li>
                        <!--<li><a href="tables.html"> <i class="icon-grid"></i>tables </a></li>
        <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
        <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Example dropdown </a>
          <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
        <li><a href="#">Page</a></li>
      </ul>
    </li>
    <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page </a></li>
</ul><span class="heading">Extras</span>
<ul class="list-unstyled">
<li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
<li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
<li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
<li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
</ul>-->
                </nav>
                <div class="content-inner">
                    <!-- Page Header-->
                    <header class="page-header">
                        <div class="container-fluid">
                            <h4 class="no-margin-bottom">AdminDashboard
                                <?php
                                if (basename($_SERVER['PHP_SELF'], ".php") == "index") {
                                    echo "<span style='font-size:13px;font-weight:5px;color:#796AEE'>| <i class='icon-home'></i> Home</span>";
                                } else if (basename($_SERVER['PHP_SELF'], ".php") == "admin") {
                                    echo "<span style='font-size:13px;font-weight:5px;color:#796AEE'>| <i class='icon-user'></i> Admin</span>";
                                } else if (basename($_SERVER['PHP_SELF'], ".php") == "students") {
                                    echo "<span style='font-size:13px;font-weight:5px;color:#796AEE'>| <i class='icon-group'></i> Students</span>";
                                } else if (basename($_SERVER['PHP_SELF'], ".php") == "categories") {
                                    echo "<span style='font-size:13px;font-weight:5px;color:#796AEE'>| <i class='icon-list'></i> Categories</span>";
                                } else if (basename($_SERVER['PHP_SELF'], ".php") == "courses") {
                                    echo "<span style='font-size:13px;font-weight:5px;color:#796AEE'>| <i class='icon-book'></i> Courses</span>";
                                } else if (basename($_SERVER['PHP_SELF'], ".php") == "events") {
                                    echo "<span style='font-size:13px;font-weight:5px;color:#796AEE'>| <i class='icon-calendar'></i> Events</span>";
                                } else if (basename($_SERVER['PHP_SELF'], ".php") == "albums") {
                                    echo "<span style='font-size:13px;font-weight:5px;color:#796AEE'>| <i class='fa fa-folder'></i> Albums</span>";
                                } else if (basename($_SERVER['PHP_SELF'], ".php") == "images") {
                                    echo "<span style='font-size:13px;font-weight:5px;color:#796AEE'>| <i class='icon-picture'></i> Images</span>";
                                } else if (basename($_SERVER['PHP_SELF'], ".php") == "slider") {
                                    echo "<span style='font-size:13px;font-weight:5px;color:#796AEE'>| <i class='fa fa-toggle-on'></i> Slider</span>";
                                } else if (basename($_SERVER['PHP_SELF'], ".php") == "settings") {
                                    echo "<span style='font-size:13px;font-weight:5px;color:#796AEE'>| <i class='fa fa-cog'></i> Manage Pages</span>";
                                } else if (basename($_SERVER['PHP_SELF'], ".php") == "contact") {
                                    echo "<span style='font-size:13px;font-weight:5px;color:#796AEE'>| <i class='fa fa-envelope'></i> Contact / Queries</span>";
                                } else if (basename($_SERVER['PHP_SELF'], ".php") == "newsletter") {
                                    echo "<span style='font-size:13px;font-weight:5px;color:#796AEE'>| <i class='fa fa-envelope-open-o'></i> Newsletter Emails</span>";
                                }
                                ?>
                            </h4>
                        </div>
                    </header>
