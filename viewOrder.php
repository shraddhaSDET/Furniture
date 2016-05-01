<html>
<head>
<link rel="stylesheet" href="style1.css" type="text/css" >

</head>
<body background="b.png">
<form>
<?php

include("header.php");
include("header3.php");

?>
<br><table align='center' border="1" cellpadding="0" cellspacing="0" bgcolor='white' width="80%">
<tr><td>
<?php
include("connect.php");
$sql1="select l.id,l.fname,l.lname,l.address,l.email,l.cont,p.pn,p.tot from reg l,payment p where l.id=p.id order by id";
$sql2="select l.id,l.name,l.address,l.email,l.contact,p.pn,p.tot from guest l,payment p where l.id=p.id order by id";
$res=$con->query($sql1);
$res1=$con->query($sql2);
 if(mysqli_num_rows($res)== 0 && mysqli_num_rows($res1)== 0)
  {
	  echo "<table align='center'><tr align='center'><td style='color:red'><b>No data found</b></td></tr></table>";
  }
  else
  {
echo "
<table align='center' border='1' cellspacing='0' cellpadding='0' width='80%' bgcolor='white'>
<br><label class='style3'><center><u>Order Details</u></center></label></br>
<th class='style2'>ID</th>
<th class='style2'>Name</th>
<th class='style2'>EmailId</th>
<th class='style2'>Contact No</th>
<th class='style2'>Address</th>
<th class='style2'>Order List</th>
<th class='style2'>Total Cost</th>
";
while($row=$res->fetch_assoc())
{

	echo "<tr align='center'><td class='style1' width='15%'>".$row['id']."</td>
	
	<td class='style1' width='15%'>".$row['fname']." ".$row['lname']."</td>
	<td class='style1' width='15%'>".$row['email']."</td>
	<td class='style1' width='15%'>".$row['cont']."</td>
	<td class='style1' width='15%'>".$row['address']."</td>
	<td class='style1' width='15%'>".$row['pn']."</td>
	<td class='style1' width='15%'>$ ".$row['tot']."</td></tr>";
}
while($row=$res1->fetch_assoc())
{
	echo "<tr align='center'><td class='style1' width='15%'>".$row['id']."</td>
	
	<td class='style1' width='15%'>".$row['name']." </td>
	<td class='style1' width='15%'>".$row['email']."</td>
	<td class='style1' width='15%'>".$row['contact']."</td>
	<td class='style1' width='15%'>".$row['address']."</td>
	<td class='style1' width='15%'>".$row['pn']."</td>
	<td class='style1' width='15%'>$ ".$row['tot']."</td></tr>";
}
echo "</table></center><br><br>";
  }
?>
</td>
</tr>
</table></br></br>
<?php include("footer.php");?>