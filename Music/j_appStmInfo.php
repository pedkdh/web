<?php
$bitrate = $_POST[bitrate];
if ($bitrate == "")
	$bitrate = $_GET[xbit];
$xgnm = $_POST[xgnm];
if ($xgnm == "")
	$xgnm = $_GET[xgnm];


if ($bitrate == "f16") {
	$bitrate = 1000 ;
} elseif ($bitrate == "f96") {
	$bitrate = 1000 ;
} elseif ($bitrate == "f12") {
	$bitrate = 1000 ;
} 

$url = 'http://app.genie.co.kr/Iv3/Player/j_appStmInfo.asp?svc=IV&tct=&dcd=ANDROID_ID%3A366f773054a50df9&ovn=7.1.2&itn=Y&unm=301009615&apvn=40405&stk=eWk2RnFLYm05RFc3SE9pdEJLclBMQT09&uxtk=30100961567691.758&mts=Y&lpr=&dvm=Redmi+Note+4&uip=192.168.137.204&xgnm='.$xgnm.'&xsvc=MP3FMC&bitrate='.$bitrate.'&flacsvc=&fflag=';


header("Location: $url"); 




