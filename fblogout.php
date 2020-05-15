<?php
include 'db.php';
session_start();
$name=$_SESSION['username'];
$sql="UPDATE signupdetails SET online='0' WHERE uname='$name'";
mysqli_query($connect,$sql);
session_destroy();
unset($_SESSION['username']);
header("Location: index.php?logout=success");
exit();
?>