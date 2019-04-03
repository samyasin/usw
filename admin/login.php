<?php
ob_start();
session_start();
require '../includes/connect_db.php'; ?>

<?php
if (isset($_POST['login'])){
	$username = $_POST['loginUsername'] ;
	$password = $_POST['loginPassword'] ;

	$query    = "SELECT * FROM admin WHERE admin_email ='$username' and admin_password ='$password'";
	$res      = mysqli_query($con,$query);
	$adminSet = mysqli_fetch_assoc($res);
	if  (!empty($adminSet)) {
		$_SESSION ['username'] = $username; 
		header("Location:index.php");
		exit;
	} else {
		$error = "<br><div class='alert alert-danger'>
		Incorrect Username or Password
		</div>";
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>UpSkills Dashboard</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="all,follow">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome CSS-->
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	<!-- Fontastic Custom icon font-->
	<link rel="stylesheet" href="css/fontastic.css">
	<!-- Google fonts - Poppins -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
	<!-- theme stylesheet-->
	<link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
	<!-- Custom stylesheet - for your changes-->
	<link rel="stylesheet" href="css/custom.css">
	<!-- Favicon-->
	<link rel="shortcut icon" href="../images/other/Logo-01.png">
	<!-- Tweaks for older IEs-->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
	<div class="page login-page">
		<div class="container d-flex align-items-center">
			<div class="form-holder has-shadow">
				<div class="row">
					<!-- Logo & Information Panel-->
					<div class="col-lg-6">
						<div class="info d-flex align-items-center">
							<div class="content">
								<div class="logo">
									<h1>UpSkills Academy</h1>
								</div>
								<p>Dashboard</p>
							</div>
						</div>
					</div>
					<!-- Form Panel    -->
					<div class="col-lg-6 bg-white">
						<div class="form d-flex align-items-center">
							<div class="content">
								<form method="post" class="form-validate">
									<div class="form-group">
										<input id="login-username" type="email" name="loginUsername" required data-msg="Please enter your username" class="input-material">
										<label for="login-username" class="label-material">User Name</label>
									</div>
									<div class="form-group">
										<input id="login-password" type="password" name="loginPassword" required data-msg="Please enter your password" class="input-material">
										<label for="login-password" class="label-material">Password</label>
									</div><input type="submit" name="login" class="btn btn-primary login-form" value="Login">
									<!-- This should be submit button but I replaced it with <a> for demo purposes-->
								</form>
								<?php if(isset($error)) echo $error	; ?>
								
								<!--<a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="register.html" class="signup">Signup</a>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyrights text-center">
			<p>Designed by <a href="" class="upskills">UpSkills Academy</a>
				<!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
			</p>
		</div>
	</div>
	<!-- JavaScript files-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/popper.js/umd/popper.min.js"> </script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
	<script src="vendor/chart.js/Chart.min.js"></script>
	<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	<!-- Main File-->
	<script src="js/front.js"></script>
</body>

</html>
