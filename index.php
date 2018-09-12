<?php 
error_reporting(E_ALL || ~E_NOTICE);
$mingcheng = $_GET["mingcheng"];
setcookie("mingcheng", $mingcheng, time()+3600);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>模拟电子技术实验教学平台</title>
	<!-- 引入bootstrap -->
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- 引用style.css样式文件 -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body style="margin-left: 20px;">
	<div class="container">
		
		<h1 style="margin-top: 40px;margin-left: 250px;">模拟电子技术实验教学平台</h1>
		<!-- <div id="show"></div> -->
		<div id="huanying">
		    	<div id="huanying1"><span>欢迎访问</span>
		    		<span id="mingcheng">
		    			<?php
		    			error_reporting(E_ALL || ~E_NOTICE);
		    			$mingcheng = $_GET['mingcheng'];
		    				echo $mingcheng;
	    				$mingcheng = $_COOKIE['mingcheng'];
	    				echo $mingcheng;

		    			 ?>
		    			
		    				
		    			</span><br />
		    	<div style="margin-top: 5px;"><span id="riqi"></span></div>
		    	<div style="margin-top: 5px;"><span id="shijian"></span></div>
	    	
	    	</div>
    	
    	</div>
			<div style="margin-top: 40px;">
				<nav class="navbar">
			    
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
			
			<div id="denglu">
				<h2><span>登录</span></h2>
				<form action="database/index_backend.php" method="post" >
					<select id="shenfen" name="shenfen">
					<option style="border-radius: 15px;" value="学生">学生</option>
					<option style="border-radius: 15px;" value="教师">教师</option>
					<option style="border-radius: 15px;" value="外校人员">外校人员</option>
					</select><br>
					
					<input type="text" name="id" id="id" placeholder="请输入用户账号" />
					<input type="password" name="pwd" id="pwd" placeholder="请输入账号密码"/>
				
					<input type="submit" id="loginsubmit" value="登录" />
				</form>
			</div>
			<div id="sousuo_div">
				<h3>站内搜索</h3>
				<form action="database/sousuo_backend.php" method="get">
					<input type="text" name="zhi" id="sousuo_input"  />
					<input style="width: 50px;height: 30px;" type="submit" name="" value="搜索">
				</form>
				
			</div>
			
			<!-- 轮播图板块 -->
			<div id="div_show" style="background-color: #ccc;">
				<!-- 五幅图片 -->
			      <a class="img_Show" href="jiaoxue.php"><img src="images/3.jpg"/></a>
			      <a class="img_Show" href="jiaoxue.php"><img src="images/2.jpg"/></a>
			      <a class="img_Show" href="jiaoxue.php"><img src="images/3.jpg"/></a>
			      <a class="img_Show" href="jiaoxue.php"><img src="images/4.jpg"/></a>
			      <a class="img_Show" href="jiaoxue.php"><img src="images/5.jpg"/></a>
			    <!-- 两个按钮用来切换图片 -->
			      <div class="button button1"><</div>
			      <div class="button button2">></div>
			    <!-- 五个对应五幅图片的链接 -->
			       <ul id="order_Imgs">
			        <li class="order_Img">1</li>
			        <li class="order_Img">2</li>
			        <li class="order_Img">3</li>
			        <li class="order_Img">4</li>
			        <li class="order_Img">5</li>
			      </ul>
			</div>
			<br><br>
			<div id="xinwen">
				<button id="xinwen_button">
					综合新闻
				</button>
				
				<button id="jingsai_button">
					竞赛活动
				</button>
			
				<ul id="xinwen_ul" style="margin-left: 30px;">
