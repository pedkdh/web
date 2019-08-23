<?php
$idx = $_POST[idx];
$xml = '{"result":true,"message":"","app":{"3716220":{"userid":"musicdn","hash":"272b63d699e21e35890b49319cec98047851379e457eb4c54f8b0a105d57db7d","idx":"'.$idx.'","pur_idx":86035433,"div":"V","free":"0","file_type":"0","flag":"2","pay_type":"bonus"}}}';
header('Content-Type: text/html; charset=EUC-KR');
echo $xml;



