<html>
<body>
<?php
 include("connect.php");
 $id=$_GET['q'];
 $sql="Delete from temp where pid='$id'";

 if(mysqli_query($con,$sql))
 {
	  
	 echo "<table align='center'><tr><td style='color:red;font-weight:bold'>Deleted Succesfully</td></tr></table>";
	 echo "<script>location.replace('payment.php')</script>" ;
	echo "<script type='text/javascript'>window.location.href='payment.php'</script>";

 }
 else
 {
	 
 }
 ?>