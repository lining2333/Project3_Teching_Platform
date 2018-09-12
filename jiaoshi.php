<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>模拟电子技术实验教学平台</title>
	<!-- 引入bootstrap -->
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- 引用style.css样式文件 -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		th{
				background-color: #f3f3f3;
		}
		td{
			border: 3px solid black;
			background-color: #f3f3f3;
			/*border-radius: 10px;*/
		}
		table{
			border: 3px solid black;
			border-radius: 10px;
		}
		#pp span{
			margin-left: 20px;
			font-size: 15px;
		}
		#jingli li{
			font-size: 18px;
			font-family: 微软雅黑;margin:20px; 
			/*font-weight: bold;*/
		}
	</style>
</head>
<body style="margin-left: 20px;">
	<div class="container" style="">
		
		<h1 class="" style="margin-top: 40px;margin-left: 250px;">模拟电子技术实验教学平台</h1>
		<div class="" id="" style="background-image: url(images/info.png);background-size: 100% 100%; width: 260px; height: 100px;
        position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: -80px;margin-left: 790px;">
	    	<!-- <div style="float: left;margin-left: 15px;margin-top: 15px;"><img src="images/touxiang.jpg" alt="" id="touxiang"/></div> -->
		    	<div style="margin-left: 60px;border: px solid black;padding: 10px;border-radius: 20px;position: absolute;z-index: 35;margin-top: 3px;"><span>欢迎访问</span>
		    		<span id="mingcheng">
		    			<?php
		    			error_reporting(E_ALL || ~E_NOTICE);
		    			$mingcheng = $_COOKIE['mingcheng'] ;
		    			echo "$mingcheng"; ?>
		    				
		    			</span><br />
		    	<div style="margin-top: 5px;"><span id="riqi"></span></div>
		    	<div style="margin-top: 5px;"><span id="shijian"></span></div>
	    	
	    	</div></div>
			<div style="margin-top: 40px;">
				<nav class="navbar" style="">
			    
			        <ul class=" nav navbar-nav text-center">
			            <li class="daohang"><a href="index.php">首页</a></li>
			            <li class="daohang"><a href="shouce.php">实验手册</a></li>
			            <li class="daohang"><a href="jiaoxue.php">实验教学</a></li>
			            <li class="daohang"><a href="jiaoshi.php">教师风采</a></li>
			            <li class="daohang"><a href="zhishi.php">知识测验</a></li>
			            <li class="daohang"><a href="xinwen.php">综合新闻</a></li>
			            <li class="daohang"><a href="jingsai.php">竞赛信息</a></li>
			            <li class="daohang"><a href="liuyan.php">留言板</a></li>	
			        </ul>
			    
			</nav>
			</div>
			<!-- nav导航栏 -->
			<!-- <div>
				<img src="images/jiaoshlizi.png" style="width: 1000px;margin-left: 40px;">
			</div> -->
			<div><button id="jiaoshi_button1" style="width: 100px;height: 50px;background-color: #ccc;color: black;border-radius: 10px;margin-top: px;margin-left: 30px;">
					教师一
				</button>
				
				<button id="jiaoshi_button2" style="width: 100px;height: 50px;background-color: #0066ff;color: white;border-radius: 10px;">
					教师二
				</button>
				<button id="jiaoshi_button3" style="width: 100px;height: 50px;background-color: #0066ff;color: white;border-radius: 10px;">
					教师三
				</button>
			</div>
			<div id="jiaoshi1">
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jiaoshi_info";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		echo "<div style='width: 300px;height: 350px;background-color: #f3f3f3;float: left;margin-top: 0px;'>
				<img src='".$row[0][jiaoshi_img]."' style='width: 180px;height: 240px;margin-left: 60px;margin-top: 40px;border: 2px solid #D49548;' alt='个人形象图片'>
				<div style='font-size: 25px;margin-left: 100px;margin-top: 20px;'><button id='zan'><span class='glyphicon glyphicon-thumbs-up' style='width: 60px;'></span><span style='margin: 10px;' id='zanshu'>".$row[0][jiaoshi_zan]."</span></button></div>
				
			</div>";
					 ?>				
				
			<div style="width: 770px;height: 350px;background-color: #f3f3f3;margin-left: 340px;margin-top: 10px;">
				<img src="images/jiaoshipp.png" style="border: 2px solid #D49548;border-radius: 10px;margin: 20px;">
				<p style="margin-left: 30px;margin-right: 30px;font-size: 16px;font-family: 微软雅黑;text-indent: 2em;"><?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jiaoshi_jingli";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		echo $row[0][jinglis];
		echo "<br>		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

					 ?>
			</div>
			<div style="width: 300px;height: 230px;background-color: #f3f3f3;float: left;margin-top: 10px;">
				<img src="images/jiaoshipi.png" style="border: 2px solid #D49548;border-radius: 10px;margin: 10px;">
				<div id="pp">
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jiaoshi_info";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		
			echo "<span>".$row[0][jiaoshi_zhicheng]."</span><br>
					<span>".$row[0][jiaoshi_sex]."</span><br>
					<span>".$row[0][jiaoshi_school]."</span><br>	
					<span>".$row[0][jiaoshi_degree]."</span><br>
					<span>".$row[0][jiaoshi_danwei]."</span><br>
					<span>".$row[0][jiaoshi_email]."</span>
			";
		
					 ?>
					
				</div>
			</div>
			<div style="width: 770px;height: 230px;background-color: #f3f3f3;margin-left: 340px;margin-top: 10px;">
				<button style="width: 130px;height: 60px;background-color: #ccc;color: black;border-radius: 10px;margin-top: 10px;margin-left: 30px;font-size: 20px;font-weight: bold;padding: 0;">
					教育经历
				</button>
				
				<ul style="margin-left: 30px;margin-top: 0px;" id="jingli">
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jiaoshi_jingli";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		
		echo "<li>".$row[0][jiaoyu1_time]."<span style='margin-left: 40px;'>
				".$row[0][jiaoyu1]."</span> </li>";
		echo "<li>".$row[0][jiaoyu1_time]."<span style='margin-left: 40px;'>
				".$row[0][jiaoyu1]."</span> </li>";
		echo "<li>".$row[0][jiaoyu1_time]."<span style='margin-left: 40px;'>
				".$row[0][jiaoyu1]."</span> </li>";
					 ?>

				</ul>
			</div>
			</div>
			<div id="jiaoshi2" style="display: none;">
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jiaoshi_info";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		echo "<div style='width: 300px;height: 350px;background-color: #f3f3f3;float: left;margin-top: 0px;'>
				<img src='".$row[1][jiaoshi_img]."' style='width: 180px;height: 240px;margin-left: 60px;margin-top: 40px;border: 2px solid #D49548;' alt='个人形象图片'>
				<div style='font-size: 25px;margin-left: 100px;margin-top: 20px;'><button id='zan2'><span class='glyphicon glyphicon-thumbs-up' style='width: 60px;'></span><span style='margin: 10px;' id='zanshu2'>".$row[1][jiaoshi_zan]."</span></button></div>
				
			</div>";
					 ?>				
				
			<div style="width: 770px;height: 350px;background-color: #f3f3f3;margin-left: 340px;margin-top: 10px;">
				<img src="images/jiaoshipp.png" style="border: 2px solid #D49548;border-radius: 10px;margin: 20px;">
				<p style="margin-left: 30px;margin-right: 30px;font-size: 16px;font-family: 微软雅黑;text-indent: 2em;"><?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jiaoshi_jingli";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		echo $row[1][jinglis];
		echo "<br>		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

					 ?>
			</div>
			<div style="width: 300px;height: 230px;background-color: #f3f3f3;float: left;margin-top: 10px;">
				<img src="images/jiaoshipi.png" style="border: 2px solid #D49548;border-radius: 10px;margin: 10px;">
				<div id="pp">
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jiaoshi_info";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		
			echo "<span>".$row[1][jiaoshi_zhicheng]."</span><br>
					<span>".$row[1][jiaoshi_sex]."</span><br>
					<span>".$row[1][jiaoshi_school]."</span><br>	
					<span>".$row[1][jiaoshi_degree]."</span><br>
					<span>".$row[1][jiaoshi_danwei]."</span><br>
					<span>".$row[1][jiaoshi_email]."</span>
			";
		
					 ?>
					
				</div>
			</div>
			<div style="width: 770px;height: 230px;background-color: #f3f3f3;margin-left: 340px;margin-top: 10px;">
				<button style="width: 130px;height: 60px;background-color: #ccc;color: black;border-radius: 10px;margin-top: 10px;margin-left: 30px;font-size: 20px;font-weight: bold;padding: 0;">
					教育经历
				</button>

				<ul style="margin-left: 30px;margin-top: 0px;" id="jingli">
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jiaoshi_jingli";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		
		echo "<li>".$row[1][jiaoyu1_time]."<span style='margin-left: 40px;'>
				".$row[1][jiaoyu1]."</span> </li>";
		echo "<li>".$row[1][jiaoyu1_time]."<span style='margin-left: 40px;'>
				".$row[1][jiaoyu1]."</span> </li>";
		echo "<li>".$row[1][jiaoyu1_time]."<span style='margin-left: 40px;'>
				".$row[1][jiaoyu1]."</span> </li>";
					 ?>
					
				</ul>
			</div>
			</div>
			<div id="jiaoshi3" style="display: none;">
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jiaoshi_info";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		echo "<div style='width: 300px;height: 350px;background-color: #f3f3f3;float: left;margin-top: 0px;'>
				<img src='".$row[2][jiaoshi_img]."' style='width: 180px;height: 240px;margin-left: 60px;margin-top: 40px;border: 2px solid #D49548;' alt='个人形象图片'>
				<div style='font-size: 25px;margin-left: 100px;margin-top: 20px;'><button id='zan3'><span class='glyphicon glyphicon-thumbs-up' style='width: 60px;'></span><span style='margin: 10px;' id='zanshu3'>".$row[2][jiaoshi_zan]."</span></button></div>
				
			</div>";
					 ?>				
				
			<div style="width: 770px;height: 350px;background-color: #f3f3f3;margin-left: 340px;margin-top: 10px;">
				<img src="images/jiaoshipp.png" style="border: 2px solid #D49548;border-radius: 10px;margin: 20px;">
				<p style="margin-left: 30px;margin-right: 30px;font-size: 16px;font-family: 微软雅黑;text-indent: 2em;"><?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jiaoshi_jingli";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		echo $row[2][jinglis];
		echo "<br>		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

					 ?>
			</div>
			<div style="width: 300px;height: 230px;background-color: #f3f3f3;float: left;margin-top: 10px;">
				<img src="images/jiaoshipi.png" style="border: 2px solid #D49548;border-radius: 10px;margin: 10px;">
				<div id="pp">
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jiaoshi_info";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		
			echo "<span>".$row[2][jiaoshi_zhicheng]."</span><br>
					<span>".$row[2][jiaoshi_sex]."</span><br>
					<span>".$row[2][jiaoshi_school]."</span><br>	
					<span>".$row[2][jiaoshi_degree]."</span><br>
					<span>".$row[2][jiaoshi_danwei]."</span><br>
					<span>".$row[2][jiaoshi_email]."</span>
			";
		
					 ?>
					
				</div>
			</div>
			<div style="width: 770px;height: 230px;background-color: #f3f3f3;margin-left: 340px;margin-top: 10px;">
				<button style="width: 130px;height: 60px;background-color: #ccc;color: black;border-radius: 10px;margin-top: 10px;margin-left: 30px;font-size: 20px;font-weight: bold;padding: 0;">
					教育经历
				</button>
				
				<ul style="margin-left: 30px;margin-top: 0px;" id="jingli">
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jiaoshi_jingli";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		
		echo "<li>".$row[2][jiaoyu1_time]."<span style='margin-left: 40px;'>
				".$row[2][jiaoyu1]."</span> </li>";
		echo "<li>".$row[2][jiaoyu1_time]."<span style='margin-left: 40px;'>
				".$row[2][jiaoyu1]."</span> </li>";
		echo "<li>".$row[2][jiaoyu1_time]."<span style='margin-left: 40px;'>
				".$row[2][jiaoyu1]."</span> </li>";
					 ?>
					
					
				</ul>
			</div>
			</div>
			<!-- 网站版权申明 -->
			<div class="text-center" style="margin-top: 50px;">
				<p>Copyright © 年份 网站名称  网站域名.com All Rights Reserved</p>
			</div><br><br>
	</div>
	<!-- 连接外部脚本文件 -->
  	<script  src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/jiaoshi.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

