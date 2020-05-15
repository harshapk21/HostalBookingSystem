<!doctype html>
<html>
<head>
<style>
div {
background-color:white;
text-align:center;
font-size:30px;
text-transform:capitalize;
height:250px;
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
	if (isset($_GET['signup'])){
   $name=$_GET['signup'];
   if($name="success")
	echo "<p style='color:green;'>signup = success</p>";
else
	echo "<p style='color:red;'>your signup = fail</p>";
}

	if(isset($_GET['login'])){
		$name1=$_GET['login'];
		if($name1=="fail")
			echo "<p style='color:red;'>login = fail</p>";
	}
	
?>

<br><br>
username:
<input type="text" name="username">
password:
<input type="password" name="password" maxlength="8"><br>
<button type="submit" name="login">Login</buttton>
<br>
</div>
</form>
</body>
</html>