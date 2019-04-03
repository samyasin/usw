<?php 
require '../includes/connect_db.php';
$event_id = $_GET['event_id'];
$path     = '../images/event/'.$_GET['event_img'];
$query    = "DELETE FROM event WHERE event_id=$event_id";
if (mysqli_query($con,$query)){
	unlink($path);
	header("location:events.php");
} else {
	echo "somthing Wrong";
} 