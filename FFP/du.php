<!doctype html>
<style>

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
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

.but2 {
  padding: 14px 20px;
    position: absolute;
  top: 10px;
  right:50px;
}
/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    top: 0px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 20px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 0% auto 0% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 2px solid #888;
    width: 40%;
}

/* The Close Button (x) */
#body .close {
    position: top;
    right: 15px;
    top: 0;
    color: #000;
    font-size: 55px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/*Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

</style>


<html>


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Utilities Donation - Foundation Fighting Poverty</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>


<body style="background-color:Black;">

<button class="but" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log In</button><
<button class="but2" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/rounded-514.png" alt="Avatar" class="avatar" width="150px" height="250px" >
    </div>

    <div class="container">
      <label><b>Username or Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color: #f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>



<div id="id02" class="modal">
  
  <form class="modal-content animate" action="signup.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/rounded-514.png" alt="Avatar" class="avatar" width="150px" height="250px" >
    </div>

    <div class="container">
      <label><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
  
    <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

    <label><b>Phone No.</b></label>
      <input type="text" placeholder="Enter Phone Number" name="phoneno" required>

    <label><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="address" required>

<label><b>City</b></label>
      <input type="text" placeholder="Enter City" name="city" required>

    <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        

      <button type="submit">Sign Up</button>
    </div>

    <div class="container" style="background-color: #f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>



	<div id="header">
		<a href="index.html" class="logo">
			<img src="images/ffp_logo.jpg" alt="" width="300" height="250" >
		</a>
		

		<ul id="navigation">
			<li class="selected">
				<a  href="index.php">Home</a>
			</li>
			<li>
				<a href="donation.php">Donate</a>
			</li>
			<li>
				<a href="volunteer.php">Volunteer</a>
			</li>
		   <li>
		        <a href="appeals.php"><div class="dropdown">
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
  <h1 style="padding 75px 75px 75px 75px;"><span> Utilities Distribution</span></h1>
<br><br><br><br><br>
<img src="images/utilities.jpg" >
<br><br><br><br>
<h2 style="color:white;">
We try giving out as much groceries and things that are essential for<br>
the living of a person to the people of need. This campaign includes the <br>
purchasing of things necessary for the survival of a human and handing them <br>
out to the people, who, because of being white collared, are not asking for.<br>
 We help the ones in need by not making them guilty and giving away the utilities
 <br> as gifts rather than charity.</h2></div>





  < <div id="footer">
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


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>