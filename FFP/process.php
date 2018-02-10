
<?php

require 'dbconnect.php';

$name=$_POST['name'];
$nicno=$_POST['nicno'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$pass=$_POST['psw'];
$uname=$_POST['uname'];


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
   $query = "SELECT Email FROM user WHERE Email='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
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

 $sql = "INSERT INTO user(Name,NICNo,Email,Phonenumber,Username,Password) VALUES('$name','$nicno','$email','$phoneno','$uname','$password')";


if(mysqli_query($conn,$sql))
{
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}

mysqli_close($conn);
?>