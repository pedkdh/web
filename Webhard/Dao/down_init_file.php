<?php
$file_list = $_GET[file_list];
$xml = "<Script Language='JavaScript' Src='/js/mmsv_fi.js'></Script><script language='javascript'>mmsv_fileidownload('musicdn', '6125d92205859a64dcbb1c04b0c847e3b012134b', 0, '".$file_list.":Y::', '1');</script>";
header('Content-Type: text/html; charset=EUC-KR');
echo $xml;



