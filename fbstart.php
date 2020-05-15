
<!DOCTYPE html>
<html>
<head>
	<style>
	body{
		font-size: 20px;
	}
	.split{
				height: 100%;
				width:50%;
				position: fixed;
				z-index: 1;
				top:0;
				overflow-x: hidden;

				padding-top: 20px;
			}
		.left{
			left: 0;
				background-color: aqua;
				font-size: 20px;
				overflow: scroll;
			}
	    .right{

            right:0;
            background-color: aquamarine;
            color: black;
            overflow: scroll;
			}
			.centered{
				position: absolute;
				top:50%;
				left:50%;
				transform: translate(-50%,-50%);
				text-align: center;
			}
		</style>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
  		$("input").keyup(function(){
  			var name = $("input").val();
  			$.post("fbsug.php",{suggestion:name},function(data,status)
  				{    var value=data;
                    $("#display").html(data);
  				});
  		});
  	});
  </script>		
  <script type="text/javascript">
  	$(document).ready(function(){
  		$("#onlinesubmit").click(function()
  		{
  			$.post("fbonline.php",{<?php ?>},function(data,status)
  			{
  				$("#onlinedisplay").html(data);

  			});
  		});
  	});
  </script>
</head>
<body>
	<div class="split left">
		<div class="centered">
			<?php
session_start();
$name=$_SESSION['username'];
echo "$name";
?>
    <strong>, MAKE NEW FRIENDS BY SEARCHING THEIR USER ID AND CLICK ON THEM FOR SENDING FRIEND REQUEST</strong>
    <br><br>
    <?php
    if(isset($_GET['info']))
    $value=$_GET['info'];
    else
    $value="";
?>
       
    <input type="text" name="un" id="uname" style="color: green;font-size: 20;border:2px solid green;height: 40px;width:250px" value="<?php echo $value ?>">
    <p id="display"></p>
</div>
</div>
<div class="split right">
	<div class="centered">
<h2 style="text-align-last: ">click here to see friends/people online</h2>

    <button type="submit" id="onlinesubmit" name="submit" style="font-size: 15px;height: 30px;width: 150px;">online</button>
<p id="onlinedisplay" style="color: green;">.</p>
</div>
</div>
</body>
</html>