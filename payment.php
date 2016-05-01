
<script>
function showCustomer(cust) {
  var xhttp;    
 /* if (cust == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }*/
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("txtHint").innerHTML = xhttp.responseText;
    }
  };
  var id=document.getElementById("cust").value;
  xhttp.open("GET", "delete.php?q="+id, true);
  xhttp.send();
  
}
</script>
<?php include('header.php');?>
<style>
.style2
{
	font-weight:bold;
	text-align:center;
	color:white;
	background-color:#aa5500;
	
}

.style1
{
	
	text-align:center;
	font-weight:bold;
}
</style>
<body background="b.png">
<form method="post">
<?php 
include("header2.php");
include("connect.php");
session_start();

    $subj = ! empty($_SESSION['uid']) ? $_SESSION['uid'] : ' ';
		 $_SESSION['uid']= $subj; 
 $uid= $_SESSION['uid'];

 $subj = ! empty($_SESSION['gid']) ? $_SESSION['gid'] : ' ';
		 $_SESSION['gid']= $subj; 
 $gid= $_SESSION['gid'];             

?>
</br></br>
<table align="center" width="70%" height="70%" cellpadding="0" cellspacing="0" border="1" bgcolor="white">
<tr><td>
</br></br><table  border="0" align="center" width="50%">

<tr><td><h2 align="center"><u>Your Cart</u></h2></td></tr></table>
<?php
$con=new mysqli("localhost","root","","furniture");
	if($con->connect_error)
	{
		die('Could not Connect:'.$con->connect_error);
	}
	$id0=$_SESSION['uid'];
	$gid=$_SESSION['gid'];
	$sql1="select id,pid,name,price from temp where id='$id0' or id='$gid'";
	$result = $con->query($sql1);
	$d=mysqli_num_rows($result);
	
	 if($d== 0)
  {
	 
	 echo " <table align='center'><tr align='center'><td style='color:red'><b>No data found</b></td></tr></table>";
	  
  }
  else
  {
 
echo "<table border='1' align='center' height='30%' width='40%' cellpadding='0' cellspacing='0'>
<th class='style2'><b>User ID</b></th>
<th class='style2'><b>Product ID</b></th>
<th class='style2'><b>Name</b></th>
<th class='style2'><b>Price</b></th>";

while($row = $result->fetch_assoc()) 
{
	
	echo "<tr><td width=\"10%\" class='style1'><label>".$row['id']."</td>
	<td width=\"10%\" class='style1'><label>".$row['pid']."</label> </td>
	<td width=\"10%\" class='style1'><label >".$row['name']."</label> </td>
	<td width=\"10%\" class='style1'><label>$ ".$row['price']."</label> </td></tr>";
	
}
  
$sql1="select pid from temp where id='$id0' or id='$gid'";
	$result = $con->query($sql1);
	?>
	<tr><td colspan="4" align="center"><select name="abc" id="cust">
<option>--Select--</option>
<?php
while($row1 = $result->fetch_assoc()) 
{?>
	<option value="<?php echo $row1['pid'] ?>"/><?php echo $row1['pid']; ?></option>
<?php
}
	?></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<input type="button" id="b1" value="Delete" onClick="showCustomer(cust)" style="background-color:#aa5500;font-weight:bold;color:white;width:130px">
	</br></br></td></tr></table>
	<?php
	
}

?>
<div id="txtHint"></div>


</br></br><center>
<div id="con" style="display:none">
<input type="submit" name="con" id="con" value="Confirm order" style="background-color:#aa5500;font-weight:bold;color:white;width:130px">
</div>

<?php
if($d==0)
{
	echo "<script>document.getElementById('con').style.display='none';</script>";
}
else
{
	echo "<script>document.getElementById('con').style.display='block';</script>";
}
?>
 


</center>


	
<center>
<div id="payment" style="display:none">
<?php
	if(isset($_POST['con']))
	{
		echo "<script>document.getElementById('payment').style.display='block';</script>";
	}
		?>
