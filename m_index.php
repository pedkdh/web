<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Pedkdh's mobile home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
</head>

<body>
<div data-role="page" data-theme="c">
  <div data-role="header">
    <a href="http://<?=$_SERVER['SERVER_NAME']?>/m_index.php" data-icon="home">Home</a>
    <h1>Pedkdh's Home</h1>
  </div>
  <div data-role="content">
    <ul data-role="listview" data-inset="true" data-theme="b">
      <li><a href="http://<?=$_SERVER['SERVER_NAME']?>/juicebox_gallery/gallery1/"><img src="images/iphoto.png" target="_blank"><h2>Gallery</h2></a></li>      
      <li><a href="ftp://pogo.pedkdh.ml:8521"><img src="images/transmit.png" target="_blank"><h2>FTP</h2></a></li>
      <li><a href="http://pogo.pedkdh.ml:8591"><img src="images/transmission.png" target="_blank"><h2>Transmission</h2></a></li>
      <li><a href="https://<?=$_SERVER['SERVER_NAME']?>:10000"><img src="images/webmin.png" target="_blank"><h2>Webmin</h2></a></li>
    </ul>
  </div>
</div>
</body>
</html>
