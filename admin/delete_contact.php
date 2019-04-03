<?php require '../includes/connect_db.php'; ?>
<?php
$contact_id = $_GET['contact_id'];
$query      = "DELETE FROM contact WHERE contact_id={$contact_id}";

if (mysqli_query($con,$query)){
  header('Location:contact.php');
  } else {
  echo "ERRPR :".mysqli_error($con);
  }