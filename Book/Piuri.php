<?php
$it_id = $_GET[it_id];
$it_id1 = substr($it_id, 0, 3);

$url = 'http://piuri.com/sub/eview3/reader/epub-link/'.$it_id1.'/'.$it_id.'.epub';


header("Location: $url"); 




