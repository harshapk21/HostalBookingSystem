<?php
session_start();
include 'db.php';
$uname=$_POST['username'];
$password=$_POST['password'];

$_SESSION['username']=$uname;
echo $uname;
echo $password;
$sql1="SELECT * FROM signupdetails WHERE uname='$uname' AND password='$password'";
$result = mysqli_query($connect,$sql1);
$number=mysqli_num_rows($result);

if($number>0){
	$sql="UPDATE signupdetails SET online='1' WHERE uname='$uname'";
	mysqli_query($connect,$sql);
	header("location: home123.php");
	
}
else{
	header("location: index.php?login=fail");
   
}
?>