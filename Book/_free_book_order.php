<?php
$num = $_POST[book];
$num1 = $_POST[book_num];

$xml = '{';
$xml .= '"success" : true,';
$xml .= '"book_list" : ["'.$num.$num1.'"]';
$xml .= "}";
header('Content-type: text/html');
echo $xml;



