<?php
session_start();
header("Cache-Control:no cache");
session_cache_limiter("private_no_expire");
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

$name= $_POST['myusername'];
$pass= $_POST['mypassword'];


if($name != "admin")
  {
    echo"ACCESS DENIED";
    exit();
}

if($pass != "admin")
  {
    echo"ACCESS DENIED";
    exit();
}
?>
<html>
<body>
<table style="width:750px" align="center">
<form method="post" action="select_course.php">
  <tr>
    <th>COURSE ID:</th>
    <td><input type="text" name="cname" required></td>
    <td><input type="submit" class="myButton" name="submit" value="Students Enrolled"><td>
  </tr><br>
</form>


  <form method="post" action="select_student.php">
  <tr>
    <th>STUDENT NAME :</th>
    <td><input type="text" name="name" required="true"></td>
    <td><input type="submit" class="myButton" name="submit" value="Courses Enrolled"><td>
  </tr>
</form>


</table>
<form method="post" action="add_course.php" ><br>
<input type="submit" class="myButton" name="wel" value="ADD NEW COURSE" style="margin-left:400px;width:280px;">
</form>
<form method="post" action="admin_edit_course.php">
<input type="submit" class="myButton" name="submit" value="EDIT EXISTING STUDENT COURSE" style="margin-left:400px;><br><br>
</form>


<footer>
            <br><a href="default.php" style="color: white;"></a>
             
        </footer>
		
</body>
</html>	

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
<footer>
            <a href="default.php" style="color: white;">Back to home</a>
           Course Registration System 
        </footer>
</body>
</html>	

