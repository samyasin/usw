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
                        <h3 class="h4">Student Data
                        </h3>
                    </div>

                    <div class="card-body">
                        <!----------------your Code Here----------------------->
                        
                            <table class="table table-striped table-sm">

                                <thead>

                                    <tr>

                                        <th>#</th>

                                        <th>Name</th>

                                        <th>Mobile</th>

                                         <th>college</th>

                                        <th>Major</th>
                                        

                                        <th>Address</th>
                                        <th> view</th>

                                        <th></th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php
                                    $query = "select * from student_data";

                                    $result = mysqli_query($con, $query);

                                    while ($adminset = mysqli_fetch_assoc($result)) {

                                        echo "<tr>";

                                        echo "<th scope ='row'>{$adminset['student_id']}</th>";

                                        echo "<th scope ='row'>{$adminset['name']}</th>";

                                        echo "<th scope ='row'>{$adminset['mobile']}</th>";
                                        
                                        echo "<th scope ='row'>{$adminset['college']}</th>";
                                        
                                        echo "<th scope ='row'>{$adminset['major']}</th>";
                                        
                                        
                                        echo "<th scope ='row'>{$adminset['address']}</th>";
                                       
                                        
                                        echo  "<th scope ='row'><a href=''>view</a></th>";
                                        

                                        
                                        echo "</tr>";
                                    }
                                    ?>

                                </tbody>

                            </table>
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
