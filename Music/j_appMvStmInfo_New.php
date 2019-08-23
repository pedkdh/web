<?php
$xvnm = $_POST[xvnm];
$qa = $_POST[qa];


$url = 'https://app.genie.co.kr/Iv3/Player/j_appMvStmInfo_New.asp?svc=IV&tct=&dcd=ANDROID_ID%3A366f773054a50df9&ovn=7.1.2&apvn=40405&stk=eWk2RnFLYm05RFc3SE9pdEJLclBMQT09&uxtk=30100961567691.758&mts=Y&lpr=&unm=301009615&xgnm=&dvm=Redmi+Note+4&uip=192.168.137.222&qa='.$qa.'&xvnm='.$xvnm;


header("Location: $url"); 




