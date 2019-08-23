<!-- 
Theme Name: iPhone Fan
Theme URI: http://www.iphonefan.com/

원작자의 허락 하에 소스를 수정하였습니다.
nekojp@naver.com
-->

<!-- 모바일사이트로 이동 -->
<?php
$arr_browser = array ("iPhone","iPad","iPod","Linux","IEMobile","Mobile","lgtelecom","PPC");  
for($i = 0 ; $i < count($arr_browser) ; $i++) {  
if(strpos($_SERVER['HTTP_USER_AGENT'],$arr_browser[$i]) == true){  
  // 모바일 브라우저라면  모바일 URL로 이동   
   header("Location: http://$_SERVER[SERVER_NAME]/m_index.php");  
   exit;  
 }  
}  
?>
<!-- end of mobile -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="blog" charset="UTF-8" />
	<title>Pedkdh&#39;s Home</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<style type="text/css" media="screen"></style>
</head>

<body onLoad="show_clock()">
<?php
	include_once "header.php";
?>

<div id="MainContainer">		
	<div id="iPhoneBox">
		<div id="iPhoneHead"></div>
		<div id="iPhoneScreen">
			<div id="iPhoneSignal">
				<div class="clock"><script language="javascript" src="time/liveclock_lite.js"></script></div>
			</div> 
		
			<div id="iPhoneContainer">
		    	<div id="Balloon_Head"></div>
		    		<div id="p" class="Ballon">
		    			<div class="titulin">환영합니다 | Welcome | ようこそ</div>
		    			<div class="fechita"><img src="pix/kr.png">&nbsp;이 사이트는 개인용 NAS에 매우 효과적인 포고플러그 시리즈 4로 운영되고 있습니다.</div>
		    			<div class="fechita"><img src="pix/us.png">&nbsp;This site is running by Pogoplug series 4.<br> <img src="pix/jp.png">&nbsp;このサイトはpogoplug series 4で作りました。</div>
		    			<div id="rapidin">&nbsp;</div>	
		    		</div>
		   		<div id="Balloon_Bottom"></div>
		    
				<hr class="hrfix" />
				<img src="pix/blank.gif" width="220" height="25" border="0" /> 

			    <!-- add menus you want as below -->			
				<div id="post1"><h2><a href="http://<?=$_SERVER['SERVER_NAME']?>/juicebox_gallery"><img src="pix/iphoto.png">&nbsp;GALLERY</a></h2></div>
				<div id="post2"><h2><a href="ftp://pogo.pedkdh.ml:8521" target="_blank"><img src="pix/transmit.png">&nbsp;FTP</a></h2></div>
				<div id="post3"><h2><a href="http://pogo.pedkdh.ml:8591" target="_blank"><img src="pix/transmission.png">&nbsp;Transmission</a></h2></div>
				<div id="post4"><h2><a href="https://<?=$_SERVER['SERVER_NAME']?>:10000" target="_blank"><img src="pix/webmin.png">&nbsp;WEBMIN</a></h2></div>

			﻿	<div id="Pogo" align="center">
					<img src="pix/pogoplug.png" border="0" />
				</div>
			</div>	
		</div>

		<div id="iPhoneFooter"> <!-- Parte Inferior del iPhone -->
			<div class="home"><a href="#"><img src="pix/blank.gif" width="50" height="50" border="0" /></a></div>
		</div>	
	</div>
</div>	
</body>
</html>
