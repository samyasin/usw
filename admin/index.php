<?php include '../includes/header.php'; ?>
<section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
        <div class="row bg-white has-shadow">
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span> Admin</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                        </div>
                    </div>
                    <div class="number"><strong>
                            <?php
                            $query = "SELECT * FROM admin";
                            $res = mysqli_query($con, $query);
                            echo mysqli_num_rows($res);
                            ?>
                        </strong></div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-list"></i></div>
                    <div class="title"><span>Categories</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                        </div>
                    </div>
                    <div class="number"><strong>
                            <?php
                            $query = "SELECT * FROM category";
                            $res = mysqli_query($con, $query);
                            echo mysqli_num_rows($res);
                            ?>
                        </strong></div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-book"></i></div>
                    <div class="title"><span>Courses</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 10%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                        </div>
                    </div>
                    <div class="number"><strong>
                            <?php
                            $query = "SELECT * FROM course";
                            $res = mysqli_query($con, $query);
                            echo mysqli_num_rows($res);
                            ?>
                        </strong></div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-calendar"></i></div>
                    <div class="title"><span>Events</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                        </div>
                    </div>
                    <div class="number"><strong>
                            <?php
                            $query = "SELECT * FROM event";
                            $res = mysqli_query($con, $query);
                            echo mysqli_num_rows($res);
                            ?>
                        </strong></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Header Section    -->
<section class="dashboard-header">
    <div class="container-fluid">
        <div class="row">
            <!-- Statistics -->
            <div class="statistics col-lg-3 col-12">
                <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><i class="fa fa-folder"></i></div>
                    <div class="text"><strong>                              <?php
                            $q = "SELECT * FROM album";
                            $res = mysqli_query($con, $q);
                            echo mysqli_num_rows($res);
                            ?>
                        </strong><br><small>Albums</small></div>
                </div>
                <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-image"></i></div>
                    <div class="text"><strong><?php
                            $query = "SELECT * FROM image";
                            $res = mysqli_query($con, $query);
                            echo mysqli_num_rows($res);
                            ?></strong><br><small> Uploaded Pictures</small></div>
                </div>
                <!--<div class="statistic d-flex align-items-center bg-white has-shadow">
                        <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
                        <div class="text"><strong>147</strong><br><small>Forwards</small></div>
                </div>-->
            </div>
            <!-- Line Chart            -->
            <!--<div class="chart col-lg-6 col-12">
                    <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                            <canvas id="lineCahrt"></canvas>
                    </div>
            </div>-->
            <!--<div class="chart col-lg-3 col-12">
                    <div class="bar-chart has-shadow bg-white">

                            <div class="title"><strong class="text-violet">95%</strong><br><small>Current Server Uptime</small></div>
                            <canvas id="barChartHome"></canvas>
                    </div>
                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                            <div class="icon bg-green"><i class="fa fa-line-chart"></i></div>

                            <div class="text"><strong>99.9%</strong><br><small>Success Rate</small></div>

                    </div>
            </div> -->
        </div>
    </div>
</section>



<?php include '../includes/footer.php'; ?>
