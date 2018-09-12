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
		.timu{
			float: left;
			width: 150px;
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
			<div class="container col-xs-12 text-center">
				<!-- 展示六张图片 -->
				<div class="row">
					<img src="images/zhishi1.png" class="img-responsive col-xs-2">
					<img src="images/zhishi2.png" class="img-responsive col-xs-2">
					<img src="images/zhishi3.png" class="img-responsive col-xs-2">
					<img src="images/zhishi4.png" class="img-responsive col-xs-2">
					<img src="images/zhishi5.png" class="img-responsive col-xs-2">
					<img src="images/zhishi6.png" class="img-responsive col-xs-2">
				</div><br>
				<!-- 定义六张图片相对应序号 -->
				<div class="row">
					<b class="col-xs-2">1</b>
					<b class="col-xs-2">2</b>
					<b class="col-xs-2">3</b>
					<b class="col-xs-2">4</b>
					<b class="col-xs-2">5</b>
					<b class="col-xs-2">6</b>
				</div>
			</div>

			<div class="container" style="width: 700px;border: px solid black;margin-left: 50px;margin-top: 180px; text-align: center;">
				<h1 class="">知识测验</h1>
				<!-- 第一题 -->
				<div>
					<span class="questions_Fontsize">第一题：在以上图片中哪一幅照片内的器件是电感？(20分)</span> <br><br>
					<div class="timu" style="margin-left: 30px;">
						<input type="radio" id="question1_A" name="question1">
						<label for="question1_A">选项A：第2幅</label>
					</div>	
					<div class="timu">
						<input type="radio" id="question1_B" name="question1">
						<label for="question1_B">选项B：第3幅</label>
					</div>
					<div class="timu">
						<input type="radio" id="question1_C" name="question1">
						<label for="question1_C">选项C：第4幅</label>
					</div>
					<div>
						<input type="radio" id="question1_D" name="question1">
						<label for="question1_D">选项D：第5幅</label>
					</div>
				</div><br>
				<!-- 第二题 -->
				<div>
					<span class="questions_Fontsize">第二题：在以上图片中有几幅照片内的器件是电容？(20分)</span> <br><br>
					
					<div  class="timu" style="margin-left: 30px;">
						<input type="radio" id="question2_A" name="question2">
						<label for="question2_A">选项A：没有</label>
					</div>	
					<div class="timu">
						<input type="radio" id="question2_B" name="question2">
						<label for="question2_B">选项B：一个</label>
					</div>
					<div class="timu">
						<input type="radio" id="question2_C" name="question2">
						<label for="question2_C">选项C：两个</label>
					</div>
					<div>
						<input type="radio" id="question2_D" name="question2">
						<label for="question2_D">选项D：三个</label>
					</div>
				</div><br>
				<!-- 第三题 -->
				<div>
					<span class="questions_Fontsize">第三题：在以上图片中包含哪些器件？（多选题）(30分)</span> <br><br>
					<div class="timu" style="margin-left: 30px;">
						<input type="checkbox" id="question3_A" name="question3">
						<label for="question3_A">选项A：电阻</label>
					</div>	
					<div class="timu">
						<input type="checkbox" id="question3_B" name="question3">
						<label for="question3_B">选项B：发光二极管</label>
					</div>
					<div class="timu">
						<input type="checkbox" id="question3_C" name="question3">
						<label for="question3_C">选项C：三极管</label>
					</div>
					<div>
						<input type="checkbox" id="question3_D" name="question3">
						<label for="question3_D">选项D：继电器</label>
					</div>
				</div><br>
				<!-- 第四题 -->
				<div>
					<span class="questions_Fontsize">第四题：请输入电解电容所对应的图片序号(30分)</span>
					<input id="question4" type="text" class="question4 ">	
				</div><br><br><br>
				<!-- 定义提交和重玩按钮 -->
				<div class="row">
					<button id="questions_Submit" class="col-xs-2 col-sm-offset-4 btn-primary btn-lg">提交</button>
					<button id="questions_Replay" class="col-xs-2 btn-primary btn-lg">重玩</button>
				</div>
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
				echo "<div id='paihang' style='width: 220px;height: 390px;background-color: #f3f3f3;margin-left: 810px; border-radius: 10px;font-size: 16px;margin-top: -450px;float: left;position: absolute;'>
				<h3 class='text-center' style='padding-top: 0px;'>知识测验排行榜</h3>
				<img src='images/paihang.png' style='width: 200px;margin-left: 10px;'>

				<div style='position: absolute;margin-left: 90px;'><span style=''>".$row[0][paihang_name]."</span><br>
					<span style=''>".$row[0][paihang_score]."分</span></div>
				<div style='position: absolute;margin-left: 15px;margin-top: 10px;'><span style=''>".$row[1][paihang_name]."</span><br>
					<span style=''>".$row[1][paihang_score]."分</span></div>
				<div style='position: absolute;margin-left: 160px;margin-top: 10px;'><span style=''>".$row[2][paihang_name]."</span><br>
					<span style=''>".$row[2][paihang_score]."分</span></div>

				<div style='margin-top: 75px;margin-left: 15px;text-align: center;'><table style=''>
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
			
			
			<!-- 网站版权申明 -->
			<div class="text-center" style="margin-top: 50px;">
				<p>Copyright © 年份 网站名称  网站域名.com All Rights Reserved</p>
			</div><br><br>
	</div>
	<!-- 连接外部脚本文件 -->
  	<script  src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
  	<!-- <script type="text/javascript" src="js/index.js"></script> -->
	<script type="text/javascript" src="js/zhishi.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

