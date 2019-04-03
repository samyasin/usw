<?php require '../includes/header.php'; ?>
<?php require '../includes/connect_db.php'; ?>
<section>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-lg-12'>
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Contact ID</th>
							<th scope="col">Contact Name</th>
							<th scope="col">Contact Email</th>
							<th scope="col">Contact Message</th>
							<th scope="col"> submit Date </th>
                                                        <th scope="col"> Action </th>

						</tr>
					</thead>
					<tbody>

                                        <?php $query  = "SELECT *
                                        FROM contact";
                                        $result = mysqli_query($con,$query);
                                        while ($conSet = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<th scope='col'>{$conSet['contact_id']}</th>
                                        <th scope='col'>{$conSet['contact_name']}</th>
                                        <th scope='col'>{$conSet['contact_email']}</th>
                                        <th scope='col'>";
                                        echo substr($conSet['contact_message'],1,30);
                                        echo "</th>
                                        <th scope='col'>";
                                        echo date('D, d-M-Y h:i:s a',strtotime($conSet['contact_add_date']));
                                        
                                        echo "
                                        <th scope='col'><a href='delete_contact.php?contact_id={$conSet['contact_id']}' class='btn btn-danger' >Delete</a></th>
                                        </th></tr>";
                                        
                                        }
                                        
                                        
                                        
                                        ?>
 

					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>




<?php require '../includes/footer.php'; ?>
