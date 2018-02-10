<!doctype html>
<html>
<style>

button {
	font-family: "Arial Black", Gadget, sans-serif;
	display: inline-block;
    border: 2px solid white;
    box-sizing: border-box;
	background-color: #B6B6B4;
    color: black;
    margin: 0px 0;
    cursor: pointer;
    width: 100%;
    padding: 14px 20px;
    cursor: pointer;

}
.but {
	position: absolute;
	top: 10px;
	right:155px;
	padding: 14px 22px;
    
}

</style>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Donate- Foundation Fighting Poverty</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body style="background-color:Black;">
	<button class="but" onclick="location.href = 'logout.php?logout';" style="width:auto;">Log Out</button>

<style = "font:white";></style>PLEASE SIGN IN FIRST</style>
	</div>


<div id="login">
<div id="header">
		<a href="donate.php" class="logo">
			<img src="images/donate.jpeg" alt="" width="300" height="250">
		</a>
		
		<ul id="navigation">
			<li>
				<a  href="index.php">Home</a>
			</li>
			<li>
				<a href="donate.php">Donate</a>
			</li>
			<li class="selected">
				<a href="volunteer.php">Volunteer</a>
			</li>
			 
		    <li>
		        <a href="#"><div class="dropdown">
		  <button class="dropbtn">ANNAUL PROJECTS</button></a>  <div class="dropdown-content">
		    <ul><li><a href="du.php">Utilities Distribution</a></li>
		    <a href="dg.php">Gifts Distribution</a></li>
		    <li><a href="ca.php">Awareness Campaign</a></li>
		  </ul></div>
			</div>
			</li>

			<li>
				<a href="contact.php">Contact us</a>
			</li>
		</ul>
		    </div>
<div id="body">
<br><br><br><br><br>
<form action="volunteerprocess.php" method="post">
<div id="body">
<h1>Start Date </h1><br>
<input type="date" name="sdate" ><br><br>
<h1>End Date </h1><br>
<input type="date" name="edate" min="2016-01-01"><br><br>
<br><br><br><button type="submit"><h1><span>Become a Volunteer</h1></button>
</form>
</div>
</div>
	<div id="footer">
		<div>
			<p>&copy; Foundation Fighting Poverty. All rights reserved.</p>
			<ul>
				<li>
					<a href="https://twitter.com/FFP_Pakistan" id="twitter">twitter</a>
				</li>
				<li>
					<a href="https://www.facebook.com/ffppk/?fref=ts" id="facebook">facebook</a>
				</li>
				
			</ul>
		</div>
	</div>
</body>
</html>
