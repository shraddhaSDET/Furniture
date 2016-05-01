<?php 

    include("connect.php");
	$uname=$_GET['name'];
	$sel="select username from reg where username='$uname'";
	$rel=$con->query($sel);
	if(mysqli_num_rows($rel)== 0)
	{
		echo " Continue";
	}
	else
	{
		echo "Plz Give Valid Username";
	}
	?>
