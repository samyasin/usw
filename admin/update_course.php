<?php include '../includes/header.php'; ?>
<?php include '../includes/connect_db.php'; ?>

<?php
if (isset($_POST['update'])){
	$course_id         = $_GET['course_id'];
	$category_id       = $_POST['category_id'];
	$course_name       = $_POST['course_name'];
	$course_name_ar    = $_POST['course_name_ar'];
	$course_desc       = addslashes($_POST['course_desc']);
	$course_desc_ar    = addslashes($_POST['course_desc_ar']);
        $course_out        = addslashes($_POST['course_out']);
        $course_out_ar     = addslashes($_POST['course_out_ar']);
	$course_level      = $_POST['course_level'];
	$course_hours      = $_POST['course_hours'];
	$course_content    = addslashes($_POST['course_content']);
	$course_content_ar = addslashes($_POST['course_content_ar']);
	$course_price      = $_POST['course_price'];
	$course_spe_price  = $_POST['course_spe_price'];
	$start_date        = strtr($_POST['start_date'],'/','-');
	$end_date          = strtr($_POST['end_date'],'/','-');
	$old_image         = $_POST['old_course_image'];
	$img_tmp           = $_FILES['course_image']['tmp_name'];
	$path              = "../images/course/";
		if ($_FILES['course_image']['error'] == 0){
      	        $img_name = time().'-'.$_FILES['course_image']['name'];
	        $query	 = "UPDATE `course` SET `category_id`=$category_id,`course_name`='$course_name',`course_name_ar`= '$course_name_ar',`course_desc`='$course_desc',`course_desc_ar`='$course_desc_ar',`course_outcome`='$course_out',`course_outcome_ar`='$course_out_ar',`course_level`='$course_level',`course_hours`=$course_hours,`course_price`='$course_price',`course_special_price`='$course_spe_price',`course_content`='$course_content',`course_image`='$img_name',`course_content_ar`='$course_content_ar',`start_date`='$start_date',`end_date`='$end_date' WHERE course_id = $course_id";

			if (mysqli_query($con,$query)){
			echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Updated Successfully</div>";
			
			
			move_uploaded_file($img_tmp,$path.$img_name);
			unlink($path.$old_image);
			echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'courses.php';
			}, 2000);</script>";
		} else {
                    echo "ERROR:".mysqli_error($con);
                }
                
                } else if ($_FILES['course_image']['error'] == 4){
			
		$query	= "UPDATE `course` SET `category_id`=$category_id,`course_name`='$course_name',`course_name_ar`= '$course_name_ar',`course_desc`='$course_desc',`course_desc_ar`='$course_desc_ar',`course_outcome`='$course_out',`course_outcome_ar`='$course_out_ar',`course_level`='$course_level',`course_hours`=$course_hours,`course_price`='$course_price',`course_special_price`='$course_spe_price',`course_content`='$course_content',`course_content_ar`='$course_content_ar',`start_date`='$start_date',`end_date`='$end_date' WHERE course_id = $course_id"; 

			if (mysqli_query($con,$query)){
			echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Updated Successfully</div>";	
			
			echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'courses.php';
			}, 2000);</script>";
			
		}
        } else {

       
		echo "<div style='width:auto;margin:15px' class='alert alert-danger role='alert'>Somthing Wrong</div>";	
			
	    echo "<script type='text/Javascript'>
			   window.setTimeout(function() {
			   window.location.href = 'courses.php';
			    }, 2000);</script>";

        }
}

