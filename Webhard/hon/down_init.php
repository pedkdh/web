<?php
$idx = $_GET[idx];

$xml = '<script type="text/javascript">parent.nfile_download("musicdn", "*79C5BA104706069E06E52796D68509BA9DE54E80", "'.$idx.'", "'.$idx.'", "F", "filehon.com", 1);parent.location.reload();</script>';
header('Content-Type: text/html; charset=EUC-KR');
echo $xml;



