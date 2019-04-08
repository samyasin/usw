<?php require '../includes/header.php'; ?>
<?php require '../includes/connect_db.php'; ?>
<?php

if (isset($_POST['submit'])) {
    if (!empty($_POST['page_name'] && $_POST['title'] && $_POST['desc'] && $_POST['keywords'] && $_POST['title_ar'] && $_POST['desc_ar'] && $_POST['keywords_ar'])) {
        $page = $_POST['page_name'];
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $keys = mysqli_real_escape_string($con, $_POST['keywords']);
        $title_ar = $_POST['title_ar'];
        $desc_ar = $_POST['desc_ar'];
        $keys_ar = mysqli_real_escape_string($con, $_POST['keywords_ar']);
        $query = "INSERT INTO `meta`(`page_name`, `title`, `description`, `keywords`, `title_ar`, `description_ar`, `keywords_ar`) VALUES ('$page','$title','$desc','$keys','$title_ar','$desc_ar','$keys_ar')";
        if (mysqli_query($con, $query)) {
            echo "<script>
				$(function() {
				$('#myModal').modal(); 
				});
				</script>";
        } else {
            $x = "<div style='margin-top:20px;margin-left:15px;width :70%' class='alert alert-danger'>Quet Doesn't excute..</div>";
        }
    }
}
?>
<?php

if (isset($x)) {
    echo $x;
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
                        <h3 class="h4">Add Meta Tags</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" >

                            <div class="form-group">
                                <label class="form-control-label">Page Name</label>
                                <input type="text" placeholder="eg : index" name="page_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Meta Title</label>
                                <input type="text" name="title" placeholder="Courses | UpSkillas Academy" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Meta Description</label>
                                <input type="text" name="desc" placeholder="UPSKILLS ACADEMY For Training & Conultations" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Meta Keywords</label>
                                <input type="text" name="keywords" placeholder="courses,academy,teacher,training,counsltaion" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Meta Title Arabic</label>
                                <input type="text" name="title_ar" class="form-control" placeholder="الرئيسية | اكاديمية تطوير المهارات">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Meta Description Arabic</label>
                                <input type="text" name="desc_ar" placeholder="تهدف اكاديمية تطوير المهارات.." class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Meta Keywords Arabic</label>
                                <input type="text" name="keywords_ar" placeholder="تدريب,مدربين,معلمين,دورات,برمجة" class="form-control">
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
                <p class="text-center">Insert Successfully.</p>
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
            window.location.replace("settings.php")
        });

    });
</script>
<?php require '../includes/footer.php'; ?>
