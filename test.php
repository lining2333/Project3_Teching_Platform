<!DOCTYPE html>
<html>
<head>
	<title>数据库SQL语言练习</title>
</head>
<body>
	<div id="table_Student">
		<h1>学生表</h1>
		<table>
			<tr>
				<td>Sno</td>
				<td>Sname</td>
				<td>Ssex</td>
				<td>Sage</td>
				<td>Sdept</td>
			</tr>
		</table>
	</div>
<?php 
// error_reporting(E_ALL || ~E_NOTICE);
//连接数据库并创建数据库shujuku
$con = mysqli_connect("localhost","root","","shujuku");
if ($con -> connect_error) {
	die("连接失败：".$con -> connect_error);
}
// $sql = "create database shujuku";
// mysqli_query($con,$sql);
// $con = mysqli_select_db($con,"shujuku");
$sql = "create table Student(
					Sno char(9) primary key,
					Sname char(20) unique,
					Ssex char(10),
					Sage smallint,
					Sdept char(20)  
				)";
mysqli_query($con,$sql);//syntax error, unexpected 'mysqli_query' (T_STRING) ,前一行缺少分号
// mysqli_error_list($con);
$row = mysqli_fetch_all($con,both);
$row_Length = mysqli_num_rows($con);
$col = mysqli_num_fields($con);
$sql = 
// for ($i=0; $i < $row_Length; $i++) { 
// 	echo $row[$i][Sno];
// }
 ?>
</body>
</html>	