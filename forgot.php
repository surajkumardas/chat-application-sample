<?php
if(isset($_POST['confirm']))
{
	$newpassword=$_POST['newpass'];
	$repassword=$_POST['repass'];
	session_start();
	$username=$_SESSION['$username'];
	if($newpassword===$repassword)
	{
		$con=mysqli_connect("localhost","root","","project");
		$sql="UPDATE chatdata set pass='$newpassword' where email='$username'";
		if($result=mysqli_query($con,$sql))
		{
			//echo "Password same:$newpassword ";
			//echo "$repassword ";
			//echo "$username";
			header("location:login.html");
		}
	}
	else
	{
		header("lacation:forgot.html");
	}
}
?>


