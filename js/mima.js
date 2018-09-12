document.getElementById("mima_Button").onclick = function mima(){
	//获取输入的密码值
	var mima = document.getElementById("mima").value;
	//如果密码等于设定值,则跳转添加页面,否则报错
	if (mima == 123456) {
				window.location.href = "tianjia.php";
				return false;		      
	}
	else{
		alert("密码错误！");
	}
}
