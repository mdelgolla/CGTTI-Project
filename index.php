<!DOCTYPE html>

<html>
<head>

	<title>CGTTI JobInfo</title> 
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
	<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scaleable=no">
 
</head>

<body class="body">
	<div class="header">
		<div class="header1">
			<img src="images/logo.png" id="imgleft">
			<div style="display: table-cell; vertical-align: middle; color: white; padding: 0; font-size: 30px;">
				Ceylon German Technical Training Institute
			</div>
		</div>
		<div class="header2">
			<div style="display: table-cell; vertical-align: middle;">
				Job Information system
			</div>
		</div>
	</div>
	<div class="container">
		<div class="sidebar" style="padding-top:3%;">
			<ul id="nav">
				<li><a  style="border-top: 1px solid #403D3E; font-size:1.3em; padding-left:0px; text-align: center;" href="#">About Us</a></li>
				<li><a  style="padding-left:0px; font-size:1.3em; text-align: center;" href="#">Contact Us</a></li>	
				<li><a  style="padding-left:0px; font-size:1.3em; text-align: center;" href="#">Services</a></li>	
			</ul>
		</div>
		<div class="content">
			<h1 style="padding-left: 50px; font-size: 3em;">Welcome to the CGTTI job informaion system !</h1>
			<div class="loginArea" style="height:400px;">
				<div class="loginBackground">
					<br><br>
					<center>you have to login first</center>
					<div class="inner">
						<form action="login.php" method="post">
							<ul id="login">
								<li> Username: <br>
									<input type="text" name="username" placeholder="username">
								<li> Password: <br>
									<input type="password" name="password" placeholder="password">
							</ul>
								<center> <input type="submit" value="login"> </center>
							<br>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>