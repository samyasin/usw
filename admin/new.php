<?php require '../includes/connect_db.php'; ?> 


<?php $query = "SELECT student.std_id,student.std_name,student.std_major,student.phone_number,course.course_name 
FROM student,course
WHERE student.course_id = course.course_id";
echo $query;
   $result = mysqli_query($con,$query);
   print_r(mysqli_fetch_assoc($result));
	   