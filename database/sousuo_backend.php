<?php 
	$zhi = $_GET['zhi'];

	$con = mysqli_connect('localhost','root','','modian');
	mysqli_query($con,"SET NAMES utf8");
	if (!$con)
			 {
			 die('Could not connect: ' . mysqli_connect_error());
			 }
	$sql = "SELECT * from sousuozhi";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_all($result,MYSQLI_BOTH);
	$rows_Number = mysqli_num_rows($result);
	for ($i=0; $i < $rows_Number; $i++) { 
		if (stristr($row[$i]['sousuozhi_content'],$zhi)) {
			$url = "../".$row[$i]['sousuozhi_a'].".php";
			echo "<script language='javascript'>";  
			echo "location.href='$url'"; 
			echo "</script>";
		}
	}
?>
