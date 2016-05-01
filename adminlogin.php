<html>
<link rel="stylesheet" href="style1.css">
<body background="b.png">
<?php include("header.php");?>

<form method="POST">

<table border="0" align="center" cellspacing="0" cellpadding="0" width="30%" height="0%" bgcolor="white">
<tr align="center" class="carth"><td colspan="2"><h2><u>ADMIN LOGIN</u></h2></td></tr>
<tr align="center">
<td class=" style1" align="right">Username &nbsp;</br></br></td>
<td align="left"><input type="text" name="uname" required></br></br></td>
</tr>

<tr align="center">
<td class=" style1" align="right">Password &nbsp;</br></br></td>
<td align="left"><input type="password" name="pass" required></br></br></td>
</tr>

<tr align="center">
<td colspan="2"><input type="submit" class="bulk5" value="LOGIN" name="login"></br></br></td>
</tr>
 
</table>
</br></br></br></br>
<?php include("footer.php");?>




<?php
   if(isset($_POST['login']))
   {
	   $uname=$_POST['uname'];
	   $pass=$_POST['pass'];
	   include("connect.php");
	   $sel="select username,password from admin where username='$uname' and password='$pass'";
	   $result=$con->query($sel);
			
			if($row=mysqli_fetch_array($result))
				
		   {
				header("Location:prodEntry.php");
		              session_start();
		           $_SESSION['uid']=$row['id'];
				   $uid= $_SESSION['uid'];
			}
			else
			{
				echo "<script>alert('Invalid Username or Password');</script>";
				
				
	           	}
   }

?>

</body>
</html>
