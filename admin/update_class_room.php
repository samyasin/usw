<?php include '../includes/header.php'; ?>

<?php include '../includes/connect_db.php'; ?>

<?php
$class_id = $_GET['class_id'];
$query = "SELECT * FROM class where class_id = $class_id";
$result = mysqli_query($con, $query);
$class_data = mysqli_fetch_assoc($result);
if (isset($_POST['update'])) {
    $course_id = $_POST['course_id'];
    $days = $_POST['days'];
    $total_hours = $_POST['total_hours'];
    $hours_perday = $_POST['hours_perday'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    if (!empty($days && $total_hours && $hours_perday && $start_date)) {

        $query = "UPDATE `class` SET `course_id`='$course_id',`days`='$days',`total_hours`='$total_hours',`hours_perday`='$hours_perday',`start_date`='$start_date',`end_date`='$end_date' WHERE `class_id` = '$class_id' ";//echo $query;die;
        if (mysqli_query($con, $query)) {

            echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Update Class Successfully </div>";

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
                        <h3 class="h4">Update Student
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
                                    
                              echo '<input name="days" type="checkbox"  value="Sunday"> Sunday
                                    <input name="days" type="checkbox"  value="Monday"> Monday 
                                    <input name="days" type="checkbox"  value="Tuesday"> Tuesday
                                    <input name="days" type="checkbox"  value="Wndnesday"> Wndnesday
                                    <input name="days" type="checkbox"  value="Thursday"> Thursday';
                              
                              
                              ?>


                                </div>
                            </div><br>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">total hours of class</label><br>
                                    <input type="text" name="total_hours" placeholder="عدد الساعات الكلي للدورة" class="form-control" value="<?php echo $class_data['total_hours']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">hours perday</label><br>
                                    <input type="time" name="hours_perday" placeholder="عدد الساعات في الاسبوع" class="form-control" value="<?php echo $class_data['hours_perday']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Start Date</label>
                                    <input type="date" name="start_date" class="form-control" value="<?php echo $class_data['start_date']; ?>" min="2018-01-01" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">End Date</label>
                                    <input type="date" name="end_date" class="form-control" value="<?php echo $class_data['end_date']; ?>" min="2018-01-01" >
                                </div>
                            </div>


                            <div class="form-group">
                                <input type="submit" name="update" value="Update" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
