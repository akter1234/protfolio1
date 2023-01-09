<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel ="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <style type="text/css">
       body{

    background-image:url(image/19554242_278749642594660_7313162635285406909_n.jpg);
            width: 100%;
            height: 100%;
          background-size: cover;
	    background-repeat: no-repeat;
	   background-position: center;

       }
       h3{
       	color: red;
       }
       .login_form{
       	background-color: black;
       	width: 400px;
       	padding-top: 70px;
       	padding-bottom: 70px
       }
       .homepageback{
       	text-align: center;
       	padding-top: 50px;
       	font-size: 40px;
       }



    </style>
  	
</head>
<body>
	<center><br><br>
	<h3>Student Management System</h3><br>
	<form  class="login_form"action="" method="POST">
		<input type="submit" name="admin_login" class="btn btn-primary" value="Admin Login" required>
		<input type="submit" name="student_login" class="btn btn-primary"value="Student Login" required>
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
	<div class ="homepageback"><a href="Homepage.php">back to homepage</a></div>
</body>
</html>