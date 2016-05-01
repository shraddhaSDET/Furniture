<!DOCTYPE html>
<html>
<head>
<title>Popup contact form</title>
<link href="element.css" rel="stylesheet">
<script>
function check_empty() {
if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('new').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('new').style.display = "none";
}
</script>


</head>
<?Php  include("connect.php"); ?>
<!-- Body Starts Here -->
<body id="body" style="overflow:hidden;">
<div id="new" style="width:100%;
height:100%;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form method="post"  id="form">
<img id="close" src="images/3.png" onclick ="div_hide()">
<table border="0" align="center" cellspacing="0" cellpadding="0" width="30%" height="30%" bgcolor="white">
<tr align="center" class="carth"><td colspan="2"><h2><u>USER LOGIN</u></h2></td></tr>
<tr align="center">
<td class=" style1" align="right">Username &nbsp;</br></br></td>
<td align="left"><input type="text" name="uname" required></br></br></td>
</tr>

<tr align="center">
<td class=" style1" align="right">Password &nbsp;</br></br></td>
<td align="left"><input type="password" name="pass" required></br></br></td>
</tr>

<tr align="center">
<td colspan="2"><input type="submit" class="bulk5" value="LOGIN" name="login"></br></br></td>
</tr>
 <tr align="center">
	<td colspan="2" style="text-align:center; color:blue;font-size:17px">Not a Member? <a href="reg.php">Register Now</a></td>
	</tr>

</table>
</br></br></br></br>
<?php include("footer.php");?>


</form>
</div>
<?php

 include("connect.php");
                  if(isset($_POST['reg']))
				{
                    $pid=$_POST['n'];
				    $pname=$_POST['c'];
				    $email=$_POST['e'];
	                $coun=$_POST['coun'];
	                $id=$_POST['i'];
	
				    $sql= "Insert into product Values('$pid','$pname','$email','$coun','$id')";
				  
				  if(mysqli_query( $con,$sql))
				  {
					  echo "<script>alert('New Record Inserted Succesfully');</script>";
					  //header("Location:new.php");
				  }
				  else
				  {
					  echo "<script>alert('Insert Again');</script>";
				  }	
				}
				?>
				</form>
				
				
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
<h1>Click Button To Popup Form Using Javascript</h1>
<button id="popup" onclick="div_show()">Popup</button>
</body>
<!-- Body Ends Here -->
</html>