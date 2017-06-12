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

$sql = "SELECT PROB_CODE, PROB_TEXT FROM Problems";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["PROB_CODE"]. " ". $row["PROB_TEXT"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>