<?php
 include("connect.php");
 $name=$_GET['name'];
 $sql="select id,name,img,price,catg from used_product where catg like '%$name%'";
$rel=$con->query($sql);
  if(mysqli_num_rows($rel)==0)
  {
	  echo "<script>alert('No data found')</script>";
  }
  else
  {
	  echo
	  "
	  <label class='style3'><center><b><h2> Selected Product Details</h2></b></center></label>
	      <table border='1' align='center' cellspacing='0' cellpadding='0' width='90%' height='30%' bgcolor='white'>
	       <th class='style2'>ProductId</th>
		   <th class='style2'>Name</th>
		    <th class='style2'>Product</th>
		    <th class='style2'>Price</th>
		     <th class='style2'>Catgory</th>
			 <th class='style2'>Update</th>
			 <th class='style2'>Delete</th>
	  ";
		  
		  while($data=mysqli_fetch_array($rel))
		  {
			echo "<tr align='center'>
			      <td width='15%'>".$data['id']."</td>
				  <td width='15%'>".$data['name']."</td>";?>
				  <td width="15%"><img src="images/<?php echo $data['img']?>" width="50px" height="50px"></td>
		<?php echo " <td width='15%'>$ ".$data['price']."</td>
				  <td width='15%'>".$data['catg']."</td>
				  <td width='15%'><a href='pedit.php?val=".$data['id']."'>Edit</a></td>
				  <td width='15%'><a href='pdelete.php?val=".$data['id']."'>Delete</a></td>
				  </tr>";
				  
				  
	      }
  } 
  
 ?>