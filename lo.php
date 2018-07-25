<?php
if(isset($_POST['login']))
{
    $username=$_POST['user'];
    $password=$_POST['password'];
    //echo $username;
   // echo $password;
    $con=mysqli_connect("localhost","root","","project");
    $sql="SELECT * from chatdata where email='{$username}'";

    $result = mysqli_query($con,$sql);
    
 	   while($row=mysqli_fetch_assoc($result))
 	    {
        $db_pass = $row["pass"];
       // echo "$db_pass";
 	      if($password==$db_pass)
 	      {
 		     echo "password match";
 	      }
        else
        {
 	       echo "Sorry firstly sign up and then login";
        }
      }
    

}
if(isset($_POST['forgot']))
{
  session_start();
  $username=$_POST['user'];
  $_SESSION['$username']=$username;
  header("location:forgot.html");
  //echo "$username";
}
?>