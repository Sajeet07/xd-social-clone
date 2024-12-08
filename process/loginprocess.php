<?php
require('../connection/config.php');

if(isset($_POST['submit'])) {
$email=$_POST['email'];
$password=md5($_POST['password']);
//echo $email.$password;
// checking value coming or not
$query="SELECT * FROM users WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn,$query)
or die(mysqli_error($conn));
$count=mysqli_num_rows($result);
if($count==1){
	session_start();
	$row=mysqli_fetch_assoc($result);
	$_SESSION['id']= $row['id'];
	$_SESSION['name']= $row['name'];
	$_SESSION['email']= $row['email'];
	$_SESSION['username']= $row['username'];
	header('Location: ../dashboard.php');
}
else{
	echo header("Location: ../index.php?msg=error");
}
}
 ?>
