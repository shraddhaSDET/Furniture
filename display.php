<?php include("header.php");?>
<head>
   <style type="text/css">
        body
        {
            font-family: Arial, Sans-Serif;
            font-size: 0.75em;
        }
        #imgstones
        {
            width: 200%;
            overflow: hidden;
        }
        #imgstones a
        {
            position: relative;
            float: left;
            margin: 20px;
        }
        #imgstones a span
        {
            background-repeat: no-repeat;
            width: 80px;
            height: 60px;
            display: none;
            position: absolute;
            left: 15px;
            top: 15px;
        }
		
        #imgstones
        {
            border: solid 1px black;
            padding: 55px;
        }
		
		sty1
		{
			font-weight:bold;
			size:16px;
		}
    </style>
 
</head>
<body>



<?php
include("header2.php");
include("connect.php");

$value1 =(int)$_GET['value'];

?>
<html>
<head>

<script>
function goBack() {
	
    //window.location.href="ProductView";
	//return false;
}
function demo()
{
	window.location.href="login.php";
	
}
function demo1()
{
	window.location.href="guest.php?val='.$value1.'";
	
}

</script>
</head>
<body background="b.png">
<form method="post">
<center>
<div align="center" style="width:80%%;height:auto;">
<?php
//******* set flag=0 for skey 
 session_start();
 $subj = ! empty($_SESSION['uid']) ? $_SESSION['uid'] : ' ';
		 $_SESSION['uid']= $subj; 
 $uid= $_SESSION['uid'];

 $subj = ! empty($_SESSION['gid']) ? $_SESSION['gid'] : ' ';
		 $_SESSION['gid']= $subj; 
 $gid= $_SESSION['gid'];

$con= new mysqli("localhost","root","","furniture");/*
$sql0 ="select * from skey" ;
$res0 = $con->query($sql0);

while($row0 = $res0->fetch_assoc()) 
			{ 
		        $var = $row0['word'];
				$upd1 = "update skey set flag='0' where word='$var'" ;
				if ($con->query($upd1) === TRUE) 
			{
				//echo "Updated";
			}
           else 
			{
			echo $con->error;
			}
			}
//*****set flag=0 for mkey flag
$sql00 ="select * from mkey" ;
$res00 = $con->query($sql00);

while($row00 = $res00->fetch_assoc()) 
			{ 
		        $var = $row00['word'];
				$upd1 = "update mkey set flag='0' where word='$var'" ;
				if ($con->query($upd1) === TRUE) 
			{
				//echo "Updated";
			}
           else 
			{
			echo $con->error;
			}
			}
//*******check if mkey word exists in comments 

$sql ="select word,score from mkey";
$sql2="select com from comments where pid='$value1'";
   $s ="";
$res = $con->query($sql);

while($row = $res->fetch_assoc()) 
			{ 
		$s .=$row['word'].",";
			}
			$split = explode(',', $s);
	$i=0;
	$score=0;
 $res1 = $con->query($sql2);
 $d=mysqli_num_rows($res1);
 // $flag =0;
while($row1=$res1->fetch_assoc())
 {
	 foreach($split as $sp)
	 { 
			$var= $row1['com'];
			//$i=strpos($var,$sp);
		if($sp=="") 
			$sp="xxx";
		if(strpos($var,$sp)!==false)
		 {
			// echo "Found";
			 $flag =1 ;
			  $sql12="update mkey set flag='".$flag."' where word='".$sp."'";
			 
			if ($con->query($sql12) === TRUE) 
			{
				//echo "Updated";
			}
           else 
			{
			
			
			}
			 break;
		 }
	 }
 }
 
 //******Check if multikey word exists in skey and set flag=2
 
 $sql3 ="select word from mkey where flag='1'" ;
 $sql4="select word from skey";
   $s1 ="";
$res3 = $con->query($sql3);
$res4 = $con->query($sql4);
while($row3 = $res3->fetch_assoc()) 
			{ 
		$s1 .=$row3['word']." ";      //mkey words
			}
			$split1 = explode(' ', $s1);
 while($row4=$res4->fetch_assoc())
 {
	 foreach($split1 as $sp1)
	 { 
			$var1= $row4['word'];
			//$i=strpos($var,$sp);
		if($sp1=="") 
			$sp1="xxx";
		if(strpos($var1,$sp1)!==false)
		 {
			// echo "Found";
			 $flag1 =2;
			  $sql12="update skey set flag='".$flag1."' where word='".$sp1."'";
			 
			if ($con->query($sql12) === TRUE) 
			{
				//echo "Updated";
			}
           else 
			{
			echo $con->error;
			}
			 break;
		 }
	 }
 }

//******** check skey word where flag!=2  in comments 

$sql5 ="select word,score from skey where flag!='2'";
$sql6="select com from comments where pid='$value1'";
   $ss ="";
$res5 = $con->query($sql5);

while($row5 = $res5->fetch_assoc()) 
			{ 
		$ss .=$row5['word'].",";    //word from skey
			}
			$split2 = explode(',', $ss);
	
 $res6 = $con->query($sql6);
 $d=mysqli_num_rows($res1);
 // $flag =0;
while($row6=$res6->fetch_assoc())
 {
	 foreach($split2 as $sp)
	 { 
			$var= $row6['com'];
			//$i=strpos($var,$sp);
		if($sp=="") 
			$sp="xxx";
		if(strpos($var,$sp)!==false)
		 {
			// echo "Found";
			 $flag =1 ;
			  $sql12="update skey set flag='".$flag."' where word='".$sp."'";
			 
			if ($con->query($sql12) === TRUE) 
			{
				//echo "Updated";
			}
           else 
			{
			echo $con->error;
			}
			 break;
		 }
	 }
 }
 
 //*******Adding Scores of skey
 
 $sql7 = "select score from skey where flag='1'";
 $res7 = $con->query($sql7);
$score1 =0;
			while($row7 = $res7->fetch_assoc()) 
			{ 
				$score1=$score1+$row7['score'];
			}
			
 //*******Adding Scores of skey
 
 $sql8 = "select score from mkey where flag='1'";
 $res8 = $con->query($sql8);
$score2 =0;
			while($row8 = $res8->fetch_assoc()) 
			{ 
				$score2=$score2+$row8['score'];
			}			
 $sum = $score1+$score2;*/
