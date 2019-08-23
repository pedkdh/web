<!-- ###################################################################################################
 [PC VERSION]

 showing gallery directory and thumbnail for juicebox.
 by nekojp@naver.com (http://blog.naver.com/nekojp)     
 (2013.Sep.01)      

- 요구사항
1. 웹서버 (아파치 또는 nginx, lighttpd 등)
2. PHP 5.x 이상 설치

- 설치
1. 갤러리 디렉토리를 웹서버에 만든다. (예: /gallery)
2. 쥬스박스빌더로 앨범을 만들고 폴더 전체를 갤러리 디렉토리에 업로드한다. (예: /gallery/my_trip)
3. 이 'index.php', 'read_album.php', 'main.css'　파일을 갤러리 디렉토리에 업로드하고 'pix' 디렉토리도 갤러리 디렉토리에 업로드한다. (예: ／gallery/pix)
4. 갤러리에 접속한다. (예: http://my_domain.com/gallery)
 ################################################################################################### -->

<!-- change to mobile version -->
<?php
$arr_browser = array ("iPhone","iPad","iPod","Linux","IEMobile","Mobile","lgtelecom","PPC");  
for($i = 0; $i < count($arr_browser); $i++) {  
  if(strpos($_SERVER['HTTP_USER_AGENT'],$arr_browser[$i]) == true){  
    // 모바일 브라우저라면  모바일 URL로 이동   
     header("Location: http://".$_SERVER['SERVER_NAME']."/photos/m_index.php");  
     exit;  
   }  
}  
?>
<!-- end mobile version -->
<!DOCTYPE HTML>
<html>
<head>
<!-- if you have broken characters problem, change UTF-8 to EUC-KR -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>J&amp;W&#39;s Home :: Gallery</title>
<link rel="stylesheet" type="text/css" href="http://<?=$_SERVER['SERVER_NAME']?>/style.css"/>
<link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
  <!-- header -->
  <?php include_once "http://".$_SERVER['SERVER_NAME']."/header.php"; ?>
  <!-- end of header -->
  <div id="container">   
    <div id="iPadBox">
      <div id="iPadHead"></div>
      <div id="iPadScreen">
        <div id="iPadTitle"></div> 
        <div id="iPadContainer">
            <iframe class="frame" src="read_album.php" width="610px" height="840px" frameborder="0"></iframe>
        </div>
      </div>

      <div id="iPadFooter"> 
        <div class="home"><a href="http://<?=$_SERVER['SERVER_NAME']?>"><img src="pix/blank.gif" width="50" height="50" border="0" /></a></div>
      </div>  

  </div>
</div>
</body>
</html>