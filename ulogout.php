<?php
session_start();
session_destroy();
header("Location:main.php");
// echo "<script>alert(\"Logged Out Successfully!!!\")</script>";
// echo "<script>location.replace('main.php')</script>" ;
?>