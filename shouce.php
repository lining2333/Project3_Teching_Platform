
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
	</style>
</head>
<body style="margin-left: 20px;">
	<div class="container" style="">
		
		<h1 class="" style="margin-top: 40px;margin-left: 250px;">模拟电子技术实验教学平台</h1>
		<!-- <div id="show"></div> -->
		<div class="" id="" style="background-image: url(images/info.png);background-size: 100% 100%; width: 260px; height: 100px;
        position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: -80px;margin-left: 790px;">
	    	<!-- <div style="float: left;margin-left: 15px;margin-top: 15px;"><img src="images/touxiang.jpg" alt="" id="touxiang"/></div> -->
		    	<div style="margin-left: 60px;border: px solid black;padding: 10px;border-radius: 20px;position: absolute;z-index: 35;margin-top: 3px;"><span>欢迎访问</span>
		    		<span id="mingcheng">
		    			<?php
		    			error_reporting(E_ALL || ~E_NOTICE);
		    			error_reporting(E_ALL || ~E_NOTICE);
		    			$mingcheng = $_GET['mingcheng'];
		    				echo $mingcheng;
	    				$mingcheng = $_COOKIE['mingcheng'];
	    				echo $mingcheng; ?>
		    				
		    			</span><br />
		    	<div style="margin-top: 5px;"><span id="riqi"></span></div>
		    	<div style="margin-top: 5px;"><span id="shijian"></span></div>
	    	
	    	</div>
    	
    	</div>
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
			
			<div style="border: px solid black;border-radius:10px;z-index: 10;
            	 width: 310px;height: 250px;margin-left: 25px;margin-top: 10px;position: absolute;
            	 font-family: '微软雅黑';text-align: center;background-image: url(images/shangdianbg.png);background-color: #f3f3f3">
				<h2><span style="">登录</span></h2>
				<form action="database/shouce_denglu.php" method="post" >
					<select id="shenfen" name="shenfen" style="width: 100px;height: 30px;font-family: '微软雅黑'; font-size: 17px;background-color: white;line-height: 30px;
					 border: 2px solid #D49548;border-radius: 10px;color: black;font-weight: ;margin-left: 0px;">
					<option style="border-radius: 15px;" value="学生">学生</option>
					<option style="border-radius: 15px;" value="教师">教师</option>
					<option style="border-radius: 15px;" value="外校人员">外校人员</option>
					</select><br>
					
					<input type="text" name="id" id="id" value="" placeholder="请输入用户账号" style="width: 220px;height: 30px;border: 2px solid #D49548;border-radius: 10px;
					line-height: 30px;font-size: 15px;margin-left: 0px;margin-top: 15px;"/>
					<input type="password" name="pwd" id="pwd" value="" placeholder="请输入账号密码" style="width: 220px;height: 30px;border: 2px solid #D49548;border-radius: 10px;
					line-height: 30px;font-size: 15px;margin-left: 0px;margin-top: 20px;"/>
				
					<input type="submit" id="loginsubmit" name="" value="登录" style="margin-top: 20px;margin-left: 20px; width: 120px;height: 40px;line-height: 40px;
					background-color: #1C6098;font-size: 20px; border: 1px solid #ccc;border-radius: 10px;
					color: white;font-weight: bold;"/>
				</form>
			
			</div>
			<div style="border: px solid black;border-radius:10px;z-index: ;
            	 width: 310px;height: 120px;margin-left: 25px;margin-top: 280px;position: absolute;
            	 font-family: '微软雅黑';text-align: center;background-color: #B3AA8E;">
				<h3>站内搜索</h3>
				<form action="database/sousuo_backend.php" method="get">
					<input type="text" name="zhi" id="" value="" placeholder="" style="width: 200px;height: 30px;border: 2px solid #33ffff;border-radius: 10px;
					line-height: 30px;font-size: 15px;margin-left: 0px;"/>
					<input style="width: 50px;height: 30px;" type="submit" name="" value="搜索">
				</form>
				
			</div>
			<!-- nav导航栏 -->
			<div style="position: absolute;margin-left: 50px;margin-top: -20px;">
				<h3 class="" style="margin-left: 500px;">模拟电子实验指导书</h3>




			<?php
				$con = mysqli_connect('localhost','root','','modian');
				mysqli_query($con,"SET NAMES utf8");
				if (!$con)
						 {
						 die('Could not connect: ' . mysqli_connect_error());
						 }
				$sql = "SELECT * from shouce";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_all($result,MYSQLI_BOTH);
				$rows_Number = mysqli_num_rows($result);
				echo "<div style='background-image: url(images/info.png);background-size: 100% 100%; width: 240px; height: 100px;
        			position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: 20px;margin-left: 300px;'>

			    	<div style='margin-left: 20px;border: px solid black;padding-left: 20px;padding-top: 10px; border-radius: 40px;position: absolute;z-index: 35;margin-top: 3px;'><span>实验一：</span><br />
			    	<div style='margin-top: 5px;'><span>".$row[0][name]."</span></div>
			    	<div style='margin-top: 5px;'>
			    		 
			    		<a href='".$row[0][a]."'><span style='margin-left: 0px; color: #0066ff;'>资料下载</span></a></div>
		    	
		    		</div>
    	
    		</div>";
    			echo "<div class='' id='' style='background-image: url(images/info.png);background-size: 100% 100%; width: 240px; height: 100px;
        			position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: 20px;margin-left: 550px;'>

			    	<div style='margin-left: 20px;border: px solid black;padding-left: 20px;padding-top: 10px; border-radius: 40px;position: absolute;z-index: 35;margin-top: 3px;'><span>实验二：</span><br />
			    	<div style='margin-top: 5px;'><span>".$row[1][name]."</span></div>
			    	<div style='margin-top: 5px;'>
			    		<!-- <span style='color: #0066ff;'>在线预览</span> -->
			    		<a href='".$row[1][a]."'><span style='margin-left: 0px; color: #0066ff;'>资料下载</span></a></div>
		    	
		    		</div>
    	
    		</div>";
    		echo "<div  style='background-image: url(images/info.png);background-size: 100% 100%; width: 240px; height: 100px;
        		position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: 20px;margin-left: 800px;'>

			    	<div style='margin-left: 20px;border: px solid black;padding-left: 20px;padding-top: 10px; border-radius: 40px;position: absolute;z-index: 35;margin-top: 3px;'><span>实验三：</span><br />
			    	<div style='margin-top: 5px;'><span>".$row[2][name]."</span></div>
			    	<div style='margin-top: 5px;'>
			    		<!-- <span style='color: #0066ff;'>在线预览</span> -->
			    		<a href='".$row[2][a]."'><span style='margin-left: 0px; color: #0066ff;'>资料下载</span></a></div>
		    	
		    		</div>
    	
    		</div>";
    		echo "<div class='' id='' style='background-image: url(images/info.png);background-size: 100% 100%; width: 240px; height: 100px;
        	position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: 140px;margin-left: 300px;'>

			    	<div style='margin-left: 20px;border: px solid black;padding-left: 20px;padding-top: 10px; border-radius: 40px;position: absolute;z-index: 35;margin-top: 3px;'><span>实验四：</span><br />
			    	<div style='margin-top: 5px;'><span>".$row[3][name]."</span></div>
			    	<div style='margin-top: 5px;'>
			    		<!-- <span style='color: #0066ff;'>在线预览</span> -->
			    		<a href='".$row[3][a]."'><span style='margin-left: 0px; color: #0066ff;'>资料下载</span></a></div>
		    	
		    		</div>
    	
    		</div>";
    		echo "<div class='' id='' style='background-image: url(images/info.png);background-size: 100% 100%; width: 240px; height: 100px;
        		position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: 140px;margin-left: 550px;'>

			    	<div style='margin-left: 20px;border: px solid black;padding-left: 20px;padding-top: 10px; border-radius: 40px;position: absolute;z-index: 35;margin-top: 3px;'><span>实验五：</span><br />
			    	<div style='margin-top: 5px;'><span>".$row[4][name]."</span></div>
			    	<div style='margin-top: 5px;'>
			    		<!-- <span style='color: #0066ff;'>在线预览</span> -->
			    		<a href='".$row[4][a]."'><span style='margin-left: 0px; color: #0066ff;'>资料下载</span></a></div>
		    	
		    		</div>
    	
    		</div>";
    		echo "<div class='' id='' style='background-image: url(images/info.png);background-size: 100% 100%; width: 240px; height: 100px;
        		position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: 140px;margin-left: 800px;'>

			    	<div style='margin-left: 20px;border: px solid black;padding-left: 20px;padding-top: 10px; border-radius: 40px;position: absolute;z-index: 35;margin-top: 3px;'><span>实验六：</span><br />
			    	<div style='margin-top: 5px;'><span>".$row[5][name]."</span></div>
			    	<div style='margin-top: 5px;'>
			    		<!-- <span style='color: #0066ff;'>在线预览</span> -->
			    		<a href='".$row[5][a]."'><span style='margin-left: 0px; color: #0066ff;'>资料下载</span></a></div>
		    	
		    		</div>
    	
    		</div>";
    		echo "<div class='' id='' style='background-image: url(images/info.png);background-size: 100% 100%; width: 240px; height: 100px;
        position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: 260px;margin-left: 300px;'>

			    	<div style='margin-left: 20px;border: px solid black;padding-left: 20px;padding-top: 10px; border-radius: 40px;position: absolute;z-index: 35;margin-top: 3px;'><span>实验七：</span><br />
			    	<div style='margin-top: 5px;'><span>".$row[6][name]."</span></div>
			    	<div style='margin-top: 5px;'>
			    		<!-- <span style='color: #0066ff;'>在线预览</span> -->
			    		<a href='".$row[6][a]."'><span style='margin-left: 0px; color: #0066ff;'>资料下载</span></a></div>
		    	
		    		</div>
    	
    		</div>";
    		echo "<div class='' id='' style='background-image: url(images/info.png);background-size: 100% 100%; width: 240px; height: 100px;
        position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: 260px;margin-left: 550px;'>

			    	<div style='margin-left: 20px;border: px solid black;padding-left: 20px;padding-top: 10px; border-radius: 40px;position: absolute;z-index: 35;margin-top: 3px;'><span>实验八：</span><br />
			    	<div style='margin-top: 5px;'><span>".$row[7][name]."</span></div>
			    	<div style='margin-top: 5px;'>
			    		<!-- <span style='color: #0066ff;'>在线预览</span> -->
			    		<a href='".$row[7][a]."'><span style='margin-left: 0px; color: #0066ff;'>资料下载</span></a></div>
		    	
		    		</div>
    	
    		</div>";
    		echo "<div class='' id='' style='background-image: url(images/info.png);background-size: 100% 100%; width: 240px; height: 100px;
        	position: absolute; font-family: 微软雅黑;font-weight: bold;font-size: 16px;margin-top: 260px;margin-left: 800px;'>

			    	<div style='margin-left: 20px;border: px solid black;padding-left: 20px;padding-top: 10px; border-radius: 40px;position: absolute;z-index: 35;margin-top: 3px;'><span>完整文档</span><br />
			    	<div style='margin-top: 5px;'><span>".$row[8][name]."</span></div>
			    	<div style='margin-top: 5px;'>
			    		<!-- <span style='color: #0066ff;'>在线预览</span> -->
			    		<a href='".$row[8][a]."'><span style='margin-left: 0px; color: #0066ff;'>资料下载</span></a></div>
		    	
		    		</div>
    	
    		</div>";

			 ?>
			


    		


    		


    		

    		


    		

    		

    		
    		

    		<!-- <div style="border: 3px solid black;">
    			<img src="database/shouce/实验一.docx">
    		</div> -->
    		
			</div>
			
			<!-- <div style="width: 300px;height: 400px;background-color: #f3f3f3;float: left;">
				<img src="images/jiaoshi1" style="width: 180px;height: 240px;margin-left: 60px;margin-top: 40px;">
				<div style="font-size: 25px;margin-left: 130px;"><button><span class="glyphicon glyphicon-thumbs-up"></span></button></div>
				
			</div>
			<div style="width: 770px;height: 400px;background-color: black;margin-left: 340px">
				
			</div>
			<div style="width: 300px;height: 400px;background-color: #f3f3f3;float: left;margin-top: 10px;">
				
			</div>
			<div style="width: 770px;height: 400px;background-color: black;margin-left: 340px;margin-top: 10px;">
				
			</div> -->
			<!-- 网站版权申明 -->
			<!-- <div class="text-center" style="margin-top: 50px;">
				<p>Copyright © 年份 网站名称  网站域名.com All Rights Reserved</p>
			</div><br><br> -->
	</div>
	<!-- 连接外部脚本文件 -->
  	<script  src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

