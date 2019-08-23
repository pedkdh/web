<?php
$num = $_GET[book_num];

if ($num == "") {
	$serial_num = $_GET[serial_num];
	$split_num = $_GET[split_num];
	$url = 'http://serial.bookcube.com/'.$serial_num.'/'.$serial_num.$split_num.'.ppub' ;
} else {
	$url = 'http://bcb.bookcube.com/'.substr($num,0,4).'/'.substr($num,4,9).'/'.substr($num,0,9).'00'.'.ppub' ;
}



$xml = '<root><row error_num="0" cert_url="" download_url="'.$url.'"  /></root>';

header('text/xml; Charset=UTF-8');
echo $xml;



