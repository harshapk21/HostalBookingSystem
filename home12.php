<?php
session_start();
$name=$_SESSION['username'];
include 'db.php';
echo "<h2 style='color:green;'>hello $name</h2>";
echo "<h1 style='text-align:center;'>welcome to the chatbox </h1>";
?>
<!doctype html>
<html>
<head>
	<style>
div {
	height:350px;
	width:60%;
	overflow: scroll;
	text-align: left;
	font-size: 25px;
	background-color: white;
	border:5px solid green;
	text-transform: capitalize;
}
body {
	background-color: yellow;
}
</style>
</head>
<body>
	<div>
		<?php
      $sql="SELECT * FROM messages";
      $result=mysqli_query($connect,$sql);
      $rc=mysqli_num_rows($result);
      if($rc<1)
      {
      	echo "NO MESSAGES TO SHOW";
      }
      else
      {
           while($row=mysqli_fetch_assoc($result))
           {
           	echo $row['name']." : ".$row['data']." - ".$row['date'];
           	echo "<br>";
           	echo "<br>";
            
           }
      }
     
      ?>
 	</div>
	<form action="msgtodb.php" method="POST">
	<nav>
	<input type="text" name="message" placeholder="message here" style="width: 50%; height: 70px;"> 
	<br>
	<button type="submit" name="sendmsg" style="background-color: lightblue;" >send message</button>;
	</nav>
</form>
</body>
</html>