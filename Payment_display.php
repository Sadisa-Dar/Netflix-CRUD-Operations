<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
	<title>Payment Records</title> 
	<style>
		body {
			margin: 0;
			background-color: black;
			font-family: "Bricolage Grotesque", sans-serif;
			font-optical-sizing: auto;
			font-weight: 400;
			font-style: normal;
			font-variation-settings: "wdth" 100;
			color: #989898;
			background-image: url(background.webp);
		}
		.styled-link {
			text-decoration: none;
			font-family: "Martel Sans", sans-serif;
			font-weight: 600;
			color: white;
			font-size: 20px;
			transition: 0.3s;
		}
		.styled-link:hover {
			color: #db0000;
			padding: 10px 20px;
		}
		button {
			font-family: "Bricolage Grotesque", sans-serif;
			font-weight: 400;
			font-style: normal;
			font-size: 18px;
			padding: 10px 40px;
			border-radius: 5px;
			border: none;
			transition: 0.3s;
		}
		button:hover {
			background-color: #db0000;
			padding: 15px 80px;
			color: white;
		}
	</style>
</head>
<body style="margin: 0; display: flex; flex-direction: column; min-height: 100vh;">
	<!-- Navigation Bar -->
	<div style="position: relative; z-index: 1; background-color: rgba(0, 0, 0, 0.5); padding: 10px 20px; display: flex; justify-content: space-between; align-items: center;">
    	<div>
     		<img src="logo.png" alt="Logo" style="height: 50px;">
    	</div>
    	<div>
		    <ul style="list-style: none; display: flex; margin: 0; padding: 0;">
		        <li style="margin-left: 50px;"><a href="4.html" class="styled-link">Home</a></li>
		        <li style="margin-left: 50px;"><a href="Media_display.php" class="styled-link">Movies</a></li>
		        <li style="margin-left: 50px;"><a href="Profile_display.php" class="styled-link">Profiles</a></li>
		        <li style="margin-left: 50px;"><a href="1.html" class="styled-link">Register Now!</a></li>
		        <li style="margin-left: 50px;margin-right: 950px;"><a href="Payment_display.php" class="styled-link">Payment</a></li>
		    </ul>
    	</div>
  	</div><br>

	<?php
	include 'conn.php';
	$sql = "SELECT * FROM Payment";
	$result = $conn->query($sql);
	?>

	<div style="flex: 1;">
		<center>
			<?php
			if ($result->num_rows > 0) {
			    while ($row = $result->fetch_assoc()) { ?>
			    	<br><br>
			        <div style="background-color: rgba(0, 0, 0, 0.7); width: 50%; border-radius: 15px;box-shadow: 0 0 8px #db0000; padding: 10px; margin-bottom: 20px; display: flex; align-items: center; font-size: 24px;">
			        	<div style="width: 30%;">
			        		<img src="user.png" style="height: 130px; width: 130px; border-radius: 70px;">
			        	</div>
			        	<div style="width: 70%;">
			        		<h2 style="text-align: center;">Receipt #<?php echo $row["ReceiptID"]; ?></h2>
							<div style="display: flex;">
							    <p style="margin-left:20px">Name:&ensp;<?php echo $row["Name"]; ?></p>
							    <p style="margin-left:170px">Expiry Date:&ensp;<?php echo $row["ExpiryDate"]; ?></p>
							</div>
				            <div style="display: flex;">
							    <p style="margin-left:20px">Account No:&ensp;<?php echo $row["AccountNo"]; ?></p>
							    <p style="margin-left:50px">CVC:&ensp;<?php echo $row["CVC"]; ?></p>
							</div>
							<div>
								<p style="text-align: center;">Plan: <?php echo $row["Subscription_Deal"]; ?></p>
							</div>
				            <button>
							   	<a href='EditPayment.php?id=<?php echo $row["ReceiptID"]; ?>' style='text-decoration: none; color: black;'><b>Edit</b></a>
							</button>
				            <button style='margin-left: 50px'>
								<a href='Payment_delete.php?id=<?php echo $row["ReceiptID"]; ?>' onclick="return confirm('Are you sure you want to delete this profile?');" style='text-decoration: none; color: black;'><b>Delete</b></a>
							</button><br><br>
			        	</div>
			        </div><br><br>
			        <hr style="height: 2px; background-color: #db0000; border: none; margin: 0 80px;">
			<?php }
			} else {
			    echo "<p>No records found</p>";
			}
			$conn->close();
			?>
		</center>
	</div>

	<!-- Footer -->
	<div style="width: 100%; height: 320px; background-color: #1d1d1d;">
		<div style="display: flex; flex-wrap: wrap; gap: 10px; margin-left: 483px;">
			<div><img src="fb.png"  width="30px" height="30px" style="margin-top: 70px;"></div>
			<div><img src="insta.png"  width="30px" height="30px" style="margin-top: 70px;"></div>
			<div><img src="yt.png"  width="30px" height="30px" style="margin-top: 70px;"></div>
		</div>
		<div>
			<p style="text-align: center; font-size: 14px;">
				<a href="#" style="text-decoration: none; color: #989898;">Audio Description</a>
				&emsp;&emsp;<a href="#" style="text-decoration: none; color: #989898;">Help Center</a>
				&emsp;&emsp;<a href="#" style="text-decoration: none; color: #989898;">Gift Cards</a>
				&emsp;&emsp;<a href="#" style="text-decoration: none; color: #989898;">Media Center</a>
			</p>
		</div>
		<div>
			<p style="margin-left: 483px; font-size: 14px;">
				<a href="#" style="text-decoration: none; color: #989898;">Investor Relations</a>
				<a href="#" style="text-decoration: none; color: #989898; margin-left: 213px;">Jobs</a>
				<a href="#" style="text-decoration: none; color: #989898; margin-left: 215px;">Terms of Use</a>
				<a href="#" style="text-decoration: none; color: #989898; margin-left: 206px;">Privacy</a>
			</p>
		</div>
		<div>
			<p style="margin-left: 494px; font-size: 14px;">
				<a href="#" style="text-decoration: none; color: #989898;">Legal Notices</a>
				<a href="#" style="text-decoration: none; color: #989898; margin-left: 195px;">Cookie Preferences</a>
				<a href="#" style="text-decoration: none; color: #989898; margin-left: 125px;">Corporate Information</a>
				<a href="#" style="text-decoration: none; color: #989898; margin-left: 160px;">Contact Us</a>
			</p>
		</div><br>
		<button style="color: #989898; border-style: solid; border-color: #989898; background-color: #1d1d1d; padding: 9px 6px; font-size: 12px; border-radius: 0; margin-left: 489px;">Service Code</button><br>
		<p style="color: #989898; font-size: 12px; margin-left: 489px;">&copy; 1997-2025 Netflix, Inc.</p>
	</div>
</body>
</html>
