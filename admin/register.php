<?php include '../includes/header.php';?>

<?php include '../includes/connect_db.php';?>

<?php
if (isset($_POST['submit'])){
	$stu_nat_num      = $_POST['stu_nat_num'];
	$stu_name       = $_POST['stu_name'];
	$stu_name_ar    = $_POST['stu_name_ar'];
	$stu_birth       = $_POST['stu_birth'];
	$stu_nat   = $_POST['stu_nat'];
        $stu_phone    = $_POST['stu_phone'];
        $stu_mobile = $_POST['stu_mobile'];
	$stu_email      = $_POST['stu_email'];
	$stu_qualifications      = $_POST['stu_qualifications'];
	$stu_major    = $_POST['stu_major'];
	$stu_univ = $_POST['stu_univ'];
	$stu_job      = $_POST['stu_job'];
	$category_id  = $_POST['category_id'];
        $emp_name  = $_POST['emp_name'];
	$reg_date        = $_POST['reg_date'];
	

	
	if($_FILES['image_sign']['error'] == 0){
		$tmp_name = $_FILES['image_sign']['tmp_name'];
		$name     = time()."-".$_FILES['image_sign']['name'];
		$path     = "../images/emp_sign/";
		move_uploaded_file($tmp_name,$path.$name);
		$image_sign = $name;
		$query="INSERT INTO `register`(`stu_name`, `stu_name_ar`, `stu_birth`, `stu_nat`, `stu_phone`, `stu_mobile`, `stu_email`, `stu_qualifications`, `stu_major`, `stu_univ`, `stu_job`, `category_id`, `emp_name`, `reg_date`, `image_sign`, `stu_nat_num`) VALUES ( '$stu_name', '$stu_name_ar', '$stu_birth', '$stu_nat', '$stu_phone', '$stu_mobile', '$stu_email', '$stu_qualifications', '$stu_major', '$stu_univ', '$stu_job', '$category_id', '$emp_name', '$reg_date', '$name', '$stu_nat_num')";
                //echo $query;die;
                if (mysqli_query($con,$query)){
		
	echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Create Register Successfully </div>";
	
	echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'register.php';
			}, 2000);</script>";		
			
		
	} else {
		echo "Query Doesn't Excute".mysqli_error($con);
                //echo "<br>".$query;

	}
	
	}
	else if($_FILES['image_sign']['error'] == 4){
	echo "<div style='width:auto;margin:15px' class='alert alert-danger role='alert'>Please Select File </div>";

	echo "<script type='text/Javascript'>
			window.setTimeout(function() {
			window.location.href = 'register.php';
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
						<h3 class="h4">Create Student
						</h3>
					</div>

					<div class="card-body">
						<form method="post" action="" enctype="multipart/form-data">
							<div class="form-group">
								<label class="form-control-label">Category Name to Student</label>
								<?php $query="SELECT * FROM category";
								  $result = mysqli_query($con,$query);
									echo "<select name='category_id' class='form-control' >Category";
								  while($cat_data=mysqli_fetch_assoc($result)){
							      echo "<option value='".$cat_data['cat_id']."'>".$cat_data['cat_name']." - ".$cat_data['cat_name_ar']."</option>" ;
								}
								echo "</select>";

								?>
							</div>
                                                    

							<div class="form-group">
								<label class="form-control-label">Student Name</label>
								<input type="text" name="stu_name" placeholder="stu_name_ar" class="form-control">
							</div>
							<div class="form-group">
								<label class="form-control-label">Student Name Arabic</label>
								<input type="text" name="stu_name_ar" placeholder="stu_name_ar " class="form-control">
							</div>

							<div class="form-group">
								<label class="form-control-label">Student Nationality's Number </label><br>
								<input type="text" name="stu_nat_num" placeholder="stu_nat_num" class="form-control">
							</div>
                                                        
                                                        <div class="form-group">
								<label class="form-control-label">Student Nationality's Country </label><br>
								<input type="text" name="stu_nat" placeholder="stu_nat" class="form-control">
							</div>
                                                        
                                                        <div class="form-group">
								<label class="form-control-label">Student Phone </label><br>
								<input type="text" name="stu_phone" placeholder="stu_phone" class="form-control">
							</div>
                                                        
                                                        <div class="form-group">
								<label class="form-control-label">Student Mobile </label><br>
								<input type="text" name="stu_mobile" placeholder="stu_mobile" class="form-control">
							</div>
                                                        
							

							<div class="form-group">
								<label class="form-control-label">Student Email </label><br>
								<input type="email" name="stu_email" placeholder="stu_email" class="form-control">
							</div>

							<div class="form-group">
								<label class="form-control-label">Student Qualifications</label><br>
                                                                <input type="text" name="stu_qualifications" placeholder="stu_qualifications" class="form-control">
							</div>
                                                        
                                                        <div class="form-group">
								<label class="form-control-label">Student Major</label>
								<input type="text" name="stu_major" class="form-control" placeholder="stu_major">
							</div>

							<div class="form-group">
								<label class="form-control-label">Student Job</label>
								<input type="text" name="stu_job" class="form-control" placeholder="stu_job">
							</div>
                                                        

							<div class="form-group">
								<label class="form-control-label">Student University</label>
								<input type="text" name="stu_univ" class="form-control" placeholder="stu_univ">
							</div>

							<div class="form-group">
								<label class="form-control-label">Employee Name</label>
								<input type="text" name="emp_name" class="form-control" placeholder="emp_name">
							</div>

							<div class="form-group">
								<label class="form-control-label">Student birthday</label>
								<input type="stu_birth" name="stu_birth" class="form-control"  value="1995-04-08"  >
							</div>

							<div class="form-group">
								<label class="form-control-label">Register Date</label>
								<input type="reg_date" name="reg_date" class="form-control" value="2019-07-22" min="2019-01-02" >
							</div>



							<div class="form-group">
								<label class="form-control-label">Sign Image</label>
								<input type="file" name="image_sign" class="form-control">
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
						<h3 class="h4">Register Table</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-sm">
								<thead>
									<tr>
										<th>Student ID</th>
										<th>Category Name</th>
										<th>Student Name</th>
										<th>Student Name Arabic</th>
										<!--<th>Student birth </th>
										<th>stu nat</th>
                                                                                <th>stu_phone </th>
										<th>stu_mobile</th>
										<th>stu_email</th>
										<th>stu_qualifications</th>
										<th>stu_major</th>
										<th>stu_univ</th>
										<th>stu_job</th>
										<th>emp_name</th>
										
										<th>image_sign</th>
										<th>reg_date</th>-->
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<?php
								
								$query       = "SELECT * FROM register";
 								$result      = mysqli_query($con,$query);
								while ($stu_data = mysqli_fetch_assoc($result)){
									$category_id = $stu_data['category_id'];
									$q           = "SELECT cat_name,cat_name_ar FROM category WHERE cat_id=$category_id";
									$res         = mysqli_query($con,$q);
									$cat_name    = mysqli_fetch_assoc($res);

									echo "<tr>";
									echo "<th>".$stu_data['stu_id']."</th>";
									echo "<th>{$cat_name['cat_name']} - {$cat_name['cat_name_ar']}</th>";
									echo "<th>".$stu_data['stu_name']."</th>";
									echo "<th>".$stu_data['stu_name_ar']."</th>";
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
									echo "<th><a href='update_student.php?stu_id=".$stu_data['stu_id']."' class='btn btn-primary'>Edit</a></th>";
									echo "<th><a href='delete_student.php?stu_id=".$stu_data['stu_id']."' class='btn btn-danger'>Delete</a></th>";
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

<script type="text/javascript">
	$(function(){
		$('#ok').click(function(){
			window.location.replace("register.php")
		});
		
	});
</script>
<?php include '../includes/footer.php';?>
