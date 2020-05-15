<!doctype html>
<html>
<head>
	<style>
		div{
			text-align:center;
			font-size: 25px;
			text-transform: capitalize;
			border: 5px solid orange;
			background-color: grey; 
			margin-left: 40px;
			margin-right: 40px;
			margin-bottom: 70px;
			height:370px;


		}
		body{
			background-color: black;
		}
		
	</style>
</head>
<body>
	<h1 style="color: white;text-align: center;text-transform: capitalize;">welcome to the chatbox registration</h1>
	<div>
		<form action="signupdb1.php" method="POST">
		<label><b>first name:</b></label><br>
		<input type="text" name="fname">
		<br><br>
		<label><b>lastname:</b></label><br>
		<input type="text" name="lname"><br><br>
		<label><b>enter username</b></label><br>
		<input type="text" name="uname"><br><br>
		<label><b>enter password</b></label><br>
		<input type="password" name="password"><br><br>
		<button type="submit" name="signup">signup</button>
		</form>
	</div>
</body>
</html>