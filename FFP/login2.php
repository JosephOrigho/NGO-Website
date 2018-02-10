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

button {
	font-family: "Arial Black", Gadget, sans-serif;
	display: inline-block;
    border: 3px solid grey;
    box-sizing: border-box;
	background-color: #B6B6B4;
    color: black;
    font-style: bold;
    margin: 0px 0;
    cursor: pointer;
    width: 100%;
    padding: 14px 20px;
    cursor: pointer;

}
.but {
	position: absolute;
	top: 220px;
	left:650px;
	padding: 14px 22px;
    
}

.but2 {
    padding: 14px 22px;
    position: absolute;
    top: 290px;
    left:645px;
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
}
#body h1 {
	color: white;
	display: inline;
	font-family: poller_oneregular;
	font-size: 35px;
	font-weight: normal;
	margin: 0;
	padding: 0;
	text-transform: uppercase;
    text-align: center;
}
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
<div id="body">
	<br><br><br><br><br><br><br>
<h1>For this further process you have to . </h1><p>
<h1>Login or Sign up  </h1>
</div>

<button class="but" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log In</button>
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




<button class="but2" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>
  
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="signup.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/rounded-514.png" alt="Avatar" class="avatar" width="150px" height="250px" >
    </div>

    <div class="container">
      <label><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

    <label><b>NIC No.</b></label>
      <input type="text" placeholder="Enter NIC No." name="nicno" required>
  
    <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

    <label><b>Phone No.</b></label>
      <input type="text" placeholder="Enter Phone Number" name="phoneno" required>

    <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        

      <button type="submit">Sign Up</button>
    </div>

    <div class="container" style="background-color: #f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>



</body>
</html>