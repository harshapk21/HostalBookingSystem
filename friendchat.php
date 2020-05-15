<?php
session_start();
$name=$_SESSION['username'];
include 'db.php';
$sname=$_GET['name'];
$_SESSION['friend']=$sname;
?>
<!DOCTYPE html>
<html>
<head>
	<style>
	.split{
				height: 100%;
				width:50%;
				position: fixed;
				z-index: 1;
				top:0;
				overflow-x: hidden;
				padding-top: 1px;
			}
		.left{
			left: 0;
				background-color: aquamarine;
				font-size: 20px;
			}
	    .right{
	           right:0;
            background-color: aqua;
            color: black;
            overflow: scroll;
			}
			.centered{
				position: absolute;
				top:20%;
				left:40%;
				transform: translate(-40%,-40%);
				text-align: center;
			}
			.msg {
	height:350px;
	width:80%;
	padding-left: 10px;
	overflow: scroll;
	scroll-behavior: top;
	text-align: left;
	font-size: 25px;
	background-color: white;
	border:5px solid yellow;
	text-transform: capitalize;
}

</style>
</head>
<body>
	<div class="split left">
		<div class="center">
			<?php
			echo "<h2 style='color:green;'> $name - $sname ( connected )</h2>";
			?>
<div class="msg">
		<?php
	
      $sql="SELECT * FROM messenger WHERE first='$name' AND last='$sname' OR first='$sname' AND last='$sname'";
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
          	
           	echo $row['first']." : ".$row['message']." [ ".$row['time']."]";
           	echo "<br>";
           	echo "<br>";
       }

           }

          
      ?>
  </div>
<form action="msgtodbformsg.php" method="POST">
	<input type="text" name="message" placeholder="message here" style="width: 50%; height: 70px;"> 
	<br>
	<button type="submit" style="background-color: lightblue;" >send message</button>;
</form>
  </div>
 	</div>

<div class="split right">
	<div class="center">
<h1 style="text-align: center;text-decoration: underline;">NOTIFICATIONS</h1>
<br><br>
<p>WORK IN PROGRESS</p>
	</div>
</div>

</body>
</html>