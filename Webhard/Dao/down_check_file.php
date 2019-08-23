<?php
$file_list = $_POST{down_list};
$idx = $_POST[idx];

$xml = '<script type="text/javascript">self.location = "down_init_file.php?idx='.$idx.'&file_list='.$file_list.'&down_type=point";</script>';
header('Content-Type: text/html; charset=EUC-KR');
echo $xml;



