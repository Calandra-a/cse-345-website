<?php

    //Connect to the database
    $host = getenv('IP');
    $user = 'vendett4';
    $pass = "";
    $db = "project1";
    $port = 3306;
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    
    <html>
    <body>
    <form action="index.php" method="get">

     
    </form>
    </body>
    </html>
        
    
    //For the test...
    //$query = "SELECT * FRIN Recommendation";
   // $result = mysqli_query($connection, $query);
    
    //while ($row = mysqli_fetch_assoc($result)) {
    //    echo $row['REC_CODE'] . " + " . $row['REC_DESC'] . " + " . $row['SUB_CODE'] . " + " . $row['PROB_TYPE'] . " + " . $row['DIF_CODE'];
    //}
    
?>