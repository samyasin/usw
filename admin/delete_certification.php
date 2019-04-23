<?php

include '../includes/connect_db.php';

$cer_id=$_GET['cer_id'];

$query="DELETE from certification WHERE cer_id='$cer_id'";

if (mysqli_query($con,$query)){

unlink('../images/certification_image/'.$_GET['cer_image']);

header("Location:./certification.php");





}

