<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

?>
<html>
<head>
<center>
<title>NEW COURSE REGISTRATION</title>
</head>
<body>
<form name="form1" action="default.php" >
<input type="submit" class="myButton" name="Submit" value="Login">
</form>

<h2>NEW COURSE REGISTRATION</h2>


<form method="post" action="insert_course.php">

<table style="width:750px">
 <tr>
    <td>Course ID :</td>
    <td><input type="text" name="name"><br/></td>

  </tr>
  <tr>
    <td>Credit :</td>
    <td><input type="text" name="credit"><br/></td>
  </tr>
  <tr>
    <td>Instructor :</td>
    <td><input type="text" name="instructor"><br></td>
  </tr>
  </table>
  <br>
<input type="submit" class="myButton" name="submit" value="Register">
</center>

</form>
<footer>
            <a href="default.php" style="color: white;">Back to home</a>
            Course Registration System 
        </footer>
</body>
</html>	

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	