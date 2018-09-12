<?php 
// 通过mkdir在ziyuan文件夹下创建名为shiyan_Weizhi的文件夹，并规定该文件夹访问权限
	$shiyan_Weizhi = mkdir('ziyuan/'.$_POST['shiyan_Weizhi'],0777);
// 获取实验id
	$shiyan_Id = $_POST["shiyan_Id"];
// 获取实验名称
	$shiyan_Name = $_POST["shiyan_Name"];
// 获取实验内容
	$shiyan_Content = $_POST["shiyan_Content"];

//保存ppt文件
	$tmp_file_name1 = $_FILES['shiyan_Ppt']['tmp_name']; //得到上传ppt的临时文件   
	$file_name1 = $_FILES['shiyan_Ppt']['name']; //源文件名   
	$file_dir1 = 'ziyuan/'.$_POST['shiyan_Weizhi'].'/'; //最终保存目录 

// 保存视频文件
	$tmp_file_name2 = $_FILES['shiyan_Shipin']['tmp_name']; //得到上传后的临时文件   
	$file_name2 = $_FILES['shiyan_Shipin']['name']; //源文件名   
	$file_dir2 = 'ziyuan/'.$_POST['shiyan_Weizhi'].'/'; //最终保存目录 

// 判断ppt文件是否存在，存在则将ppt文件保存到最终目录	  
	if(is_dir($file_dir1))   
	{   
	move_uploaded_file($tmp_file_name1,$file_dir1.$file_name1); //移动文件到最终保存目录   
	$img_url1 = $file_dir1.$file_name1; 
	}
// 判断视频文件是否存在，存在则将视频文件保存到最终目录
	if(is_dir($file_dir2))   
	{   
	move_uploaded_file($tmp_file_name2,$file_dir2.$file_name2); //移动文件到最终保存目录   
	$img_url2 = $file_dir2.$file_name2; 
	}
// 连接数据库
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con,"modian"); 
	mysqli_query($con, "SET NAMES utf8");//$conn->query("SET NAMES utf8");
// 通过insert语句向数据库中添加数据
    $sql = "INSERT INTO shiyan (shiyan_Id,shiyan_Name, shiyan_Content, shiyan_Ppt, shiyan_Shipin,shiyan_Weizhi)
	 				VALUES ('$shiyan_Id','$shiyan_Name','$shiyan_Content', '$img_url1', '$img_url2','$shiyan_Weizhi')";
	mysqli_query($con,$sql);
 	mysqli_close($con);
// 通过引入JavaScript实现页面跳转刷新
	echo '<script language="javascript">';
	echo "window.location.href='../jiaoxue.php'";
	echo '</script>';
?>
