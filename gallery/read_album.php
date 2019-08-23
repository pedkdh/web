<!-- stylesheet -->
<style type="text/css">
  body {
    color: #fff;
    text-decoration: none;
    margin: 0;
    font: 12px Arial, Helvetica, Geneva, sans-serif;
  }

  a {
    color: #6a98ca;
    text-decoration: none;
    border-style: none;
  }

  a:hover {
    color: #fbcc18;
    text-decoration: none;
    border-style: none;
  }
  
  ol {
    margin: 10px auto 0px auto ;
  }

  ol li {
    margin-left: 20px;
  }

  hr {
    border: none 0; 
    border-top: 2px groove #333;
    width: 100%;
    height: 1px;
  }

  img {
    border: 0px;
  }
  
  .hrfix {
  margin-left: -10px;
  width: 550px;
  }
</style>

<!-- start logic --> 
<ol>
<?php
$base_dir = "./";
$dir = (scandir($base_dir)); // 현재 디렉토리에서 시작

for($i=0;$i<count($dir);$i++) {
  if(is_dir($dir[$i+1]) && $dir[$i+1] != "." && $dir[$i+1] != ".." && $dir[$i+1] != "pix") {
    // 앨범 디렉토리에서 xml 파일을 읽는다.
    $jb_xml = simplexml_load_file($dir[$i+1]."/config.xml");
    $galleryTitle = $jb_xml->attributes()->galleryTitle;
    $thumbURL = $dir[$i+1]."/".$jb_xml->image->attributes()->thumbURL;

    // 링크를 만들고, 썸네일과 앨범타이틀을 보여준다.
    echo "<li><a href=\"./".$dir[$i+1]."/index.html\"><img src=\"".$thumbURL."\">&nbsp;".$galleryTitle."</a></li>\n";
    echo "<hr class=\"hrfix\" />\n";
  }   
}  
?>
</ol>
<!-- end of logic -->