// fetch old data 
$course_id   = $_GET['course_id'];
$query       = "SELECT * FROM course where course_id = $course_id";
$result      = mysqli_query($con,$query);
$course_data = mysqli_fetch_assoc($result);
	
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
						<h3 class="h4">Update Course
						</h3>
					</div>

					<div class="card-body">

						<form method="post" action="" enctype="multipart/form-data">
							<div class="form-group">
								<label class="form-control-label">Category Name</label>
								<select name='category_id'>
									<?php								
								    $query       = "SELECT * FROM category";
								    $result      = mysqli_query($con,$query);
								    while($cat   = mysqli_fetch_assoc($result)){
									echo "<option value='".$cat['cat_id']."'";
									 if ($cat['cat_id'] == $course_data['category_id'])
									 	echo  "selected='selected'"; 
									echo ">".$cat['cat_name']." - ".$cat['cat_name_ar']."</option>";
							
									} 													
								    ?>
								</select>
							</div>

							<div class="form-group">
								<label class="form-control-label">Course Name</label>
								<input type="text" name="course_name" value="<?php echo $course_data['course_name']; ?>" class="form-control">
							</div>
							<div class="form-group">
								<label class="form-control-label">Course Name Arabic</label>
								<input type="text" name="course_name_ar" value="<?php echo $course_data['course_name_ar']; ?>" class="form-control">
							</div>


							<div class="form-group">
								<label class="form-control-label">Course Description </label><br>
								<textarea cols="55" rows="4" name="course_desc" ><?php echo $course_data['course_desc']; ?></textarea>
							</div>
                                                        
                                                        <div class="form-group">
								<label class="form-control-label">Course Description Arabic </label><br>
								<textarea cols="55" rows="4" name="course_desc_ar" ><?php echo $course_data['course_desc_ar']; ?></textarea>
							</div>
                                                        
                                                        <div class="form-group">
								<label class="form-control-label">Course Outcome </label><br>
								<textarea cols="55" rows="4" name="course_out" ><?php echo $course_data['course_outcome']; ?></textarea>
							</div>
                                                        
                                                        <div class="form-group">
								<label class="form-control-label">Course Outcome Arabic </label><br>
								<textarea cols="55" rows="4" name="course_out_ar" ><?php echo $course_data['course_outcome_ar']; ?></textarea>
							</div>
							
                                                        <div class="form-group">
								<label class="form-control-label">Course Content </label><br>
								<textarea cols="55" rows="4" name="course_content"><?php echo $course_data['course_content']; ?></textarea>
							</div>

							<div class="form-group">
								<label class="form-control-label">Course Content Arabic</label><br>
								<textarea cols="55" rows="4" name="course_content_ar"><?php echo $course_data['course_content_ar']; ?></textarea>
							</div>

                                                        
							<div class="form-group">
								<label class="form-control-label">Course Level</label>
								<input type="text" name="course_level" class="form-control" value="<?php echo $course_data['course_level']; ?>">
							</div>

							<div class="form-group">
								<label class="form-control-label">Course Hours</label>
								<input type="text" name="course_hours" class="form-control" value="<?php echo $course_data['course_hours']; ?>">
							</div>

							
							<div class="form-group">
								<label class="form-control-label">Course Price</label>
								<input type="text" name="course_price" class="form-control" placeholder="eg : 200$" value="<?php echo $course_data['course_price']; ?>">
							</div>

							<div class="form-group">
								<label class="form-control-label">Course Special Price</label>
								<input type="text" name="course_spe_price" class="form-control" value="<?php echo $course_data['course_special_price']; ?>">
							</div>

							<div class="form-group">
								<label class="form-control-label">Start Date</label>
								<input type="date" name="start_date" class="form-control" value="<?php echo
	                            date('Y-m-d',strtotime($course_data['start_date'])); ?>">
							</div>

							<div class="form-group">
								<label class="form-control-label">End Date</label>
								<input type="date" name="end_date" class="form-control" value="<?php echo
	                            date('Y-m-d',strtotime($course_data['end_date'])); ?>">
							</div>


							<div class="form-group">
								<label class="form-control-label">Course Image</label>
								<br>
								<img src="<?php echo '../images/course/'.$course_data['course_image']  ?>" height="80" width="80">
								<input type="file" name="course_image" class="form-control">
								<input type=hidden name="old_course_image" value="<?php echo $course_data['course_image']  ?>">
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
