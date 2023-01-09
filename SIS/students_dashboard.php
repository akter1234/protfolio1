
<!DOCTYPE html>
<html>
<head>
	<title>student Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel ="stylesheet"/>
    
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
			color: red;
			border: solid 3px black;
			padding-right: 75px;
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
			#td{
			
			        padding-bottom: 30px;
				    text-align: center;
			     	width: 100px;
			     	height: 50px;
					font-size: 16px;
					font-weight: bold;
					color: white;
					list-style: none;

		}
		.back a{
			text-decoration: none;
			font-size: 20px;
		}
		.back a:hover{
			color: skyblue;
		}
		.addsubject{
			width: 40px;
			height: 20px;
			border: 1px solid white;
				background-color: white;
		}
		.degin{
			width: 40px;
			height: 20px;
			border: 1px solid white;
			background-color: white;

		}
		a{
			text-decoration: none;
		}
	</style>
	
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"admin");
	?>
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
						<input type="submit" name="Show_student" value="Show_student">
					</td>
				</tr>
				<tr>
					<td class="degin">
						<input type="submit" name="Update_student" value="Update_student">
					</td>
				</tr>
				<tr>
					<td class="degin">
						<input type="submit" name="show_teacher" value="show_teacher">
					</td>
				</tr>
				<tr>
					<td class="degin">
						<input type="submit" name="show_attendance" value="show_attendance">
					</td>
				</tr>
				<tr>
					<td class="degin">
						<input type="submit" name="show_result" value="show_result">
					</td>
				</tr>
				<tr>
					<td class="addsubject">
		                 <a href="add_subject.php">Add Subject</a>
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
				if(isset($_POST['Show_student']))
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
						<table>
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
		<!-- #Code for Update student details---Start-->
		<?php
			if(isset($_POST['Update_student']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_update" value="Search">
				</form><br><br>
				<h4><b><u>Student's details</u></b></h4><br><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_update']))
			{
				$query = "select * from student1 where Roll_no = $_POST[roll_no]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="edit_student_deshboard.php" method="post">
						<table>
					     <tr>
							<td>
								<b>Roll:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['Roll_no'];?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name'];?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name'];?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" value="<?php echo $row['class'];?>">
							</td>
						</tr>
						<tr>
								<td>
									<b>CGPA:</b>
								</td> 
								<td>
									<input type="text" name="CGPA" value="<?php echo $row['CGPA'];?>">
								</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile'];?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email'];?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password'];?>">
							</td>
						</tr>
						<tr>
							<td>
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
		<!-- #Code for show teacher details---Start-->
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
								<td id="td"><b>descriptation</b></td>
								
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
			<!-- #Code for result details---Start-->
			 <?php
				if(isset($_POST['show_result']))
				{
					?>
					<center>
						<h5>Result Details</h5>
						<table>
							<tr>
								<td id="td"><b>id</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>Bangla</b></td>
								<td id="td"><b>English</b></td>
								<td id="td"><b>Math</b></td>
								<td id="td"><b>Gannarel science</b></td>
								<td id="td"><b>Social science</b></td>
								<td id="td"><b>Islam</b></td>

								
							</tr>
						</table>
					</center>
					<?php
						$connection = mysqli_connect("localhost","root","");
	                    $db = mysqli_select_db($connection,"admin");
					$query = "select * from result_show";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['id']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['Bangla']?></td>
								<td id="td"><?php echo $row['English']?></td>
								<td id="td"><?php echo $row['Math']?></td>
								<td id="td"><?php echo $row['Gannarel science']?></td>
								<td id="td"><?php echo $row['Social science']?></td>
								<td id="td"><?php echo $row['Islam']?></td>
								
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
					<!-- #Code for show attendance details---Start-->
              <?php
				if(isset($_POST['show_attendance']))
				{
					?>
					<center>
						<h5>Attendance Details</h5>
						<table>
							<tr>
								<td id="td"><b>S_no</b></td>
								<td id="td"><b>Subject Name</b></td>
								<td id="td"><b>Student Name</b></td>
								<td id="td"><b>Lecture Name</b></td>
								<td id="td"><b>Date</b></td>
								<td id="td"><b>Status</b></td>
	

								
							</tr>
						</table>
					</center>
					<?php
						$connection = mysqli_connect("localhost","root","");
	                    $db = mysqli_select_db($connection,"admin");
					$query = "select * from db_attendance";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['S_no']?></td>
								<td id="td"><?php echo $row['Subject Name']?></td>
								<td id="td"><?php echo $row['Student Name']?></td>
								<td id="td"><?php echo $row['Lecture Name']?></td>
								<td id="td"><?php echo $row['Date']?></td>
								<td id="td"><?php echo $row['Status']?></td>
					
								
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