<html>
<body>
 
 
<?php
$con = mysql_connect("localhost","vendett4","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("project1", $con);
 
$sql="INSERT INTO Student (STU_CODE, STU_FNAME, STU_LNAME, STU_USERNAME, STU_PASSWORD, STU_EMAIL)
    VALUES
    ('$_POST[stu_code]','$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[password]','$_POST[email]')";
     
     mysql_query($sql);
    if (!mysql_query($sql,$con))
      {
      die('Error: ' . mysql_error());
      }
    echo "1 record added";
 
mysql_close($con)
?>
</body>
</html>