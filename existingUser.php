<!DOCTYPE html>
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


if (isset($_POST['submit']))
{
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $query2 = mysqli_query($conn, "SELECT * FROM Student WHERE STU_USERNAME = '$username' limit 1");
    $res = mysqli_fetch_array($query2);
    $hashed_password = $res['STU_PASSWORD'];
    
    if(password_verify($password, $hashed_password))
    {
        echo "<script>
        alert('Login Successful');
        window.location.href='https://cse345-vendett4.c9users.io/home.html';
        </script>";
    }
    else
    {
        echo "<script>alert('Login Failed');</script>";
        echo $conn->error;
    }

 }
?>

<html>
<head>
	<title>Sign up</title>
</head>
<body>
    <form action="" method = "POST">
<input type="text" name="username" placeholder = "enter username" required>
<input type="password" name="password" placeholder = "enter password" required>
<button type = "submit" name = "submit" style="height: 30px; width: 100px;">submit</button>

</body>
</html>