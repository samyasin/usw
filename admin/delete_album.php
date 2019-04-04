<?php require '../includes/connect_db.php';
?>
<?php

$query = "delete from album WHERE album_id={$_GET['album_id']}";

mysqli_query($con,$query);

header('location:albums.php');



  /*$album_name = $_GET['album_name'];
  $album_id   = $_GET['album_id'];
  $path       = "../images/albums/$album_name/";
  $query      = "SELECT image_src FROM image WHERE album_id=".$album_id;
  $result       = mysqli_query($con,$query);
  while ($image = mysqli_fetch_assoc($result)){
  unlink($path.$image['image_src']);
  }
  $q   = "DELETE FROM album WHERE album_id={$_GET['album_id']}";
  echo $q;  die;
  if (mysqli_query($con,$q)){
  rmdir("../images/albums/$album_name");
  header('location:albums.php');
  } else {
  echo "ERROR :".mysqli_error($con);
  } */
?>