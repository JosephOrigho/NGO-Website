<?php
    session_start();
    include 'dbconnect.php';

    
    $EM = $_SESSION['ueid'];
   // echo $EM;
    if(!isset($EM))
    {
        header("location:login2.php");
        die();
    }
    else
    {
        header("location:donate.php");
        die();
        
    }

//    $query = "SELECT * FROM user where ueid='$EM'";
//    $result = mysqli_query($conn, $query);
    
     
     
     
?> 
    
    