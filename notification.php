<?php
session_start();
include 'db.php';
$name=$_SESSION['username'];
echo "<h2 style='color:green'>FRIEND REQUEST ACCEPTED LIST:</h2>";
echo "<br>";
echo "<br>";

$sql="SELECT * FROM requests WHERE first='$name' AND status='1'";
$result=mysqli_query($connect,$sql);
$rc=mysqli_num_rows($result);
if($rc>0)
{
  while($res1=mysqli_fetch_assoc($result))
  {
$tempname=$res1['last'];
  	echo $tempname;
  	$sql="DELETE * FROM requests WHERE first='$name' AND last='$tempname' AND status='1'";

  	mysqli_query($connect,$sql);
  }
}
else
{
	echo "NO RESULTS FOUND";
}
echo "<br>";
echo "<h2 style='color:red'>FRIEND REQUEST REJECTED LIST:</h2>";
echo "<br>";
$sql1="SELECT * FROM requests WHERE first='$name' AND status='2'";
$result1=mysqli_query($connect,$sql1);
$rc1=mysqli_num_rows($result1);
if($rc1>0)
{
  while($res11=mysqli_fetch_assoc($result1))
  {
$tempname=$res11['last'];
  	echo $tempname;
  	$sql="DELETE * FROM requests WHERE first='$name' AND last='$tempname' AND status='2'";

  	mysqli_query($connect,$sql);
  }
}
else
echo "NO RESULTS FOUND";

?>