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
var liuyan_title = document.getElementById('liuyan_title');
var liuyan_user = document.getElementById('mingcheng').innerHTML;

    // liuyan_user = liuyan_user.replace(" ","");

liuyan_title.onclick = function(){
  // liuyan_title.placeholder = '留言需要登录';
  if (liuyan_user=='') {
    alert("留言需要登录");
  }
}
document.getElementById('liuyan_Submit_Button').onclick = function(){
  if (liuyan_user=='') {
    alert("留言需要登录");
    return false;
  }
}
