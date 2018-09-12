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

document.getElementById('jiaoshi_button1').onclick = function(){
  // alert("z");
  var jiaoshi1 = document.getElementById('jiaoshi1');
  var jiaoshi2 = document.getElementById('jiaoshi2');
  var jiaoshi3 = document.getElementById('jiaoshi3');
  var jiaoshi_button1 = document.getElementById('jiaoshi_button1');
  var jiaoshi_button2 = document.getElementById('jiaoshi_button2');
  var jiaoshi_button3 = document.getElementById('jiaoshi_button3');
  jiaoshi_button1.style.backgroundColor = '#ccc';//js设置背景色时用backgroundColor
  jiaoshi_button2.style.backgroundColor = '#0066ff';
  jiaoshi_button3.style.backgroundColor = '#0066ff';
  jiaoshi1.style.display = '';
  jiaoshi2.style.display = 'none';
  jiaoshi3.style.display = 'none';

}
document.getElementById('jiaoshi_button2').onclick = function(){
  // alert("z");
  var jiaoshi1 = document.getElementById('jiaoshi1');
  var jiaoshi2 = document.getElementById('jiaoshi2');
  var jiaoshi3 = document.getElementById('jiaoshi3');
  var jiaoshi_button1 = document.getElementById('jiaoshi_button1');
  var jiaoshi_button2 = document.getElementById('jiaoshi_button2');
  var jiaoshi_button3 = document.getElementById('jiaoshi_button3');
  jiaoshi_button1.style.backgroundColor = '#0066ff';//js设置背景色时用backgroundColor
  jiaoshi_button2.style.backgroundColor = '#ccc';
  jiaoshi_button3.style.backgroundColor = '#0066ff';
  jiaoshi1.style.display = 'none';
  jiaoshi2.style.display = '';
  jiaoshi3.style.display = 'none';

}
document.getElementById('jiaoshi_button3').onclick = function(){
  // alert("z");
  var jiaoshi1 = document.getElementById('jiaoshi1');
  var jiaoshi2 = document.getElementById('jiaoshi2');
  var jiaoshi3 = document.getElementById('jiaoshi3');
  var jiaoshi_button1 = document.getElementById('jiaoshi_button1');
  var jiaoshi_button2 = document.getElementById('jiaoshi_button2');
  var jiaoshi_button3 = document.getElementById('jiaoshi_button3');
  jiaoshi_button1.style.backgroundColor = '#0066ff';//js设置背景色时用backgroundColor
  jiaoshi_button2.style.backgroundColor = '#0066ff';
  jiaoshi_button3.style.backgroundColor = '#ccc';
  jiaoshi1.style.display = 'none';
  jiaoshi2.style.display = 'none';
  jiaoshi3.style.display = '';

}
document.getElementById('zan').onclick = function(){
  var zanshu =parseInt(document.getElementById('zanshu').innerHTML);
  zanshu += 1;
  location.href = "database/zan.php?zanshu="+ zanshu;
}
document.getElementById('zan2').onclick = function(){
  var zanshu2 =parseInt(document.getElementById('zanshu2').innerHTML);
  zanshu2 += 1;
  location.href = "database/zan.php?zanshu2="+ zanshu2;
}
document.getElementById('zan3').onclick = function(){
  var zanshu3 =parseInt(document.getElementById('zanshu3').innerHTML);
  zanshu3 += 1;
  location.href = "database/zan.php?zanshu3="+ zanshu3;
}