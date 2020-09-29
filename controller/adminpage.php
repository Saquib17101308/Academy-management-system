<?php
session_start();
include '../model/utility.php';
$Util = new Utility();

if($Util->check() == false) {
	header('location:signin.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../view/css/Styles1.css">
<link rel="stylesheet" href="../view/css/header.css">
<link rel="stylesheet" href="../view/css/menu.css">
</head>
<?php
$n=$_SESSION['uid'];
$m=$_SESSION['uname'];
?>

<body>


 
<?php include '../view/header.php';?>
 
<?php include '../view/adminmenu.php';?>
      
       

</body>
</html>