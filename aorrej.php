<?php
session_start();
include 'db.php';
$name1=$_SESSION['username'];
$nameis=$_GET['value'];
if($_POST['req']="accept")
{echo "hello";
echo "      ";
echo "REQUEST ACCEPTED";
echo "<br>";
echo "<br>";
$nameis2=str_replace("?req=accept"," ",$nameis);
    echo $nameis2;
  $sql="UPDATE requests SET status='1' WHERE first='$nameis2' AND last='$name1'";
  mysqli_query($connect,$sql);
  $sql="INSERT INTO friends (first,last) values ('$nameis2','$name1')";
  mysqli_query($connect,$sql);
}
else
{
   $sql="UPDATE requests SET status='2' WHERE first='$nameis2' AND last='$name1'";
 mysqli_query($connect,$sql);
}
?>