<?php include 'dbconnect.php';?>
<!DOCTYPE html>
<html>
<head>
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
</style>
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
    
    <table>
    <tr>
        
        <th>PROJECT NAME</th>
        <th>START DATE</th>
        <th>END DATE</th>
        <th>EXPECTED COST</th>
        <th>AREA </th>
        <th>CITY </th>
        <th>STATUS </th>
        
        </tr>
    
        
    <?php 

       
            $sql="select p.pname,pd.start_date,pd.end_date,pd.cost,pl.area,pl.city,pd.status from project p,projectdetails pd,projectlocation pl where p.pid=pd.pid and p.pid=pl.pid";
            
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
                    printf ("<td> %s </td>",$row[5]);
                    printf ("<td> %s </td>",$row[6]);
                    printf("</tr>");
                
                }
                // Free result set
                mysqli_free_result($result);
            }
mysqli_close($conn);

?>
    </table>
    </body>
</html>