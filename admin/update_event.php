<?php require '../includes/header.php'; ?>
<?php require '../includes/connect_db.php'; ?>
<?php
$event_id   = $_GET['event_id'];
if (isset($_POST['update'])){
$event_name = $_POST['event_name'];
$location   = $_POST['location'];
$start_date = $_POST['start_date'];
$end_date   = $_POST['end_date'];
$start_time = $_POST['start_time'];
$end_time   = $_POST['end_time'];
$event_desc = $_POST['event_desc'];	


	if ($_FILES['event_image']['error'] == 0){
	    $tmp_name = $_FILES['event_image']['tmp_name'];
	    $name     =time()."-".$_FILES['event_image']['name'];
		$path     = '../images/event/';
		$query    ="UPDATE event SET event_name='$event_name',location='$location',start_date='$start_date',end_date='$end_date',start_time='$start_time',end_time='$end_time',event_desc='$event_desc',event_image='$name' WHERE event_id=$event_id";
		
		if(mysqli_query($con,$query)){
			$old_image  = $_POST['old_image'];
			unlink($path.$old_image);
			move_uploaded_file($tmp_name,$path.$name);
			echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Update Successfully </div>";
		echo "<script type='text/Javascript'> 
			       window.setTimeout(function(){
					window.location.href='events.php';	
			        },2000);
					</script>
			    ";
		}
		
	} else if ($_FILES['event_image']['error'] == 4){
			$query = "UPDATE event SET event_name='$event_name',location='$location',start_date='$start_date',end_date='$end_date',start_time='$start_time',end_time='$end_time',event_desc='$event_desc'WHERE event_id=$event_id";
			if(mysqli_query($con,$query)){
			echo "<div style='width:auto;margin:15px' class='alert alert-success role='alert'>Update Successfully </div>";
				
			echo "<script type='text/Javascript'> 
			       window.setTimeout(function(){
					window.location.href='events.php';	
			        },2000);
					</script>
			    ";
		}
		
		
} else {
	die ();
}

}



$query       = "SELECT * FROM event WHERE event_id=$event_id";
$res         = mysqli_query($con,$query);
$event_data  = mysqli_fetch_assoc($res);
?>
<section class="forms">
	<div class="container-fluid">
		<div class="row">
			<!-- Basic Form-->
			<div class="col-lg-12">
				<div class="card">
					<div class="card-close">
						<div class="dropdown">
							<button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
							<div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
						</div>
					</div>
					<div class="card-header d-flex align-items-center">
						<h3 class="h4">Udate Event
						</h3>
					</div>

					<div class="card-body">
						<form method="post" action="" enctype="multipart/form-data">
							<div class="form-group">
								<label class="form-control-label">Event Name</label>
								<input type="text" name="event_name" value="<?php echo $event_data['event_name']; ?>" class="form-control">

							</div>
							<div class="form-group">
								<label class="form-control-label">Location</label>
								<input type="text" name="location" value="<?php echo $event_data['location']; ?>" class="form-control">

							</div>


							<div class="form-group">
								<label class="form-control-label">Start Date</label>
								<input type="date" name="start_date" class="form-control" value="<?php echo date('Y-m-d',strtotime($event_data['start_date'])); ?>">

							</div>

							<div class="form-group">
								<label class="form-control-label">End Date</label>
								<input type="date" name="end_date" class="form-control" value="<?php echo date('Y-m-d',strtotime($event_data['end_date'])); ?>">
							</div>

							<div class="form-group">
								<label class="form-control-label">Start Time</label>
								<input type="time" name="start_time" class="form-control" value="<?php echo date('H:i:s',strtotime($event_data['start_time'])); ?>">
							</div>

							<div class="form-group">
								<label class="form-control-label">End Time</label>
								<input type="time" name="end_time" class="form-control" value="<?php echo date('H:i:s',strtotime($event_data['end_time'])); ?>">
							</div>

							<div class="form-group">
								<label class="form-control-label">Description</label><br>
								<textarea cols="60" rows="4" name="event_desc"><?php echo $event_data['event_desc']; ?></textarea>
							</div>

							<div class="form-group">
								<label class="form-control-label">Event Image</label><br>
								<img src="../images/event/<?php echo $event_data['event_image'] ?>" height="80" width="80">
								<input type="file" name="event_image" class="form-control">
								<input type="hidden" name="old_image" class="form-control" value="<?php echo $event_data['event_image'] ?>">

							</div>

							<div class="form-group">
								<input type="submit" name="update" value="Update" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require '../includes/footer.php'; ?>
