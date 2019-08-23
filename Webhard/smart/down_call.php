<?php
$idx = $_GET[idx];
$purchase_idx = $_GET[purchase_idx];
$xml = "<script>";

$xml .= 'parent.nfile_downloads_hash("17799997", "V1ROc2IxcElRbXhaV0VwelRtcFpORTVSUFQwPQ==", "'.$idx.'", "'.$purchase_idx.'", "1246");';

$xml .= "</script>";
header('Content-Type: text/html; charset=EUC-KR');
echo $xml;

