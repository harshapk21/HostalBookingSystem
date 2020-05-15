<?php
session_start();
if(isset($_SESSION['username'])){
$name=$_SESSION['username'];
echo "<h1 style='color:green;text-decoration:underline;'>hello $name</h1>";
}
echo "<h1 style='text-align:center;text-decoration:underline;'>WELCOME BUDDY !</h1>";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body {
			background-color: pink;
		}
	</style>
</head>
<body>
	<br>
<ul>
	
	<a href="home12.php" style="text-decoration: none"><li><h2>GROUP CHAT WITH OTHER USERS</h2></li></a>
	<br>
	<a href="fbstart.php" style="text-decoration: none"><li><h2>PERSONAL CHAT(MESSENGER)</h2></li></a>
	<br>
	<a href="notification.php" style="text-decoration:none"><li><h2>PERSONAL CHAT NOTIFICATIONS</h2></li></a>
		<a href="requests.php" style="text-decoration:none"><li><h2>FRIEND REQUESTS</h2></li></a>

</ul>
<br><br>
<h2>click here to </h2>
<a href="fblogout.php"><button style="height: 35px;width: 130px">logout</button></a>

</body>
</html>