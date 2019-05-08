<?php include '../includes/header.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("select").change(function(){
  	var x = $("select").val();
    
    //alert("The text has been changed.");
    if($("select").val() == "C"){
    	alert(111);
    	$("input").show();
    }
  });
});
</script>
<?php include '../includes/connect_db.php'; ?>

<?php
$stu_id = $_GET['stu_id'];
$query = "SELECT * FROM register where stu_id = $stu_id";
$result = mysqli_query($con, $query);
$stu_data = mysqli_fetch_assoc($result);
if (isset($_POST['update'])) {
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
    $old_image          = $_POST['old_image_sign'];
    $img_tmp            = $_FILES['image_sign']['tmp_name'];
    
    $path = "../images/emp_sign/";
    if ($_FILES['image_sign']['error'] == 0) {
        $img_name = time() . '-' . $_FILES['image_sign']['name'];

        //echo $query;die;
        $query = "UPDATE `register` SET `stu_name`='$stu_name',`stu_name_ar`='$stu_name_ar',"
                . "`stu_birth`='$stu_birth',`stu_nat`='$stu_nat',`stu_phone`='$stu_phone',`stu_mobile`='$stu_mobile',"
                . "`stu_email`='$stu_email',`stu_qualifications`='$stu_qualifications',`stu_major`='$stu_major',"
                . "`stu_univ`='$stu_univ',`stu_job`='$stu_job',`course_id`='$course_id',"
                . "`emp_name`='$emp_name',`reg_date`='$reg_date',`image_sign`='$img_name',"
                . "`stu_nat_num`='$stu_nat_num' , `pay`='$pay',`amount_required`='$amount_required',`training`='$training',`know`='$know'   WHERE stu_id = '$stu_id' ";

        //echo $query;die;

        if (mysqli_query($con, $query)) {
            echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Updated Successfully</div>";


            move_uploaded_file($img_tmp, $path . $img_name);
            unlink($path . $old_image);
            echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'register.php';
			}, 2000);</script>";
        } else {
            echo "ERROR:" . mysqli_error($con);
        }
    } else if ($_FILES['image_sign']['error'] == 4) {

         $query = "UPDATE `register` SET `stu_name`='$stu_name',`stu_name_ar`='$stu_name_ar',"
                . "`stu_birth`='$stu_birth',`stu_nat`='$stu_nat',`stu_phone`='$stu_phone',`stu_mobile`='$stu_mobile',"
                . "`stu_email`='$stu_email',`stu_qualifications`='$stu_qualifications',`stu_major`='$stu_major',"
                . "`stu_univ`='$stu_univ',`stu_job`='$stu_job',`course_id`='$course_id',"
                . "`emp_name`='$emp_name',`reg_date`='$reg_date',"
                . "`stu_nat_num`='$stu_nat_num' , `pay`='$pay',`amount_required`='$amount_required',`training`='$training' ,`know`='$know' WHERE stu_id = '$stu_id' "; //echo $query;die;       
        if (mysqli_query($con, $query)) {
            echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Updated Successfully</div>";

            echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'register.php';
			}, 2000);</script>";
        }
    } else {


        echo "<div style='width:auto;margin:15px' class='alert alert-danger role='alert'>Somthing Wrong</div>";

        echo "<script type='text/Javascript'>
			   window.setTimeout(function() {
			   window.location.href = 'register.php';
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
                                <input type="text" name="stu_name" placeholder="stu_name_ar" class="form-control" value="<?php echo $stu_data['stu_name']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Student Name Arabic</label>
                                <input type="text" name="stu_name_ar" placeholder="stu_name_ar " class="form-control" value="<?php echo $stu_data['stu_name_ar']; ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Student Nationality's Number </label><br>
                                <input type="text" name="stu_nat_num" placeholder="stu_nat_num" class="form-control" value="<?php echo $stu_data['stu_nat_num']; ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Student Nationality's Country </label><br>
                                <input type="text" name="stu_nat" placeholder="stu_nat" class="form-control" value="<?php echo $stu_data['stu_nat']; ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Student Phone </label><br>
                                <input type="text" name="stu_phone" placeholder="stu_phone" class="form-control" value="<?php echo $stu_data['stu_phone']; ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Student Mobile </label><br>
                                <input type="text" name="stu_mobile" placeholder="stu_mobile" class="form-control" value="<?php echo $stu_data['stu_mobile']; ?>">
                            </div>



                            <div class="form-group">
                                <label class="form-control-label">Student Email </label><br>
                                <input type="email" name="stu_email" placeholder="stu_email" class="form-control" value="<?php echo $stu_data['stu_email']; ?>">
                            </div>

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
                                <input type="text" name="stu_major" class="form-control" placeholder="stu_major" value="<?php echo $stu_data['stu_major']; ?>"> 
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Student Job</label>
                                <input type="text" name="stu_job" class="form-control" placeholder="stu_job" value="<?php echo $stu_data['stu_job']; ?>">
                            </div>


                            <div class="form-group">
                                <label class="form-control-label">Student University</label>
                                <input type="text" name="stu_univ" class="form-control" placeholder="stu_univ" value="<?php echo $stu_data['stu_univ']; ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Employee Name</label>
                                <input type="text" name="emp_name" class="form-control" placeholder="emp_name" value="<?php echo $stu_data['emp_name']; ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Student birthday</label>
                                <input type="stu_birth" name="stu_birth" class="form-control"  value="1995-04-08" value="<?php echo $stu_data['stu_birth']; ?>" >
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Register Date</label>
                                <input type="reg_date" name="reg_date" class="form-control" value="2019-07-22" min="2019-01-02" value="<?php echo $stu_data['reg_date']; ?>" >
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
                                <input type="text" name="amount_required" class="form-control" placeholder="المبلغ المطلوب" value="<?php echo $stu_data['amount_required']; ?>">
                            </div>
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
                                    <option class="form-control" value="C">C</option>
                                    

                                </select><input type="text" style="display:none">
                            </div>
                            
                            <div class="form-group">
                                <label class="form-control-label">Image ID</label>
                                <br>
                                <img src="<?php echo '../images/emp_sign/' . $stu_data['image_sign'] ?>" height="80" width="80">
                                <input type="file" name="image_sign" class="form-control">
                                <input type="hidden" name="old_image_sign" class="form-control" value="<?php echo $stu_data['image_sign']; ?>">
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
