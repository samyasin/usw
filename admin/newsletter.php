<?php require '../includes/header.php'; ?>
<?php require '../includes/connect_db.php'; ?>
<section>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-lg-12'>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Email</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $query = "SELECT *
                                        FROM newsletter";
                        $result = mysqli_query($con, $query);
                        $i = 1;
                        while ($conSet = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "
                                        <th scope='col'>{$i}</th>
                                        <th scope='col'>{$conSet['email']}</th>
                                        
                                        </th></tr>";
                                        $i++;
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>




<?php require '../includes/footer.php'; ?>