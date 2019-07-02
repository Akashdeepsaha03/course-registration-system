<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
?>
<form method="post" action="modify.php">
<center>
<h2 style="font-family:Comic Sans MS;">Add User Information</h2><br>
<table style="width:450px">
  <tr>
    <td>Add User Information name:</td>
    <td><input type="text" name="info" required><td>
  </tr>
  <tr>
    <td>Add Information :</td>
    <td><input type="text" name="value" required><td>
  </tr>
</table><br><br>
<input type="submit" class="myButton" name="submit" value="submit" >
</center>
</form>

<footer>
            <a href="default.php" style="color: white;">Back to home</a>
           Course Registration System 
        </footer>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	