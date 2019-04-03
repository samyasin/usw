<?php require '../includes/connect_db.php'; ?>
<?php 
$image_id  = $_GET['image_id'];
$image_src = $_GET['image_src'];
$path      = '../images/slider/';
$query     = "DELETE FROM slider WHERE image_id={$image_id}";
 if (mysqli_query($con,$query)){
 	 unlink($path.$image_src);
	 header('Location: slider.php');
 } else {
 	echo "ERROR : ".mysqli_error($con);
 } 
	 