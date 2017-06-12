<html>
<body>
 
 <?php
$servername = "localhost";
$username = "vendett4";
$password = "";
$dbname = "project1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ACT_Test (ACT_CODE, SUB1_CORRECT, SUB2_CORRECT, SUB1_CODE, SUB2_CODE, TOTAL_CORRECT, DATE) VALUES ('act_code', 'sub1_correct', 'sub2_correct', 'total_correct', 'date', 'sub1_code', 'sub2_code')";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["ACT_CODE"]. " ".$row["STU_CODE"]." ".$row["SUB1_CORRECT"]." ".$row["SUB2_CORRECT"]." ".$row["SUB1_CODE"]." ".$row["SUB2_CODE"]." "
        .$row["TOTAL_CORRECT"]." ".$row["DATE"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
 
 
<?php
//$con = mysql_connect('127.0.0.1',"vendett4","");
//if (!$con)
  //{
  //die('Could not connect: ' . mysql_error());
  //}
 
//mysql_select_db("project1", $con);

//$sql="INSERT INTO ACT_Test (ACT_CODE, STU_CODE, SUB1_CORRECT, SUB2_CORRECT, SUB1_CODE, SUB2_CODE, DATE, TOTAL_CORRECT)
//    VALUES
//    ($_POST'[act_code]','$_POST[stu_code]',$_POST'[sub1_correct]','$_POST[sub2_correct]',$_POST'[sub1_code]','$_POST[sub2_code]',
//    $_POST'[date]','$_POST[total_correct]')";
    
//    mysqli_query($sql);
    //if (mysqli_query($conn, $sql)) {
     //   echo "New record created successfully";
    //} else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //}
    
//    echo "1 record added";
    
//    mysql_close($con)
?>
</body>
</html>