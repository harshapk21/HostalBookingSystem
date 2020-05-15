<?php
include 'db.php';
session_start();
$name = $_SESSION['username'];
$flag="1";
$sql = "SELECT * FROM friends WHERE first='$name' or last='$name'";
$result=mysqli_query($connect,$sql);
$res=mysqli_num_rows($result);
if($res>0)
{
	while($fetch=mysqli_fetch_assoc($result))
	{
		if(!strcmp($fetch['first'], $name))
		{
           $name2=$fetch['last'];
           $sql1="SELECT * FROM signupdetails WHERE uname='$name2' and online='1'";
           $result1=mysqli_query($connect,$sql1);
           $res1=mysqli_num_rows($result1);
           if($res1>0)
           {
           	while($fetch1=mysqli_fetch_assoc($result1))
           	{
           		$exname = $fetch1['uname'];
           		if($exname==$name)
           			;

           		else{
           		echo "<a href='friendchat.php?name=".$exname."'>".$exname."</a>";
           		echo "<br>";
                 $flag="0";
             }
           	}
           }

		}
		else
		{
		$name2=$fetch['first'];
           $sql2="SELECT * FROM signupdetails WHERE uname='$name2' and online='1'";
           $result2=mysqli_query($connect,$sql2);
           $res2=mysqli_num_rows($result2);
           if($res2>0)
           {
           	while($fetch2=mysqli_fetch_assoc($result2))
           	{ $exname =$fetch2['uname'];
         
          
           if($exname==$name)
            ;
           	else{
           		echo "<a href='friendchat.php?name=".$exname."'>".$exname."</a>";
                echo "<br>";
                 $flag="0";
             }
             
           	}
           }

		}//else end

	}// while end
if(!strcmp("1",$flag))
	echo "NO ONE IS ONLINE.THIS IS A NERDY WORLD :(";
}//if end(>0)
else
echo "NO ONE IS ONLINE. THIS IS A NERDY WORLD :(";
?>