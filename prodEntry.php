<html>
<body background="b.png">
<link rel="stylesheet" href="style1.css" type="text/css">
<?php include("header.php");
      include("header3.php");
	  include("connect.php");
	  $var="select max(id) as max from product";
	   $res=$con->query($var);
       $row = mysqli_fetch_assoc($res);

	     $pid = $row['max'] + 1;

 ?>

<form method="POST" enctype="multipart/form-data" action="">
</br></br>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="50%" height="50%" bgcolor="white">
<tr><td colspan="2" class="style3"><p><h2><b><u><center>Product Entry</center></u></b></h2></td></tr>

	<tr>
		<td class="style1" align="right">Product ID:&nbsp;&nbsp;</td>
		<td align="left"><input type="text" name="pid" value="<?php echo $pid ?>" disabled ></center></td>
	</tr>
	<tr>
		<td class="style1" align="right">Product Name:&nbsp;&nbsp;</td>
		<td align="left"><input type="text" name="pname" pattern="[a-zA-Z' ']*$" title="Plz Enter Characters Only" required></center></td>
	</tr>
	<tr>
		<td class="style1" align="right">Product view:&nbsp;&nbsp;</td>
		<td align="left"><input type="file" name="image" required></center></td>
	</tr>
	<tr>
		<td class="style1" align="right">Product Price:&nbsp;&nbsp;</td>
		<td align="left"><input type="text" name="price" pattern="[0-9]*$" title="Plz Enter Numbers Only" required><center></td>
	</tr>
	<tr>
		<td class="style1"  align="right">Short Description:&nbsp;&nbsp;</td>
		<td align="left"><input type="text" name="desc" required></center></td>
	</tr>
	<tr>
		<td class="style1"  align="right">Full Description:&nbsp;&nbsp;</td>
		<td align="left"><input type="text" name="fdesc" required></center></td>
	</tr>
	
	
	<tr>
		<td class="style1"  align="right">Catgory:&nbsp;&nbsp;</td>
		<td align="left"><select input type="text" name="cat" required>
		  
			 <option>--select--</option>
      <?php
	       $sql="select distinct catg from product";
		   $res=$con->query($sql);
		   
		 while($row=mysqli_fetch_array($res))
		 {?>
	
	   <option value="<?php echo $row['catg']?>"/><?php echo $row['catg']?></option>
		<?php	 
		 }
	  ?>
			</select>
		</td>
	</tr>

	<tr align="center">
		<td colspan="2"><center><input type="submit" name="btnInsert" value="Submit"></center>
	   </td>
	</tr>
	
	
</table>

<?php
              include("connect.php");
                  if(isset($_POST['btnInsert']))
				{
					  $file=$_FILES['image']['tmp_name'];
					 echo $iname=$_FILES['image']['name'];
					  if(isset($iname))
					  {
					 if(!empty($iname))
					  {      
                      $location = 'images/';      
                     if(move_uploaded_file($file, $location.$iname))
					 {
                             echo 'uploaded';
                     }
                    } 
					  }			
                else
					{
                     echo 'please upload';
                    }
				/*	if (isset($iname))
					{
                        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.<br>";
                    }
                         else 
                         {
                        echo "Sorry, there was an error uploading your file.<br>";
                    }
				 
				 
				  if (isset($iname))
                         {
                        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.<br>";
                    }
                         else 
                         {
                        echo "Sorry, there was an error uploading your file.<br>";
                    }*/
				  $pid=$pid;
				  $pname=$_POST['pname'];
				  $image=$iname;
				  $price=$_POST['price'];
				  $desc=$_POST['desc'];
				  $fdesc=$_POST['fdesc'];
				   $cat=$_POST["cat"];
				   $disc=0;
				  $sql= "Insert into product Values('$pid','$pname','$image','$desc','$fdesc','$price','$disc','$cat')";
				  
				  if(mysqli_query( $con,$sql))
				  {
					  echo "<script>alert('Product Details Inserted Succesfully');</script>";
					  //header("Location:new.php");
				  }
				  else
				  {
					  echo "<script>alert('Insert Again');</script>";
				  }	
				  }	


               /* $id=$_POST["pid"];
                $nm=$_POST["pname"];
                $img=$iname;
                $auth=$_POST["price"];
                $sum=$_POST["desc"];
                $cat=$_POST["cat"];

                $sql = "INSERT INTO product
                VALUES ('$id','$nm','$img','$auth','$sum','$cat')";

                if (mysqli_query($con, $sql)) 
                {
                    echo "New record created successfully";
                       // header("Location:prodentry.php");
                } 
                else 
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }
                	}*/			  
				  ?>
</form>
 </body>
 <?php include("footer.php"); ?>

 </html>