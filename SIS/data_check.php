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
	if(isset($_POST['apply']))
	{
		$data_name=$_POST['name'];
		$data_email=$_POST['email'];
		$data_phone=$_POST['phone'];
		$data_message=$_POST['massage'];

		$sql="insert into admission(name,email,phone,massage)VALUES('$data_name','$data_email','$data_phone','$data_message')";

		$result=mysqli_query($data,$sql);
		if(	$result)
		{
           $_SESSION['message']="your appplication send successful";
           header("location:Homepage.php");
		}
		else
		{
			echo "apply failed";
		}
		
	}
?>
