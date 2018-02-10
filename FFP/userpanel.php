<?php
 session_start();
include 'dbconnect.php';


$EM = $_SESSION['ueid'];

$q = "SELECT * FROM user where ueid='$EM'";
$result = mysqli_query($conn, $q);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result); {
    $name = $row["uname"];
    $cno = $row["unum"];
    $email = $row["ueid"];
    $ucit = $row["city"];
    $uadd = $row["uaddress"];
}
}
?>

<!doctype html>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 70%;
    color: white;
    font-size: 30px;
    align-items: center;
    margin-left: 210px;
    align:center;
}

td, th {
    border: 1px solid #dddded;
    text-align: left;
    padding: 20px;
}

tr:nth-child(even) {
    align:center;
    background-color: #dddddd;
        padding: 10px;
color: black;
}

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

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile - Foundation Fighting Poverty</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body style="background-color:Black;">
<button class="but" onclick="location.href = 'logout.php?logout';" style="width:auto;">Log Out</button><
<div id="header">
		<a href="userpanel.html" class="logo">
			<img src="images/ffp_logo.jpg" alt="" width="300" height="250">
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

			<li>
				<a href="contact.php">Contact us</a>
			</li>
		</ul>

	</div>


	<div id="body" style="text-align:left;">
		<br><br><br><br><br><br><br><br>
		<center><h1><span>PROFILE</span><br></h1></center><br><br><br><br><br><br>
		<h1> NAME: <?php echo $name ?> </h1><br><br>
		<h1> CONTACT NO. : <?php echo $cno ?> </h1><br><br>
		<h1> ADDRESS. : <?php echo $uadd ?></h1><br><br>
		<h1> EMAIL : <?php echo $email ?></h1><br><br>
        <h1> CITY: <?php echo $ucit ?></h1><br><br>
		

		<br><br><br><br><br><br><br><br><br>
		<center><h1><span>YOUR PAST DONATIONS</span></h1></center><br><br><br><br>

  <table>
    <tr>
        
        <th>DONATION ID</th>
        <th>DONATION TIME</th>
        <th>DONATION DATE</th>
        <th>DONATION AMOUNT</th>
        <th>ACCOUNT</th>
        
        </tr>
    
        
    <?php 

          $sql="select ud.ddid,d.amount,d.d_date,d.d_time,d.accno from donation d,userdon ud where ud.duid = '$EM' and ud.ddid=d.did";

            
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
?>

</table>		


		<br><br><br><br><br><br><br><br><br>
		<center><h1><span>YOUR PAST VOLUNTEER PROGRAMS</span></h1></center><br><br><br><br>

  <table>
    <tr>
        
        <th>VOLUNTEER ID</th>
        <th>START DATE</th>
        <th>END DATE</th>
        </tr>
    
        
    <?php 

          $sql="select d.vvid,v.start_date,v.end_date from volunteership v,uservolunt d where d.vuid='$EM' and d.vvid=v.vid"; ;
            
            if ($result=mysqli_query($conn,$sql))
            {
                // Fetch one and one row
                while ($row=mysqli_fetch_row($result))
                {
                    printf("<tr>");
                    printf ("<td> %s </td>",$row[0]);
                    printf ("<td> %s </td>",$row[1]);
                    printf ("<td> %s </td>",$row[2]);
                    printf("</tr>");
                
                }
                // Free result set
                mysqli_free_result($result);
            }
mysqli_close($conn);

?>

</table>		

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
