<?php include 'dbconnect.php';?>
<?php
    session_start();
    if(isset($_POST["sdate"])){ 
            $startdate=$_POST["sdate"];
        }
    else{
        $startdate="";
    }
    if(isset($_POST["edate"])){
            $enddate=$_POST["edate"];
        }
    
    else{
        $enddate="";
    }

    if($startdate!="" && $enddate!="")
    {
        $sdate=strtotime($startdate);
        $edate=strtotime($enddate);
        $sdate=date('Y-m-d',$sdate);
        $edate=date('Y-m-d',$edate);
        $sql="insert into volunteership(start_date,end_date) values ('$sdate','$edate')";
        //mysqli_query($conn,$sql);
        //echo mysqli_error($conn);
        if(mysqli_query($conn,$sql))
        {
            $vvid=mysqli_insert_id($conn);
            $EM = $_SESSION['ueid'];
            $query="insert into uservolunt(vuid,vvid) values('$EM','$vvid')";
            mysqli_query($conn,$query);
            echo mysqli_error($conn);
            echo "<br/><br/><span>Data Inserted successfully...!!</span>";
                header('Location: http://localhost/FFP/userpanel.php');
        }
        else
        {
                echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
        }

        mysqli_close($conn);
        
    }
      /*  
        $date=date('Y-m-d');
        $time=date("H:i:s");
        /*echo $date ;
        echo $time;
        echo $amount;
        echo $accno;
        
        $sql="insert into donation(amount,d_date,d_time,accno) 
              values('$amount','$date','$time','$accno')";
       // $mysqli->query($sql);
        //mysqli_query($conn,$sql);
        //echo mysqli_error($conn);
        if(mysqli_query($conn,$sql))
        {
            
            $ddid=mysqli_insert_id($conn);
            $EM = $_SESSION['ueid'];
            $query="insert into userdon(duid,ddid) values('$EM','$ddid')";
            mysqli_query($conn,$query);
            echo mysqli_error($conn);
                echo "<br/><br/><span>Data Inserted successfully...!!</span>";
        //        header('Location: http://localhost/FFP/userpanel.php');
        }
        else
        {
                echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
        }

        mysqli_close($conn);
        
    }
    else
    {
        //header("location:donate.php");
        //die();
    }
*/


?>
