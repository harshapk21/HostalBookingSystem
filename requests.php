
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>CLICK FOR ACCEPTING/REJECTING REQUEST</h1>
	<?php
	session_start();
	include 'db.php';
	$name=$_SESSION['username'];
	$sql="SELECT * FROM requests WHERE last='$name' AND status='0'";
	$res=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($res);
	if($count>0)
	{ 
		while($res1=mysqli_fetch_assoc($res))
		{
       echo $res1['first'];
       echo "<a href='aorrej.php?value=".$res1['first']."?req=accept' method='GET'>  accept </a>";
       echo "<br>";
       echo "<a href='aorrej.php?value=".$res1['first']."?req=reject' method='GET'>            reject</a>";
echo "<br>";
   }
	}
	else
	{
		echo "NO REQUESTS";
	}

	 ?>
</body>
</html>