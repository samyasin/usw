<?php require '../includes/connect_db.php';
$image_id   = $_GET['image_id'];
$image_src  = $_GET['image_src'];
$album_name = $_GET['album_name'];
$path       = "../images/albums/$album_name/";
$query      = "DELETE FROM image WHERE image_id=".$image_id;
if (mysqli_query($con,$query)){
	unlink($path.$image_src);
    header('location:albums.php');
} else {
	echo 'Somthing Wrong';
}

