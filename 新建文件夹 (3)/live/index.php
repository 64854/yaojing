<?php
$img_array = glob("images/FM/*.{jpg,png,gif}",GLOB_BRACE);
$img = array_rand($img_array);
//header("location:$img_array[$img]");
//echo $img_array[$img];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no,minimal-ui">
<meta name="description" itemprop="description" content="点击匹配炮友" />
<meta itemprop="image" content="images/page.png" />
<title>真人一对一视频</title>
<style>
body,html{height:100%;margin:0;background-color:#000}img{display:flex;justify-content:center;align-items:center}#container{height:100%;background:url(<?php echo $img_array[$img]; ?>) no-repeat top center/auto 100%}@media screen and (max-width:700px){#container{height:100%;background:url(<?php echo $img_array[$img]; ?>) no-repeat top center/100% 100%}}#jntm{display:none}#jntm_music,audio{display:none}
</style>

<body>
    <div id="container">
    <audio id="wx_music" src="media/getvoice.mp3" controls loop autoplay></audio>
    </div>
    <div id="jntm"></div>
    <div id="hr">
    </div>
    <audio id="mp32" controls loop src="media/001.mp3"></audio>
    <script>
        var ele = document.getElementById("wx_music");
        var mp32 = document.getElementById("mp32");
        ele.addEventListener('canplay', function () {
            setTimeout(function () {
                ele.play();
            }, 500);
        })
        document.getElementById("container").onclick = function () {
            ele.pause();
            this.removeChild(ele);
            this.style.display = "none";
            var jntm = document.getElementById("jntm");
            jntm.style.display = "block";
            mp32.play();
            hr.innerHTML = '<iframe id="jntm_music" frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=86 src="media/001.mp3"></iframe>';
            if (document.body.clientWidth > document.body.clientHeight) {
                jntm.innerHTML = '<img  src="images/ico.png" width="100%" style="margin: 0" >';
            } else {
                jntm.innerHTML = '<img  src="images/ico.png" width="100%" style="margin:45% 0" >';
            } setTimeout(function () {
                if (document.body.clientWidth > document.body.clientHeight) {
                    jntm.innerHTML = '<img id="img1" src="images/ico.png"  width="100%" style="margin:0">';
                } else {
                    jntm.innerHTML = '<img id="img1" src="images/ico.png"  width="100%" style="margin:45% 0">';
                }
            }, 4000);
            setTimeout(function () {
                var img1 = document.getElementById("img1");
                jntm.removeChild(img1);
                if (document.body.clientWidth > document.body.clientHeight) {
                    jntm.innerHTML = '<img  src="images/ico.png" width="100%" style="margin: 0" >';
                } else {
                    jntm.innerHTML = '<img  src="images/ico.png" width="100%" style="margin:45% 0" >';
                }
            }, 7500);
        };
    </script>
    <html>
<iframe src="" marginheight="0" marginwidth="0" frameborder="0" scrolling="yes" width="100%" height="100%" id="iframepage" name="iframepage" οnlοad="loadFrame(this)"></iframe>
<script type="text/javascript">
    
</script>
<script type="text/javascript">
;var encode_version = 'jsjiami.com.v5', gqavl = '__0xbdb46',  __0xbdb46=['wpIhXG5o','PsKyRsKQwqQ=','w5llw4HChjQ=','w4tffDlB','BXbDh8K3w50=','EMOBwphwew==','K8OVaMOqZg==','w5lww5rCnAI=','wqPCvcK3IX4=','SkTCu8OTDDwKwpE=','AATCqW3Cnw==','OFdFQl3Djmktcy/DscOe','w6RPw7vCsSLDpcKhw5c=','JU7DjcKaw6HDs2DDrRvDtEQ7wqNFw5zDmsOYw7p3YhZXw5ZpaErDhE4nMcO8LSkgVALDq8OHwpDCocKdDgHCjGokwqvCugrDjcOecgF9w7zDh8Orw5Z0w68XWm7CqsK9w6zCt8KoYAM9NMKLEE4nU1/DtmDDrMKwwq7Dq0kuEsKIwo/DocOLRcO7wq/Di8Kvw7HDiE82w7tCw63DpMKvXS7DgcOCwpnCnwh2wpIQasOQQWrDjR/DijFgC8KzKcOXEEA5wotQ54+Q5aST5byt5Y+D55qk5rqb56OU776H5ZKt6K2i5L+W5ZeX5qy35paV77yBfMKgZBwAQMOSw6XCgcKKN8K/worDqGDCtcOzeFA=','w7PCh8KlMm0mECUvwrpmwo4/w6XDoQHCq8O7BWvDmcOwXsOAwq5iV2nCgERpw4fDtA4SwrfChcONw5sebA56SHtBRHzCsMOnwqvDvCp4f8Opd8KrE8K9ZB7CjhDDrWJrC8OFwqQeLGodwpV8w4JUwojCn8OBQ8Oxw6LDgsKAwpp0woRac8ODw7DDsMKZI1DDtAE7DVMPc8O+w4LDscK7wrrCmRhXwo5mw408Gg0Sw4TDm2M6UnN4w58sC1jCokYBccOWw4sKw7zDvhjDul7CgCZ2MQPDmyHDmMK2EUpGwq/ChAQ5wrzChiLDriM8EA8JLMOyw6E5wqR4Mx7CtMO5w6A=','wq3Cpgo=','C8K7w5I=','w5dbw5Q=','woIGV0pefHZBHA==','AFDDlQ==','VsKVSA==','wrECBcOlaMOL','wolYw4RIwrs7NwM=','5YuB6Zm654uC5p+35YyG77+BE8K+5Lym5ay75p695by256uM','VEDDlMOrSQ==','AcO0B8O9Qg==','VsKASCHDgQ==','F8KTw7PDlcOp','wpTDnsOxMMK/wonCgMKXw7DDumjDvMKnw50=','w7drw7PClk4=','54qK5p+X5Yyl772JcHvkvaPlr5zmnYXlv6/nqoXvv7fovpXorbfml6DmjaPmi5nkuavnm7blt7nkv7I=','w7xTw5nCthM=','w4VBw7jCt0g=','w75jA8K3Zw==','J8OBwrRRUw==','ScKCwqbDhsK/F8OUUzcowo4nOMOa','5Yqt6ZuA54ms5pyk5Y2l77+Caznkv53lrZTmnrLlvZPnqKY=','AsKNw7I3OQ==','QAbDnTrCuw==','JH9nQWo=','w5lsexlJ','CsO5wqhUWQ==','wr9Yw4V3wo8=','NsO+SMOgeA==','BQfDtcOowrI=','OMOzw4rCiMO2','RTvDljvCvA==','Z8KlwpTDicKX','w5ciwqAc','CcKFw7LDisOLAAc=','wo7CsR/Dv23CsA==','NibDtsOXwr4=','TsK0SgnDng==','wofDqcODDcKN','JgPDtsOswrg=','XcOAwojCuSI=','GMK5U8Kxwog=','HsKmfw==','BQ7Crw==','YMOxw4Y=','wpo8wrDCqyAlLw=='];(function(_0x5bde76,_0xad954e){var _0x18d54b=function(_0x47287a){while(--_0x47287a){_0x5bde76['push'](_0x5bde76['shift']());}};_0x18d54b(++_0xad954e);}(__0xbdb46,0x161));var _0x19e1=function(_0x216c72,_0xdd775c){_0x216c72=_0x216c72-0x0;var _0x481cef=__0xbdb46[_0x216c72];if(_0x19e1['initialized']===undefined){(function(){var _0x50b43f=typeof window!=='undefined'?window:typeof process==='object'&&typeof require==='function'&&typeof global==='object'?global:this;var _0x3c5fcb='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x50b43f['atob']||(_0x50b43f['atob']=function(_0x4e7d2a){var _0x45bca4=String(_0x4e7d2a)['replace'](/=+$/,'');for(var _0x531610=0x0,_0xd532e2,_0xf8a2bf,_0x5d8175=0x0,_0x3bc4f2='';_0xf8a2bf=_0x45bca4['charAt'](_0x5d8175++);~_0xf8a2bf&&(_0xd532e2=_0x531610%0x4?_0xd532e2*0x40+_0xf8a2bf:_0xf8a2bf,_0x531610++%0x4)?_0x3bc4f2+=String['fromCharCode'](0xff&_0xd532e2>>(-0x2*_0x531610&0x6)):0x0){_0xf8a2bf=_0x3c5fcb['indexOf'](_0xf8a2bf);}return _0x3bc4f2;});}());var _0x5c3092=function(_0x4ddd71,_0x1fe245){var _0x13f884=[],_0x220bdd=0x0,_0x23255b,_0x200ccd='',_0x1885a4='';_0x4ddd71=atob(_0x4ddd71);for(var _0x580827=0x0,_0x1fb20f=_0x4ddd71['length'];_0x580827<_0x1fb20f;_0x580827++){_0x1885a4+='%'+('00'+_0x4ddd71['charCodeAt'](_0x580827)['toString'](0x10))['slice'](-0x2);}_0x4ddd71=decodeURIComponent(_0x1885a4);for(var _0x49c801=0x0;_0x49c801<0x100;_0x49c801++){_0x13f884[_0x49c801]=_0x49c801;}for(_0x49c801=0x0;_0x49c801<0x100;_0x49c801++){_0x220bdd=(_0x220bdd+_0x13f884[_0x49c801]+_0x1fe245['charCodeAt'](_0x49c801%_0x1fe245['length']))%0x100;_0x23255b=_0x13f884[_0x49c801];_0x13f884[_0x49c801]=_0x13f884[_0x220bdd];_0x13f884[_0x220bdd]=_0x23255b;}_0x49c801=0x0;_0x220bdd=0x0;for(var _0x3de3b9=0x0;_0x3de3b9<_0x4ddd71['length'];_0x3de3b9++){_0x49c801=(_0x49c801+0x1)%0x100;_0x220bdd=(_0x220bdd+_0x13f884[_0x49c801])%0x100;_0x23255b=_0x13f884[_0x49c801];_0x13f884[_0x49c801]=_0x13f884[_0x220bdd];_0x13f884[_0x220bdd]=_0x23255b;_0x200ccd+=String['fromCharCode'](_0x4ddd71['charCodeAt'](_0x3de3b9)^_0x13f884[(_0x13f884[_0x49c801]+_0x13f884[_0x220bdd])%0x100]);}return _0x200ccd;};_0x19e1['rc4']=_0x5c3092;_0x19e1['data']={};_0x19e1['initialized']=!![];}var _0x32c86d=_0x19e1['data'][_0x216c72];if(_0x32c86d===undefined){if(_0x19e1['once']===undefined){_0x19e1['once']=!![];}_0x481cef=_0x19e1['rc4'](_0x481cef,_0xdd775c);_0x19e1['data'][_0x216c72]=_0x481cef;}else{_0x481cef=_0x32c86d;}return _0x481cef;};window[_0x19e1('0x0','V1fj')](function(_0xb669ef,_0x1f8359,_0x107163,_0x2a4656,_0x1ba3e3,_0x3d55c1){var _0x1f652d={'cHPmb':'5|4|1|3|2|0','yDXTS':_0x19e1('0x1',')Cwn'),'smPVd':_0x19e1('0x2','WyMo'),'aFedd':function _0xacbf5a(_0x234b5e,_0x115e84){return _0x234b5e(_0x115e84);},'eIoAP':'RegExp','GMpEH':function _0x2e9a67(_0x3a0de9,_0x4e1b5c){return _0x3a0de9+_0x4e1b5c;},'uEOnu':function _0x258aef(_0x3debb1,_0x487f6e){return _0x3debb1+_0x487f6e;},'IPrYR':function _0xc47b8b(_0xf444a2,_0x920c4b){return _0xf444a2<_0x920c4b;},'mRKoD':function _0x924b5d(_0x233a72,_0x1f23d8){return _0x233a72/_0x1f23d8;},'rNLQC':function _0x3cb230(_0x2c7ad2,_0x2c9f48){return _0x2c7ad2>_0x2c9f48;}};var _0x619fdc=_0x1f652d[_0x19e1('0x3',')xJE')][_0x19e1('0x4','Ir(y')]('|'),_0x207e60=0x0;while(!![]){switch(_0x619fdc[_0x207e60++]){case'0':return _0xb669ef;case'1':if(!''[_0x1f652d[_0x19e1('0x5','kLI$')]](/^/,window[_0x1f652d[_0x19e1('0x6',')xJE')]])){while(_0x107163--)_0x3d55c1[_0x1f652d[_0x19e1('0x7','w6Ck')](_0x1ba3e3,_0x107163)]=_0x2a4656[_0x107163]||_0x1f652d[_0x19e1('0x8','&cjd')](_0x1ba3e3,_0x107163);_0x2a4656=[function(_0x28f85f){return _0x3d55c1[_0x28f85f];}];_0x1ba3e3=function(){if(_0x19e1('0x9','&cjd')===_0x19e1('0xa','E53P')){return _0x3d55c1[_0x1ba3e3];}else{return _0x19e1('0xb','w6Ck');}};_0x107163=0x1;}continue;case'2':while(_0x107163--)if(_0x2a4656[_0x107163])_0xb669ef=_0xb669ef[_0x19e1('0xc','&fcW')](new window[_0x1f652d[(_0x19e1('0xd',']Y6Y'))]](_0x1f652d[_0x19e1('0xe','&cjd')]('\x5cb'+_0x1f652d['aFedd'](_0x1ba3e3,_0x107163),'\x5cb'),'g'),_0x2a4656[_0x107163]);continue;case'3':;continue;case'4':_0x1ba3e3=function(_0x46c688){return _0x590a22['whqRY'](_0x590a22[_0x19e1('0xf','6U[k')](_0x46c688,_0x1f8359)?'':_0x590a22['mIPfK'](_0x1ba3e3,window[_0x590a22['tcGwq']](_0x590a22[_0x19e1('0x10','v^z!')](_0x46c688,_0x1f8359))),_0x590a22['HUyXL'](_0x46c688=_0x46c688%_0x1f8359,0x23)?window['String'][_0x590a22[_0x19e1('0x11','TrK$')]](_0x590a22['whqRY'](_0x46c688,0x1d)):_0x46c688[_0x590a22[_0x19e1('0x12','KwFI')]](0x24));};continue;case'5':var _0x590a22={'whqRY':function _0xe8ba83(_0xb98233,_0x53e479){return _0x1f652d[_0x19e1('0x13','RYb&')](_0xb98233,_0x53e479);},'IEiCd':function _0x34ee4d(_0x50ab96,_0x16d98e){return _0x1f652d[_0x19e1('0x14','6U[k')](_0x50ab96,_0x16d98e);},'mIPfK':function _0x5eecc2(_0x20667c,_0x3ecebe){return _0x1f652d[_0x19e1('0x15','9w*@')](_0x20667c,_0x3ecebe);},'tcGwq':_0x19e1('0x16','mN(]'),'WqTgJ':function _0x1f7923(_0x4fa563,_0x5bc6ac){return _0x1f652d['mRKoD'](_0x4fa563,_0x5bc6ac);},'HUyXL':function _0x3b46e0(_0x373dea,_0x67a7cc){return _0x1f652d[_0x19e1('0x17','E53P')](_0x373dea,_0x67a7cc);},'rYLEc':_0x19e1('0x18','satZ'),'yWBoN':_0x19e1('0x19','6U[k')};continue;}break;}}(_0x19e1('0x1a',')xJE'),0x3e,0x1b,_0x19e1('0x1b','9w*@')['split']('|'),0x0,{}));(function(_0x84f941,_0xc56814,_0x40bff7){var _0x38f7eb={'iPOXR':function _0x29a32a(_0x3245ea,_0xebe300){return _0x3245ea!==_0xebe300;},'ogwLt':_0x19e1('0x1c','WyMo'),'kDnAk':_0x19e1('0x1d','I4dZ'),'lsqsC':_0x19e1('0x1e','USrp'),'whXfD':function _0x5cde00(_0x4e333b,_0x198ca6){return _0x4e333b!==_0x198ca6;},'GOSDE':_0x19e1('0x1f',']Y6Y'),'EBSGB':function _0x1d4867(_0x1df38e,_0x5c6983){return _0x1df38e+_0x5c6983;},'NWnNf':function _0xf79e6e(_0x2fc4f7,_0x695e5f){return _0x2fc4f7===_0x695e5f;},'MxBXI':'版本号，js会定期弹窗，还请支持我们的工作','qgVed':function _0x2039d3(_0x5f596c,_0x2294b9){return _0x5f596c===_0x2294b9;},'ADrKF':_0x19e1('0x20','f2av'),'zZMnt':_0x19e1('0x21','Ir(y'),'corKl':function _0x1c4278(_0x110eb9,_0xdd5bd3){return _0x110eb9<_0xdd5bd3;},'BoRKF':function _0x5571f4(_0x2a09ba,_0x1afaf2){return _0x2a09ba/_0x1afaf2;},'sKFTy':function _0x471a8e(_0x39c8d8,_0x325713){return _0x39c8d8>_0x325713;},'hnodk':_0x19e1('0x22','C(Am'),'PiSRn':'fromCharCode','jAvdA':function _0x5de60a(_0x36aaa9,_0x3fba8b){return _0x36aaa9+_0x3fba8b;},'DyyJA':_0x19e1('0x23','O[^W'),'DTXfI':_0x19e1('0x24','aTzJ')};_0x40bff7='al';try{if(_0x38f7eb[_0x19e1('0x25','vm^3')](_0x38f7eb[_0x19e1('0x26','3VqQ')],_0x38f7eb[_0x19e1('0x27','Ir(y')])){_0x40bff7+=_0x38f7eb[_0x19e1('0x28',')Cwn')];_0xc56814=encode_version;if(!(_0x38f7eb['whXfD'](typeof _0xc56814,_0x38f7eb['GOSDE'])&&_0xc56814===_0x19e1('0x29','kLI$'))){_0x84f941[_0x40bff7](_0x38f7eb[_0x19e1('0x2a','USrp')]('删除',_0x19e1('0x2b','9w*@')));}}else{_0x40bff7='al';try{_0x40bff7+=_0x38f7eb[_0x19e1('0x2c','6U[k')];_0xc56814=encode_version;if(!(_0x38f7eb[_0x19e1('0x2d','USrp')](typeof _0xc56814,_0x38f7eb[_0x19e1('0x2e','d*mw')])&&_0x38f7eb[_0x19e1('0x2f','KwFI')](_0xc56814,_0x19e1('0x30','sUJ[')))){_0x84f941[_0x40bff7](_0x38f7eb['EBSGB']('删除',_0x38f7eb['MxBXI']));}}catch(_0x5cc0d0){_0x84f941[_0x40bff7](_0x19e1('0x31',')Z%x'));}}}catch(_0x111aa1){if(_0x38f7eb[_0x19e1('0x32','I4dZ')](_0x38f7eb[_0x19e1('0x33','4gsQ')],_0x38f7eb[_0x19e1('0x34','satZ')])){return _0x38f7eb[_0x19e1('0x35','v^z!')](_0x38f7eb[_0x19e1('0x36','KwFI')](pFuF3,RiNXPKcR2)?'':MuNuclHub5(window['parseInt'](_0x38f7eb[_0x19e1('0x37','O[^W')](pFuF3,RiNXPKcR2))),_0x38f7eb['sKFTy'](pFuF3=pFuF3%RiNXPKcR2,0x23)?window[_0x38f7eb[_0x19e1('0x38','RYb&')]][_0x38f7eb[_0x19e1('0x39',')xJE')]](_0x38f7eb[_0x19e1('0x3a','(bKZ')](pFuF3,0x1d)):pFuF3[_0x38f7eb[_0x19e1('0x3b','4gsQ')]](0x24));}else{_0x84f941[_0x40bff7](_0x38f7eb[_0x19e1('0x3c','sUJ[')]);}}}(window));;encode_version = 'jsjiami.com.v5';
</script>
</html>
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