<body background="images/Back1.jpg">
<?php
include("header.php");
include("connect.php");
$var="select max(id) as max from guest";
	   $res=$con->query($var);
       $row = mysqli_fetch_assoc($res);

	     $sid = $row['max'] + 1;
?>
<form method="POST" enctype="multipart/form-data" action="">
<table align="center" border="1" width="60%" height="60%" cellspacing="0" cellpadding="0" bgcolor="white">
<tr><td>
<table align="center" border="0" width="60%" height="60%" cellspacing="0" cellpadding="0">
<tr><td colspan="2" class="carth" ><center><h2><u>Guest Checkout</u></h2></center></td></tr>
<tr>
<td align="right" class="style1">User Id &nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><input type="text" name="sid" style="font-weight:bold" value="<?php echo $sid ?>" disabled><br><br></td>
</tr>

<tr>
<td align="right" class="style1">Name &nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><input type="text" name="fname" pattern="[a-zA-Z' ']*$" title="Plz Enter Characters Only" required><br><br></td>
</tr>


<tr>
<td align="right" class="style1">Contact No&nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><input type="text" name="cont" pattern="[0-9]{10}" title="Plz Enter Valid Contact No" required><br><br>
</td>
</tr>

<tr>
<td align="right" class="style1">EmailId &nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><input type="text" name="email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" title="Plz Enter valid email Address" required><br><br>
</td>
</tr>

<tr>
<td align="right" class="style1">Address &nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><textarea rows="2" cols="20" name="address" required></textarea><br><br>
</td>
</tr>


<tr>
<td align="center" colspan="2"><input type="submit" class="bulk5" value="Next" name="reg"></td>
</tr>
</table>
</td></tr>
</table>
</br></br>
<?php include("footer.php");?>

<?php


if(isset($_POST['reg']))
{	$sid=$sid;
	$name=$_POST['fname'];
	$email=$_POST['email'];
	$contact=$_POST['cont'];
	$address=$_POST['address'];
	
		
       $sql="Insert into guest values('$sid','$name','$email','$contact','$address')";
	  if(mysqli_query($con,$sql))
	  {
		  
		  
                      session_start();
		           $_SESSION['gid']=$sid;
				   $gid= $_SESSION['gid'];
                   $value1=$_GET['val'];
				   $sql="select * from product where id=".$value1;
                   $result = $con->query($sql);
                   $row = $result->fetch_assoc();
				    $nm=$row['name'];
					$cost=$row['price'];
					
					$sql1="insert into temp(id,pid,name,price) values('$gid','$value1','$nm','$cost')";
	if (mysqli_query($con, $sql1)) 
       {
    echo "<script>location.replace('payment.php')</script>" ;
       } 
	   else 
       {
    echo  mysqli_error($con);
       }
	 
	  }
	  else
	  {
		  echo"<script>alert('Username Available')</script>";
	  }
	  
	         
	}


?>

</form>

</body>
</html>
