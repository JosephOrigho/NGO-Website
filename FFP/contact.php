

<!doctype html>
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

</style><html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact - Foundation Fighting Poverty</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body style="background-color:Black;">
<button class="but" onclick="location.href = 'logout.php?logout';" style="width:auto;">Log Out</button>
	<div id="header">
		<a href="index.html" class="logo">
			<img src="images/ffp_logo.jpg" alt="" width="300" height="250">
		</a>
		
		<ul id="navigation">
			<li>
				<a  href="index.php">Home</a>
			</li>
			<li>
				<a href="donate.php">Donate</a>
			</li>
			<li>
				<a href="volunteer.php">Volunteer</a>
			</li>
			 <li>
		        <a href="index.php"><div class="dropdown">
		  <button class="dropbtn">ANNAUL PROJECTS</button></a>  <div class="dropdown-content">
		    <ul><li><a href="du.php">Utilities Distribution</a></li>
		    <a href="dg.php">Gifts Distribution</a></li>
		    <li><a href="ca.php">Awareness Campaign</a></li>
		  </ul></div>
			</div>
			</li>

			<li class="selected">
				<a href="contact.php">Contact us</a>
			</li>
		</ul>

	</div>
	<div id="body">
		<br><br><br><br><br><br>
		<h1><span><center>let's keep in touch</center></span><br></h1>
		<form action="contact.html" style="padding:45px 45px align:left;"><br>
			<h1>Name</h1><br><input type="text" name="fname" id="fname" ><br>
			<h1>Address</h1><br><input type="text" name="address" id="address"><br>
			<h1>Email</h1><br><input type="text" name="email" id="email"><br>
			<h1>Phone</h1><br><input type="text" name="phone" id="phone"><br>
			<h1> Message</h1><br><textarea name="message" id="message"></textarea><br>
			<input type="submit" name="send" id="send" value="send"><br>
		</form>
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
