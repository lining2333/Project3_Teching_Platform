
// window.onload = function() { alert('a')}
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
var i = 0 ;
var timer;
//设计图片动画效果和下方序号效果
function Show(){
  //设计图片淡入淡出效果
  $('.img_Show').eq(i).fadeIn(300).siblings('.img_Show').fadeOut(300);
  //给.order_Img创建一个新的Class为其添加一个新的样式，并且要在css代码中设置该样式
  $('.order_Img').eq(i).addClass('bg').siblings('.order_Img').removeClass('bg');

}

//设计轮播效果
function showTime(){
  //定时器
  timer = setInterval(function(){
    //调用一个Show()函数
    Show();
    i++;
    //当图片是最后一张的后面时，设置图片为第一张
    if(i==5){
      i=0;
    }
  },2000);
}

 //等待页面document加载完再执行相关操作
$(document).ready(function(){
  //用jquery方法设置第一张图片显示，其余隐藏
  $('.img_Show').eq(0).show().siblings('.img_Show').hide();
  
  //调用showTime()函数（轮播函数）
  showTime();

  //当鼠标经过下面的数字时，触发两个事件（鼠标悬停和鼠标离开）
  $('.order_Img').hover(function(){
    //获取当前i的值，并显示，同时还要清除定时器
    i = $(this).index();
    Show();
    clearInterval(timer);
    showTime();
  });
   
  //鼠标点击左侧的箭头
  $('.button1').click(function(){
    clearInterval(timer);
    if(i == 0){
      i = 5;//从第一张图片转到第五张图片
    }
    i--;
    Show();
    showTime();
  });
   
  //鼠标点击右侧的箭头
  $('.button2').click(function(){
    clearInterval(timer);
    if(i == 4){
      i = -1;//从第五张图片转到第一张图片
    }
    i++;
    Show();
    showTime();
  });
});
document.getElementById('xinwen_button').onclick = function(){
  // alert("z");
  var xinwen = document.getElementById('xinwen_ul');
  var jingsai = document.getElementById('jingsai_ul');
  var xinwen_button = document.getElementById('xinwen_button');
  var jingsai_button = document.getElementById('jingsai_button');
  xinwen_button.style.backgroundColor = '#ccc';//js设置背景色时用backgroundColor
  jingsai_button.style.backgroundColor = '#0066ff';
  jingsai.style.display = 'none';
  xinwen.style.display = '';
  
}
document.getElementById('jingsai_button').onclick = function(){
  var xinwen = document.getElementById('xinwen_ul');
  var jingsai = document.getElementById('jingsai_ul');
  var xinwen_button = document.getElementById('xinwen_button');
  var jingsai_button = document.getElementById('jingsai_button');
  xinwen_button.style.backgroundColor = '#0066ff';
  jingsai_button.style.backgroundColor = '#ccc';
  xinwen.style.display = 'none';
  jingsai.style.display = '';
}