//echo $final;
/*$sql0="select sum(score) as sum from comments where pid='$value1'";
$res=$con->query($sql0);
if($row=$res->fetch_assoc())
{
	$sum=$row['sum'];
//*********** calculating overall rating
                     if($sum==0)
					 {
						 $final = "No Ratings";
					 }
					 else  if ($sum > 0 && $sum <= 4)
                    {
                        $final = "1 /10";
                    }
                    else if ($sum >= 5 && $sum <= 9)
                    {
                        $final = "2 /10";
                    }
                    else if ($sum >= 10 && $sum <= 14)
                    {
                        $final = "3 /10";
                    }
                    else if ($sum >= 15 && $sum <= 19)
                    {
                        $final = "4 /10";
                    }
                    else if ($sum >= 20 && $sum <= 24)
                    {
                        $final = "5 /10";
                    }
                    else if ($sum >= 25 && $sum <= 29)
                    {
                        $final = "6 /10";
                    }
                    else if ($sum >= 30 && $sum <= 34)
                    {
                        $final = "7 /10";
                    }
                    else if ($sum >= 35 && $sum <= 39)
                    {
                        $final = "8 /10";
                    }
                    else if ($sum >= 40 && $sum <= 44)
                    {
                        $final = "9 /10";
                    }
                    else if ($sum >= 45)
                    {
                        $final = "10 /10";
                    }
}
*/
?><br><br>
<table border="2" align="center" width="70%" cellspacing="0" cellpadding="0" class="intabular" bgcolor="white">
<tr><td colspan="2" align="left">
<?php

if ($con->connect_error)
  {
  die('Could not connect: ' . $con->connect_error);
  }
  $sql="select * from product where id=".$value1;
 $result = $con->query($sql);
 
echo "<table align='center'>";
if (mysqli_query($con, $sql)) 
{ 
while($row = $result->fetch_assoc()) 
{
	?>
	<tr align="center"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="images/<?php echo $row['img']; ?>" height="300px" width="300px"/><br/></td></tr>
	<?php $var =$row['name'];  ?>
	<input type="hidden" name="nm" value="<?php echo $var;  ?>">

	
	<tr align="center"><td><label style="font-weight:bold;font-size:20px;color:#aa5500" name="nm" for="id1"><i><u><?php echo $row['name']; ?></u></i></label></br></br></td></tr>
    <tr align="center"><td style="font-weight:bold;font-size:17px;color:#aa5500">OverView</td></tr>
	<tr align="center"><td><textarea rows="5" cols="60" name="txt" disabled><?php echo $row['overview']; ?></textarea></br></br></td></tr>
	<tr align="center"><td style="font-weight:bold;font-size:17px;color:#aa5500">Cost</td></tr>
	<tr align="center"><td><label size="10"><b>$ <?php echo $row['price']; ?></b></label></br></br></td></tr>
	<tr align="center"><td style="font-weight:bold;font-size:17px;color:#aa5500">Details</td></tr>
	<tr align="center"><td><textarea rows="5" cols="60" name="txt" disabled><?php echo $row['details']; ?></textarea></br></br></td></tr>
	
	
<tr>
<td align="center" style="font-weight:bold;font-size:17px;color:#aa5500">Select Qty:&nbsp;&nbsp;&nbsp;<br><br>
<select>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select><br><br></td>
</tr>
    <tr align="center"><td>
	<input type="submit" name="s1" style="color:white;font-weight:bold;background-color:brown;height:40px;width:20% " value="Add To Cart" >
	&nbsp;&nbsp;

	<input type="submit" name="s2" style="color:white;font-weight:bold;background-color:brown;height:40px;width:30%" value="Guest Chekout"/></td>
	</tr></table></div>
</table>
	<?php
	$cc=$row['price'];
	if(isset($_POST['s2']))
  {
	
	 echo"<script>window.location.href='guest.php?val=".$value1."'</script>";
	
  }
if(isset($_POST['s1']))
{
	
	 if($gid==' ')
	{
		if($uid==' ')
	{
	 echo"<script>window.location.href='login.php?val=".$value1."'</script>";
	}
	else
	{
    $nm=$_POST['nm'];
	$uid=$_SESSION['uid'];

	//$l=$_POST["id4"];
	$sql1="insert into temp(id,pid,name,price) values('$uid','$value1','$nm','$cc')";
	if (mysqli_query($con, $sql1)) 
       {
          echo "<script>alert('Item added to cart successfully..');</script>";
       } 
	   else 
       {
    echo  mysqli_error($con);
       }
	}
	}
	else
	{	
		$nm=$_POST['nm'];
	$gid=$_SESSION['gid'];

	//$l=$_POST["id4"];
	$sql1="insert into temp(id,pid,name,price) values('$gid','$value1','$nm','$cc')";
	if (mysqli_query($con, $sql1)) 
       {
     echo"<script>alert('Item added to cart successfully..');</script>";
       } 
	   else 
       {
    echo  mysqli_error($con);
       }
	}
	
	
	}
	
  
	
	}
}





?>
</center>
</form>

</body>

</html>
<?php include("footer.php"); ?>