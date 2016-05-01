<html>
<form>
<?php
include("connect.php");
$name=$_GET['name'];
$sql="select * from reg where fname like '%$name%'";
$sql1="select * from guest where name like '%$name%'";
$rel=$con->query($sql);
$rel1=$con->query($sql1);
if(mysqli_num_rows($rel)== 0 && mysqli_num_rows($rel1)== 0 )
{
	echo"<script>alert('No Data found');</script>";
}
else
{
	echo "	     
	        <table border='1' align='center' cellspacing='0' cellpadding='0' width='60%' height='20%' bgcolor='white' >
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
			       <td class='style1' width='15%'>".$data['fname']." ".$data['lname']."</td>
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
</table></br>
</form>
</html>