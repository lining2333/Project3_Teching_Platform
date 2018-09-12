<?php 
	$grade = $_GET["grade"];
	$wanjia = $_GET["wanjia"];
	$con = mysqli_connect('localhost','root','','modian');
	mysqli_query($con,"SET NAMES utf8");

	// $con = mysqli_query($con,"SET NAMES utf8");
	//写成上面这个样子会影响后面所有操作;
	if (!$con)
			 {
			 die('Could not connect: ' . mysqli_connect_error());
			 }
	$sql = "SELECT * FROM paihang";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_all($result,MYSQLI_BOTH);
	$rows_Number = mysqli_num_rows($result);
	mysqli_free_result($result);
	
	if ($rows_Number == '0') {
				$id = 1;
			}
			else{
				$id = $row[$rows_Number-1]['paihang_id']+1;
			}
	$sql1 = "INSERT into paihang (paihang_id,paihang_name,paihang_score) values ('$id','$wanjia','$grade')";//当insert语句没有写表的字段值时会重复插入
	$result1 = mysqli_query($con,$sql1);
	$url = '../zhishi.php'.'?mingcheng='.$mingcheng;

	echo "<script language='javascript'>";  
	echo "location.href='$url'"; 
	echo "</script>"; 
 ?>