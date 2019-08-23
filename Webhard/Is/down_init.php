<?php
$idx = $_GET[idx];
$xml = '<script type="text/javascript">if(parent.nfile_download("musicdn", "0b098eb49cb4e6f7b2e30f0957d13c3b6acd14f092bddc4f938a3d5c40002437", "'.$idx.'", "82977612", "FN")) {parent.location.reload();}</script>';
header('Content-Type: text/html; charset=EUC-KR');
echo $xml;



