<?php
include 'db.php';
session_start();
$name=$_SESSION['username'];
if(isset($_POST['suggestion']) && !empty($_POST['suggestion'])){
$sugname=$_POST['suggestion'];
$sql="SELECT * FROM signupdetails WHERE uname like '%".$sugname."%'";
$result=mysqli_query($connect,$sql);
$rescheck=mysqli_num_rows($result);
$flag=0;

if($rescheck>0)
{ 
	while($res=mysqli_fetch_assoc($result))
	{
		$username=$res['uname'];
		
		$sql1="SELECT * FROM friends WHERE first='$name' AND last='$username'"; 
		$sql2="SELECT * FROM friends WHERE last='$name' AND first='$username'";

		$result1=mysqli_query($connect,$sql1);
		$result2=mysqli_query($connect,$sql2);

		$number1=mysqli_num_rows($result1);
		$number2=mysqli_num_rows($result2);

        if(($number1+$number2)<1 && $username!=$name){
		echo "<a href='newfriend.php?info=".$username."'>".$username."</a>";
		echo "<br>";
		$flag=1;
	}
	if($flag==0)
	{
		echo "NO MATCHES FOUND BC ! !";

	}
}
}
}
else
{
	echo "<br><br><br>";
echo "NO MATCHES FOUND BC ! !";
}
?>