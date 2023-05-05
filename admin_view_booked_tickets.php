<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Booked Tickets
		</title>
		<style>
			.container{
				/* border:10px solid gray; */
				max-width:700px;
				margin:auto;
				height:50vh;

				display:block;
				align-items:center;
				justify-content:center;

				position:absolute;
				right:0;
				left:0;
				top:0;
				bottom:0;
				margin:auto;
			}
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0% 15.8%
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
			CHAMPION AIRLINES
		</h1>
		<div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<div class="container">

			<form action="admin_view_booked_tickets_form_handler.php" method="post">
				<h2>VIEW LIST OF BOOKED TICKETS FOR A FLIGHT</h2>
				<div>
					<table cellpadding="5">
						<tr>
							<td class="fix_table">Enter the Flight No. :</td>
							<td class="fix_table"><input type="text" name="flight_no" required></td>
						</tr>
						<tr>
							<td class="fix_table">Enter the Departure Date :</td>
							<td class="fix_table"><input type="date" name="departure_date" required></td>
						</tr>
					</table>
					<br>
					<br>
					<input type="submit" value="Submit" name="Submit">
				</div>
			</form>
		</div>
	</body>
</html>
