<?php
$idx = $_GET[idx];
$xml = '</script><script type="text/javascript">parent.mmsv_download("schein93", "31e7a77a2bcbfbdcafc4c637ddb1b2bd05ed2a70947a8b59758911d4bf51ddea", 0, "'.$idx.'", "'.$idx.'", "1", "V", 2);</script>';
header('Content-Type: text/html; charset=EUC-KR');
echo $xml;



