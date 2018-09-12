<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>模拟电子技术实验教学平台</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<br>
		<h1 class="text-center">PPT文件删除</h1>
		<br><br>
		<div class="container col-xs-6 col-xs-offset-3">
			<!-- 定义删除实验资源表单，通过post方式传递到shanchu_Backend.php，数据类型为multipart/form-data -->
			<form action="database/shanchu_Backend.php" method="post"  enctype="multipart/form-data" class="col-xs-12">
				<div class="form-group row">
					<label class="col-xs-6 questions_Fontsize text-right">请输入所要删除实验序号:</label>
					<div class="col-xs-6">
						<input type="text" name="shiyan_Name_Delete" class="form-control">
					</div>
				</div>
				<br><br><br>
				<input class="col-xs-4 col-sm-offset-4 btn-primary btn-lg" type="submit" name="" id="tianjia_Button" value="确认提交">
			</form>
		</div>
	</div>

   	<script  src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script> 
	<script type="text/javascript" src="js/jiaoxue.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>