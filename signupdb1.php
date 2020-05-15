<?php 
include 'db.php';
$fname=mysqli_real_escape_string($connect,$_POST['fname']);
$lname=mysqli_real_escape_string($connect,$_POST['lname']);
$uname=mysqli_real_escape_string($connect,$_POST['uname']);
$password=mysqli_real_escape_string($connect,$_POST['password']);

$sql1="select * from signupdetails where uname='$uname'";
$result=mysqli_query($connect,$sql1);
$num=mysqli_num_rows($result);
if(num<1 && !empty($fname) && !empty($lname) && !empty($uname) && !empty($password))
{
$sql="insert into signupdetails (fname,lname,uname,password) values ('$fname','$lname','$uname','$password')";
mysqli_query($connect,$sql);
header("location: index1.php?signup=success");
}
else
{
header("location: index1.php?signup=FAIL");

}
exit();
 ?>
