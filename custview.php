<html>
<head>
<link rel="stylesheet" href="style1.css" type="text/css" >

</head>
<script>
function names(txt1) {
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
  var name=document.getElementById("txt1").value;
  xhttp.open("GET", "custname.php?name="+name, true);
  xhttp.send();
}

</script>
<body background="b.png">
<form>
<?php include("header.php");
include("header3.php");
?>

<form method="POST">
<br><br>
<table width="70%" border="0" align="center" bgcolor="white">
<tr><td>
<table border="1" align="center" bgcolor="white">
<tr>
<td>Name:</td>
<td><input type="text" id="txt1" name="t1"></td>
</td>
</tr>
<tr align="center">
<td colspan="2"> 
<input type="button" value="Search" id="name" name="nsearch" onClick="names(txt1)">
</td>
</tr>
</table>
</br></br>

<div id="txtHint"></div>
<table width="70%" border="0" align="center" height="30%" bgcolor="white">

<tr>
<td>
<label bgcolor="white" class="style3"><center><b>Customer Details</b></center></label>
<?php
include("connect.php");
$sql="select * from reg order by id ";
$sql1="select * from guest order by id ";
$rel=$con->query($sql);
$rel1=$con->query($sql1);
if(mysqli_num_rows($rel)== 0 && mysqli_num_rows($rel1)== 0)
{
	echo"<table align='center'><tr align='center'><td style='color:red'><b>No data found</b></td></tr></table>";
}
else
{
	echo "
	      <table border='1' align='center' cellspacing='0' cellpadding='0' width='90%' height='40%' bgcolor='white'>
		   <th class='style2'>User Id</th>
	       <th class='style2'>Name</th>
		   <th class='style2'>Address</th>
		    <th class='style2'>Contact</th>
		    <th class='style2'>Email</th>
		     ";
		  
		  while($data=mysqli_fetch_array($rel))
		  {
			 echo "<tr align='center'>
			         <td class='style1' width='15%'>".$data['id']."</td>
				
			      <td class='style1' width='15%'>".$data['fname']." ".$data['mname']." ".$data['lname']."</td>
				   <td class='style1' width='15%'>".$data['address']."</td>
				   <td class='style1' width='15%'>".$data['cont']."</td>
				   <td class='style1' width='15%'>".$data['email']."</td>
				   </tr>
			     ";
		  }
		   while($data=mysqli_fetch_array($rel1))
		  {
			 echo "<tr align='center'>
			         <td class='style1' width='15%'>".$data['id']."</td>
				
			      <td class='style1' width='15%'>".$data['name']."</td>
				   <td class='style1' width='15%'>".$data['address']."</td>
				   <td class='style1' width='15%'>".$data['contact']."</td>
				   <td class='style1' width='15%'>".$data['email']."</td>
				   </tr>
			     ";
		  }
		
}
?>
</td>
</tr>
</table>
</table>
</td>
</tr>
</table>
</form>
</br></br>
</body>
<?php include("footer.php"); ?>
</html>

