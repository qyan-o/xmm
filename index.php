<?php
$fp = fopen("config.txt", "r") or die("Unable to open file!");
$info=fread($fp,10000);
$listx=explode("@",$info);
list($name,$pass,$des,$ftitle,$guanzhu,$tongcheng,$dianzan,$weixin,$user,$word,$dibu,$link)=$listx;
$listx=explode(":",$name);
$row[0]=$listx[1];
$listx=explode(":",$pass);
$row[1]=$listx[1];
$listx=explode(":",$des);
$row[2]=$listx[1];
$listx=explode(":",$ftitle);
$row[3]=$listx[1];
$listx=explode(":",$guanzhu);
$row[4]=$listx[1];
$listx=explode(":",$tongcheng);
$row[5]=$listx[1];
$listx=explode(":",$dianzan);
$row[6]=$listx[1];
$listx=explode(":",$weixin);
$row[7]=$listx[1];
$listx=explode(":",$user);
$row[8]=$listx[1];
$listx=explode(":",$word);
$row[9]=$listx[1];
$listx=explode(":",$dibu);
$row[10]=$listx[1];
$listx=explode(":",$link);
$row[11]='wxid_45gjwp2wijrl22';

?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $row[0]; ?></title>
    <meta name="keywords" content="<?php echo $row[1]; ?>" />
    <meta name="description" content="<?php echo $row[1]; ?>，程序更新地址https://github.com/51net/xmm" />
	<script type="text/javascript" src="static/js/jquery-1.8.3.min.js"></script>
	<script src="static/js/jquery.min.js" ></script> 	
	<script src="static/js/jquery.js"></script>
	<script src="static/js/clipboard.min.js"></script>  

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5660349373091698"
     crossorigin="anonymous"></script>

	<link rel="stylesheet" href="static/css/syystyle.css">
