<?php
session_start();
include 'db.php';
$name=$_SESSION['username'];
if(isset($_GET['info']))
{
echo "REQUEST SENT";
$reqname=$_GET['info'];
$sql="INSERT INTO requests (first,last,status) VALUES ('$name','$reqname','0')";
mysqli_query($connect,$sql);
}
?>
