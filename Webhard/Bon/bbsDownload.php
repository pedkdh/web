<?php
$idx = $_POST[idx];

$xml = '{';
$xml .= "'res':'ok',";
$xml .= "'userid':'moviedn',";
$xml .= "'enc':'0c0425fd45eac23a',";
$xml .= "'idx':'".$idx."',";
$xml .= "'pidx':'713340063',";
$xml .= "'ssomon':[]";
$xml .= "}";
header('Content-type: text/html');
echo $xml;



