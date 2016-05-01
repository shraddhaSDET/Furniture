<html>
<head>
<link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body background="images/Back1.jpg">
<?php
         include("header.php");
		 include("header3.php");

		$val=$_GET['val'];
		include("connect.php");
		$sql="select id,name,img,price,overview,details,catg from product where id='$val'";
		$rel=$con->query($sql);
		$data=mysqli_fetch_array($rel);
		
	?>
	</br>
	</br>
	<form method="post" enctype="multipart/form-data" action="">
	
    <table align='center' border='1' cellspacing='0' cellpadding='0' width='40%' height='80%' bgcolor="white">
	
	<tr align="center"><td class="style3" colspan="2">Update Details</td></tr>
	<tr>
	   <td width='30%' class="style1" align="center">Product Id</td>
	<td align="center"><?php echo $data['id']; ?></td>
    </tr>
	
	<tr>
				<td class="style1" align="center" width='30%'>Product Name</td>
				<td align="center"><input type="text" name="pname" value="<?php echo $data['name']; ?>" required ></td>
	</tr>
	
	<tr>
		<td class="style1" align="center" width="30%">Product view</td>
		<td align="center"></br><input type="text" name="img" value="<?php echo $data['img']?>"></center>
		<input type="file" name= "image" >
		<table align="center"><tr><td><img src="images/<?php echo $data['img']?>" width="100px" height="100px"></center></td></tr></table>
		</td>
	</tr>

			
	 <tr>
				<td class="style1" align="center" width='30%'>Price</td>
				<td align="center"><input type="text" name="price" value="<?php echo $data['price']; ?>" pattern="[0-9]*$" title="Plz Enter Numbers Only" required></td>
			</tr>

     <tr>
				<td class="style1" align="center" width='30%'>Overview</td>
				<td align="center"><input type="text" name="sdesc" value="<?php echo $data['overview']; ?>" required></td>
			</tr>
				
		
	<tr>
				<td class="style1" align="center" width='30%'>Full Description</td>
				<td align="center"><input type="text" name="desciption" value="<?php echo $data['details']; ?>" required></td>
			</tr>
			
	<tr>
				<td class="style1" align="center" width='30%'>Catgory</td>
				<td align="center">
				<select input type="text" name="cat" required>
		     <option value="<?php echo $data['catg']; ?>"><?php echo $data['catg']; ?></option>
			 
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
     <td colspan="2"><input type="submit" name="btnUpdate" value="Update"></td>
    </tr>
	
</table>
<?php
            
        include("connect.php");
		
        if(isset($_POST['btnUpdate']))
		{
			$file=$_FILES['image']['tmp_name'];
					 echo $iname=$_FILES['image']['name'];
					  if(isset($iname))
					  {
					 if(!empty($iname))
					  {     

                        if($_POST['cat']== 'Cupboard')
						{							
                      $location = 'cb/';
                        }	
                      if($_POST['cat']== 'TV Cabinet')
						{							
                      $location = 'tv/';
                        }	
                     if($_POST['cat']== 'Shoe Rack')
						{							
                      $location = 'shoe/';
                        }
                      if($_POST['cat']== 'Sofa')
						{							
                      $location = 'sofa/';
                        }
                     if($_POST['cat']== 'Dining Table')
						{							
                      $location = 'dining/';
                        }
                   if($_POST['cat']== 'Sofa')
						{							
                      $location = 'sofa/';
                        }
                    if($_POST['cat']!= 'Cupboard' &&'Sofa'&&'TV Cabinet'&&'Shoe Rack'&&'Dining Table')
						{							
                      $location = '';
                        }						
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
		
		    $pid=$data['id'];		
			$pname=$_POST['pname'];
			//$image=$_POST['image'];
			$img=$location.$iname;
			$image=$_POST['img'];
			$price=$_POST['price'];
			$sdesc=$_POST['sdesc'];
			$desc=$_POST['desciption'];
			$cat=$_POST['cat'];
			
			$sel="update product set name='$pname', img='$img' , price='$price' ,overview='$sdesc' ,details='$desc' , catg='$cat' where id='$pid'";
			 if(mysqli_query($con,$sel))
            { 
	              echo "<script>alert(\"Updated Successfully\");</script>";
				  //header("location:productview.php");
				  	echo "<script>location.replace('productview.php')</script>" ;
            }
			else
			{
				echo "<script>alert(\"Update again\");</script>";
			}
			if(empty($img))
			{
				$sel="update product set name='$pname', img='$image' , price='$price' ,overview='$sdesc', details='$desc' , catg='$cat' where id='$pid'";
				$rel=$con->query($sel);
				echo"updated";
			}
		}
		

?>
</form>
</body>
<?php include("footer.php"); ?>

</html>









