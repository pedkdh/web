<?php
$cid = $_POST[cid];

$bitrate = $_POST[bitrate];




if ($bitrate == "CDQ") {
	$url = 'http://sa.mnet.com/api_v2/stream_gentoken.asp?type=1&bitrate=128&udid=357677060127804&dtype=CDQ&code=tkn_and_down_aod&mediaid='.substr($cid, 3);
} elseif ($bitrate == "MAQ") {
	$url = 'http://sa.mnet.com/api_v2/stream_gentoken.asp?type=1&bitrate=192&udid=357677060127804&dtype=MAQ&code=tkn_and_down_aod&mediaid='.substr($cid, 3);
} else {
	$url = 'http://sa.mnet.com/api_v2/stream_gentoken.asp?type=1&bitrate='.$bitrate.'&udid=357677060127804&dtype=aodn&code=tkn_and_down_aod&mediaid='.substr($cid, 3);
}

header("Location: $url"); 




