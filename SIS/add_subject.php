

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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add subject</title>

	<style type="text/css">
		body{
			
		}
		.header{

			width: 100%;
			height: 20%;
			background: salmon;
		}
		h1{
			text-align: left;
			font-size: 35px;
		}
		
		.input_deg{
			padding-bottom: 30px;
		}
		.content{
			width: 20%;
			height: 70%;
			background: skyblue;
			padding-top: 40px;
			padding-bottom: 40px;
		}

     .footer{
     	width: 100%;
     	height: 20%;
     	background: skyblue;

     }
     h2{
     	text-align: center;
     	padding-top: 10px;
     }
     .back1{
     	   text-align: center;
     	   
     	   text-align: center;
     	   width: 20%;
     	   height: 10%;
     	   background: black;
     }
     a{
          text-decoration: none;
     }
		

	</style>
     
     
     
     
</head>
<body>
	<div class="header">
		<h1>Add Subject</h1>
	</div>
	<div class="content">
		
           <center>
		   <h2>add subject</h2>
		   <form action="add_subject_data.php"method="post">
		   	<label>StudentRoll:</label>
			<input class="input_deg" type="text" name="studentroll">
			  <br>
			  	<label>StudentName:</label>
			<input class="input_deg" type="text" name="studentname">
			  <br>
			<label>subject name:</label>
			<input class="input_deg" type="text" name="subjectname">
			<br>
			<label>Descripation</label>
			<input class="input_deg"type="text" name="Descripation">
           <br>
           <input type="submit" name="add_subject"value="add_subject">
			
		</form>
		
		</center>
	</div>
	    <div class="back1">
	    	<a href="Homepage.php">Back to homepage</a>
	    </div>
	<footer class="footer">
		<h2>made by akter hossain</h2>
	</footer>


</body>
</html>