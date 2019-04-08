<?php require '../includes/header.php'; ?>
<?php require '../includes/connect_db.php'; ?>

<?php
$query = "select * from album"; //read and display data
$result = mysqli_query($con, $query);
echo "<section class='client no-padding-top'>";
echo "<div class='container-fluid'>";
echo "<div class='row'>";
while ($album = mysqli_fetch_assoc($result)) {
    echo" 
		<div class= 'col-lg-3'>
	    <div class='card' style='width: 12rem;margin:20px'>
		<img src='../images/albums/{$album['album_name']}/{$album['album_cover']}' alt='' height='180' width='192'>
		<div class='card-body'>
		<h5 class='card-title'>{$album['album_name']}</h5>
		<a href='images.php?album_id={$album['album_id']}&album_name={$album['album_name']}' class='btn btn-primary'>Show</a>
				<a href = 'delete_album.php?album_id={$album['album_id']} 'class='btn btn-primary'>Delete</a>

        </div>	
		</div>
		</div>";

    /* echo "<div id='myModal' class='modal fade' style='display: none;'>
      <div class='modal-dialog modal-confirm'>
      <div class='modal-content'>
      <div class='modal-header'>
      <div class='icon-box'>
      <i class='fa fa-check-o'></i>
      </div>
      <h4 class='modal-title'>Delete !</h4>
      </div>
      <div class='modal-body'>
      <p class='text-center'>Are you sure !</p>
      </div>
      <div class='modal-footer'>
      <a href = 'delete_album.php?album_id={$album['album_id']}'>Delete</a>
      <a data-dismiss='modal' class='btn btn-primary'>Cancel</a>
      </div>
      </div>
      </div>
      </div>"; */
}




echo "
	   <section class='client no-padding-top'>
       <div class='container-fluid'>
       <div class='row'>
	   <div class='col-lg-3'><br>
		<a href=''  data-toggle='modal' data-target='#exampleModalCenter'><img  src='../images/albums/addalbum.png' alt='' height='130'></a>
		  </div>	
		</div>
		</div>
		</section>
		";
echo "</div>
		      </div>
		          </section>
		             ";


echo '<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Create Album</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	 
						<form method="post" action="" >
							<div class="form-group">
								<label class="form-control-label">Album Name</label>
								<input type="text" name="album_name" placeholder="Album Name" class="form-control">
							</div>
			
							
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" value="Create" class="btn btn-primary">
      </div>
    </div>
  </div>
</div>';


if (isset($_POST['submit'])) {
    if (!empty($_POST['album_name'])) {
        $album_name = $_POST['album_name'];
        $query = "INSERT INTO `album` (`album_id`, `album_name`, `album_cover`) VALUES (NULL, '{$album_name}', 'album_cover.jpg')";
        mysqli_query($con, $query);
        mkdir("../images/albums/$album_name");
        echo "<meta http-equiv='refresh' content='0'";
    }
}
?>
<!--
<div class="row m-t-30">
    <div class="col-md-12">
<!-- DATA TABLE--><!--
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>name</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
<?php
/*
  $query = "select * from album"; //read and display data
  $result = mysqli_query($con, $query);
  while ($testSet = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo " <td> {$testSet['album_id']}</td>";


  echo "<td> <a href = 'delete_album.php?album_id={$testSet['album_id']}'>Delete</a></td>"; //delete
  echo "</tr>";
  } */
?>


        </tbody>
    </table>
</div>
<!-- END DATA TABLE--><!--
</div>
</div>-->

<?php require '../includes/footer.php'; ?>
