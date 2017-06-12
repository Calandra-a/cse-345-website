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
    $firstname  = $_POST['FirstName'];
    $Lastname   = $_POST['LastName'];
    $email      = $_POST['email'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

     $query2 = ("INSERT INTO Student (STU_LNAME, STU_FNAME, STU_EMAIL, STU_USERNAME, STU_PASSWORD) VALUES ('$Lastname', '$firstname', '$email', '$username', '$hashed_password')");
     $result2 = $conn->query($query2);
    
    if($result2)
    {
        echo "<script>
        alert('Account Created Successfully');
        window.location.href='https://cse345-vendett4.c9users.io/home.html';
        </script>";
    }
    else
    {
        echo "<script>alert('Account Creation Failed');</script>";
        echo $conn->error;
    }

 }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Create a User Account</title>
    </head>
    <body>
        <form action="" method = "POST">

   First name:   
  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  Last Name:<br>
  <input name="FirstName" size="15" style="height: 19px;"  type="text" required>
      &nbsp; &nbsp; &nbsp; 
  <input name="LastName" size="15" style="height: 19px;"  type="text" required>

  <br><br>

    Email Address:<br>
  <input name="email"  type="text" required placeholder="Enter a valid e-mail address" style="height: 19px;" size="30"><br><br>

  User name:<br>
  <input name="username" type="text" required placeholder="Enter your desired username" style="height: 19px;" size="30" maxlength="30"><br><br>

  Password:<br>
  <input name="password" style="height: 19px;"  type="password" size="30" maxlength="30" required>
    &nbsp; &nbsp;
<br>
<br>

<button type ="submit" name="submit" value="send to database"> Create Account </button>
</form>
    </body>
</html>