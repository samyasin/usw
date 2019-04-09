<?php require '../includes/header.php'; ?>
<?php require '../includes/connect_db.php'; ?>

<section class="form">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="card">

                    <div class="card-header d-flex align-items-center">

                        <h3 class="h4">Contact Table</h3>

                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-striped table-sm">

                                <thead>

                                    <tr>

                                       

                                        <th scope="col">Contact Name</th>
                                        <th scope="col">Contact Email</th>
                                        <th scope="col">Contact Message</th>
                                        <th scope="col"> submit Date </th>
                                        <th scope="col"> Action </th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php
                                    $query = "SELECT *
                                        FROM contact";

                                    $result = mysqli_query($con, $query);

                                   while ($conSet = mysqli_fetch_assoc($result)) {

                                        echo "<tr>";

                                        echo "<th scope ='row'>{$conSet['contact_name']}</th>";

                                        echo "<th scope ='row'>{$conSet['contact_email']}</th>";

                                        echo "<th scope ='row'><div class='card w-25'><div class='card-body'><p class='card-text'>With supporting text below as a natural lead-in to additional content.</p>{$conSet['contact_message']}</th></div>";
                                        echo "<th scope ='row'>";

                                        echo date('D, d-M-Y h:i:s a', strtotime($conSet['contact_add_date']));
                                        echo "</th>";

                                       

                                        echo "<th scope='row'><a href='delete_contact.php?contact_id={$conSet['contact_id']}' class='btn btn-danger' >Delete</a></th>";

                                        echo "</tr>";
                                    }
                                    ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>








<?php require '../includes/footer.php'; ?>
