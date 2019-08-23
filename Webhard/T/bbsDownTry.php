<?php
$idx = $_POST[idx];

$xml = '_free|moviedn|abdc45aa830df60d6a481cc1328bea9512d9ddcb5cfe1fc2abfaa1625c44a086|0|'.$idx.'|';
header('Content-Type: text/html; charset=EUC-KR');
echo $xml;



