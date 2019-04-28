<?php include '../includes/header.php'; ?>

<?php include '../includes/connect_db.php'; ?>

<?php
if (isset($_POST['update'])) {
    $admin_id = $_GET['admin_id'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    $full_name = $_POST['full_name'];
    $path = '../images/adminProfile/';
    if (isset($_FILES['admin_image'])) {
        $old_image = $_POST['old_image'];
        $img_tmp = $_FILES['admin_image']['tmp_name'];
        $path = '../images/adminProfile/';
        if ($_FILES['admin_image']['error'] == 0) {
            $name = time() . '-' . $_FILES['admin_image']['name'];
            $query = "UPDATE `admin` SET `admin_email`='$admin_email',`admin_password`='$admin_password',`full_name`='$full_name',`admin_image`='$name' WHERE admin_id='$admin_id'";


            if (mysqli_query($con, $query)) {

                $old_img = $_POST ['old_image'];
                if (file_exists($path . $old_image)) {
                    unlink($path . $old_img);
                }
                move_uploaded_file($tmp_name, $path . $name);
                //echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Update Successfully</div>";	

                echo "<script type='text/javascript'>
                   $(function (){
		   $('#myModal').modal();
                     });

		
		</script>";
            }
        } else
            echo mysqli_error($con);
    } else {
        $query = "UPDATE `admin` SET `admin_email`='$admin_email',`admin_password`='$admin_password',`full_name`='$full_name' WHERE admin_id='$admin_id'";

        if (mysqli_query($con, $query)) {

            echo "<script type='text/javascript'>
                   $(function (){
		   $('#myModal').modal();
                     });

		
		</script>";
            //echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Update Successfully</div>";	

            /* echo "<script type='text/javascript'>
              setTimeout('leave()', 5000);
              function leave() {
              window.location = 'admin.php';
              }
              </script>"; */
        }
    }
}
?>


<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <!-- Basic Form-->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                        </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Update Admin</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">

                            <?php
                            $admin_id = $_GET['admin_id']; //sent by url 
                            $q = "SELECT * from admin WHERE admin_id='$admin_id'";
                            $result = mysqli_query($con, $q);
                            $admin_data = mysqli_fetch_assoc($result);
                            ?>

                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="hidden" name="admin_id" value="<?php echo $admin_data['admin_email']; ?> " />
                                <input type="email" name="admin_email" placeholder="Email Address" class="form-control" value="<?php echo $admin_data['admin_email']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="hidden" name="admin_id" value="<?php echo $admin_data['admin_id']; ?> " />
                                <input type="password" name="admin_password" placeholder="Password" class="form-control" value="<?php echo $admin_data['admin_password']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Full Name</label>
                                <input type="text" placeholder="full_name" name="full_name" class="form-control" value="<?php echo $admin_data['full_name']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Image</label>
                                <br>
                                <img src="<?php echo '../images/adminProfile/' . $admin_data['admin_image'] ?>" height="80" width="80">
                                <input type="file" name="admin_image" class="form-control">
                                <input type=hidden name="old_image" value="<?php echo $admin_data['admin_image'] ?>">
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
<div id="myModal" class="modal fade" style="display: none;">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="fa fa-check-o"></i>
                </div>				
                <h4 class="modal-title">Awesome!</h4>	
            </div>
            <div class="modal-body">
                <p class="text-center">Update Successfully.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" data-dismiss="modal" id="ok">OK</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('#ok').click(function () {
            window.location.replace("admin.php")
        });

    });
</script>

<?php include '../includes/footer.php'; ?>
