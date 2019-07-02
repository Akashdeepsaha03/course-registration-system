<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost","root","") or die ("check your server connection.");

mysqli_select_db($connect,"2008b4a5723p");

echo "<h2>Course Registration</h2>";
$query="SELECT course.name FROM course";
$results=mysqli_query($connect,$query) or die(mysqli_error());
echo"<b>Available courses</b> <table  border=’2’>\n";
while ($rows=mysqli_fetch_assoc($results)) {
echo "<tr>\n"; 
foreach($rows as $value) 
{
echo "<td>\n";  
echo $value; 
echo "</td>\n"; 
}
echo "</tr><br>\n"; 
}
echo "</table>\n";
?>

<html>
<body>
<form method="post" action="student_course.php">
<br/>
<p align="center">
<table style="width:750px">
  <tr>
    <th>Name:</th>
    <td><input onclick = "change()" type="text" name="name" required></td>
  </tr>
  <tr>
  <tr>
 
  <tr>
    <th>Course Id:</th>
    <td><input type="text" name="course" required></td>
  </tr>
  
</table>

<br/>
</p>
<input type="submit" class="myButton" name="submit" value="Register" style="margin-left:500px;"><br>
</form>

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