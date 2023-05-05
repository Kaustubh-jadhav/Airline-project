<?php
	session_start();
?>
<html>
	<head>
		<title>
			Account Login
		</title>
		<style>
			section{
				/* border:10px solid black; */
				height:90vh;
			}
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
    			margin: 0px 60px
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
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>
		<br>
		<br>
		<br>
		<form class="float_form" style="padding-left: 40px" action="login_handler.php" method="POST">
		<section>
<div class="container">

		
			<fieldset>
				<legend>Login Details:-</legend>
				<table cellpadding='10'>

				<tr>
					<td><strong>Username:</strong><br></td>
					<td>
					<input type="text" name="username" placeholder="Enter your username" required>
					</td>
				</tr>
				<br><br>
				<tr>
					<td>
						<strong>Password:</strong>
					</td>
					<td>
						<input type="password" name="password" placeholder="Enter your password" required>
					</td>
				</tr>
				<br>
				<tr>
					<td>
							<strong>User Type:</strong><br>
					</td>
					<td>
							<input type='radio' name='user_type' value='Customer' checked/>Customer <br> 
					</td>
					
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						<input type='radio' name='user_type' value='Administrator'/>Administrator 
					</td>
				</tr>
				<tr>
					<td>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>	
					</td>
				

				</tr>
				<tr>
						<td>
						<input type="submit" name="Login" value="Login">

						</td>
				</tr>
				</table>

			</fieldset>
			
			<br>
			<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User Account?</a>
			</div>
			</section>
		</form>
	</body>
</html>
