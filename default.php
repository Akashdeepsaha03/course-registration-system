<?php
session_start();
session_destroy();
session_start();
$_SESSION['authuser']=1;
if(isset($_POST['save_btn']))
    {
        //write some of your code here, if necessary
        
     
	 
$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection");
$uname= $_GET['myusername'];
$upass= $_GET['mypassword'];
$_SESSION['username']=$uname;
$_SESSION['pass']=$upass;
mysqli_select_db ($connect,"2008b4a5723p");
$query="SELECT * FROM members WHERE username='$uname' and password='$upass'";
$results=mysqli_query($connect,$query) or die(mysqli_error());
if($row = mysqli_fetch_array($results))
{
echo'<script> window.location="SchoolDB/result.php"; </script> ';
}
else{
  echo"LOGIN FAILED(INVALID USERNAME OR PASSWORD)";
  exit();
  }
  }
?>



<html>
<head>
<script type="text/javascript">
function validate(form){
 var userName = form.myusername.value;
 var password = form.mypassword.value;
 if (userName.length === 0) {
  alert("You must enter a username.");
  return false;
 }
 if (password.length === 0) {
  alert("You must enter a password.");
  return false;
 }
 return true;
}
</script>

</head>
<body>
<p align="center">
<img src="image1.jpg" alt="Italian Trulli" align="center">
</p>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 2% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}


.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #6760aa;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right,#CCCCCC, #CCCCCC);
  background: -moz-linear-gradient(right, #CCCCCC, #CCCCCC);
  background: -o-linear-gradient(right, #CCCCCC, #CCCCCC);
  background: linear-gradient(to left, #CCCCCC, #CCCCCC);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>

<div class="login-page">
  <div class="form">
<form name="form1" method="get" action="result.php" onsubmit="return validate(this);">
<b>STUDENT LOGIN</b> <br><br>
   
   
      <input name="myusername" placeholder="USERNAME" type="text" id="myusername" style="border: 1px solid blue;"/>
      <input name="mypassword" placeholder="PASSWORD" type="password" id="mypassword" style="border: 1px solid blue;"/>
      <button>Submit</button>
      <br><br>
</form>
<form name="form1" method="post" action="admin_page.php" >
      <button>Go To Admin Login</button>
      <br><br>
</form>
<form name="form2" method="post" action="newreg.php">
      <button>Sign Up</button>
      <br><br>
</form>
       
   
</div>
</div>



<footer>
            <a href="default.php" style="color: blue;">Back to home</a>Course Registration System 
        </footer>
</body>
</html>	