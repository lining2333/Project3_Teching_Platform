
<?php  
$liuyan_user = $_COOKIE["mingcheng"];
$liuyan_img = "../images/touxiang.jpg";
	$liuyan_time = date("Y 年 m 月 d 日 H 点 i 分 s 秒");
	$liuyan_title = $_POST["liuyan_title"];
	$liuyan_Content = $_POST["liuyan_Content"];
	$con = mysqli_connect('localhost', 'root', '','modian');
	mysqli_query($con, "SET NAMES utf8");
	$sql = "SELECT * FROM liuyan";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_all($result,MYSQLI_BOTH);
	$rows_Number = mysqli_num_rows($result);
	mysqli_free_result($result);
	
	if ($rows_Number == '0') {
				$id = 1;
			}
			else{
				$id = $row[$rows_Number-1]['liuyan_id']+1;
			}

    $sql = "INSERT INTO liuyan (liuyan_id,liuyan_img,liuyan_time,liuyan_user,liuyan_title,liuyan_Content)VALUES ('$id','$liuyan_img','$liuyan_time','$liuyan_user','$liuyan_title','$liuyan_Content')";

	mysqli_query($con,$sql);
//在php中引入JavaScript语言，实现页面刷新效果
	$url = '../liuyan.php'.'?mingcheng='.$mingcheng;
	echo "<script language='javascript'>";  
	echo "location.href='$url'";  
	echo "</script>"; 	



?>