<table style="background-color:#e5eecc" width="40%" border="2" class="style1"  cellspacing="0" cellpadding="0" align="center">
<tr><td></br>
<label><b>Name on Card</b></label> </br></br></td>
<td></br><input type="text" name="t1" pattern="[a-zA-Z' ']*$" title="Plz Enter Characters Only"></br></br>
</td></tr>


<tr><td></br>
<label><b>Credit Card No</b></label></br></br> </td>
<td></br><input type="text" pattern="[0-9]{16}" title="Enter valid Credit card No" name="t2"></br></br>
</td></tr>

<tr><td></br>
<label><b>CVV No</b></label></br></br> </td>
<td></br><input type="text" name="t3" pattern="[0-9]{3}" title="Enter 3 Digit CVV NO"></br></br>
</td></tr>

<?php


	$con=new mysqli("localhost","root","","furniture");
	if($con->connect_error)
	{
		die('Could not Connect:'.$con->connect_error);
	}
	$id2=$_SESSION['uid'];
$sql1="select sum(price) as total from temp where id='$id0' or id='$gid'";
	$res = $con->query($sql1);
	
while($row = $res->fetch_assoc()) 
{
	echo "<tr><td></br><b>Total Cost</b></br></br></td><td></br>$ ".$row['total'];
	echo "</br></br></td></br></br></td></tr>
	<tr><td colspan=\"2\">
<input type=\"submit\" value=\"Done\" name=\"s1\" style=\"background-color:#aa5500;font-weight:bold;color:white;width:130px\"/>
</td></tr></table></br></br>";
	
	if(isset($_POST['s1']))
{
	if($uid!= ' ')
{
	$sql10="select name from temp where id='$id0'";
	$res10=$con->query($sql10);
	$nm1="";
while($row10=$res10->fetch_assoc())
{
	$variableName = $row10['name'];
	$nm1.=$row10['name'].", \n";
}
	$n=$_POST["t1"];
$cno=$_POST["t2"];
$cvv=$_POST["t3"];
	if(($_POST['t1']==""))
		echo "<script>alert(\"Enter Name.\");</script>";
	else
	if(($_POST['t2']==""))
	
	echo "<script>alert(\"Enter correct 16 digit Crredit card no.\");</script>";
	else
	if(($_POST['t3']==""))
		echo "<script>alert(\"Enter correct Cvv no.\");</script>";
	else
	{
		$sql="INSERT INTO payment(id,name,cno,cvv,pn,tot) values('$id0','$n','$cno','$cvv','$nm1','$row[total]')";
	$sql1="Delete from temp where id='$id0'";
	if(mysqli_query($con,$sql1))
 {
 }
	if (mysqli_query($con, $sql)) 
{
    echo "<script>alert(\"Payment Done!!!\")</script>";
	echo "<script>location.replace('OrderConfirmation.php')</script>" ;
}
}
	
}

else
{
	$sql10="select name from temp where id='$gid'";
	$res10=$con->query($sql10);
	$nm1="";
while($row10=$res10->fetch_assoc())
{
	$variableName = $row10['name'];
	$nm1.=$row10['name'].", \n";

}
	$n=$_POST["t1"];
$cno=$_POST["t2"];
$cvv=$_POST["t3"];
	if(($_POST['t1']==""))
		echo "<script>alert(\"Enter Name.\");</script>";
	else
	if(($_POST['t2']==""))
	
	echo "<script>alert(\"Enter correct 16 digit Crredit card no.\");</script>";
	else
	if(($_POST['t3']==""))
		echo "<script>alert(\"Enter correct Cvv no.\");</script>";
	else
	{	
	$sql="INSERT INTO payment(id,name,cno,cvv,pn,tot) values('$gid','$n','$cno','$cvv','$nm1','$row[total]')";
	$sql1="Delete from temp where id='$gid'";
	if(mysqli_query($con,$sql1))
 {
 }
	if (mysqli_query($con, $sql)) 
{
    echo "<script>alert(\"Payment Done!!!\")</script>";
	echo "<script>location.replace('OrderConfirmation.php')</script>" ;
}
}
}
	
}
}


?>
</div>
</td>
</tr>
</table>
</form>
</form>
</body>
<?php include("footer.php"); ?>
<div id="txtHint"></div>

