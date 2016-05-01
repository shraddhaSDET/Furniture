<?php
  include("connect.php");
 $val=$_GET['val'];
 $sel="Delete from product where id='$val'";
  if(mysqli_query($con,$sel))
  {
	  echo "<script>alert('Deleted Successfully');</script>";
	  header("location:productview.php");
  }
  else
  {
	  echo "<script>alert('Try Again');</script>";
  }
  ?>