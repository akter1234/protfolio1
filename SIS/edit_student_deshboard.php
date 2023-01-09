<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"admin");
	$query = "update student1 set name='$_POST[name]',father_name='$_POST[father_name]',class=$_POST[class],mobile='$_POST[mobile]',email='$_POST[email]',password='$_POST[password]',remark='$_POST[remark]' where roll_no = $_POST[roll_no]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "students_dashboard.php";
</script>
