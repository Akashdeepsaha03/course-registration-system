<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection.");
mysqli_select_db($connect,"2008b4a5723p");

$cname=$_POST['course'];
$name=$_POST['name'];

$q="SELECT count(cname) FROM regis WHERE uname='$name'";                 // for verifying the total courses by a student
$r=mysqli_query($connect,$q) or die(mysqli_error());
$reg=mysqli_fetch_assoc($r);
foreach($reg as $value)
{
if($value >3)
{
echo"<a href='new_course_reg.php'>Back</a></br>";
echo "ERRROR IN REGISTRATION(YOU HAVE ALREADY SELECTED 4 COURSES)";
exit();
}
}

$q1="SELECT count(cname) FROM regis WHERE cname='$cname'";                 // for verifying the total students in the course
$r1=mysqli_query($connect,$q1) or die(mysqli_error());
$reg1=mysqli_fetch_assoc($r1);
foreach($reg1 as $value1)
{
if($value1 >60)
{
printf("ERRROR IN REGISTRATION(MAXIMUM STUDENTS IN A COURSE REACHED)");
exit();
}
}

$q2="SELECT cname FROM regis WHERE cname='$cname' AND uname='$name'";                 // for verifying the if student has already registered for the course
$r2=mysqli_query($connect,$q2) or die(mysqli_error());
$reg2=mysqli_fetch_assoc($r2);
if(mysqli_num_rows($r2) != 0)
{echo "<a href='new_course_reg.php'>Back</a><br/>COURSE ALREADY REGISTERED BY STUDENT $name";
exit();
}



$query="SELECT name FROM course WHERE name='$cname'";              //for inserting the record
$results=mysqli_query($connect,$query) or die(mysqli_error());
if($rows=mysqli_fetch_assoc($results)) 
{
foreach($rows as $value) 
echo $value; 

echo "<br/>Above course has been added sucessfully";
echo"<br/>";
echo"<a href='new_course_reg.php'>Back</a></br>";
$insert = "INSERT INTO regis(uname,cname)
values('$name','$value')";
$results=mysqli_query($connect,$insert) or die(mysqli_error());
}
else
{
echo"error in registration";
exit();
}


?>
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


