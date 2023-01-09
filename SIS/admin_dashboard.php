
<?php

  
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"admin");
	

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
	<title>Admin Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel ="stylesheet"/>
     <link href="css/all.min.css" rel="stylesheet"/>
    
    <style type="text/css">
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: skyblue;
			position: fixed;
			color: white;
		}
		#header,center{
			color:white;
		}
			#left_side{
			height: 100%;
			width: 16%;
			top: 12%;
			position: fixed;
			background-color: #424a5b;
		}
  	       #right_side{
			height: 100%;
			width: 100%;
			background-color: black;
			position: absolute;
			left: 17%;
			top: 21%;
			color:red;
			border: solid 3px white;
			padding-right: 75px;
		}
		.sa{
			color: red;
		}
		#top_span{
			top: 15%;
			width: 100%;
			left: 17%;
			background-color: skyblue;
			font-size: 20px;
			color: white;
			position: fixed;
		}
		.degin{
			width: 40px;
			height: 20px;
			border: 1px solid white;
			background-color: white;

		}
		.ed{
			color: red;
		}
		.ad{
			color: red;
		}
		#td{
			
			        padding-bottom: 20px;
			        text-align: center;
			     	width: 60px;
			     	height: 3%;
			         padding-right: 20px;
			     	border: 1px solid white;
				font-size: 16px;
				font-weight: bold;
				color: white;
				list-style: none;
                          }
		
		.back a{
			text-decoration: none;
			font-size: 20px;
			width: 40px;
			height: 40px;
			border: 1px solid white;
		}
		.back a:hover{
			color: skyblue;
		}
	</style>
	
	
