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
		#left_div{
			margin-left: 60px;
		}
		#left_div li{
			/*list-style: none;*/
			color: #1672fb;
			font-size: 16px;
			margin-left: 20px;
		}
		.riqi_span{
			float: right;
			color: black;
		}
		#tui img{
			width: 160px;height: 160px;
			float: left;
		}
		#tui>div{
			float: left;
		}
		#zuihou li{
			color: #1672fb;
			font-size: 16px;
			margin-left: 20px;
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
			<!-- <img src="images/xinwen.png" style="width: 1000px;margin-left: 40px;"> -->
			<div class="col-xs-6" id="left_div">
				<!-- <img src="images/xinwen.png" style="width: 1000px;margin-left: 40px;"> -->

				<div id="xin" class="" style="padding: 10px;background-color: #FFFFFF;">
					<h4 style="color: #1672FF;background-color: #F1f7fc;font-weight: bold;border: 1px solid #ccc;padding: 10px;">新赛事</h4>
					<ul>
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jingsai";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		for ($i=0; $i < $rows_Number-2; $i++) { 
			echo "<li><a href='".$row[$i][jingsai_a]."'><span>".$row[$i][jingsai_content]."</span></a><span class='riqi_span'>".
			$row[$i][jingsai_time]."</li>";
		}
					 ?>	
						
					</ul></div>
				<div id="chang" class="" style="padding: 10px;background-color: #FFFFFF;margin-top: 20px;">
					<h4 style="color: #1672FF;background-color: #F1f7fc;font-weight: bold;border: 1px solid #ccc;padding: 10px;">常规赛事</h4>
					<ul>
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jingsai";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		for ($i=0; $i < $rows_Number-2; $i++) { 
			echo "<li><a href='".$row[$i][jingsai_a]."'><span>".$row[$i][jingsai_content]."</span></a><span class='riqi_span'>".
			$row[$i][jingsai_time]."</li>";
		}
					 ?>
					</ul></div>
				<div id="chang" class="" style="padding: 10px;background-color: #FFFFFF;margin-top: 20px;">
					<h4 style="color: #1672FF;background-color: #F1f7fc;font-weight: bold;border: 1px solid #ccc;padding: 10px;">个人赛事</h4>
					<ul>
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jingsai";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		for ($i=0; $i < $rows_Number-2; $i++) { 
			echo "<li><a href='".$row[$i][jingsai_a]."'><span>".$row[$i][jingsai_content]."</span></a><span class='riqi_span'>".
			$row[$i][jingsai_time]."</li>";
		}
					 ?>
					</ul></div>
			</div>
			
				<div id="tui" class="col-xs-4" style="padding: 10px;background-color: #FFFFFF;margin-left: 15px;">
					<h4 style="color: #1672FF;background-color: #F1f7fc;font-weight: bold;border: 1px solid #ccc;padding: 10px;">推荐资讯</h4>
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jingsaitu";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		for ($i=0; $i < $rows_Number; $i++) { 
			echo "<div style='width:170px;'><img src='".$row[$i][jingsaitu_src]."'>
							 <div style='width: 170px;overflow:hidden;height:25px;line-height:25px;'>
							 	<a href='".$row[$i][jingsaitu_a]."'><span>".$row[$i][jingsaitu_span]."</span></a></div>
							 </div>";
		}
					 ?>					
						
						
					</div>
					<div id="zuihou" class="" style="padding: 10px;background-color: #FFFFFF;margin-top: 470px;margin-left: 645px;width: 380px;">
					<h4 style="color: #1672FF;background-color: #F1f7fc;font-weight: bold;border: 1px solid #ccc;padding: 10px;">最近赛事</h4>
					<ul>
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from jingsai";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		for ($i=0; $i < $rows_Number-2; $i++) { 
			echo "<li><a href='".$row[$i][jingsai_a]."'><span>".$row[$i][jingsai_content]."</span></a>"."</li>";
		}
					 ?>
					</ul></div>
			
		
			<!-- 网站版权申明 -->
			<div class="text-center col-xs-12" style="margin-top: 50px;">
				<p>Copyright © 年份 网站名称  网站域名.com All Rights Reserved</p>
			</div><br><br>
	</div>
	<!-- 连接外部脚本文件 -->
  	<script  src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

