<?php 
error_reporting(E_ALL || ~E_NOTICE);
$zanshu = $_GET['zanshu'];
$zanshu2 = $_GET['zanshu2'];
$zanshu3 = $_GET['zanshu3'];
$con = mysqli_connect('localhost','root','','modian');
$sql = "UPDATE jiaoshi_info SET jiaoshi_zan = $zanshu where jiaoshi_id = '1'";
mysqli_query($con,$sql);
$sql = "UPDATE jiaoshi_info SET jiaoshi_zan = $zanshu2 where jiaoshi_id = '2'";
mysqli_query($con,$sql);
$sql = "UPDATE jiaoshi_info SET jiaoshi_zan = $zanshu3 where jiaoshi_id = '3'";
mysqli_query($con,$sql);
$url = '../jiaoshi.php'.'?mingcheng='.$mingcheng;
	echo "<script language='javascript'>";  
	echo "location.href='$url'"; 
	echo "</script>";
 ?>