<?php

require 'dbconnect.php';
require 'login.php';


$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result); {
    $name = $row["Name"];
    $nic = $row["NICNo"];
    $cno = $row["Phonenumber"];
    $email = $row["Email"];
    $uname = $row["Username"];
}
}
?>


<!doctype html>


<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact - Foundation Fighting Poverty</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body style="background-color:Black;">
	
<div id="header">
		<a href="donate.html" class="logo">
			<img src="images/donate.jpeg" alt="" width="300" height="250">
		</a>
		
		<ul id="navigation">
			
			<li class="selected">
				<a  href="userpanel.php">Profile</a>
			</li>
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
		  </ul></div>
			</div>
			</li>

			<li>
				<a href="contact.php">Contact us</a>
			</li>
		</ul>

	</div>


	<div id="body">
		<h1><span>PROFILE</span><br></h1>
		<div><h3 style="font-color:white"> </h3></div><br><br><br><br><br><br>
		<h1> <img src="images/talha.jpg" width="230" height="270" border="6px solid white"><h1><br><br>
		<h1> NAME: <?php echo $name ?> </h1><br><br>
		<h1> USERNAME: <?php echo $uname ?></h1><br><br>
		<h1> CONTACT NO. : <?php echo $cno ?> </h1><br><br>
		<h1> NIC NO. : <?php echo $nic ?></h1><br><br>
		<h1> EMAIL : <?php echo $email ?></h1><br><br>

  <table>
    <tr>
        
        <th>DONATION ID</th>
        <th>DONATION TIME</th>
        <th>DONATION DATE</th>
        <th>DONATION AMOUNT</th>
        <th>ACCOUNT</th>
        
        </tr>
    
        
    <?php 

          $sql="select d.ddid,amount,p.d-date,d-time,accno from donation,userdon d where udid = $email" ;
            
            if ($result=mysqli_query($conn,$sql))
            {
                // Fetch one and one row
                while ($row=mysqli_fetch_row($result))
                {
                    printf("<tr>");
                    printf ("<td> %s </td>",$row[0]);
                    printf ("<td> %s </td>",$row[1]);
                    printf ("<td> %s </td>",$row[2]);
                    printf ("<td> %s </td>",$row[3]);
                    printf ("<td> %s </td>",$row[4]);
                    printf("</tr>");
                
                }
                // Free result set
                mysqli_free_result($result);
            }
mysqli_close($conn);

?>

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


