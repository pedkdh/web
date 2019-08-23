<?php
$tidx = $_GET[novelidx];
$vidx = $_GET[volidx];


$xml = '<script>parent.document.getElementById('use_toon365').innerHTML = "0";</script>';
$xml .= '<script>window.onload = function() { window.parent.location.href = "com.mpion.mpcartoon365://novel365.asp?{\"tidx\":\"'.$tidx.'\"vidx\":\"'.$vidx.'\",\"gidx\":\"2\",\"taster\":\"N\"}"; }</script>';

header('Content-type: text/xml');
echo $xml;

