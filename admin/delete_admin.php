<?php
include '../includes/connect_db.php';
$admin_id=$_GET['admin_id'];
$query="DELETE from admin WHERE admin_id='$admin_id'";
if (mysqli_query($con,$query)){
unlink('../images/adminProfile/'.$_GET['admin_image']);
header("Location:./admin.php");


}
