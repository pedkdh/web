<?php
$idx = $_POST[idx];
$xml = '<?xml version="1.0" encoding="EUC-KR"?>';
$xml = '<data>';
$xml .= "<result>YES</result>";
$xml .= "<message/>";
$xml .= "<app>";
$xml .= "<userid>musicdn123</userid>";
$xml .= "<hash>0c0425fd45eac23a</hash>";
$xml .= "<idx>".$idx."</idx>";
$xml .= "<pur_idx>".$idx."</pur_idx>";
$xml .= "<div>V</div>";
$xml .= "<free>0</free>";
$xml .= "<file_type>0</file_type>";
$xml .= "<flag>2</flag>";
$xml .= "<pay_type/>";
$xml .= "</app>";
$xml .= "</data>";
header('Content-Type: text/xml;  charset=euc-kr;');
echo $xml;



