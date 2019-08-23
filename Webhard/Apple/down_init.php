<?php
$idx = $_GET[idx];
$xml = '</script><script type="text/javascript">parent.mmsv_payment_chkmureka_call_theme("musicdn", "abdc45aa830df60d6a481cc1328bea9512d9ddcb5cfe1fc2abfaa1625c44a086", "'.$idx.'", "'.$idx.'", "0");</script>';
header('Content-Type: text/html; charset=EUC-KR');
echo $xml;



