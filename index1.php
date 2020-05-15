<!doctype html>
<html>
<head>
<style>
div {
background-color:white;
text-align:center;
font-size:30px;
border:5px solid blue;
text-transform:capitalize;
height:350px;
width:100%;
}
body {
background-color:grey;
}
</style>
</head>
<body>
<form action="logindb1.php" method="post">
<div>
dont have an account ? <a href="signup1.php">sign up</a> first<br>
<?php
	if (isset($_GET['signup']))
	{
   $name=$_GET['signup'];
   if($name=="FAIL")
	echo "<p style='color:red;'>signup = fail :(</p>";
else
	echo "<p style='color:green;'>your signup = success :)</p>";
}

	if(isset($_GET['login'])){
		$name1=$_GET['login'];
		if($name1=="fail")
			echo "<p style='color:red;'>login = fail</p>";
	}

	if(isset($_GET['logout']))
	{
		echo "<p style='color:green;'>logout = success :) :)</p>";
	}
	
?>

<br>
username:<br>
<input type="text" name="username">
<br>
password:<br>
<input type="password" name="password" maxlength="8">
<br>
<button type="submit" name="login">Login</buttton>
<br>
</div>
</form>
</body>
</html>