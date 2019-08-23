<?php
$idx = $_POST[idx];
$xml = '{"result":true,"message":"","app":{"13225460":{"userid":"schein93","hash":"8f1d36f0119b2dd5febbb829276e8c510a8fee4c1ba7c9adc803fb266c9124b5","idx":"'.$idx.'","pur_idx":156167877,"div":"V","free":"0","file_type":"0","flag":"2","pay_type":"bonus"}}}';

header('Content-Type: text/xml;  charset=euc-kr;');
echo $xml;



