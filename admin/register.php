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



    if ($_FILES['image_sign']['error'] == 0) {
        $tmp_name = $_FILES['image_sign']['tmp_name'];
        $name = time() . "-" . $_FILES['image_sign']['name'];
        $path = "../images/emp_sign/";
        move_uploaded_file($tmp_name, $path . $name);
        $image_sign = $name;
        $query = "INSERT INTO `register`(`stu_name`, `stu_name_ar`, `stu_birth`, `stu_nat`, `stu_phone`, `stu_mobile`, `stu_email`, `stu_qualifications`, `stu_major`, `stu_univ`, `stu_job`, `course_id`, `emp_name`, `reg_date`, `image_sign`, `stu_nat_num` , `pay`, `amount_required`, `training`) VALUES ( '$stu_name', '$stu_name_ar', '$stu_birth', '$stu_nat', '$stu_phone', '$stu_mobile', '$stu_email', '$stu_qualifications', '$stu_major', '$stu_univ', '$stu_job', '$course_id', '$emp_name', '$reg_date', '$name', '$stu_nat_num', '$pay' , '$amount_required', '$training')";
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
                        <h3 class="h4">Create Student
                        </h3>
                    </div>

                    <div class="card-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-control-label">course Name to Student</label>
                                <?php
                                $query = "SELECT * FROM course";
                                $result = mysqli_query($con, $query);
                                echo "<select name='course_id' class='form-control' >course";
                                while ($cat_data = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $cat_data['course_id'] . "'>" . $cat_data['course_name'] . " - " . $cat_data['course_name_ar'] . "</option>";
                                }
                                echo "</select>";
                                ?>
                            </div>


                            <div class="form-group">
                                <label class="form-control-label">Student Name</label>
                                <input type="text" name="stu_name" placeholder="Name of student in English" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Student Name Arabic</label>
                                <input type="text" name="stu_name_ar" placeholder="اسم الطالب باللغة العربية " class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Student Nationality's Number </label><br>
                                <input type="text" name="stu_nat_num" placeholder="الرقم الوطني او رقم الجواز" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Student Nationality's Country </label><br>
                                <input type="text" name="stu_nat" placeholder="جنسية الطالب" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Student Phone </label><br>
                                <input type="text" name="stu_phone" placeholder="رقم الهاتف" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Student Mobile </label><br>
                                <input type="text" name="stu_mobile" placeholder="رقم الجوال" class="form-control">
                            </div>



                            <div class="form-group">
                                <label class="form-control-label">Student Email </label><br>
                                <input type="email" name="stu_email" placeholder="البريد الالكتروني" class="form-control">
                            </div>

                            <!-- <div class="form-group">
                                 <label class="form-control-label">Student Qualifications</label><br>
                                 <input type="text" name="stu_qualifications" placeholder="stu_qualifications" class="form-control">
                             </div>-->
                            <div class="form-group">
                                <label class="form-control-label">Student Qualifications</label>
                                <select name="stu_qualifications" class="form-control"  >
                                    <option class="form-control" value="High School">توجيهي</option>
                                    <option class="form-control" value="Bachelors">بكالوريس</option>
                                    <option class="form-control" value="Master">ماجستير</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Student Major</label>
                                <input type="text" name="stu_major" class="form-control" placeholder="التخصص">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Student Job</label>
                                <input type="text" name="stu_job" class="form-control" placeholder="المسمى الوظيفي للطالب">
                            </div>


                            <div class="form-group">
                                <label class="form-control-label">Student University</label>
                                <input type="text" name="stu_univ" class="form-control" placeholder="الجامعة / الكلية">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Employee Name</label>
                                <input type="text" name="emp_name" class="form-control" placeholder="اسم الموظف">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Student birthday</label>
                                <input type="date" name="stu_birth" class="form-control"  value="1995-04-08"  >
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Register Date</label>
                                <input type="date" name="reg_date" class="form-control" value="2019-07-22" min="2019-01-02" >
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Training</label>
                                <select name="training" class="form-control"  >
                                    <option class="form-control" value="Public">Public</option>
                                    <option class="form-control" value="Private">Private</option>
                                    <option class="form-control" value="Corporate">Corporate</option>

                                </select>

                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Pay</label>
                                <select name="pay" class="form-control"  >
                                    <option class="form-control" value="Cash">كاش</option>
                                    <option class="form-control" value="Payments">اقساط</option>

                                </select>

                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Amount Required </label>
                                <input type="text" name="amount_required" class="form-control" placeholder="المبلغ المطلوب">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Image ID</label>
                                <input type="file" name="image_sign" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" value="Create" class="btn btn-primary">
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
                        <h3 class="h4">Register Table</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>course Name</th>
                                        <th>Student Name</th>
                                        <th>Student Name Arabic</th>
                                        <th>Student Major </th>
                                        <th>Mobile</th>
                                       
                                        <th>Employee Name</th>
                                        <th>image ID</th>
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
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <?php
                                $query = "SELECT * FROM register";
                                $result = mysqli_query($con, $query);
                                while ($stu_data = mysqli_fetch_assoc($result)) {
                                    $course_id = $stu_data['course_id'];
                                    $q = "SELECT course_name,course_name_ar FROM course WHERE course_id=$course_id";
                                    $res = mysqli_query($con, $q);
                                    $cat_name = mysqli_fetch_assoc($res);

                                    echo "<tr>";
                                    echo "<th>" . $stu_data['stu_id'] . "</th>";
                                    echo "<th>{$cat_name['course_name']} - {$cat_name['course_name_ar']}</th>";
                                    echo "<th>" . $stu_data['stu_name'] . "</th>";
                                    echo "<th>" . $stu_data['stu_name_ar'] . "</th>";
                                    echo "<th>" . $stu_data['stu_major'] . "</th>";
                                    echo "<th>" . $stu_data['stu_mobile'] . "</th>";
                                    
                                    echo "<th>" . $stu_data['emp_name'] . "</th>";
                                    echo "<th><img src='../images/emp_sign/".$stu_data['image_sign']."' height='50' width='50' class='rounded circle'></th>";
                                    
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
                                    echo "<th><a href='update_student.php?stu_id=" . $stu_data['stu_id'] . "' class='btn btn-primary'>Edit</a></th>";
                                    echo "<th><a href='delete_student.php?stu_id=" . $stu_data['stu_id'] . "' class='btn btn-danger'>Delete</a></th>";
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

<script type="text/javascript">
    $(function () {
        $('#ok').click(function () {
            window.location.replace("register.php")
        });

    });
</script>
<?php include '../includes/footer.php'; ?>
