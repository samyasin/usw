<?php include '../includes/header.php';?>

<?php include '../includes/connect_db.php';?>

<?php $image_id   = $_GET['image_id']; 
	  $image_src  = $_GET['image_src']; 
if(isset($_POST['update'])){
	$eng_title   = mysqli_real_escape_string ($con,$_POST['eng_title']);
	//$eng_text    = mysqli_real_escape_string ($con,$_POST['eng_text']);
	$eng_desc    = mysqli_real_escape_string ($con,$_POST['eng_desc']);
	$arab_title  = mysqli_real_escape_string ($con,$_POST['arab_title']);
	//$arab_text   = mysqli_real_escape_string ($con,$_POST['arab_text']);
	$arab_desc   = mysqli_real_escape_string ($con,$_POST['arab_desc']);
	$alignment   = $_POST['align'];
	$path        = '../images/slider/';
	$old_img     = $_POST['old_image'];
 	   
	if ($_FILES['image']['error']==0){
	
		 $tmp_name    = $_FILES['image']['tmp_name']; 
		 $name        = $_FILES['image']['name'];
	     $query="UPDATE `slider` SET `image_src`='$name',`english_title`='$eng_title',`english_desc`='$eng_desc',`arabic_title`='$arab_title',`arabic_desc`='$arab_desc',`text_alignment`='$alignment' WHERE image_id = {$image_id}";
	     if(mysqli_query($con,$query)){

			 unlink($path.$old_img);
			 move_uploaded_file($tmp_name,$path.$name);
		echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Update Successfully</div>";	

		echo "<script type='text/javascript'>
		setTimeout('leave()', 2000);
		function leave() {
		window.location = 'slider.php';
		}
		</script>";
	
	   }
	   else 
		   echo mysqli_error($con);
		   
       } else if ($_FILES['image']['error']==4){
		   
	      $query="UPDATE `slider` SET `english_title`='$eng_title',`english_desc`='$eng_desc',`arabic_title`='$arab_title',`arabic_desc`='$arab_desc',`text_alignment`='$alignment' WHERE image_id = {$image_id}";
	
	   
	     if(mysqli_query($con,$query)){
		
		echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Update Successfully</div>";	

		echo "<script type='text/javascript'>
		setTimeout('leave()', 2000);
		function leave() {
		window.location = 'slider.php';
		}
		</script>";
	
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
						<form method="post" action="" enctype="multipart/form-data">
							<?php 
								
								$q          = "SELECT * from slider WHERE image_id='$image_id'";
								$result     = mysqli_query($con,$q);
								$sliderSet  = mysqli_fetch_assoc($result);						
								?>
							<div class="form-group">
								<label class="form-control-label">Image</label><br>
								<input type="image" src='<?php echo "../images/slider/".$sliderSet["image_src"]; ?>' height="120" width="175" alt="...">
								<input type="file" name="image" class="form-control">
								<input type="hidden" value="<?php echo $sliderSet['image_src']; ?>" name="old_image">
							</div>
							<div class="form-group">
								<label class="form-control-label">English Title</label>
								<input type="text" name="eng_title" class="form-control" value="<?php echo $sliderSet['english_title']; ?>" required>
							</div>
							
							<div class="form-group">
								<label class="form-control-label">English Description</label>
								<input type="text" name="eng_desc" value="<?php echo $sliderSet['english_desc']; ?>" class="form-control" required>
							</div>
							<div class="form-group">
								<label class="form-control-label">Arabic Title</label>
								<input type="text" name="arab_title" value="<?php echo $sliderSet['arabic_title']; ?>" class="form-control" required>
							</div>
							
							<div class="form-group">
								<label class="form-control-label">Arabic Description</label>
								<input type="text" name="arab_desc" value="<?php echo $sliderSet['arabic_desc']; ?>" class="form-control" required>
							</div>
							<div class="form-group">
								<select name="align">Text Alignment
								<?php $align =$sliderSet['text_alignment'];
								echo 
								"<option value='{$align}' selected>";
								echo ucwords($align);
                                                                echo "</option>";
									if ($align == 'right'){
								      echo "<option value='left'>Left</option>";
								      echo "<option value='center'>Center</option>";
									} else if($align == 'left'){
									  echo "<option value='right'>Right</option>";
								      echo "<option value='center'>Center</option>";	
									} else {
                                        echo "<option value='right'>Right</option>";
								        echo "<option value='left'>Left</option>";	
									}
								?>
								</select>
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

<?php include '../includes/footer.php';?>
