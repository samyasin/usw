<?php include '../includes/header.php'; ?>
<?php include '../includes/connect_db.php'; ?>

<?php

$stu_id = $_GET['stu_id'];
$query = "SELECT * FROM register where stu_id = $stu_id";
$result = mysqli_query($con, $query);
$stu_data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
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
    $old_image = $_POST['old_image_sign'];
    $img_tmp = $_FILES['image_sign']['tmp_name'];

    $path = "../images/emp_sign/";
    if ($_FILES['image_sign']['error'] == 0) {
        $img_name = time() . '-' . $_FILES['image_sign']['name'];

        //echo $query;die;
        $query = "UPDATE `register` SET `stu_name`='$stu_name',`stu_name_ar`='$stu_name_ar',"
                . "`stu_birth`='$stu_birth',`stu_nat`='$stu_nat',`stu_mobile`='$stu_mobile',"
                . "`stu_email`='$stu_email',`stu_qualifications`='$stu_qualifications',`stu_major`='$stu_major',"
                . "`stu_univ`='$stu_univ',`stu_job`='$stu_job',`course_id`='$course_id',"
                . "`reg_date`='$reg_date',`image_sign`='$img_name',"
                . "`stu_nat_num`='$stu_nat_num' , `pay`='$pay',`amount_required`='$amount_required',`training`='$training',`know`='$know'   WHERE stu_id = '$stu_id' ";

        //echo $query;die;

        if (mysqli_query($con, $query)) {
            echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Updated Successfully</div>";


            move_uploaded_file($img_tmp, $path . $img_name);
            unlink($path . $old_image);
            echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'update_student.php';
			}, 2000);</script>";
        } else {
            echo "ERROR:" . mysqli_error($con);
        }
    } else if ($_FILES['image_sign']['error'] == 4) {

        $query = "UPDATE `register` SET `stu_name`='$stu_name',`stu_name_ar`='$stu_name_ar',"
                . "`stu_birth`='$stu_birth',`stu_nat`='$stu_nat',`stu_mobile`='$stu_mobile',"
                . "`stu_email`='$stu_email',`stu_qualifications`='$stu_qualifications',`stu_major`='$stu_major',"
                . "`stu_univ`='$stu_univ',`stu_job`='$stu_job',`course_id`='$course_id',"
                . "`reg_date`='$reg_date',"
                . "`stu_nat_num`='$stu_nat_num' , `pay`='$pay',`amount_required`='$amount_required',`training`='$training' ,`know`='$know' WHERE stu_id = '$stu_id' ";// echo $query;die;       
        if (mysqli_query($con, $query)) {
            echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Updated Successfully</div>";

            echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'display_register.php';
			}, 2000);</script>";
        }
    } else {


        echo "<div style='width:auto;margin:15px' class='alert alert-danger role='alert'>Somthing Wrong</div>";

        echo "<script type='text/Javascript'>
			   window.setTimeout(function() {
			   window.location.href = 'display_register.php';
			    }, 2000);</script>";
    }
}

// fetch old data 
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
                        <h3 class="h4">Update Student Info
                        </h3>
                    </div>

                    <div class="card-body">

                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-control-label">Course & Class Name to Student</label>
                                <?php
                                $query = "SELECT * FROM class INNER JOIN course ON course.course_id = class.class_id ";
                                $result = mysqli_query($con, $query);
                                echo "<select name='course_id' class='form-control' >course";
                                while ($cat_data = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $cat_data['class_id'] . "'>" . $cat_data['class_id'] . " - " .$cat_data['course_name'] . " - " . $cat_data['start_time'] . " - " . $cat_data['end_time'] . "</option>";
                                }
                                echo "</select>";
                                ?>
                            </div>

                            <div class="row">
                                <!-- Basic Form-->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Name</label>
                                        <input type="text" name="stu_name" placeholder="Name of student in English" class="form-control" value="<?php echo $stu_data['stu_name']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Name Arabic</label>
                                        <input type="text" name="stu_name_ar" placeholder="اسم الطالب باللغة العربية " class="form-control" value="<?php echo $stu_data['stu_name_ar']; ?>">
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Nationality's Number </label><br>
                                        <input type="text" name="stu_nat_num" placeholder="الرقم الوطني او رقم الجواز" class="form-control" value="<?php echo $stu_data['stu_nat_num']; ?>">
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
                                        <input type="text" name="stu_mobile" placeholder="رقم الجوال" class="form-control" value="<?php echo $stu_data['stu_mobile']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student Email </label><br>
                                        <input type="email" name="stu_email" placeholder="البريد الالكتروني" class="form-control" value="<?php echo $stu_data['stu_email']; ?>">
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
                                        <input type="text" name="stu_job" class="form-control" placeholder="المسمى الوظيفي للطالب" value="<?php echo $stu_data['stu_job']; ?>">
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student University</label>
                                        <select name="stu_univ" class="form-control" >
                                            <option class="form-control" value="<?php echo $stu_data['stu_univ']; ?>"> <?php echo $stu_data['stu_univ']; ?> </option>
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
                                            <option class="form-control" value="الجامعة الالمانية ">جامعة الاسراء </option>
                                            <option class="form-control" value="اخرى">اخرى</option>

                                        </select>
                                    </div>                              
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Student birthday</label>
                                        <input type="date" name="stu_birth" class="form-control"  value="<?php echo $stu_data['stu_birth']; ?>" >
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Register Date</label>
                                        <input type="date" name="reg_date" class="form-control" value="<?php echo $stu_data['reg_date']; ?>" min="2018-01-01" >
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
                                        <input type="text" name="amount_required" class="form-control" placeholder="المبلغ المطلوب" value="<?php echo $stu_data['amount_required']; ?>">
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
                                        <br>
                                        <img src="<?php echo '../images/emp_sign/' . $stu_data['image_sign'] ?>" height="80" width="80">
                                        <input type="file" name="image_sign" class="form-control">
                                        <input type="hidden" name="old_image_sign" class="form-control" value="<?php echo $stu_data['image_sign']; ?>">
                                    </div>
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
