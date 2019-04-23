<?php include '../includes/header.php'; ?>



<?php include '../includes/connect_db.php'; ?>



<?php
?>

<?php
if (isset($_POST['submit'])) {

    $cer_name = $_POST['cer_name'];

    $cer_description = $_POST['cer_description'];

    



    if ($_FILES['cer_image']['error'] == 0) {

        $tmp_name = $_FILES['cer_image']['tmp_name'];

        $name = rand() . "-" . $_FILES['cer_image']['name'];

        $query = "INSERT INTO `certification`( `cer_name`, `cer_description`, `cer_image`) VALUES ('$cer_name','$cer_description','$name')";
        //echo $query; die ;


        move_uploaded_file($tmp_name, '../images/certification_image/' . $name);

        // echo $query;

        $result = mysqli_query($con, $query);

        if (!$result) {

            echo mysqli_error($con);
        }
    } else if ($_FILES['cer_image']['error'] == 4) {

        echo "<div style='width:auto;margin:15px' class='alert alert-danger role='alert'>Please Select File </div>";
    } else {

        echo "<div style='width:auto;margin:15px' class='alert alert-danger role='alert'>Please try again </div>";
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

                        <h3 class="h4">Create Certification</h3>

                    </div>

                    <div class="card-body">

                        <form method="post" action="" enctype="multipart/form-data">

                            <div class="form-group">

                                <label class="form-control-label">Name</label>

                                <input type="text" name="cer_name" placeholder="certification name" class="form-control">

                            </div>

                            <div class="form-group">

                                <label class="form-control-label">Description</label>

                                <input type="text" name="cer_description" placeholder="certification description" class="form-control">

                            </div>



                            <div class="form-group">

                                <label class="form-control-label">Image</label>

                                <input type="file"  name="cer_image" class="form-control">

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

                        <h3 class="h4">Certification  Table</h3>

                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-striped table-sm">

                                <thead>

                                    <tr>

                                        <th>#</th>

                                        <th>Name</th>

                                        <th>Description</th>

                                        <th>Image</th>

                                        

                                        <th>Delete</th>

                                    </tr>

                                </thead>

                                <tbody>

<?php
$query = "select * from certification";

$result = mysqli_query($con, $query);

while ($cerset = mysqli_fetch_assoc($result)) {

    echo "<tr>";

    echo "<th scope ='row'>{$cerset['cer_id']}</th>";

    echo "<th scope ='row'>{$cerset['cer_name']}</th>";

    echo "<th scope ='row'>{$cerset['cer_description']}</th>";

    echo "<th scope ='row'><img height='50' width='50' src='../images/certification_image/{$cerset['cer_image']}'</th>";

    

    echo "<th scope='row'><a href='delete_certification.php?cer_id={$cerset['cer_id']}&cer_image={$cerset['cer_image']}' class ='btn btn-danger'>Delete</a></th>";

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

