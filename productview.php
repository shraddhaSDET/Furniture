<html>
<link rel="stylesheet" href="style1.css">

<script>
function showDiv(elem)
{
	if(elem.value == 0)
	{
      document.getElementById('namediv').style.display = "block";
	  document.getElementById('catdiv').style.display = "none";
	}
   if(elem.value == 1)
   {
      document.getElementById('catdiv').style.display = "block";
	  document.getElementById('namediv').style.display = "none";
   }
}
</script>
<body background="b.png">
<form method="POST">
<?php
include("header.php");
include("header3.php");
?></br>
<center>
<table width="70%" border="0" align="center" bgcolor="white">
<tr><td>

<table align="center">
<tr><td>
 <label style="color:brown;font-size:18px"><b>Search By</b></label>:  <select id="test" name="form_select" onchange="showDiv(this)">
<option>--select--</option>
   <option value="0">Name</option>
   <option value ="1">Catgory</option>
</select>
</td></tr>
</table>

<div id="namediv" style="display: none;" bgcolor="white">
   <table border="1" bgcolor="white" align="center">
   <tr><td>Name:</td><td><input type="text" id="txt1" name="t1"></td></tr>
    <tr><td align="center" colspan="2">
	     <input type="button" value="Search" id="name" name="nsearch" onClick="names(txt1)">
		 </td>
   </tr>
    </table>
</div>

<div id="catdiv" style="display: none;">
   <table border="1" bgcolor="white" align="center">
   <tr><td>Catgory:</td><td><input type="text" id="t2" name="t2></td></tr>
    <tr>
	<td align="center" colspan="2">
	<input type="button" value="Search" id="cat" name="catsearch" onclick="cats(t2)">
	</td>
	</tr>
    </table>
</div>
</center><br><br>
<div id="txtHint"></div>
<table align="center" width="90%" height="40%" bgcolor="white">
<tr>
<td>
<?php
  include("connect.php");
  $sel="select id,name,img,price,catg from product";
  $rel=$con->query($sel);
  if(mysqli_num_rows($rel)==0)
  {
	  echo "<script>alert('No data found')</script>";
  }
  else
  {
	  echo
	  "<label class='style3'><center><b><h2>Product Details</h2></b></center></label>
	 
	       <table border='1' align='center' cellspacing='0' cellpadding='0' width='90%' height='50%'>
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
				  <td width="15%" height="30%">
				  <img src="images/<?php echo $data['img']?>" width="50px" height="50px"></td>
		<?php echo " <td width='15%'>$ ".$data['price']."</td>
				  <td width='15%'>".$data['catg']."</td>
				  <td width='15%'><a href='pedit.php?val=".$data['id']."'>Edit</a></td>
				  <td width='15%'><a href='pdelete.php?val=".$data['id']."'>Delete</a></td>
				  </tr>";
				  
				  
	      }
  } 
 
  ?>
  
  </table>
  <div id="txtHint"></div>

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
  xhttp.open("GET", "pname.php?name="+name, true);
  xhttp.send();
}

function cats(t2) {
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
  var name=document.getElementById("t2").value;
  xhttp.open("GET", "cat.php?name="+name, true);
  xhttp.send();
}



  </script>
  </td>
  </tr>
  </table>
  </form>
  <?php include("footer.php"); ?>

  </html>