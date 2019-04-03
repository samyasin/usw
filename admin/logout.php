<?php 
 session_start();
if(isset($_SESSION['username'])){
unset($_SESSION['username']);
}
    echo "<center><img src='../images/other/load.gif' alt='...'></center>";
    echo "<script type='text/Javascript'>
    	    window.setTimeout(function(){
    		window.location.href='login.php';
          	},2000);
            </script>";
