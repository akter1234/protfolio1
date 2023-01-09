


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
		position: fixed;
		height: 70px;
		width: 100%;
		background-color: skyblue;
		z-index: 1;
	}
	.logo{
		font-size: 25px;
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
		font-size: 35px;
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
	.course{
		font-size: 35px;
		

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
</style>
<body>
	<nav>
		<label class="logo">Student management system</label>
		<ul>
			<li><a href="">Home</a></li>
		    <li><a href="admission.php">Admission</a></li>
			<li><a href="course.php">Our course</a></li>
			<li><a href="login.php" class="btn btn-success">login</a></li>
		</ul>
	</nav>
	<div class="section1">
		<label class="text_img">We teach student with care</label>
		<img  class="main_image"src="image/school.jpg">
		
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
			
					
				
			</section>
			

			</div>
			<footer>
				<h3 class="footer_txt">All@copyright received by Akter hossain</h3>
			</footer>

			


</body>
</html>