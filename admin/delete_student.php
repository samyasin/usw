<?php include '../includes/connect_db.php'?>

<?php 

 $stu_id = $_GET['stu_id'];

 $q      = "SELECT image_sign FROM register WHERE stu_id=$stu_id";

 $result    = mysqli_query($con,$q);

 $img = mysqli_fetch_assoc($result);

 $path = "../images/emp_sign/".$img['image_sign'];

 unlink($path);

 $query  = "DELETE FROM register WHERE stu_id=$stu_id";

 mysqli_query($con,$query);

 header("location:register.php");

