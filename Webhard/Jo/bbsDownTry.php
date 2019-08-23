<?php
$idx = $_POST[idx];
$xml = '_ration|schein93|56839c5f66c28935605e4bcb85ec13b4b1ee0e1a1ecf5b3b51dc9b6237750608|0||'.$idx.'|F|0';
header('Content-Type: text/html; charset=EUC-KR');
echo $xml;



