<?php  
session_start();
include 'db.php';
$msg = mysqli_real_escape_string($connect,$_POST['message']);
$name=$_SESSION['username'];
$sql="INSERT INTO messages (name,data) VALUES ('$name','$msg')";
mysqli_query($connect,$sql);
header("location: home12.php");
exit();
?>