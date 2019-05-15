<?php include '../includes/header.php'; ?>

<?php include '../includes/connect_db.php'; ?>

<?php
if (isset($_POST['submit'])) {
    $stu_nat_num = $_POST['stu_nat_num'];
    $stu_name = mysqli_real_escape_string($con,$_POST['stu_name']);
    $stu_name_ar = mysqli_real_escape_string($con,$_POST['stu_name_ar']);
    $stu_birth = $_POST['stu_birth'];
    $stu_nat = $_POST['stu_nat'];
    
    $stu_mobile = $_POST['stu_mobile'];
    $stu_email = $_POST['stu_email'];
    $stu_qualifications = $_POST['stu_qualifications'];
    $stu_major = $_POST['stu_major'];
    $stu_univ = $_POST['stu_univ'];
    $stu_job = $_POST['stu_job'];
    $course_id = $_POST['course_id'];
    
    $reg_date = $_POST['reg_date'];
    $pay = $_POST['pay'];
    $amount_required = $_POST['amount_required'];
    $training = $_POST['training'];
    $know = $_POST['know'];



    if ($_FILES['image_sign']['error'] == 0) {
        $tmp_name = $_FILES['image_sign']['tmp_name'];
        $name = time() . "-" . $_FILES['image_sign']['name'];
        $path = "../images/emp_sign/";
        move_uploaded_file($tmp_name, $path . $name);
        $image_sign = $name;
        $query = "INSERT INTO `register`(`stu_name`, `stu_name_ar`, `stu_birth`, `stu_nat`, `stu_mobile`, `stu_email`, `stu_qualifications`, `stu_major`, `stu_univ`, `stu_job`, `course_id`, `reg_date`, `image_sign`, `stu_nat_num` , `pay`, `amount_required`, `training` ,`know`) VALUES ( '$stu_name', '$stu_name_ar', '$stu_birth', '$stu_nat', '$stu_mobile', '$stu_email', '$stu_qualifications', '$stu_major', '$stu_univ', '$stu_job', '$course_id', '$reg_date', '$name', '$stu_nat_num', '$pay' , '$amount_required', '$training' , '$know')";
        //echo $query;die;
        if (mysqli_query($con, $query)) {

            echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Create Register Successfully </div>";

            echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'display_register.php';
			}, 2000);</script>";
        } else {
            echo "Query Doesn't Excute" . mysqli_error($con);
            //echo "<br>".$query;
        }
    } else if ($_FILES['image_sign']['error'] == 4) {
        echo "<div style='width:auto;margin:15px' class='alert alert-danger role='alert'>Please Select File </div>";

        echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'display_register.php';
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
                                <label class="form-control-label">Course & Class Name to Student</label>
                                <?php
                                $query = "SELECT * FROM class INNER JOIN course ON course.course_id = class.class_id ";
                                $result = mysqli_query($con, $query);
                                echo "<select name='course_id' class='form-control' >class";
                                while ($cat_data = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $cat_data['class_id'] . "'>".$cat_data['course_name'] . " - " . $cat_data['start_time'] . " - " . $cat_data['end_time'] . "</option>";
                                }
                                echo "</select>";
                                ?>
                            </div>

                            <div class="row">
                                <!-- Basic Form-->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Name</label>
                                        <input type="text" name="stu_name" placeholder="Name of student in English" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Name Arabic</label>
                                        <input type="text" name="stu_name_ar" placeholder="اسم الطالب باللغة العربية " class="form-control">
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Nationality's Number </label><br>
                                        <input type="text" name="stu_nat_num" placeholder="الرقم الوطني او رقم الجواز" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Nationality's Country </label><br>
                                        <select name="stu_nat" class="form-control"  >
                                            <option class="form-control" value="أردني">أردني</option>
                                            <option class="form-control" value="فلسطيني">فلسطيني</option>
                                            <option class="form-control" value="سوري">سوري</option>
                                            <option class="form-control" value="عراقي">عراقي</option>
                                            <option class="form-control" value="سعودي">سعودي</option>
                                            <option class="form-control" value="اخرى">اخرى</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Mobile </label><br>
                                        <input type="text" name="stu_mobile" placeholder="رقم الجوال" class="form-control" value="+962">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Email </label><br>
                                        <input type="email" name="stu_email" placeholder="البريد الالكتروني" class="form-control">
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                     <label class="form-control-label">Student Qualifications</label><br>
                                     <input type="text" name="stu_qualifications" placeholder="stu_qualifications" class="form-control">
                                 </div>-->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Qualifications</label>
                                        <select name="stu_qualifications" class="form-control"  >
                                            <option class="form-control" value="High School">توجيهي</option>
                                            <option class="form-control" value="Bachelors">بكالوريس</option>
                                            <option class="form-control" value="Master">ماجستير</option>
                                            <option class="form-control" value="Ph.D.">دكتوراه</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Major</label>
                                        <select name="stu_major" class="form-control"  >
                                            <option class="form-control" value="طب">طب</option>
                                            <option class="form-control" value="هندسة">هندسة</option>
                                            <option class="form-control" value="تكنولوجيا المعلومات / IT">تكنولوجيا المعلومات / IT</option>
                                            <option class="form-control" value="محاسبة">محاسبة</option>
                                            <option class="form-control" value="ادارة الاعمال">ادارة الاعمال</option>
                                            <option class="form-control" value="اخرى">اخرى</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Job</label>
                                        <input type="text" name="stu_job" class="form-control" placeholder="المسمى الوظيفي للطالب">
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student University</label>
                                        <select name="stu_univ" class="form-control" >
                                            <option class="form-control" value="الجامعة العربية المفتوحة">الجامعة العربية المفتوحة</option>
                                            <option class="form-control" value="الجامعة الاردنية">الجامعة الاردنية</option>
                                            <option class="form-control" value="الجامعة الهاشمية">الجامعة الهاشمية</option>
                                            <option class="form-control" value="جامعة العلوم والتكنولوجيا">جامعة العلوم والتكنولوجيا</option>
                                            <option class="form-control" value=" جامعة اليرموك">جامعة اليرموك</option>
                                            <option class="form-control" value="جامعة البلقاء التطبيقية">جامعة البلقاء التطبيقية</option>
                                            <option class="form-control" value="جامعة فيلادلفيا">جامعة فيلادلفيا</option>
                                            <option class="form-control" value="جامعة الزيتونة">جامعة الزيتونة</option>
                                            <option class="form-control" value="جامعة اربد الاهلية">جامعة اربد الاهلية</option>
                                            <option class="form-control" value="جامعة عمان الاهلية">جامعة عمان الاهلية</option>
                                            <option class="form-control" value="جامعة العلوم الاسلامية">جامعة العلوم الاسلامية</option>
                                            <option class="form-control" value="جامعة آل البيت">جامعة آل البيت</option>
                                            <option class="form-control" value="الجامعة الالمانية ">الجامعة الالمانية </option>
                                            <option class="form-control" value="اخرى">اخرى</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student birthday</label>
                                        <input type="date" name="stu_birth" class="form-control"  value="1995-04-08"  >
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Register Date</label>
                                        <input type="date" name="reg_date" class="form-control" value="2019-07-22" min="2018-01-01" >
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Training</label>
                                        <select name="training" class="form-control"  >
                                            <option class="form-control" value="Public">Public</option>
                                            <option class="form-control" value="Private">Private</option>
                                            <option class="form-control" value="Corporate">Corporate</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Pay Method</label>
                                        <select name="pay" class="form-control"  >
                                            <option class="form-control" value="Cash">كاش</option>
                                            <option class="form-control" value="Payments">اقساط</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Amount Required </label>
                                        <input type="text" name="amount_required" class="form-control" placeholder="المبلغ المطلوب">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">How do you know us ?</label>
                                        <select name="know" class="form-control"  >
                                            <option class="form-control" value="Facebook">Facebook</option>
                                            <option class="form-control" value="Instgram">Instgram</option>
                                            <option class="form-control" value="Website">Website</option>
                                            <option class="form-control" value="LinkedIN">LinkedIN</option>
                                            <option class="form-control" value="طالب قديم">طالب قديم</option>
                                            <option class="form-control" value="صديق">صديق</option>
                                            <option class="form-control" value="جامعات">جامعات</option>
                                            <option class="form-control" value="اخرى">اخرى</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Image ID</label>
                                        <input type="file" name="image_sign" class="form-control">
                                    </div>
                                </div>
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



<script type="text/javascript">
    $(function () {
        $('#ok').click(function () {
            window.location.replace("display_register.php")
        });

    });
</script>
<?php include '../includes/footer.php'; ?>
