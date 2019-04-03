<?php include '../includes/connect_db.php'?>
<?php 
 $course_id = $_GET['course_id'];
 $q      = "SELECT course_image FROM course WHERE course_id=$course_id";
 $result    = mysqli_query($con,$q);
 $img = mysqli_fetch_assoc($result);
 $path = "../images/course/".$img['course_image'];
 unlink($path);
 $query  = "DELETE FROM course WHERE course_id=$course_id";
 mysqli_query($con,$query);
 header("location:courses.php");
