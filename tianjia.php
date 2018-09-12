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
		<h1 class="text-center">PPT文件上传</h1>
		<br><br>
		<div class="container col-xs-6 col-xs-offset-3">
		<!-- 定义删除实验资源表单，通过post方式传递到jiaoxue_Backend.php，数据类型为multipart/form-data -->	
			<form action="database/tianjia_Backend.php" method="post"  enctype="multipart/form-data" class="col-xs-12">
				<div class="form-group row">
					<label class="col-xs-4 questions_Fontsize text-right">请输入实验序号:</label>
					<div class="col-xs-8">
						<input type="text" name="shiyan_Id" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xs-4 questions_Fontsize text-right">请输入实验名称:</label>
					<div class="col-xs-8">
						<input type="text" name="shiyan_Name" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xs-4 questions_Fontsize text-right">请输入实验内容:</label>
					<div class="col-xs-8">
						<textarea name="shiyan_Content" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xs-4 questions_Fontsize text-right">请上传PPT文件:</label>
					<div class="col-xs-8">
						<input type="file" name="shiyan_Ppt" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xs-4 questions_Fontsize text-right">请上传视频文件:</label>
					<div class="col-xs-8">
						<input type="file" name="shiyan_Shipin" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xs-4 questions_Fontsize text-right">请输入文件存储目录:</label>
					<div class="col-xs-8">
						<textarea name="shiyan_Weizhi" class="form-control"></textarea>
					</div>
				</div>
				<input class="col-xs-4 col-sm-offset-6 btn-primary btn-lg" type="submit" name="" id="tianjia_Button" value="确认提交">
			</form>
		</div>
	</div>

   	<script  src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script> 
	<script type="text/javascript" src="js/jiaoxue.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>