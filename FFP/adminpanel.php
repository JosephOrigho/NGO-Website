<!doctype html>
<style>
</style>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foundation Fighting Poverty</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
  <script type="text/javascript" src="js/mobile.js"></script>
</head>

<body style="background-color:Black;">

	<div id="header">
		<a href="index.html" class="logo">
			<img src="images/ffp_logo.jpg" alt="" width="300" height="250" >
		</a>
		 </div>

<div id="body"><br><br><br>

<h1><span> ADMIN PANEL</h1></span>
				<br><br><br>
	
		<form style="padding:45px 45px" action="adminpanel.php" method="post">
					<h1> Admin Name </h1><input type="text" name="nameadmin" id="nameadmin" ></h1>
			<br><h1> Admin Password </h1><input type="password" name="passadmin" id="passadmin"></h1>
             <br><button type="submit"><h1><span>Sign-In</h1></button>
</form>

<?php
$adname2 ="";
$adpass2 ="";
    if(isset($_POST["nameadmin"])){ 
            $adname2=$_POST["nameadmin"];
        }
    if(isset($_POST["passadmin"])){
            $adpass2=$_POST["passadmin"];
        }

    if($adname2=="TALHA" && $adpass2=="090078601")
    {
      printf("<a href = \"adminview.php\">Clickhere </a>");
    }
?>

</div>
</body>
</html>