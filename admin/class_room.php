<?php include '../includes/header.php'; ?>

<?php include '../includes/connect_db.php'; ?>

<?php
if (isset($_POST['submit'])) {
    $course_id = $_POST['course_id'];
    $days = $_POST['days'];
    $len = count($days);
    $daysString = implode(",",$days);
    $total_hours = $_POST['total_hours'];
    $hours_perday = $_POST['hours_perday'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    if (!empty($days && $total_hours && $hours_perday && $start_date)) {

        $query = "INSERT INTO `class`( `course_id`, `days`, `total_hours`, `hours_perday`, `start_date`, `end_date`) VALUES ('$course_id','$daysString','$total_hours','$hours_perday','$start_date','$end_date')"; //echo $query;die;
        if (mysqli_query($con, $query)) {

            echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Create Class Successfully </div>";

            echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'class_room.php';
			}, 2000);</script>";
        } else {
            echo "Query Doesn't Excute" . mysqli_error($con);
            //echo "<br>".$query;
        }
    }
}
?>
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <!-- Basic Form-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                        </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Create Class
                        </h3>
                    </div>

                    <div class="card-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-control-label">course Name to Class</label>
                                <?php
                                $query = "SELECT * FROM course";
                                $result = mysqli_query($con, $query);
                                echo "<select name='course_id' class='form-control' >course";
                                while ($cat_data = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $cat_data['course_id'] . "'>" . $cat_data['course_name'] . " - " . $cat_data['course_name_ar'] . "</option>";
                                }
                                echo "</select>";
                                ?>
                            </div><br>
                            <div class="col-lg-6">
                                <div>
                                    <label class="form-control-label">Days</label><br>
                                    <?php
                                    
                              echo '<input name="days[]" type="checkbox"  value="Sunday"> Sunday
                                    <input name="days[]" type="checkbox"  value="Monday"> Monday 
                                    <input name="days[]" type="checkbox"  value="Tuesday"> Tuesday
                                    <input name="days[]" type="checkbox"  value="Wndnesday"> Wndnesday
                                    <input name="days[]" type="checkbox"  value="Thursday"> Thursday';
                              $query = "SELECT * FROM class";
                                $result = mysqli_query($con, $query);
                                $class_data = mysqli_fetch_assoc($result);
                              $currentDate = new DateTime($class_data['start_date']);
                              $h = $class_data['total_hours'];
                              while ($h>=0){
                              $currentDate->modify('+1 W');
                              
                               $h-=4;
                              }
                              printf("\nThe maya dooms day is at %s ?!", 
                              date_format( $currentDate, 'D, M d Y'));
                              ?>


                                </div>
                            </div><br>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">total hours of class</label><br>
                                    <input type="text" name="total_hours" placeholder="عدد الساعات الكلي للدورة" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">hours perday</label><br>
                                    <input type="time" name="hours_perday" placeholder="عدد الساعات في الاسبوع" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Start Date</label>
                                    <input type="date" name="start_date" class="form-control" value="2019-04-08" min="2018-01-01" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">End Date</label>
                                    <input type="hidden" name="end_date" class="form-control" value="<?php echo date_format( $currentDate, 'Y-m-d'); ?>"  >
                                </div>
                            </div>


                            <div class="form-group">
                                <button type="submit" name="submit" class="lgx-btn "><span>Done</span></button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Class Table</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>course Name to Class </th>
                                        <th>Days </th>
                                        <th>total hours of class </th>
                                        <th>hours perday </th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                        
                                    </tr>
                                </thead>
                                <?php
                                $query = "SELECT * FROM class";
                                $result = mysqli_query($con, $query);
                                while ($class_data = mysqli_fetch_assoc($result)) {
                                    $course_id = $class_data['course_id'];
                                    $q = "SELECT course_name,course_name_ar FROM course WHERE course_id=$course_id";
                                    $res = mysqli_query($con, $q);
                                    $cat_name = mysqli_fetch_assoc($res);

                                    echo "<tr>";
                                    echo "<th>{$cat_name['course_name']} - {$cat_name['course_name_ar']}</th>";
                                    echo "<th>" . $class_data['days'] . "</th>";
                                    echo "<th>" . $class_data['total_hours'] . "</th>";
                                    echo "<th>" . $class_data['hours_perday'] . "</th>";
                                    echo "<th>" . $class_data['start_date'] . "</th>";
                                    echo "<th>" . $class_data['end_date'] . "</th>";
                                    echo "<th><a href='delete_class.php?class_id=" . $class_data['class_id'] . "' class='btn btn-danger'>Delete</a></th>";
                                    echo "<th><a href='update_class_room.php?class_id=" . $class_data['class_id'] . "' class='btn btn-primary'>Edit</a></th>";
                                    echo "</tr>";
                                }
                                ?>
                                <tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
