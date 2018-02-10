<?php

 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 // but I strongly suggest you to use PDO or MySQLi.
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="project";
 
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 
 if(mysqli_connect_errno()){
    die("Database Connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
       );
}
?>