<?php

$idx = $_GET[idx];

$xml = '<script type="text/javascript">self.location = "down_init.php?idx='.$idx.'&file_list='.$file_list.'&down_type=point";</script>';
header('Content-Type: text/html; charset=EUC-KR');
echo $xml;



