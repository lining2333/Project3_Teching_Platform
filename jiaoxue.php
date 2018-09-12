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
				<form action="database/jiaoxue_denglu.php" method="post" >
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
			
			<div class=" text-center" style="width: 700px;margin-left: 360px;margin-top: 30px;border-radius: 10px;background-color: #969696;height: 392px;border: 3px solid black;">
				<h3 style="color: white;">实验教学资料</h3>
				<table id="table_Experiment" class="table">
				    <tr>
				      <th class="col-xs-2 text-center jiaoxue_Fontsize">实验名称</th>
				      <th class="col-xs-4 text-center jiaoxue_Fontsize">实验简介</th>
				      <th class="col-xs-2 text-center jiaoxue_Fontsize">实验教学PPT</th>
				      <th class="col-xs-2 text-center jiaoxue_Fontsize">实验教学视频</th>
				    </tr>

<?php
	//链接本地mysql数据库（localhost），账号名为root，密码为空
	$con = mysqli_connect('localhost', 'root', '');
	//检测mysql数据库连接是否成功，连接失败则输出无法连接
			if (!$con)
			 {
			 die('无法连接: ' . mysqli_connect_error());
			 }
	// 连接mysql数据库中的modian数据库		 
	mysqli_select_db($con,"modian");
	//设置数据库字符编码方式为utf8，防止出现中文乱码
	mysqli_query($con, "SET NAMES utf8");
	//从表shiyan中搜索全部数据
	$sql="SELECT * FROM shiyan";
	//通过变量$result获取搜索结果
	$result = mysqli_query($con,$sql);
	//获取表shiyan的数据行数
	$rows_Number = mysqli_num_rows($result);
	//将表中数据以数组的形式返回
	$row = mysqli_fetch_all($result,MYSQLI_BOTH);
	//循环输出表中数据
		 	for ($i=0; $i < $rows_Number; $i++) { 
					$ppt = $row[$i]['shiyan_Ppt'];
					$shipin = $row[$i]['shiyan_Shipin'];
		 		 	echo "<tr>";
		 		 	//输出第i行实验名称
					echo "<td  class='jiaoxue_Fontsize'>"."<b>". $row[$i]['shiyan_Name']."<b>"."</td>";
					//输出第i行实验内容
					echo "<td>" . $row[$i]['shiyan_Content'] . "</td>";
					//输出第i行实验ppt
					echo "<td>" ."<a href='database/$ppt'>"."<button class='btn jiaoxue_Button'>点击查看PPT</button></a>" . "</td>";
					//输出第i行实验视频
					echo "<td>" ."<video src='database/$shipin' width='120px' height='33px' controls></video>" . "</td>";
					echo "</tr>";
			}
?>
				    
				</table>
			</div>
			<div class="row">
				<button id="tianjia_Button" class="col-xs-1 col-sm-offset-9 btn-primary btn-lg">添加</button>
				<button id="shanchu_Button" class="col-xs-1 btn-primary btn-lg">删除</button>
			</div>
			<!-- 网站版权申明 -->
			<div class="text-center" style="margin-top: 50px;">
				<p>Copyright © 年份 网站名称  网站域名.com All Rights Reserved</p>
			</div><br><br>
	</div>
	<!-- 连接外部脚本文件 -->
  	<script  src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/jiaoxue.js"></script>
	<!-- <script type="text/javascript" src="js/index.js"></script> -->
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

