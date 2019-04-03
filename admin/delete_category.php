<?php 
include '../includes/connect_db.php';
$cat_id     = $_GET['cat_id'];
$path       = '../images/category/'.$_GET['cat_image'];
$query      = "DELETE FROM category WHERE cat_id=$cat_id";
mysqli_query ($con,$query);
unlink ($path);
header ('location:categories.php');
