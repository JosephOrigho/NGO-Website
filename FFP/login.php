<?php include 'dbconnect.php'; ?>

<?php
     session_start();

        if(isset($_POST["email"])){ 
            $email=$_POST["email"];
        }
    else{
        $email="";
    }
    
    if(isset($_POST["psw"])){
            $pass=$_POST["psw"];
        }
    
    else{
        $pass="";
    }
    

$password = hash('sha256', $pass);
//echo $password;
    $query="SELECT * from user where ueid='$email'";
    //$query="SELECT email from users WHERE email='$email'";
    $result=mysqli_query($conn,$query)OR die(mysqli_error($conn));
 //echo $result;   
    $row=mysqli_fetch_assoc($result);

  //print_r($row['password']);
    if(count($result)>0 && $row['password']==$password)
    {
       $_SESSION["ueid"] = $email;
        if (isset($_SESSION['ueid'])) {
header("location:userpanel.php");
       
}
    }
    if(count($row)!=0 && $row['password']!=$password)
{
echo "incorrect password";
}
 
 if(count($row)==0)
{
echo "Info is incorrect";
}    
       ?>

<?php
        if(isset($_POST["submit"])){
            echo "form-submitted";
        }
?>

<?php
    mysqli_free_result($result);
    
?>