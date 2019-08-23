<?php
$idx = $_POST[idx];

$xml = '_free|musicdn|*E831B9EEE064E72B59C9A84BCCA476486109DF2B|0|'.$idx.'|';
header('Content-Type: text/html; charset=EUC-KR');
echo $xml;



