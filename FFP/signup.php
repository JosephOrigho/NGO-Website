<?php

require 'dbconnect.php';

$name=$_POST['name'];
$address=$_POST['address'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$pass=$_POST['psw'];
$city=$_POST['city'];


if (empty($name)) {
   $error = true;
   $nameError = "Please enter your full name.";
  } else if (strlen($name) < 3) {
   $error = true;
   $nameError = "Name must have atleat 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "Name must contain alphabets and space.";
  }
  
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT ueid FROM user WHERE ueid='$email'";
   $result=mysqli_query($conn,$query)OR die(mysqli_error($conn));
   $row=mysqli_fetch_assoc($result);
   if($row!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
       echo $emailError;
   }
  }
  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }
  
$password = hash('sha256', $pass);

 $sql = "INSERT INTO user(uname,ueid,unum,uaddress,city,password) VALUES('$name','$email','$phoneno','$address','$city','$password')";


if(mysqli_query($conn,$sql))
{
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
header('Location: http://localhost/FFP/userpanel.php');
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}

mysqli_close($conn);
?>