<?php include '../includes/header.php'; ?>
<?php include '../includes/connect_db.php'; ?>
<?php
if (isset($_POST['submit'])) {

    if ($_FILES['cat_image']['error'] == 0) { // multidimensional array
        $tmp_name = $_FILES['cat_image']['tmp_name'];
        $file_name = time() . '-' . $_FILES['cat_image']['name'];
        $path = "../images/category/";
        move_uploaded_file($tmp_name, $path . $file_name);
        $cat_name = $_POST['cat_name'];
        $cat_name_ar = $_POST['cat_name_ar'];
        $cat_image = $file_name;
        $query = "INSERT INTO category(cat_name,cat_name_ar,cat_image)
         values('$cat_name','$cat_name_ar','$cat_image')";
        mysqli_query($con, $query);
        echo "<meta http-equiv='refresh' content='0'";
    } else if ($_FILES['cat_image']['error'] == 4) {

        echo "<div style='width:auto;margin:15px' class='alert alert-danger role='alert'>Please Select File </div>";
    } else {
        echo mysqli_error();
        die();
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
                        <h3 class="h4">Create Category</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-control-label">Category Name</label>
                                <input type="text" name="cat_name" placeholder="Category Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Category Name Arabic</label>
                                <input type="text" name="cat_name_ar" placeholder="Category Name Arabic" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Category Image</label>
                                <input type="file" name="cat_image" class="form-control">
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
                        <h3 class="h4">Compact Table</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Category Name Arabic</th>
                                        <th>Category Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
$query = "SELECT * FROM category";
$result = mysqli_query($con, $query);
while ($cat_data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<th scope='row'>" . $cat_data['cat_id'] . "</th>";
    echo "<th scope='row'>" . $cat_data['cat_name'] . "</th>";
    echo "<th scope='row'>" . $cat_data['cat_name_ar'] . "</th>";
    echo "<th scope='row'><img class='rounded-circle' height='40' width='40' src='../images/category/" . $cat_data['cat_image'] . "'></th>";
    echo "<th scope='row'><a href='update_category.php?cat_id=" . $cat_data['cat_id'] . "' class='btn btn-primary'>Edit</a>" . "</th>";
    echo "<th scope='row'><a href='delete_category.php?cat_id=" . $cat_data['cat_id'] . "&cat_image=" . $cat_data['cat_image'] . "' class='btn btn-danger'>Delete</a>" . "</th>";
    echo "</tr>";
}


/* $query = "select * from admin";
  $result = mysqli_query($con,$query);
  while($adminset = mysqli_fetch_assoc($result)){
  echo "<tr>";
  echo "<th scope='row'>{$adminset['admin_id']}</th>";
  echo "<th scope='row'>{$adminset['admin_email']}</th>";
  echo "<th scope='row'>{$adminset['full_name']}</th>";
  echo "<th scope='row'><a href='update_admin.php?admin_id={$adminset['admin_id']}'>Edit</a></th>";
  echo "<th scope='row'><a href='delete_admin.php?admin_id={$adminset['admin_id']}'>Delete</a></th>";
  echo "</tr>";

  } */
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
