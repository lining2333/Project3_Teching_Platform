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
document.getElementById("questions_Submit").onclick = function test_Zhishi(){
	//知识测验答案:单选题：DC 多选题ABC 填空2
	var grade = 0;
	//获取id为question1_D的选项的选中状态
 	var question1_D = $("input[id='question1_D']:checked").val();
 	var question2_C = $("input[id='question2_C']:checked").val();
 	var question3_A = $("input[id='question3_A']:checked").val();
 	var question3_B = $("input[id='question3_B']:checked").val();
 	var question3_C = $("input[id='question3_C']:checked").val();
 	var question4 = $("#question4").val();
 	if (question1_D == "on") {
 		grade += 20;
 	}
 	if (question2_C == "on") {
 		grade += 20;
 	}
 	if (question3_A == "on" && question3_B == "on" && question3_C == "on") {
 		grade += 30;
 	}
 	if (question4 == 2) {
 		grade += 30;
 	}
 	alert("本次测验得分为" + grade + "分");
 	var wanjia=prompt("请输入玩家名称");
	if(wanjia)
	{
	// alert("您刚输入的是："+ str);
	location.href = "../database/zhishi_backend.php?grade="+grade+'&wanjia='+wanjia;
	}

 	
}
document.getElementById("questions_Replay").onclick = function test_Replay(){
	//点击重玩按钮后刷新当前页面
	window.location.href = "zhishi.php";
}