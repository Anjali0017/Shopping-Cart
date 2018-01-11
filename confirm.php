<?php 
	error_reporting(0);
	require_once("connection.php");
	session_start();
	if (!isset($_SESSION['email']))
	header('location: index.php');
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
			<div class="col-lg-4 col-lg-offset-4" style="margin-top:80px;margin-bottom:10px;">
				<h2 align="center">Your Order</h2><hr>
				<h5 align="center">Please confirm that you wish to order the following items:</h5>
				<form action="success.php" method="GET">
					<table class="table table-striped">
						<thead>
							<tr>
							<th>Item Number</th>
							<th>Cost</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							if (!empty($_GET['items']))
								{
								$ordered = $_GET['items'];
								$totalprice = 0;
								$price = 0;
								$message = "items ID : ";
								if (empty($ordered))
									header('location: home.php');
								else							
									{
										for ($i=0; $i<count($ordered); $i++)
											{
											$id = $ordered[$i];
											$message = $message.$id." ";
											$query = "SELECT Price, PID FROM items WHERE PID='$id'";
											$result = mysqli_query($con, $query);
											$row = mysqli_fetch_array($result);
											$price = ($row['Price']);
											$totalprice += $price;

											echo "<tr>";
											echo "<td>#$id</td>";
											echo "<td>Rs $price</td>";
											echo "<tr>";
											}
										echo "<tr>";
										echo "<td>Total</td>";
										echo "<td>Rs $totalprice</td>";
									}
								}
							else
								header('location: home.php');
							?>
						</tbody>
					</table>
					<input type="hidden" name="itemsid" value="<?php echo $message; ?>">
					<center><a href="success.php" class="btn btn-primary" >Confirm</a></center>
				</form>
			</div>
		</div>
	</body>
</html>