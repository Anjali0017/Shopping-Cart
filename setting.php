<?php 
	session_start();
	if (!isset($_SESSION['email']))
	header('location: index.php');
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes">
		<meta name="description" content="mobilemobile shopping,mobile gurus,mobile communications,mobile system,handsets">
		<meta name="Author" content="Sanjay kumar mahto">
		<!-- Title Image-->
		<link rel="shortcut icon" href="images/mobile1.png"  class="img-rounded" type="image/png">
		<title>E-mobile shop</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<?php include("navbar-after-login.php"); ?>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4" style="margin-top:80px;margin-bottom:10px;">
					<h4>Change Password</h4>
					<form action="settings_script.php" method="POST">
						<div class="form-group">
							<input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
						</div>
					  <button type="submit" class="btn btn-primary">Change</button>
					  <?php
								echo "<b>".$_GET['error']."</b>";
						?>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>