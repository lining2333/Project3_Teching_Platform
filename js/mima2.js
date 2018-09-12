document.getElementById("mima_Button2").onclick = function mima2(){
	//获取输入密码值
	var mima2 = document.getElementById("mima2").value;
	//如果密码等于设定值,则跳转删除页面,否则报错
	if (mima2 == 123456) {
			window.location.href = "shanchu.php";
			return false;	      
	}
	else{
		alert("密码错误！");
	}
}