</head>
<body>
	<div id="header"><br>
		<center>Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
		<a href="logout.php">Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee>Note:- This portal is open till 20 october 2022...Plz edit your information, if wrong.</marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td class="degin">
						<input type="submit" name="Admission" value="Admission">
					</td>
				</tr>
				<tr>
					<td class="degin">
						<input type="submit" name="search_student" value="Search Student">
					</td>
				</tr>
				<tr>
					<td class="degin">
						<input type="submit" name="edit_student" value="Edit Student">
					</td>
				</tr>
				<tr>
					<td class="degin">
						<input type="submit" name="add_new_student" value="Add New Student" >
					</td>
				</tr>
				

				<tr>
					<td class="degin">
						<input type="submit" name="delete_student" value="Delete Student" >
					</td>
					
				</tr>
				<tr>
					<td class="degin">
						<input type="submit" name="show_teacher" value="show teacher" >
					</td>
					
				</tr>

				<tr>
					<td class="degin">
						<input type="submit" name="all_students" value="All Student" >
					</td>
					
				</tr>

			</table>
			<div class="back">
				<a href="homepage.php">back to homepage</a>
			</div>


			
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
		<!-- #Code for search student---Start-->
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<center>
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
					<input type="submit" name="search_by_roll_no_for_search" value="Search">
					</form><br><br>
					<h4><b><u>Student's details</u></b></h4><br><br>
					</center>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from student1 where Roll_no = '$_POST[roll_no]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<table class="sa">
						      <tr>
								<td>
									<b>Roll:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['Roll_no'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Name:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['name'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Father's Name:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['father_name'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Class:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['class'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>CGPA:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['CGPA'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['mobile'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Email:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['email'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Password:</b>
								</td> 
								<td>
									<input type="password" value="<?php echo $row['password'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Remark:</b>
								</td> 
								<td>
									<textarea rows="3" cols="40" disabled><?php echo $row['remark'];?></textarea>
								</td>
							</tr>
						</table>
						<?php
					}
				}
			?>
		<!-- #Code for edit student details---Start-->
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_edit" value="Search">
				</form><br><br>
				<h4><b><u>Student's details</u></b></h4><br><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from student1 where Roll_no = $_POST[roll_no]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="edit_admin_deshboard.php" method="post">
						<table>
					     <tr>
							<td class="ed">
								<b>Roll:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['Roll_no'];?>">
							</td>
						</tr>
						<tr>
							<td class="ed">
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name'];?>">
							</td>
						</tr>
						<tr>
							<td class="ed">
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name'];?>">
							</td>
						</tr>
						<tr>
							<td class="ed">
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" value="<?php echo $row['class'];?>">
							</td>
						</tr>
						<tr>
								<td class="ed">
									<b>CGPA:</b>
								</td> 
								<td>
									<input type="text" name="CGPA" value="<?php echo $row['CGPA'];?>">
								</td>
						</tr>
						<tr>
							<td class="ed">
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile'];?>">
							</td>
						</tr>
						<tr>
							<td class="ed">
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email'];?>">
							</td>
						</tr>
						<tr>
							<td class="ed">
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password'];?>">
							</td>
						</tr>
						<tr>
							<td class="ed">
								<b>Remark:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" name="remark"><?php echo $row['remark'];?></textarea>
							</td>
						</tr><br>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}
		?>
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="Roll_no">
				<input type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>
			
				<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="add_student.php" method="post">
						<table>
						<tr>
							<td class="ad">
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="Roll_no" required>
							</td>
						</tr>
						<tr>
							<td class="ad">
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td class="ad">
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" required>
							</td>
						</tr>
						<tr>
							<td class="ad">
								<b>Class:</b>
							</td>
							
							<td>
								<input type="text" name="class" required>
							</td>
						</tr>
						<tr>
							<td class="ad">
								<b>CGPA:</b>
							</td>
							
							<td>
								<input type="text" name="CGPA" required>
							</td>
						</tr>
						<tr>
							<td class="ad">
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" required>
							</td>
						</tr>
						<tr>
							<td class="ad">
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td class="ad">
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td class="ad"><b>Remark:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" placeholder="Optional" name="remark"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>
			<?php
				if(isset($_POST['show_teacher']))
				{
					?>
					<center>
						<h5>Teacher's Details</h5>
						<table>
							<tr>
								<td id="td"><b>id</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>Mobile</b></td>
								<td id="td"><b>Course</b></td>
								<td id="td"><b>email</b></td>
								<td id="td"><b>descriptatio</b></td>
								
							</tr>
						</table>
					</center>
					<?php
						$connection = mysqli_connect("localhost","root","");
	                                         $db = mysqli_select_db($connection,"admin");
					$query = "select * from teacher";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['id']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['mobile']?></td>
								<td id="td"><?php echo $row['course']?></td>
								<td id="td"><?php echo $row['email']?></td>
								<td id="td"><?php echo $row['descriptation']?></td>
								
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
                         
			
			
			<?php
				if(isset($_POST['Admission']))
				{
					?>
					<center>
						<h5>Applied for admission</h5>
						<table>
							<tr>
								<td id="td"><b>ID</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>Phone</b></td>
								<td id="td"><b>Email</b></td>
								<td id="td"><b>Message</b></td>
							</tr>
						</table>
					</center>
					<?php
					$query = "select * from admission";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
							?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid white;">
							<tr>
								<td id="td"><?php echo $row['id']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['phone']?></td>
								<td id="td"><?php echo $row['email']?></td>
								<td id="td"><?php echo $row['massage']?></td>
								
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>



		<?php
				if(isset($_POST['all_students']))
				{
					?>
					<center>
						<h5>student's Details</h5>
						<table>
							<tr>
								<td id="td"><b>ID</b></td>
								<td id="td"><b>Roll_no</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>father_name</b></td>
								<td id="td"><b>class</b></td>
								<td id="td"><b>CGPA</b></td>
								<td id="td"><b>mobile</b></td>
								<td id="td"><b>email</b></td>
						
								<td id="td"><b>remark</b></td>
							</tr>
						</table>
					</center>
					<?php
					$query = "select * from student1";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid white;">
							<tr>
								<td id="td"><?php echo $row['id']?></td>
								<td id="td"><?php echo $row['Roll_no']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['father_name']?></td>
								<td id="td"><?php echo $row['class']?></td>
								<td id="td"><?php echo $row['CGPA']?></td>
								<td id="td"><?php echo $row['mobile']?></td>
								<td id="td"><?php echo $row['email']?></td>
								<td id="td"><?php echo $row['remark']?></td>
								
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
		</div>
	</div>
</body>
</html>