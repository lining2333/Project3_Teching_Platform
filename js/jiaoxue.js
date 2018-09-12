window.onload = function() {  
    var riqi = document.getElementById("riqi"); 
    var shijian = document.getElementById("shijian");  
    setInterval(function() {   
    var time = new Date();   // 程序计时的月从0开始取值后+1   
    var m = time.getMonth() + 1;  
    var xingqi = time.getDay();
    switch(xingqi){
      case 0: xingqi = "星期日";break;
      case 1: xingqi = "星期一";break;
      case 2: xingqi = "星期二";break;
      case 3: xingqi = "星期三";break;
      case 4: xingqi = "星期四";break;
      case 5: xingqi = "星期五";break;
      case 6: xingqi = "星期六";break;
      default: xingqi = "星期显示";
    }
    riqi.innerHTML = time.getFullYear() + "年" + m + "月" + time.getDate() + "日" ;
    shijian.innerHTML =time.getHours() + ":" + time.getMinutes() + ":" + time.getSeconds() + "  " +
    xingqi;   
    
    // show.innerHTML = t;  
    }, 1000); 
    };
document.getElementById("tianjia_Button").onclick = function tianjia(){
	//点击添加按钮后跳转到密码验证页面
	window.location.href = "mima.php";	      
}
document.getElementById("shanchu_Button").onclick = function shanchu(){
	//点击删除按钮后跳转到密码验证页面
	window.location.href = "mima2.php";	      
}