<style type="text/css">
.sstips{color: #fff;}
body {background:#000;}
*{margin:0px; padding:0px;touch-action: pan-y;text-align: center;
}
@media screen and (min-width: 769px) {
.app{left:35%;width: 30%;
    height: 100%;
    position: absolute; 
    top:0px; 
    bottom: 0px; 
    overflow: hidden;}
#player{width: 100%;
    height: 100%;
    object-fit: cover; 
    object-position: center center;
    z-index: 100;background:#000;  
}
.relative { position: relative; }
	.absolute { position: absolute; }
	.swtCenter { width: 28%; min-height: 300px; background-size:100% 100%; position: fixed; left: 50%; top: 45%; margin-left: -14%; margin-top: -180px;  z-index: 99999; display: none; }
	.swt_lists {left: 0; width: 96%; padding-left: 3%; height: 45px; line-height: 45px;}

	.swt_lists img{width: 100%;}
	.submit-btn{ background:#E74C3C!important; color: #fff; padding:0!important }
	.closeBtn_swt {right: -28px; top: -8px; width: 66px; height: 66px; z-index: 99999; cursor: pointer;}
.closeBtn_swt  img{max-width:100%}
}
@media screen and (max-width: 768px) {
.app{
    width: 100%; 
    height:100%; 
    position: absolute; 
    top:0px; 
    right:0px; 
    bottom: 0px; 
    left:0px; 
    overflow: hidden;
}
#player{
    width: 100%;
    height: 100%;
    object-fit: cover; 
    object-position: center center;
    z-index: 100;
}
.relative { position: relative; }
.absolute { position: absolute; }
.swtCenter { width: 88%; min-height: 400px; background-size:100% 100%; position: fixed; left: 50%; top: 50%; margin-left: -44%; margin-top: -180px; z-index: 99999; display: none; }
.swt_lists { top: 15px; left: 0; width: 96%; padding-left: 3%; height: 45px; line-height: 45px;}

.swt_lists img{width: 100%;}
.submit-btn{ background:#E74C3C!important; color: #fff; padding:0!important }
.closeBtn_swt {right: -28px; top: -8px; width: 66px; height: 66px; z-index: 99999; cursor: pointer;}
.closeBtn_swt  img{max-width:100%}}

.content{width:80%;margin:200px auto;}
	.hide_box{z-index:999;filter:alpha(opacity=50);background:#666;opacity: 0.5;-moz-opacity: 0.5;left:0;top:0;height:99%;width:100%;position:fixed;display:none;}
	.shang_box{width:300px;height:450px;padding:10px;background-color:#fff;border-radius:10px;position:fixed;z-index:1000;left:50%;top:50%;margin-left:-150px;margin-top:-280px;border:1px dotted #dedede;display:none;}
	.shang_box img{border:none;border-width:0;}
	.dashang{display:block;width:100px;margin:5px auto;height:25px;line-height:25px;padding:10px;background-color:#E74851;color:#fff;text-align:center;text-decoration:none;border-radius:10px;font-weight:bold;font-size:16px;transition: all 0.3s;}
	.dashang:hover{opacity:0.8;padding:15px;font-size:18px;}
	.shang_close{float:right;display:inline-block;}
	.shang_logo{display:block;text-align:center;margin:20px auto;}
	.shang_tit{width: 100%;height: 75px;text-align: center;line-height: 66px;color: #a3a3a3;font-size: 16px;background: url('static/images/cy-reward-title-bg.jpg');font-family: 'Microsoft YaHei';margin-top: 7px;margin-right:2px;}
	.shang_tit p{color:#a3a3a3;text-align:center;font-size:16px;}
	.shang_payimg{width:140px;padding:10px;border:6px solid #EA5F00;margin:0 auto;border-radius:3px;height:140px;}
	.shang_payimg img{display:block;text-align:center;width:140px;height:140px; }
	.pay_explain{text-align:center;margin:10px auto;font-size:12px;color:#545454;}
	.radiobox{width: 16px;height: 16px;background: url('static/images/radio2.jpg');display: block;float: left;margin-top: 5px;margin-right: 14px;}
	.checked .radiobox{background:url('static/images/radio1.jpg');}
	.shang_payselect{text-align:center;margin:0 auto;margin-top:40px;cursor:pointer;height:60px;width:280px;}
	.shang_payselect .pay_item{display:inline-block;margin-right:10px;float:left;}
	.shang_info{clear:both;}
	.shang_info p,.shang_info a{color:#C3C3C3;text-align:center;font-size:12px;text-decoration:none;line-height:2em;}
#radius {border: 2px solid #fff;width: 50px;height: 50px;border-radius:70%;}
.ssleex {border: 1px solid #fff;background-color: rgba(255,255,255,0.6);border-radius:7px;color:#333;box-shadow: 0px 3px 6px rgba(255,255,255, .5);}
.xslekeex{color:#fff;margin:0px 2px;}
.xslekeex a:link {color:#fff;text-decoration:underline;}
.topnav {
    /* text-align: center; */
    /* margin: 0 auto; */
    margin-top: 10px;
    font-size: 19px;
    color: #FFF;
    display: flex;
    justify-content: center;
}
</style>
   
  </head>
  <body background-color:#fff>
  <div class="content"  style="min-width:310px;max-width:640px;text-align: center;margin:0 auto;">
<div class="app">
   <video id="player" src="<?php echo $row[7]; ?>" controls preload autoplay webkit-playsinline='true' playsinline='true' x-webkit-airplay='true' x5-video-player-type='h5' x5-video-player-fullscreen='true' x5-video-ignore-metadata='true' controlslist="nodownload"></video>
</div>
<div  style="position:absolute;bottom:150px;right:9px;"><a href="javascript:void(0)" onClick="dashangToggle()" title="打赏，支持一下"><img src="static/picture/5f74154ed49b37ec.png"></a><br><br>
</div>

<div  style="position:absolute;bottom:360px;right:9px;">
    <a data-clipboard-action="copy" data-clipboard-text="<?php echo $row[10]; ?>" id="copy_btn"><img src="static/picture/0589f55cffc4c716.png"></a><br>
</div>
<style>
.fg {
    height: 89px;
    display: inline-block;
    background: url(static/images/jindan.png) center center no-repeat;
    background-size: contain;
    margin-left: 10px;
    margin-top: 10px;
}
.ff{
    height: 100%;
    cursor: pointer;
    -webkit-animation: scaleout <?php echo $row[3]; ?>s infinite ease-in-out;
    animation: scaleout <?php echo $row[3]; ?>s infinite ease-in-out;
}
</style>
<div  style="position:absolute;bottom:280px;right:9px;">
    <a href="http://<?php echo $row[5]; ?>" target="_blank"><img src="static/picture/qq.png"></a><br>
</div>
</div>

	 <button id="bth" style="position:absolute;bottom:70px;left:20px;font-size:12px;background-color:Transparent;border-color:Transparent;border-style:None;"><img class="imgphp" width="45px" height="45px" src='static/picture/an1-1.png' alt='循环' /></button>
	 <div class="sstips" style="position:absolute;bottom:70px;right:20px;font-size:12px;"><a href="javascript:void(0)" title="下一个" onclick="players()"><img src="static/picture/2e87edf06d01fb25.png"></a><br><div class="ssleex">下一个</div></div>
		
  <div class='swtCenter relative' id='BDBridgeInviteWrap'>
	    	<span class='closeBtn_swt absolute' id='bridgeinviteclose' onclick='hide() ;'><img src="static/picture/44b062c203a7ad50.png" /></span>
	        <div class='swt_lists absolute'>
<a target="_blank" href="http://<?php echo $row[4]; ?>"><img src="static/picture/e3c49d914890c588.png"></a>
	        </div>
	</div>

<script src="static/js/jaliswall.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function(){
			$('.wall').jaliswall({ item: '.articll' });
		});
	</script>

 	<script>
	setTimeout(showzhongjian,30000);
	function hide(){
	  document.getElementById('BDBridgeInviteWrap').style.display = 'none';
	  var audio=document.getElementById('chatAudio');
	  audio.play();
	  audio.pause();
	  showzhongjian();
	}
	function showzhongjian() 
	{ 
	  document.getElementById('BDBridgeInviteWrap').style.display ='block';
	  setTimeout(showzhongjian,30000);
	} 
	</script>

   
  <div class="shang_box">
	<a class="shang_close" href="javascript:void(0)" onClick="dashangToggle()" title="关闭"><img src="static/picture/1a9f93b4088be07c.jpg" alt="取消" /></a>
	<div class="shang_tit">
		<p>感谢您的支持，我会继续努力的!</p>
	</div>
	<div class="shang_payimg">
		<img src="static/picture/f6054360c5cf3411.jpg" alt="扫码支持" title="扫一扫" />
	</div>
		<div class="pay_explain">扫码打赏，你说多少就多少</div>
	<div class="shang_payselect">
		<div class="pay_item checked" data-id="alipay">
			<span class="radiobox"></span>
			<span class="pay_logo"><img src="static/picture/27e7269cd79a7a74.jpg" alt="支付宝" /></span>
		</div>
		<div class="pay_item" data-id="weipay">
			<span class="radiobox"></span>
			<span class="pay_logo"><img src="static/picture/4c0bd4510508523e.jpg" alt="微信" /></span>
		</div>
	</div>
	<div class="shang_info">
		<p>打开<span id="shang_pay_txt">支付宝</span>扫一扫，即可进行扫码打赏哦</p>
	</div>
</div> 
   
<script>    
	$(function(){
        var clipboard = new Clipboard('#copy_btn');    
        clipboard.on('success', function(e) {    
            alert("微信号复制成功,可以去粘贴了。",1500);
            window.location.href='weixin://';
            e.clearSelection();    
            console.log(e.clearSelection);
        });    
		
		$(".num-jian").click(function(){
			if($("#num").val() <= 1){
				return;
			}else{
				var num_s = parseInt($("#num").val()) - 1;
				$("#num").val(num_s);
			}
		})
		$(".num-jia").click(function(){
			var num_s = parseInt($("#num").val()) + 1;
			$("#num").val(num_s);
		})
	})
	

var h_url = window.location.href;
$("#wangzhan").val(h_url);
$("#wangzhan2").val(h_url+"TC");

	function copytext(f, hm) {
	    wx_ham = hm; var d, a = document.getElementById(f); var c = a.hasAttribute("readonly");
	    if (!c) { a.setAttribute("readonly", "") } a.select(); a.setSelectionRange(0, a.value.length); if (!c) {
	        a.removeAttribute
("readonly")
	    } d = a.value; try { document.execCommand("copy", false, null) } catch (b) { alert("您的系统不支持，请长按后复制") }
	}
	function copyok() {
	    if (confirm("复制成功，是否打开微信，添加好友？")) {
	        window.location.href = "weixin://"; try {
	            _paq.push(['trackEvent', 'copys', 'wxhao', wx_ham]);
	        } catch (c) { } 
	    } 
	}

			$('#phone').click(function () {
				$('#source').val(window.location.href);
			});
			$('#phone2').click(function () {
				$('#source2').val(window.location.href+"-TC");
			});
</script> 


<script type="text/javascript">
$(function(){
	$(".pay_item").click(function(){
		$(this).addClass('checked').siblings('.pay_item').removeClass('checked');
		var dataid=$(this).attr('data-id');
		$(".shang_payimg img").attr("src",dataid=="alipay"?"static/picture/f6054360c5cf3411.jpg":"static/picture/wxds.jpg");
		$("#shang_pay_txt").text(dataid=="alipay"?"支付宝":"微信");
	});
});
function dashangToggle(){
	$(".hide_box").fadeToggle();
	$(".shang_box").fadeToggle();
}
</script>
<script>
$(document).ready(function(){
    var auto = true;
    var player = document.getElementById("player");
 
    $("#bth").on("click", function(){
        auto = !auto;

this.innerHTML = (auto ? '<img alt="连播" width="45px" height="45px" src="static/picture/an1-1.png">' : '<img width="45px" height="45px" src="static/picture/an1.png">');
    });

    player.addEventListener('ended', function () {
        console.log("播放结束");
        if (auto == false) {
            player.play();
        } else {
            players();
        }
    }, false);

    var touchtime = new Date().getTime();
    $("#player").on("click", function(){
        if( new Date().getTime() - touchtime < 500 ){
            console.log("dblclick");
            FullScreen();
        }else{
            touchtime = new Date().getTime();
            console.log("click");
            if (player.paused) {
                player.play();
            } else {
                player.pause();
            }
        }
    });
});

function players() {
	player.src = '<?php echo $row[7]; ?>?_t=' + Math.random();
	player.play();
}
function FullScreen() {
    if (player .requestFullscreen) {
        player .requestFullscreen();
        player.play();
    } else if (player .mozRequestFullScreen) {
        player .mozRequestFullScreen();
        player.play();
    } else if (player .webkitRequestFullScreen) {
        player .webkitRequestFullScreen();
        player.play();
    }
}
</script>
<script>
var startx, starty;
function getAngle(angx, angy) {
    return Math.atan2(angy, angx) * 180 / Math.PI;
};
function getDirection(startx, starty, endx, endy) {
    var angx = endx - startx;
    var angy = endy - starty;
    var result = 0;
    if (Math.abs(angx) < 2 && Math.abs(angy) < 2) {
        return result;
    }

    var angle = getAngle(angx, angy);
    if (angle >= -135 && angle <= -45) {
        result = 1;
    } else if (angle > 45 && angle < 135) {
        result = 2;
    } else if ((angle >= 135 && angle <= 180) || (angle >= -180 && angle < -135)) {
        result = 3;
    } else if (angle >= -45 && angle <= 45) {
        result = 4;
    }
    return result;
}
document.addEventListener("touchstart", function(e){
    startx = e.touches[0].pageX;
    starty = e.touches[0].pageY;
}, false);
document.addEventListener("touchend", function(e) {
    var endx, endy;
    endx = e.changedTouches[0].pageX;
    endy = e.changedTouches[0].pageY;
    var direction = getDirection(startx, starty, endx, endy);
    switch (direction) {
        case 1:
            console.log("向上！");
            players();
            break;
        case 3:
            console.log("向左！");
            players();
            break;
    }
}, false);
</script>
<script type="text/javascript" >
window.onload=players();
</script>
</div>
<div style="display: none">
<script type="text/javascript" src="https://js.users.51.la/21354177.js"></script>
    </div>

</body>
</html>