<?php 
		$con = mysqli_connect('localhost','root','','modian');
		mysqli_query($con,"SET NAMES utf8");
		if (!$con)
				 {
				 die('Could not connect: ' . mysqli_connect_error());
				 }
		$sql = "SELECT * from xinwen";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_all($result,MYSQLI_BOTH);
		$rows_Number = mysqli_num_rows($result);
		for ($i=0; $i < $rows_Number-1; $i++) { 
			echo "<li><a href='".$row[$i][xinwen_a]."'>".$row[$i][xinwen_content]."</a></li>";
		}
					 ?>
				</ul>
				<ul id="jingsai_ul" style="margin-left: 30px;display: none;">
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
		for ($i=0; $i < $rows_Number; $i++) { 
			echo "<li><a href='".$row[$i][jingsai_a]."'>".$row[$i][jingsai_content]."</a></li>";
		}
					 ?>					
				</ul>
			</div>
			
			<?php
				$con = mysqli_connect('localhost','root','','modian');
				mysqli_query($con,"SET NAMES utf8");
				if (!$con)
						 {
						 die('Could not connect: ' . mysqli_connect_error());
						 }
				$sql = "SELECT * from paihang order by paihang_score DESC";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_all($result,MYSQLI_BOTH);
				$rows_Number = mysqli_num_rows($result);
				echo "<div id='paihang'>
				<h3 class='text-center'>知识测验排行榜</h3>
				<img src='images/paihang.png' style='width: 200px;margin-left: 10px;'>

				<div style='position: absolute;margin-left: 90px;'><span >".$row[0][paihang_name]."</span><br>
					<span>".$row[0][paihang_score]."分</span></div>
				<div style='position: absolute;margin-left: 15px;margin-top: 10px;'><span>".$row[1][paihang_name]."</span><br>
					<span>".$row[1][paihang_score]."分</span></div>
				<div style='position: absolute;margin-left: 160px;margin-top: 10px;'><span>".$row[2][paihang_name]."</span><br>
					<span>".$row[2][paihang_score]."分</span></div>

				<div style='margin-top: 75px;margin-left: 15px;text-align: center;'><table>
					<tr>
						<td>第四名</td>
						<td>".$row[3][paihang_name]."</td>
						<td>".$row[3][paihang_score]."分</td>
					</tr>
					<tr>
						<td>第五名</td>
						<td>".$row[4][paihang_name]."</td>
						<td>".$row[4][paihang_score]."分</td>
					</tr>
					<tr>
						<td>第六名</td>
						<td>".$row[5][paihang_name]."</td>
						<td>".$row[5][paihang_score]."分</td>
					</tr>
					<tr>
						<td>第七名</td>
						<td>".$row[6][paihang_name]."</td>
						<td>".$row[6][paihang_score]."分</td>
					</tr>
				</table></div>
			</div>";
				?>
			
			<div id="fengcai_div">
				
				<h3 class="text-center" style="position: absolute;margin-left: 90px;">教师风采</h3>
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
		 
			echo "<div id='jiaoshi_show' style='background-image: url(images/info.png);background-size: 100% 100%; width: 280px; height: 100px;position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: 50px;margin-left: 10px;'>
			    			<div style='float: left;margin-left: 15px;margin-top: 15px;'><img src='".$row[0][jiaoshi_img]."' alt='' id='touxiang' style='width: 60px;' />
			    			</div>
					    	<div style='margin-left: 80px;border: px solid black;padding: 10px;border-radius: 20px;position: absolute;z-index: 10;margin-top: 3px;'>
					    		<span>".$row[0][jiaoshi_name]."</span><br />
						    	<div style='margin-top: 5px;'><span style='font-size: 14px;'>".$row[0][jiaoshi_zhicheng]."</span></div>
						    	<div style='margin-top: 5px;'><span style='font-size: 14px;'>".$row[0][jiaoshi_email]."</span></div>
			    	
			    			</div>
		    	
		    			</div>";
		
					 ?>	
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
		 
			echo "<div style='background-image: url(images/info.png);background-size: 100% 100%; width: 280px; height: 100px;position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: 160px;margin-left: 10px;'>
			    			<div style='float: left;margin-left: 15px;margin-top: 15px;'><img src='".$row[1][jiaoshi_img]."' alt='' id='touxiang' style='width: 60px;' />
			    			</div>
					    	<div style='margin-left: 80px;border: px solid black;padding: 10px;border-radius: 20px;position: absolute;z-index: 10;margin-top: 3px;'>
					    		<span>".$row[1][jiaoshi_name]."</span><br />
						    	<div style='margin-top: 5px;'><span style='font-size: 14px;'>".$row[1][jiaoshi_zhicheng]."</span></div>
						    	<div style='margin-top: 5px;'><span style='font-size: 14px;'>".$row[1][jiaoshi_email]."</span></div>
			    	
			    			</div>
		    	
		    			</div>";
		
					 ?>	
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
		 
			echo "<div style='background-image: url(images/info.png);background-size: 100% 100%; width: 280px; height: 100px;position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: 270px;margin-left: 10px;'>
			    			<div style='float: left;margin-left: 15px;margin-top: 15px;'><img src='".$row[2][jiaoshi_img]."' alt='' id='touxiang' style='width: 60px;' />
			    			</div>
					    	<div style='margin-left: 80px;border: px solid black;padding: 10px;border-radius: 20px;position: absolute;z-index: 10;margin-top: 3px;'>
					    		<span>".$row[2][jiaoshi_name]."</span><br />
						    	<div style='margin-top: 5px;'><span style='font-size: 14px;'>".$row[2][jiaoshi_zhicheng]."</span></div>
						    	<div style='margin-top: 5px;'><span style='font-size: 14px;'>".$row[2][jiaoshi_email]."</span></div>			    	
			    			</div>	    	
		    			</div>";
					 ?>								
			</div>
			<!-- 网站版权申明 -->
			<div class="text-center" style="margin-top: 20px;">
				<p>Copyright © 年份 网站名称  网站域名.com All Rights Reserved</p>
			</div><br><br>
	</div>
	<!-- 连接外部脚本文件 -->
  	<script  src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>