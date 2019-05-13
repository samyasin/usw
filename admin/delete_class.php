<?php 

require '../includes/connect_db.php';

$class_id = $_GET['class_id'];



$query    = "DELETE FROM class WHERE class_id=$class_id";

if (mysqli_query($con,$query)){

	

	header("location:class_room.php");

} else {

	echo "somthing Wrong";

} 