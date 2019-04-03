<?php require '../includes/connect_db.php'; ?>
<?php $path     = $_POST['path'];
      $album_id = $_POST['album_id'];
      $query    = "UPDATE `album` SET `album_cover` = '{$path}' WHERE `album_id` = {$album_id}";
      if (mysqli_query($con,$query)){
      echo $query; 
	  }

