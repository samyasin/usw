<?php require '../includes/header.php'; ?>
<?php require '../includes/connect_db.php'; ?>
<?php 
    $q           = "SELECT * FROM slider";
	$result      = mysqli_query($con,$q);
	$image_count = mysqli_num_rows($result);
if (isset($_POST['submit'])){
	
	if ($image_count > 7){
		$error['file'] = "<div style='width:75%;margin:15px' class='alert alert-danger role='alert'>Maximum number of files  8s</div>";
	} else {
    if ($_FILES['image']['error'] == 0){
		  $eng_title  = mysqli_real_escape_string ($con ,$_POST['eng_title']);
		 // $eng_text   = mysqli_real_escape_string ($con,$_POST['eng_text']);
		  $eng_desc   = mysqli_real_escape_string ($con,$_POST['eng_desc']);
		  $arab_title = mysqli_real_escape_string ($con,$_POST['arab_title']);
		  //$arab_text  = mysqli_real_escape_string ($con,$_POST['arab_text']);
		  $arab_desc  = mysqli_real_escape_string ($con,$_POST['arab_desc']);
		  $align      = $_POST['align'];
		  $path       = '../images/slider/';
		  $tmp_name   = $_FILES['image']['tmp_name'];
		  $name       = time().$_FILES['image']['name'];
		  $query      = "INSERT INTO `slider`(`image_id`, `image_src`, `english_title`,`english_desc`, `arabic_title`,`arabic_desc` ,`text_alignment`)  VALUES (null,'$name','$eng_title','$eng_desc','$arab_title','$arab_desc','$align')";
		   if (mysqli_query($con,$query)){
		   	move_uploaded_file($tmp_name,$path.$name);
			   echo "<meta http-equiv='refresh' content='0'>";
		   } else {
		   	echo "ERORR".mysqli_error($con);
		   }
	   	
	   }else if ($_FILES['image']['error'] == 1) {
	   $error['file'] = "<div style='width:75%;margin:15px' class='alert alert-danger role='alert'>File size exceed size allowed.. </div>";
	   }
	    else if ($_FILES['image']['error'] == 4){
			$error['file']= "<div style='width:75%;margin:15px' class='alert alert-danger role='alert'>Please select file </div>";
	  } else {
		echo "ERRPR :".$_FILES['image']['error'];
	  }
	  
}}
if (isset($error)){
	echo $error['file'];
	
}
?>
<section>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12'>
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Image</th>
							<th scope="col">English Title</th>
							<th scope="col">English Description</th>
							<th scope="col">Arabic Title</th>
							<th scope="col">Arabic Description</th>
							<th scope="col">Text Align</th>
							<th scope="col">Action</th>
                                                        <th scope="col">Action</th>

						</tr>
					</thead>
					<tbody>
                                            <?php
$query = "select * from slider";

$result = mysqli_query($con, $query);

while ($sliderSet = mysqli_fetch_assoc($result)) {

    echo "<tr>";

    echo "<th scope ='row'>{$sliderSet['image_id']}</th>";

    echo "<th scope ='row'><img src='../images/slider/{$sliderSet['image_src']}' alt='...' height='120' width='200'></th>";

    echo "<th scope ='row'>{$sliderSet['english_title']}</th>";

    echo "<th scope ='row'>{$sliderSet['english_desc']}</th>";
    
    echo "<th scope ='row'>{$sliderSet['arabic_title']}</th>";
                      
    echo "<th scope ='row'>{$sliderSet['arabic_desc']}</th>";
     
    echo "<th scope ='row'>{$sliderSet['text_alignment']}</th>";   
    
    echo "<th scope='row'><a class='btn btn-primary' href='update_slider.php?image_id={$sliderSet['image_id']}&image_src={$sliderSet['image_src']}'>Update</a></th>";                                         
   
    echo "<th scope='row'><a class='btn btn-primary' href='delete_img_slider.php?image_id={$sliderSet['image_id']}&image_src={$sliderSet['image_src']}'>Delete</a></th>";

    echo "</tr>";
}
?>

						<?php /*$query  = "SELECT * FROM slider";
						      $result = mysqli_query($con,$query);
						         while ($sliderSet = mysqli_fetch_assoc($result)){
									 $arabic_desc  = substr($sliderSet['arabic_desc'],0,30);
									 $arabic_text  = substr($sliderSet['arabic_text'],0,30);
									 $english_text = substr($sliderSet['english_text'],0,30);
									 $english_desc = substr($sliderSet['english_desc'],0,30);
									echo "<tr>";
						          	echo "<th scope='col'>{$sliderSet['image_id']}</th>
						          	<th scope='col'><img src='../images/slider/{$sliderSet['image_src']}' alt='...' height='120' width='200'></th>
									<th scope='col'>{$sliderSet['english_title']}</th>
									<th scope='col'>{$english_desc}..</th>
									<th scope='col'>{$sliderSet['arabic_title']}</th>
									<th scope='col'>{$arabic_desc}</th>
									<th scope='col'>{$sliderSet['text_alignment']}</th>
									<th scope='col'><a class='btn btn-primary' href='update_slider.php?image_id={$sliderSet['image_id']}&image_src={$sliderSet['image_src']}'>Update</a>|<a class='btn btn-primary' href='delete_img_slider.php?image_id={$sliderSet['image_id']}&image_src={$sliderSet['image_src']}'>Delete</a></th>
									";
                                    echo "<tr>";

						          }*/
						?>
						<tr>
							<th scope="col"></th>
							<th scope="col"><a href='' data-toggle='modal' data-target='#exampleModalCenter'><img src='../images/albums/add_image.png' alt='...' height='120' ></a></th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Add Image</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form method="POST" action="" enctype="multipart/form-data">
					<div class="form-group">
						<label class="form-control-label">Image</label>
						<input type="file" name="image" class="form-control">
					</div>
					<div class="form-group">
						<label class="form-control-label">English Title</label>
						<input type="text" name="eng_title" class="form-control" required>
					</div>
				
					<div class="form-group">
						<label class="form-control-label">English Description</label>
						<input type="text" name="eng_desc" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="form-control-label">Arabic Title</label>
						<input type="text" name="arab_title" class="form-control" required>
					</div>
			
					<div class="form-group">
						<label class="form-control-label">Arabic Description</label>
						<input type="text" name="arab_desc" class="form-control" required>
					</div>
					<div class="form-group">
						<select name="align">Text Alignment
						<option value="right">Right</option>
						<option value="center">Center</option>
						<option value="left">Left</option>
							
						</select>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<input type="submit" name="submit" value="Create" class="btn btn-primary">
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
<?php require '../includes/footer.php'; ?>
