<?php
if(isset($_POST['submit']))
{
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $contact=$_POST['contact'];
   $password=$_POST['password'];
   $con=mysqli_connect("localhost","root","","project");
   $sql="INSERT INTO chatdata(fname,lname,email,phone,pass)values('$fname','$lname','$email','$contact','$password')";
   if($con->query($sql)===TRUE)
      echo "Thanks for signing up !!!";
   else
     echo "Sorry there is some mistake...";
}
?>