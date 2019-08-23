<?php
$bit = $_POST[bit];
$xgnm = $_POST[xgnm];
$sq = $_POST[sq];


$url = 'http://www.genie.co.kr/player/playStmInfo.json?sq='.$sq.'&xgnm='.$xgnm.'&bit='.$bit.'&uxnm=301009615&uxtk=3010096151889.962&ualt=&cdm=http&previewYn=Y';


header("Location: $url"); 




