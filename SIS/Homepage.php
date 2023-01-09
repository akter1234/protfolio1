<?php
   error_reporting();
   session_start();
   session_destroy();

   if($_SESSION['message'])
   {
   	$message=$_SESSION['message'];
   	 echo "<script type='text/JavaScript'>

           alert('$message');

   	 </script>";
   }

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel ="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <style type="text/css">
</head>
<style type="text/css">
	*{
		margin: 0;
	}
	
	nav{
		position: absolute;
		height: 70px;
		width: 100%;
		background-color: skyblue;
		z-index: 1;
	}
	.logo{
		font-size: 30px;
		position: relative;
		left: 5%;
		color: white;
		font-weight: bold;
		line-height: 70px;
	}
	ul{
		position: relative;
		float: right;
	}
	ul li{
		line-height: 70px;
		display: inline-block;
		margin: 0 5px;
	}
	ul li a{
		text-decoration: none;
		color: white;
		font-size: 20px;
	}
	.main_image{
		width: 100%;
		height: 300px;
	}
	.section1{
		padding-top: 70px;
	}
	.text_img{
		position: absolute;
		top: 20%;
		left: 30%;
		padding-right: 20px;
		padding-left: 20px;
		color: white;
		background-color: midnightblue;
		text-transform: uppercase;
		font-size: 35px;
	}
	.welcome_img{
		width: 100%;
		height: 250px;
	}
	.container{
		padding-top: 70px;
	}
	.container h1{
		font-size: 20px;
		border-bottom: 3px solid green;
	}
	.container p{
		font-size: 13px;
	}
	.teacher{
		width: 90%;
		height: 200px;
	}
	.label_text{
		display: inline-block;
		width: 100px;
		text-align: right;
		padding-right: 10px;
	}
	.input_deg{
		width: 30%;
		height: 40px;
		border-radius: 25px;
		border:1px solid blue;
	}
	.input1_deg{
		padding: 10px;
	}
	.input_txt{
		width: 30%;
		height: 120px;
		border-radius: 25px;
		border:1px solid blue;
	}
	#submit{
		position: relative;
		width: 15%;
		left: 5%;
	}
	footer{
		background-color: black;
		width: 100%;
		height: 70px;
	}
	.footer_txt{
		text-align: center;
		color: white;
		top: 20%;
		position: relative;
	}
	.adm{
		padding-top: 30px;
		padding-bottom: 30px;
	}
	.course{
		font-size: 20px;
		border-bottom: 2px solid green;
	}
	.teacher{
		font-size: 20px;
		border-bottom: 2px solid green;

	}
</style>
<body>
	<nav>
		<label class="logo">Student management system</label>
		<ul>
			<li><a href="Homepage.php">Home</a></li>
		    <li><a href="admission.php">Admission</a></li>
			<li><a href="course.php">Our course</a></li>
			<li><a href="registation.php"class="btn btn-success">Registation</a></li>
			

			
			<li><a href="login.php" class="btn btn-success">login</a></li>
		</ul>
	</nav>
	<div class="section1">
		<label class="text_img">We teach student with care</label>
		<img  class="main_image"src="image/school.jpg">
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="welcome_img"src="image/school2.jpg">
			</div>
				<div class="col-md-8">
					<h1>Our School</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
		</div>
	</div>
	<center class="teacher">Our Teachers</center>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img  class="teacher"src="image/teacher1.jpg">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				te sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-md-4">
				<img  class="teacher" src="image/teacher2.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				te sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-md-4">
				<img   class="teacher" src="image/teacher3.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				te sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
	<center class="course">Our Course</center>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img  class="teacher"src="image/web.jpg">
				<h1>web development</h1>
			</div>
			<div class="col-md-4">
				<img  class="teacher"src="image/graphic.jpg">
				<h1>grapic design</h1>
			</div>
			<div class="col-md-4">
				<img  class="teacher"src="image/marketing.png">
				<h1>marketing</h1>
			</div>
			<section id="admission">
				<center>
				<h1 class="adm">Admission form</h1>
			</center>
			<div align="center"class="Admission_form">
				<form action="data_check.php" method="POST">
					<div class="input1_deg">
						<label class="label_text">Name</label>
						<input  class="input_deg"type="text" name="name" required="">
					</div>
					
					<div class="input1_deg">
						<label class="label_text">Email</label>
						<input  class="input_deg"type="text" name="email" required="">
					</div>
					
					<div class="input1_deg">
						<label class="label_text">Phone</label>
						<input  class="input_deg"type="text" name="phone" required="">
					</div>
					<div>
						<label class="label_text">Message</label>
				    <textarea class="input_txt" name="massage"></textarea>
					</div>
					<div>
					
						<input class="btn btn-primary"id="submit" type="submit" value="Apply"name="apply">
					</div>
				</form>
				
			</div>
			</section>
			
			<footer>
				<h3 class="footer_txt">All@copyright received by Akter hossain</h3>
			</footer>



</body>
</html>