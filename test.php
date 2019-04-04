<?php include '../includes/header.php'; ?>

<?php include '../includes/connect_db.php'; ?>

<?php
?>
<?php
if (isset($_POST['submit'])) {
    $file_name = $_FILES['admin_image']['name'];
    $tmp_name = $_FILES['admin_image']['tmp_name'];
    move_uploaded_file($tmp_name, '../images/adminProfile/' . $file_name);
    $email = $_POST['admin_email'];
    $password = $_POST['admin_password'];
    $full_name = $_POST['full_name'];
    $query = "INSERT INTO Admin(admin_email,admin_password,admin_name,admin_image)
		values('$email','$password','$full_name','$file_name')";
    


    //echo $query;die;


    // echo $query;
    mysqli_query($con, $query);
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
                        <h3 class="h4">Create Admin</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="email" name="admin_email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" name="admin_password" placeholder="Password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Full Name</label>
                                <input type="text" placeholder="full_name  max:13 charachter" name="full_name" class="form-control" maxlength="13">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Image</label>
                                <input type="file"  name="admin_image" class="form-control">
                            </div>

                            <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">

                                        <span id="payment-button-amount">Create</span>

                                    </button>
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
                        <h3 class="h4">Admins Table</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Email</th>
                                        <th>Full Name</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "select * from Admin";
                                    $result = mysqli_query($con, $query);
                                    while ($adminset = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<th scope ='row'>{$adminset['admin_id']}</th>";
                                        echo "<th scope ='row'>{$adminset['admin_email']}</th>";
                                        echo "<th scope ='row'>{$adminset['admin_name']}</th>";
                                        echo "<th scope ='row'><img height='50' width='50' src='../images/adminProfile/{$adminset['admin_image']}'</th>";
                                        echo "<th scope ='row'><a href='update_admin.php?admin_id={$adminset['admin_id']}' class='btn btn-primary'>Edit</a></th>";
                                        echo "<th scope='row'><a href='delete_admin.php?admin_id={$adminset['admin_id']}&admin_image={$adminset['admin_image']}' class ='btn btn-danger'>Delete</a></th>";
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
    </div>
</section>
<?php include '../includes/footer.php'; ?>