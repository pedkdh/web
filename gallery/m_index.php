<!-- ###################################################################################################
 [MOBILE VERSION]

 showing gallery directory and thumbnail for juicebox.
 by nekojp@naver.com (http://blog.naver.com/nekojp)     
 (2013.Aug.27)    

- 요구사항
1. 웹서버 (아파치 또는 nginx, lighttpd 등)
2. PHP 5.x 이상 설치

- 설치
1. 갤러리 디렉토리를 웹서버에 만든다. (예: /gallery)
2. 쥬스박스빌더로 앨범을 만들고 이 폴더 전체를 갤러리 디렉토리에 업로드한다. (예: /gallery/my_trip)
3. 이 'm_index.php' 파일을 갤러리 디렉토리에 업로드한다.
4. 갤러리에 접속한다. (예: http://my_domain.com/gallery)
 ################################################################################################### -->
 
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>J&amp;W&#39;s mobile gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
</head>

<body>
<div data-role="page" data-theme="c">
  <div data-role="header">
    <a href="http://<?=$_SERVER['SERVER_NAME']?>/m_index.php" data-icon="home">Home</a>
    <h1>Web Gallery</h1>
  </div>
  <div data-role="content">
    <ul data-role="listview" data-theme="c">
    <!-- reading album directory and thumbnail -->
    <?php
    $base_dir = "./";
    $dir = (scandir($base_dir));
    
    for($i=0;$i<count($dir);$i++) {
      if(is_dir($dir[$i+1]) && $dir[$i+1] != "." && $dir[$i+1] != ".." && $dir[$i+1] != "pix") {
        $jb_xml = simplexml_load_file($dir[$i+1]."/config.xml");
        $galleryTitle = $jb_xml->attributes()->galleryTitle;
        $thumbURL = $dir[$i+1]."/".$jb_xml->image->attributes()->thumbURL;
        echo "<li><a href=\"./".$dir[$i+1]."/index.html\"><img src=\"".$thumbURL."\">&nbsp;".$galleryTitle."</a></li>\n";
      }
    }    
    ?>
    </ul>
  </div>
</div>
</body>
</html>