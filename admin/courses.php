<?php include '../includes/header.php';?>

<?php include '../includes/connect_db.php';?>

<?php
if (isset($_POST['submit'])){
	$category_id       = $_POST['category_id'];
	$course_name       = $_POST['course_name'];
	$course_name_ar    = $_POST['course_name_ar'];
	$course_desc       = $_POST['course_desc'];
	$course_desc_ar    = $_POST['course_desc_ar'];
        $course_outcome    = $_POST['course_out'];
        $course_outcome_ar = $_POST['course_out_ar'];
	$course_level      = mysqli_real_escape_string($con,$_POST['course_level']);
	$course_hours      = $_POST['course_hours'];
	$course_content    = $_POST['course_content'];
	$course_content_ar = $_POST['course_content_ar'];
	$course_price      = mysqli_real_escape_string($con,$_POST['course_price']);
	$course_spe_price  = mysqli_real_escape_string($con,$_POST['course_spe_price']);
	$start_date        = $_POST['start_date'];
	$end_date          = $_POST['end_date'];

	
	if($_FILES['course_image']['error'] == 0){
		$tmp_name = $_FILES['course_image']['tmp_name'];
		$name     = time()."-".$_FILES['course_image']['name'];
		$path     = "../images/course/";
		move_uploaded_file($tmp_name,$path.$name);
		$course_image = $name;
		$query="INSERT INTO `course`(`category_id`,`course_name`, `course_name_ar`, `course_desc`,`course_level`, `course_desc_ar`,`course_outcome`, `course_outcome_ar`, `course_hours`, `course_image`, `course_price`, `course_special_price`, `course_content`, `course_content_ar`,`start_date`,`end_date`) VALUES ($category_id,'$course_name','$course_name_ar','$course_desc','$course_level','$course_desc_ar','$course_outcome','$course_outcome_ar',$course_hours,'$course_image','$course_price','$course_spe_price','$course_content','$course_content_ar','$start_date','$end_date')";
                //echo $query;die;
                if (mysqli_query($con,$query)){
		
	echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Create Course Successfully </div>";
	
	echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'courses.php';
			}, 2000);</script>";		
			
		
	} else {
		echo "Query Doesn't Excute".mysqli_error($con);
                //echo "<br>".$query;

	}
	
	}
	else if($_FILES['course_image']['error'] == 4){
	echo "<div style='width:auto;margin:15px' class='alert alert-danger role='alert'>Please Select File </div>";

	echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'courses.php';
			}, 2000);</script>";
	} else {
		exit();
	}
}

 if (isset($_POST['create_meta'])){
   	if (!empty ($_POST['course_id'] && $_POST['title'] && $_POST['desc']  && $_POST['keywords']  && $_POST['title_ar'] && $_POST['desc_ar'] && $_POST['keywords_ar'])){
   		
   		$title     = mysqli_real_escape_string($con,$_POST['title']);
   		$desc      = mysqli_real_escape_string($con,$_POST['desc']);
   		$keys      = mysqli_real_escape_string($con,$_POST['keywords']);
		$title_ar  = mysqli_real_escape_string($con,$_POST['title_ar']);
   		$desc_ar   = mysqli_real_escape_string($con,$_POST['desc_ar']);
   		$keys_ar   = mysqli_real_escape_string($con,$_POST['keywords_ar']);
                $course_id = $_POST['course_id'];
		$query = "UPDATE `course` SET `meta_title`='$title',`meta_title_ar`='$titlt_ar',`meta_desc`='$desc',`meta_desc_ar`='$desc_ar',`meta_keys`='$keys',`meta_keys_ar`='$keys_ar' WHERE course_id={$course_id} ";
		if (mysqli_query($con,$query)){
			echo "<script>
				$(function() {
				$('#myModal').modal(); 
				});
				</script>";

		} else {
	        echo "<div style='margin-top:20px;margin-left:15px;width :70%' class='alert alert-danger'>Quet Doesn't excute..</div>";
                 echo mysqli_query($con);
		}
   	}} 
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
						<h3 class="h4">Create Course
						</h3>
					</div>

					<div class="card-body">
						<form method="post" action="" enctype="multipart/form-data">
							<div class="form-group">
								<label class="form-control-label">Category Name</label>
								<?php $query="SELECT * FROM category";
								  $result = mysqli_query($con,$query);
									echo "<select name='category_id'>Category";
								  while($cat_data=mysqli_fetch_assoc($result)){
							      echo "<option value='".$cat_data['cat_id']."'>".$cat_data['cat_name']." - ".$cat_data['cat_name_ar']."</option>" ;
								}
								echo "</select>";

								?>
							</div>

							<div class="form-group">
								<label class="form-control-label">Course Name</label>
								<input type="text" name="course_name" placeholder="ex : Full Stack Web" class="form-control">
							</div>
							<div class="form-group">
								<label class="form-control-label">Course Name Arabic</label>
								<input type="text" name="course_name_ar" placeholder="مثال : دورة تصميم مواقع الويب " class="form-control">
							</div>

							<div class="form-group">
								<label class="form-control-label">Course Description </label><br>
								<textarea cols="55" rows="4" name="course_desc" placeholder="In this course.."></textarea>
							</div>
                                                        
                                                        <div class="form-group">
								<label class="form-control-label">Course Description Arabic </label><br>
								<textarea cols="55" rows="4" name="course_desc_ar" placeholder="في هذه الدورة.."></textarea>
							</div>
                                                        
                                                        <div class="form-group">
								<label class="form-control-label">Course Outcome </label><br>
								<textarea cols="55" rows="4" name="course_out" placeholder="Basic language.."></textarea>
							</div>
                                                        
                                                        <div class="form-group">
								<label class="form-control-label">Course Outcome Arabic </label><br>
								<textarea cols="55" rows="4" name="course_out_ar" placeholder="القدرة على.."></textarea>
							</div>
                                                        
							

							<div class="form-group">
								<label class="form-control-label">Course Content </label><br>
								<textarea cols="55" rows="4" name="course_content" placeholder="1.Basic language.."></textarea>
							</div>

							<div class="form-group">
								<label class="form-control-label">Course Content Arabic</label><br>
								<textarea cols="55" rows="4" name="course_content_ar" placeholder=".. PHP أساسيات لغة  "></textarea>
							</div>
                                                        
                                                        <div class="form-group">
								<label class="form-control-label">Course Level</label>
								<input type="text" name="course_level" class="form-control" placeholder="Beginner">
							</div>

							<div class="form-group">
								<label class="form-control-label">Course Hours</label>
								<input type="text" name="course_hours" class="form-control" placeholder="24">
							</div>
                                                        

							<div class="form-group">
								<label class="form-control-label">Course Price</label>
								<input type="text" name="course_price" class="form-control" placeholder="eg : 200$">
							</div>

							<div class="form-group">
								<label class="form-control-label">Course Special Price</label>
								<input type="text" name="course_spe_price" class="form-control" placeholder="eg : 100$">
							</div>

							<div class="form-group">
								<label class="form-control-label">Start Date</label>
								<input type="date" name="start_date" class="form-control"  value="2019-07-22" min="2019-01-01" >
							</div>

							<div class="form-group">
								<label class="form-control-label">End Date</label>
								<input type="date" name="end_date" class="form-control" value="2019-07-22" min="2019-01-02" >
							</div>



							<div class="form-group">
								<label class="form-control-label">Course Image</label>
								<input type="file" name="course_image" class="form-control">
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
								<label class="form-control-label">Course Name</label>
								<select name="course_id">
                                                                <?php 
                                                                $query  = "SELECT * FROM course";
                                                                $result = mysqli_query($con,$query);
                                                                while ($courseSet = mysqli_fetch_assoc($result)){
                                                                echo "<option value='{$courseSet['course_id']}'>{$courseSet['course_name']} - {$courseSet['course_name_ar']}</option>";
                                                                }
                                                                ?>
                                                                </select>
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
								<input type="submit" name="create_meta" value="Create" class="btn btn-primary">
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
						<h3 class="h4">Courses Table</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-sm">
								<thead>
									<tr>
										<th>Course ID</th>
										<th>Category Name</th>
										<th>Course Name</th>
										<th>Course Name Arabic</th>
										<!--<th>Course Description</th>
										<th>Course Description Arabic</th>
                                                                                <th>Course Outcome</th>
										<th>Course Outcome Arabic</th>
										<th>Course Level</th>
										<th>Course Hours</th>
										<th>Course Price</th>
										<th>Course Special Price</th>
										<th>Course Image</th>
										<th>Course Content</th>
										<th>Course Content Arabic</th>
										<th>Start Date</th>
										<th>End Date</th>-->
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<?php
								
								$query       = "SELECT * FROM course";
 								$result      = mysqli_query($con,$query);
								while ($cour_data = mysqli_fetch_assoc($result)){
									$category_id = $cour_data['category_id'];
									$q           = "SELECT cat_name,cat_name_ar FROM category WHERE cat_id=$category_id";
									$res         = mysqli_query($con,$q);
									$cat_name    = mysqli_fetch_assoc($res);

									echo "<tr>";
									echo "<th>".$cour_data['course_id']."</th>";
									echo "<th>{$cat_name['cat_name']} - {$cat_name['cat_name_ar']}</th>";
									echo "<th>".$cour_data['course_name']."</th>";
									echo "<th>".$cour_data['course_name_ar']."</th>";
									/*echo "<th>".substr($cour_data['course_desc'],0,70)."...</th>";
									echo "<th>".substr($cour_data['course_desc_ar'],0,70)."....</th>";
                                                                        echo "<th>".substr($cour_data['course_outcome'],0,70)."..</th>";
									echo "<th>".substr($cour_data['course_outcome_ar'],0,70)."..</th>";
									echo "<th>".$cour_data['course_level']."</th>";
									echo "<th>".$cour_data['course_hours']."H</th>";
									echo "<th>".$cour_data['course_price']."$</th>";
									echo "<th>".$cour_data['course_special_price']."%</th>";
									echo "<th><img src='../images/course/".$cour_data['course_image']."' height='50' width='50' class='rounded circle'></th>";
									echo "<th>".substr($cour_data['course_content'],0,70)."...</th>";
									echo "<th>".substr($cour_data['course_content_ar'],0,70)."...</th>";
									echo "<th>".date('Y-m-d',strtotime($cour_data['start_date']))."</th>";
									echo "<th>".date('Y-m-d',strtotime($cour_data['end_date']))."</th>";*/
									echo "<th><a href='update_course.php?course_id=".$cour_data['course_id']."' class='btn btn-primary'>Edit</a></th>";
									echo "<th><a href='delete_course.php?course_id=".$cour_data['course_id']."' class='btn btn-danger'>Delete</a></th>";
									echo "</tr>" ;	
								 }
							     ?>
								<tbody>
							</table>
						</div>
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
				<p class="text-center">Meta Added Successfully.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal" id="ok">OK</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$('#ok').click(function(){
			window.location.replace("courses.php")
		});
		
	});
</script>
<?php include '../includes/footer.php';?>
