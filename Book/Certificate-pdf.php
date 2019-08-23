<?php
$num = $_GET[booknum];
$serial = $_GET[serial];

if ($serial == "Y") {
	$url = '<download url="http://serial.bookcube.com/'.substr($num,0,6).'/'.substr($num,0,9).'.ppub"/>' ;
} elseif ($serial == "N") {
	$url = '<download url="http://bpdf.bookcube.com/'.substr($num,0,4).'/'.substr($num,4,9).'/'.substr($num,0,9).'00'.'.ppdf"/>' ;
}


$xml = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
$xml .= '<bookplayer version="1.0">';
$xml .= '<cert url=""/>';
$xml .= $url;
$xml .= "</bookplayer>";
header('Content-type: text/xml');
echo $xml;

