<html>
<link rel="stylesheet" href="style1.css">
<body background="b.png">
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1086687584723311',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<?php include("header.php");?>
<?php include("header6.php");?>
</br>
<form method="POST">

<table border="1" align="center" cellspacing="0" cellpadding="0" width="30%" height="40%" bgcolor="white">
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
</br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="3%" height="3%" bgcolor="white">
<tr>
<td colspan="2"><img id="loginBtn" src="images/fb.png" onclick="FB.login()" style="cursor: pointer;" ></td>

</tr>
</table>
</br>
<!--<img id="loginBtn" onclick="FB.login()" style="cursor: pointer;" src="https://s-static.ak.fbcdn.net/rsrc.php/zB6N8/hash/4li2k73z.gif"/>-->



<?php include("footer.php");?>

<?php
   if(isset($_POST['login']))
   {
	   $uname=$_POST['uname'];
	   $pass=$_POST['pass'];
	   include("connect.php");
	   $sel="select username,password,id from reg where username='$uname' and password='$pass'";
	   $result=$con->query($sel);
			if($row=mysqli_fetch_array($result))
				{					
					header("Location:prodView.php");
					session_start();
		           $_SESSION['uid']=$row['id'];
				   $uid= $_SESSION['uid'];
                   $value1=$_GET['val'];
				   $sql="select * from product where id=".$value1;
                   $result = $con->query($sql);
                   $row = $result->fetch_assoc();
				    $nm=$row['name'];
					$cost=$row['price'];
					
					$sql1="insert into temp(id,pid,name,price) values('$uid','$value1','$nm','$cost')";
					if (mysqli_query($con, $sql1)) 
					{
						//echo "New record created successfully";
					} 
					else 
					{
						echo  mysqli_error($con);
					}
					header("Location:payment.php");
		             
			}
			else
			{
				echo "<script>alert('Invalid Username or Password');</script>";
				
				
	        }
   }

?>
<div id="fb-root"></div>
    <script src="http://connect.facebook.net/en_US/all.js"></script>
    <script>
        FB.init({appId: '1086687584723311', status: true,
                   cookie: true, xfbml: true});
                   
        FB.getLoginStatus(function(response) {
             onStatus(response);
             FB.Event.subscribe('auth.statusChange', onStatus);	
             //FB.Event.subscribe ('auth.login', reloadPage);
			 FB.Event.subscribe('auth.login', function() {
				window.location.reload();
				
			 });
        });
        
        function onStatus(response) {
             if (response.session) { 
                showAccountInfo();   
            } else {
                showLoginButton();
            }
        }

        function reloadPage(response){
            if (response.session) {
                    window.location.reload();
            } else {
                  showLoginButton();
            }
        }
        
        function showAccountInfo() {
            FB.api(
            {
                method: 'fql.query',
                query: 'SELECT uid,name, pic FROM user WHERE uid='+FB.getSession().uid
            },
                function(response) {
                    var imageLink = '<a id="userImage" target="_blank" href="https://www.facebook.com/profile.php?id=' + response[0].uid + '">' + 
                                    '<imgid="userPic" src="' + response[0].pic + '"/></a>';
                    var userLink = '<a target="_blank" href="https://www.facebook.com/profile.php?id=' + response[0].uid + '">' + response[0].name + '</a>';
                    document.getElementById('account-info').innerHTML = (
                        imageLink + '<div id="userInfo"><span id="userName">' +
                        userLink + '</span>' + ' <img onclick="logout()" style="cursor:pointer;float:right;padding:0pt 25px 0pt  0pt;"' + 
                        'src="images/fb.png"/></div>'
                    );
                }
            );
        }
        
        function showLoginButton() {      
            document.getElementById('account-info').innerHTML = (
                '<img id="loginBtn" onclick="FB.login()" style="cursor: pointer;"' +
                'src="images/fb.png">'
            );
        }
        
        function logout(){
            FB.logout();
            alert('You just logged out!');
            window.location.reload(main.php);
        }
    </script>
	
<!--<?
	$value) {
    if ($key != 'sig') {
      $payload .= $key . '=' . $value;
    }
    }
    if (md5($payload . $application_secret) != $args['sig']) {
    return null;
    }
    return $args;
}

public function getUserInfo($cookie)
{
    $user = array();
    $user['fb_uid'] = json_decode(file_get_contents(
            'https://graph.facebook.com/me?access_token=' .
            $cookie['access_token']))->id;
    $first_name = json_decode(file_get_contents(
            'https://graph.facebook.com/me?access_token=' .
            $cookie['access_token']))->first_name;
    $last_name = json_decode(file_get_contents(
            'https://graph.facebook.com/me?access_token=' .
            $cookie['access_token']))->last_name;
    $name = json_decode(file_get_contents(
            'https://graph.facebook.com/me?access_token=' .
            $cookie['access_token']))->name;
    $user_link = json_decode(file_get_contents(
            'https://graph.facebook.com/me?access_token=' .
            $cookie['access_token']))->link;
    $email = json_decode(file_get_contents(
            'https://graph.facebook.com/me?access_token=' .
            $cookie['access_token']))->email;        
    return $user;
}

?>-->


</body>
</html>
