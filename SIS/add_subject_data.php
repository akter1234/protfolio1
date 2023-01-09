<?php
    session_start();
	$host="localhost";
	$user="root";
	$password="";
	$db="admin";
	$data=mysqli_connect($host,$user,$password,$db);
	if($data==false)
	{
		die("connection_error");
	}
	if(isset($_POST['add_subject']))
	{
		$data_studentr=$_POST['studentroll'];
		$data_studentn=$_POST['studentname'];
		$data_subject=$_POST['subjectname'];
		$data_password=$_POST['Descripation'];

		$sql="insert into subjectadd(studentRoll,studentName,subjectname,descripation)VALUES('$data_studentr','$data_studentn','$data_subject','$data_password')";

		$result=mysqli_query($data,$sql);
		if(	$result)
		{
           $_SESSION['message']="your subject added successful";
           header("location:add_subject.php");
		}
		else
		{
			echo "apply failed";
		}
		
	}
?>
