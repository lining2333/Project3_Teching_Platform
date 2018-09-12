<?php
//获取在删除页面输入的所删除实验序号  
	$shiyan_Name_Delete = $_POST["shiyan_Name_Delete"];
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,"modian");
	mysqli_query($con, "SET NAMES utf8");
// 通过DELETE语句删除与所输入序号相等的实验 
	$sql="DELETE FROM shiyan WHERE shiyan_Id = $shiyan_Name_Delete";
	mysqli_query($con,$sql);
 	mysqli_close($con);
 		echo '<script language="javascript">';
		echo "window.location.href='../jiaoxue.php'";//实现页面跳转刷新
		echo '</script>';
?>
