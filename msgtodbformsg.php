<?php  
session_start();
include 'db.php';
$msg = $_POST['message'];
$name=$_SESSION['username'];
$name1=$_SESSION['friend'];
$sql="INSERT INTO messenger (first,last,message) values ('$name','$name1','$msg')";
mysqli_query($connect,$sql);
header("location: friendchat.php?name=$name1");
?>