<?php include '../includes/header.php';?>
<?php include '../includes/connect_db.php';?>
<?php

		                                                
		

        if(isset($_POST['update'])) {
		$cat_id       = $_GET['cat_id'];
		$cat_name     = $_POST['cat_name'];
		$cat_name_ar  = $_POST['cat_name_ar'];
		$old_img_path = $_POST['old_image'];

	    if($_FILES['cat_image']['error'] == 0){ // multidimensional array
		
		$tmp_name  = $_FILES['cat_image']['tmp_name']; 
		$file_name = $_FILES['cat_image']['name'];
		$path      = "../images/category/";
		move_uploaded_file($tmp_name,$path.$file_name);
		//Delete old image from folder
		unlink($old_img_path);
		$cat_image = $file_name;          
		$query     = "UPDATE category set cat_name='$cat_name',cat_name_ar='$cat_name_ar',cat_image='$cat_image' WHERE cat_id=$cat_id";
		if (mysqli_query($con,$query)){
		
		echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Update Successfully</div>";
		
		echo "
		<script type='text/javascript'>
		function load(){
		window.location='categories.php';
		}
		setTimeout('load()',2000);
		</script>
		";}
		} else if($_FILES['cat_image']['error'] == 4) 
		{
		$query = "UPDATE category set cat_name='$cat_name',cat_name_ar='$cat_name_ar' WHERE cat_id = $cat_id";
		if (mysqli_query($con,$query)){
                echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Update Successfully</div>";
		
		echo "
		<script type='text/javascript'>
		function load(){
		window.location='categories.php';
		}
		setTimeout('load()',2000);
		</script>
		";
		}}
	   
         }
	
   //echo $query ; 
	//die;
	 
	
	
     

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
						<h3 class="h4">Update Category</h3>
					</div>
					<div class="card-body">
						<form method="post" action="" enctype="multipart/form-data">
							<div class="form-group">
								<?php 
							$cat_id     = $_GET['cat_id'];	
							$query      = "SELECT * FROM category WHERE cat_id=$cat_id";
							$result     = mysqli_query($con,$query);
							$cat_update = mysqli_fetch_assoc($result);
							?>
								<label class="form-control-label">Category Name</label>
								<input type="text" name="cat_name" placeholder="Category Name" class="form-control" value="<?php echo $cat_update['cat_name']; ?>">
							</div>
							<div class="form-group">
								<label class="form-control-label">Category Name Arabic</label>
								<input type="text" name="cat_name_ar" placeholder="Category Name Arabic" class="form-control" value="<?php echo $cat_update['cat_name_ar']; ?>">
							</div>
							<div class="form-group">
								<label class="form-control-label">Category Image</label><br>
								<input type="image" src='<?php echo "../images/category/".$cat_update["cat_image"]; ?>' height="100" width="100" alt="..."><br><br>
								<input type="file" name="cat_image" class="form-control">
								<input type="hidden" name="old_image" value='<?php echo "../images/category/".$cat_update['cat_image']; ?>'>
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


	<?php include '../includes/footer.php';?>
