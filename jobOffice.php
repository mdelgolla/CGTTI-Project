<!DOCTYPE html>

<html>
<head>

	<title>CGTTI JobInfo</title> 
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
	<link rel="stylesheet" type="text/css" href="CSS/style2.css">
	<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scaleable=no">
 
</head>

<body class="body">
   <?php  include("jobConDB.php") ?>
	<div class="header">
		<div class="header1" style="height:80%">
			<div class="logo">CGTTI - <span style="font-size: 0.65em;"> Job Information System</span>
			</div>
			<div class="loginAs">Job Office <a href="#">( LogOut )<a></div>
		</div>
		<div class="header2" style="height:20%"></div>
	</div>
	<div class="container">
		<div class="sidebar" style="padding-top:2%;">
			<ul id="nav">
				<li><a  style="font-size: 1.3em" href="#1">My Profile</a></li>
				<li><a  href="#2">Customer Registration</a></li>	
				<li><a  href="#3">Vehicle Registration</a></li>	
				<li><a  href="#4">Job Registration</a></li>	
			</ul>
		</div>
		<div class="content">          <!--110 px are needed to set perfectly in sections-->
			<section id="1" style="height:380px; width: 100%;padding-top:110px;">
			<div class="contentArea">
				<div class="profileImage"><img src="images/user.png" /></div>
				<div class="logo" style="margin-top:75px; color: #575354; font-size:1.3em;">You are logged in as Job Office</div>
				<div class="detailArea"></div>
				<div class="buttonArea">
					<button style="margin-top:0;">View Messages</button><br>
					<button>Add Comments</button><br>
					<button>Contacts</button>
				</div>
			</div>
			</section><br>
			
			<div class="regForm">
			<form action="jobOffice.php" method="post" name="JogOfficer" enctype="multipart/form-data">
				<section id="2" style="width: 100%;padding-top:80px;">
					<div class="contentArea">
						<div class="topBar">Customer Registration</div>
						<div class="frm">
							<label for="name">Customer Name :</label>
								<input style="width:600px; " type="text" id="name" name="name"/><br><br>
							<label style="margin-left: 61px;" for="NIC">NIC No. :</label>
								<input type="text" maxlength="10" id="nic" name="nic"/>
							<label style="margin-left: 102px;" for="telephoneNo">Tele. No. :</label>
								<input type="text" maxlength="10" id="tele" name="tele"/><br><br>
							<label style="margin-left: 58px;" for="address">Address :</label>
								<textarea name="adrs" cols="82" rows="3"></textarea><br><br>
							<label style="margin-left: 75px;" for="email">Email :</label>
								<input style="width:320px;" type="email" id="email" name="email" placeholder="  example@123.com" />
						</div>
					</div>	
				</section>
				<section id="3" style="width: 100%;padding-top:80px;">
					<div class="contentArea">
						<div class="topBar">Vehicle Registration</div>
						<div class="frm">
							<label style="margin-left: 34px;" for="name">Vehicle No. :</label>
								<input type="text" maxlength="10" id="vno" name="vno"/><br><br>
							<label style="margin-left: 37px;" for="name">Engine No. :</label>
								<input type="text" maxlength="10" id="eno" name="eno"/>
							<label style="margin-left: 87px;" for="name">Chessis No. :</label>
								<input type="text" maxlength="10" id="cno" name="cno"/><br><br>
							<label style="margin-left: 45px;" for="fuelType">Fuel Type : </label>
    							<input style="margin-left:1px;" name="fuelType" type="radio" value="Diesel"/>Diesel
    							<input style="margin-left:8px;" name="fuelType" type="radio" value="Petrol"/>Petrol
    							<input style="margin-left:8px;" name="fuelType" type="radio" value="Gas"/>Gas
    						<label style="margin-left: 68px; " for="transType">Transmission Type : </label>
    							<input style="margin-left:1px;" name="transType" type="radio" value="Mannual"/>Mannual
    							<input style="margin-left:8px;" name="transType" type="radio" value="Auto"/>Auto						
						</div>
					</div>	
				</section>
				<section id="4" style="width: 100%;padding-top:80px;">
					<div class="contentArea">
						<div class="topBar">Job Registration</div>
						<div class="frm">
							<label style="margin-left: 8px;" for="details">Job Description :</label>
								<textarea name="jobDesc" cols="82" rows="5"></textarea><br><br>
							<label style="margin-left: 55px;" for="jobType">Job Type : </label>
    							<input style="margin-left:1px;" name="jobType" type="radio" value="PJ"/>PJ
    							<input style="margin-left:8px;" name="jobType" type="radio" value="VM"/>VM
    							<input style="margin-left:8px;" name="jobType" type="radio" value="BJ"/>BJ<br><br>
							<label style="margin-left: 65px;" for="section">Section : </label>
								<input type="text" maxlength="20" id="section" name="section"/>
							<label style="margin-left: 80px;" for="section">Section Code : </label>
								<input style="width:70px;" type="text" maxlength="4" id="secCode" name="secCode"/><br><br>
							<label style="margin-left: 31px;" for="jobNo">Job Number : </label>
								<input type="text" maxlength="15" id="Job Number" name="jobNo"/><br><br>
							<label style="margin-left: 84px;" for="date">Date : </label>
								<input type="date" id="date" name="date" placeholder="     YYYY / MM / DD"/>
						</div>
					</div>	
				</section>
				<section style="width: 100%;">
					<div class="contentArea">
					<div class="buttonArea" style="float:left; margin-left:10%;">
						<button type="submit" name="submit" value="Register" style="margin-left:10%; width:250%;">Register</button><br>
                        
					</div>
					</div>
				</section>
			</form>
			</div>
				
		</div>
			
	</div>

	

</body>