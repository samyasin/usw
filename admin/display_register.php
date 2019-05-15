<?php include '../includes/header.php'; ?>

<?php include '../includes/connect_db.php'; ?>

<?php
if (isset($_POST['submit'])) {
    $stu_nat_num        = $_POST['stu_nat_num'];
    $stu_name           = $_POST['stu_name'];
    $stu_name_ar        = $_POST['stu_name_ar'];
    $stu_birth          = $_POST['stu_birth'];
    $stu_nat            = $_POST['stu_nat'];
    $stu_phone          = $_POST['stu_phone'];
    $stu_mobile         = $_POST['stu_mobile'];
    $stu_email          = $_POST['stu_email'];
    $stu_qualifications = $_POST['stu_qualifications'];
    $stu_major          = $_POST['stu_major'];
    $stu_univ           = $_POST['stu_univ'];
    $stu_job            = $_POST['stu_job'];
    $course_id          = $_POST['course_id'];
    $emp_name           = $_POST['emp_name'];
    $reg_date           = $_POST['reg_date'];
    $pay                = $_POST['pay'];
    $amount_required    = $_POST['amount_required'];
    $training           = $_POST['training'];
    $know               = $_POST['know'];



    if ($_FILES['image_sign']['error'] == 0) {
        $tmp_name = $_FILES['image_sign']['tmp_name'];
        $name = time() . "-" . $_FILES['image_sign']['name'];
        $path = "../images/emp_sign/";
        move_uploaded_file($tmp_name, $path . $name);
        $image_sign = $name;
        $query = "INSERT INTO `register`(`stu_name`, `stu_name_ar`, `stu_birth`, `stu_nat`, `stu_phone`, `stu_mobile`, `stu_email`, `stu_qualifications`, `stu_major`, `stu_univ`, `stu_job`, `course_id`, `emp_name`, `reg_date`, `image_sign`, `stu_nat_num` , `pay`, `amount_required`, `training` ,`know`) VALUES ( '$stu_name', '$stu_name_ar', '$stu_birth', '$stu_nat', '$stu_phone', '$stu_mobile', '$stu_email', '$stu_qualifications', '$stu_major', '$stu_univ', '$stu_job', '$course_id', '$emp_name', '$reg_date', '$name', '$stu_nat_num', '$pay' , '$amount_required', '$training' , '$know')";
        //echo $query;die;
        if (mysqli_query($con, $query)) {

            echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Create Register Successfully </div>";

            echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'register.php';
			}, 2000);</script>";
        } else {
            echo "Query Doesn't Excute" . mysqli_error($con);
            //echo "<br>".$query;
        }
    } else if ($_FILES['image_sign']['error'] == 4) {
        echo "<div style='width:auto;margin:15px' class='alert alert-danger role='alert'>Please Select File </div>";

        echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'register.php';
			}, 2000);</script>";
    } else {
        exit();
    }
}
?>
<section class="form">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Register Table</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>مسح</th>
                                        <th>تعديل</th>
                                        <th>اسم الدورة ورقم الشعبة</th>
                                        
                                        <th>التخصص </th>
                                        
                                        <th>كيف عرف بنا</th>
                                       
                                        
                                        <th>صورة العقد</th>
                                        <th>رقم الجوال</th>
                                        <th>اسم الطالب</th>
                                        <!--<th>Student birth </th>
                                        <th>stu nat</th>
                                        <th>stu_phone </th>
                                        <th>stu_mobile</th>
                                        <th>stu_email</th>
                                        <th>stu_qualifications</th>
                                        <th>stu_major</th>
                                        <th>stu_univ</th>
                                        <th>stu_job</th>
                                        <th>emp_name</th>
                                        
                                        <th>image_sign</th>
                                        <th>reg_date</th>-->
                                       
                                    </tr>
                                </thead>
                                <?php
                                $query = "SELECT * FROM register";
                                $result = mysqli_query($con, $query);
                                while ($stu_data = mysqli_fetch_assoc($result)) {
                                    $course_id = $stu_data['course_id'];
                                    $q = "SELECT * FROM class INNER JOIN course ON course.course_id = class.class_id ";
                                    $res = mysqli_query($con, $q);
                                    $cat_name = mysqli_fetch_assoc($res);

                                    echo "<tr>";
                                    echo "<th><a href='delete_student.php?stu_id=" . $stu_data['stu_id'] . "' class='btn btn-danger'>Delete</a></th>";
                                    echo "<th><a href='update_student.php?stu_id=" . $stu_data['stu_id'] . "' class='btn btn-primary'>Edit</a></th>";
                                    echo "<th>{$cat_name['class_id']} -  {$cat_name['course_name']}</th>";
                                    echo "<th>" . $stu_data['stu_major'] . "</th>";
                                    echo "<th>" . $stu_data['know'] . "</th>";
                                    
                                    echo "<th><img src='../images/emp_sign/".$stu_data['image_sign']."' height='50' width='50' class='rounded circle'></th>";
                                    echo "<th>" . $stu_data['stu_mobile'] . "</th>";
                                    echo "<th>" . $stu_data['stu_name_ar'] . "</th>";
                                    /* echo "<th>".substr($cour_data['course_desc'],0,70)."...</th>";
                                      echo "<th>".substr($cour_data['course_desc_ar'],0,70)."....</th>";
                                      echo "<th>".substr($cour_data['course_outcome'],0,70)."..</th>";
                                      echo "<th>".substr($cour_data['course_outcome_ar'],0,70)."..</th>";
                                      echo "<th>".$cour_data['course_level']."</th>";
                                      echo "<th>".$cour_data['course_hours']."H</th>";
                                      echo "<th>".$cour_data['course_price']."$</th>";
                                      echo "<th>".$cour_data['course_special_price']."%</th>";
                                      echo "<th><img src='../images/course/".$cour_data['course_image']."' height='50' width='50' class='rounded circle'></th>";
                                      echo "<th>".substr($cour_data['course_content'],0,70)."...</th>";
                                      echo "<th>".substr($cour_data['course_content_ar'],0,70)."...</th>";
                                      echo "<th>".date('Y-m-d',strtotime($cour_data['start_date']))."</th>";
                                      echo "<th>".date('Y-m-d',strtotime($cour_data['end_date']))."</th>"; */
                                    
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
