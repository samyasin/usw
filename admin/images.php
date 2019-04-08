<?php require '../includes/header.php' ?>
<?php require '../includes/connect_db.php' ?>
<?php
$album_id = $_GET['album_id'];
$album_name = $_GET['album_name'];
$path = "../images/albums/$album_name/";
if (isset($_POST['submit'])) {
    if (!empty($_FILES['image'])) {
        for ($i = 0; $i < count($_FILES['image']['tmp_name']); $i++) {
            if ($_FILES['image']['error'][$i] == 0) {
                $tmp_name = $_FILES['image']['tmp_name'][$i];
                $filename = time() . "-" . $_FILES['image']['name'][$i];
                $query = "INSERT INTO `image` (`album_id`, `image_id`, `image_src`) VALUES ('{$album_id}', NULL, '{$filename}')";
                if (mysqli_query($con, $query)) {
                    move_uploaded_file($tmp_name, $path . $filename);
                    echo "<meta http-equiv='refresh' content='0'>";
                }
            } else if ($_FILES['image']['error'][$i] == 1) {
                $error = "<div style='width:70%;margin:15px' class='alert alert-danger role='alert'>file uploaded exceed file size allowed ..</div>";
            } else if ($_FILES['image']['error'][$i] == 4) {
                $error = "<div style='width:70%;margin:15px' class='alert alert-danger role='alert'>Please select file </div>";
            } else {
                print_r($_FILES['image']['error']);
            }
        }
    }
}

if (isset($error)) {
    echo $error;
}
$query = "SELECT * FROM image WHERE album_id=" . $album_id;
$result = mysqli_query($con, $query);
echo "<section class='client no-padding-top'>";
echo "<div class='container-fluid'>";
echo "<div class='row'>";

while ($image = mysqli_fetch_assoc($result)) {
    echo "<div class='col-lg-3'>";
    echo "<div class='card' style='width: 12rem;margin:20px'>
		<img src='../images/albums/$album_name/{$image['image_src']}' alt='...' height='180' width='192'>
		<div class='card-body'>";
    ?>
    <?php
    echo "<form method='post' action=''>
		<input type='radio' name='cover' value='{$image['image_src']}'> Set as cover<br>
                    <a href='../images/albums/$album_name/{$image['image_src']}' class='btn btn-primary'>Show</a>
		<a href='delete_image.php?image_id={$image['image_id']}&image_src={$image['image_src']}&album_name={$album_name}' class='btn btn-primary'>Delete</a>
		</div>
		</div></div>
		";
}

echo "</form>
	   <section class='client no-padding-top'>
       <div class='container-fluid'>
       <div class='row'>
	   <div class='col-lg-3'><br>
		<a href=''  data-toggle='modal' data-target='#exampleModalCenter'><img  src='../images/albums/add_image.png' alt='...' height='150'></a>
		
		  </div>	
		</div>
		</div>
		</section>
		";
echo
"</div>
       </div> 
       </section>";

echo '<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		 <div class="modal-content">
		  <div class="modal-header">
		   <h5 class="modal-title" id="exampleModalCenterTitle">Add Image</h5>
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		     <span aria-hidden="true">&times;</span>
		      </button>
		       </div>
		         <div class="modal-body">					
					<div class="form-group">
					<form method="post" action="" enctype="multipart/form-data">
					<label class="form-control-label">Image</label>
					<input type="file" name="image[]" class="form-control" multiple="" >
					</div>
					</div>
			    <div class="modal-footer">
		      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		     <input type="submit" name="submit" value="Create" class="btn btn-primary">
		    </div>
			</form>
		   </div>
		  </div>
		</div>';
?>
<script>
    $(document).ready(function () {
        //var ckbox = $('.cover');

        $('input').on('click', function () {
            var radio = $("input[name='cover']:checked");

            if (radio.is(':checked')) {
                var path = radio.val();
                var album_id = <?php echo $album_id; ?>;
                var dataTosend = 'path=' + path + '&album_id=' + album_id;
                $.ajax({

                    url: 'cover_image.php',

                    type: 'POST',

                    data: dataTosend,

                    async: true,

                    success: function (data) {

                        alert('Set image cover successfully')

                    },

                });
            }
        });
    });

</script>


<?php require '../includes/footer.php' ?>
