<?php include '../includes/header.php'; ?>

<?php include '../includes/connect_db.php'; ?>
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
                            <div>
                                <?php
                                echo '<input type="radio"  value="male"> sunday<br>
                                <input type="radio"  value="female"> monday<br>
                                <input type="radio"  value="other"> day';
                                
                                ?>
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

<?php include '../includes/footer.php'; ?>
