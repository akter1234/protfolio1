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
	if(isset($_POST['registation']))
	{
		$data_fname=$_POST['fname'];
		$data_password=$_POST['password'];
		$data_cpassword=$_POST['cpassword'];
		$data_email=$_POST['email'];
		

		$sql="insert into registation(fname,password,cpassword,email)VALUES('$data_fname','$data_password','$data_cpassword','$data_email')";

		$result=mysqli_query($data,$sql);
		if(	$result)
		{
           $_SESSION['message']="your registation send successful";
           header("location:Homepage.php");
		}
		else
		{
			echo "apply failed";
		}
		
	}
?>
