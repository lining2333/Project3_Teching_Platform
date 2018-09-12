<?php 
	$shenfen = $_POST["shenfen"];
	$id = $_POST["id"];
	$pwd = $_POST["pwd"];
	$con = mysqli_connect('localhost','root','','modian');
	mysqli_query($con,"SET NAMES utf8");
	if (!$con)
			 {
			 die('Could not connect: ' . mysqli_connect_error());
			 }
	switch ($shenfen) {
		case '学生':
			$sql = "SELECT * FROM xuesheng";
			break;
		case '教师':
			$sql = "SELECT * FROM jiaoshi";
			break;
		case '外校人员':
			$sql = "SELECT * from waixiao";
			break;
		default:
			echo "发生错误";
			break;
	}

	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_all($result,MYSQLI_BOTH);
	$rows_Number = mysqli_num_rows($result);

	for ($i=0; $i < $rows_Number; $i++) { 
		if ($id == $row["$i"]["id"]) {
			if ($pwd == $row["$i"]["pwd"]) {
				$mingcheng = $row["$i"]["name"];
			}
		}
	}
	$url = '../jiaoxue.php'.'?mingcheng='.$mingcheng;
	echo "<script language='javascript'>";  
	echo "location.href='$url'"; //使用单双引号需要注意的问题，需用单引号引用 
	echo "</script>"; 
 ?>