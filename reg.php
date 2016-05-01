<html>
<script>
function show(uname)
{
    var xhttp;    
 /* if (cust == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }*/
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("display").innerHTML = xhttp.responseText;
    }
  };
  var name=document.getElementById("uname").value;
  xhttp.open("GET", "checkname.php?name="+name, true);
  xhttp.send();
}

</script>
<body background="b.png">
<?php
include("header.php");
include("connect.php");
$var="select max(id) as max from reg";
	   $res=$con->query($var);
       $row = mysqli_fetch_assoc($res);

	     $sid = $row['max'] + 1;
?>
<form method="POST" enctype="multipart/form-data" action="">
<table align="center" border="1" width="60%" height="90%" cellspacing="0" cellpadding="0" bgcolor="white">
<tr><td>
<table align="center" border="0" width="60%" height="90%" cellspacing="0" cellpadding="0">
<tr><td colspan="2" class="carth" ><center><h2><u>Register</u></h2></center></td></tr>
<tr>
<td align="right" class="style1">User Id &nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><input type="text" name="sid" style="font-weight:bold" value="<?php echo $sid ?>" disabled><br><br></td>
</tr>

<tr>
<td align="right" class="style1">First Name &nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><input type="text" name="fname" pattern="[a-zA-Z' ']*$" title="Plz Enter Characters Only" required><br><br></td>
</tr>

<tr>
<td align="right" class="style1">Middle Name &nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><input type="text" name="mname" pattern="[a-zA-Z' ']*$" title="Plz Enter Characters Only" required><br><br></td>
</tr>

<tr>
<td align="right" class="style1">Last Name &nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><input type="text" name="lname" pattern="[a-zA-Z' ']*$" title="Plz Enter Characters Only" required><br><br></td>
</tr>


<tr>
<td align="right" class="style1">Gender&nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"> <select name="gender" required>
   <option>--Select--</option>
	 <option>Male</option>
	 <option>Female</option>
	 </select><br><br>

</td>
</tr>

<tr>
<td align="right" class="style1">Contact No&nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><input type="text" name="cont" pattern="[0-9]{10}" title="Plz Enter Valid Contact No" required><br><br>
</td>
</tr>

<tr>
<td align="right" class="style1">EmailId &nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><input type="text" name="email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" title="Plz Enter valid email Address" required><br><br>
</td>
</tr>

<tr>
<td align="right" class="style1">City &nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><input type="text" name="city" pattern="[a-zA-Z' ']*$" title="Plz Enter Characters Only" required><br><br>
</td>
</tr>


<tr>
<td align="right" class="style1">Address &nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><textarea rows="2" cols="20" name="address" required></textarea><br><br>
</td>
</tr>

<tr>

<td align="right" class="style1">Username &nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><input type="text" name="username" id="uname" required>
<table><tr><td><div id="display"></td></tr></div></table>
    <input type="button" id="check" value="Check" onclick ="show(uname)"><br><br>
</td>	
</tr>
<tr>
<td align="right" class="style1">Password &nbsp;&nbsp;&nbsp;<br><br></td>
<td align="left"><input type="password" name="pass" required><br><br>
</td>
</tr>

<tr>
<td align="center" colspan="2"><input type="submit" class="bulk5" value="Register" name="reg"></td>
</tr>
</table>
</td></tr>
</table>
</br></br>
<?php include("footer.php");?>

<?php


if(isset($_POST['reg']))
{	$sid=$sid;
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$contact=$_POST['cont'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	
		
       $sql="Insert into reg values('$sid','$fname','$mname','$lname','$gender','$email','$contact','$city','$address',
	                                '$username','$pass')";
	  if(mysqli_query($con,$sql))
	  {
		  echo "<script>alert('Register succesfully');</script>";
		   echo "<script>location.replace('Prodview.php')</script>" ;
 
	  }
	  else
	  {
		  echo"<script>alert('Username Available')</script>";
	  }
	 
	}


?>

</form>

</body>
</html>

