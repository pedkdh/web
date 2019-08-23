<?php
$idx = $_POST[idx];

$xml = '<script type="text/javascript">parent.mmsv_payment("'.$idx.'","point","0","10");</script>';
header('Content-Type: text/html; charset=EUC-KR');
echo $xml;



