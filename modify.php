<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost","root","") or die ("check your server connection.");

mysqli_select_db($connect,"2008b4a5723p");

$info=$_POST['info'];
$value=$_POST['value'];

$add = "ALTER TABLE members ADD `$info` VARCHAR(25)";

$query = mysqli_query($connect,$add)or die(mysqli_error());

$query2 = mysqli_query($connect,"INSERT INTO members ('$info') VALUES ('$value')");
echo("Record Added Sucessfully");

?>
<form method="post" action="default.php">
<input type="submit" class="myButton" name="wel" value="click here to go to login page">
</form>
<footer>
            <a href="default.aspx" style="color: white;">Back to home</a>
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