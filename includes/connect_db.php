<?php
$con = mysqli_connect('pdb25.runhosting.com','2719221_upskillsnew','6attYNxxRZije4s','2719221_upskillsnew');
    if(!($con)){
        
        echo "something Wrong";
    }
// one of two command enough.
//mysqli_query($con, "SET NAMES 'utf8'"); 
mysqli_query($con, "SET CHARACTER SET utf8"); 

?>
