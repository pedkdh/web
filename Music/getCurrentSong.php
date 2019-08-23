<?php
$bit = $_GET[bit];
$channelId = $_GET[channelId];



$url = 'https://radio.genie.co.kr/v1/play/getCurrentSong?svc=IV&itn=Y&unm=301009615&apvn=4000&uxtk=3010096151889.962&mts=Y&bit='.$bit.'&flacsvc=&fflag=&channelId='.$channelId;


header("Location: $url"); 




