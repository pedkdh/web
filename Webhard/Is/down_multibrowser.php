<?php
$idx = $_POST[idx];

$xml = '<div id="client" style="display:none">';
$xml .= "<form name='frm' action ='http://127.0.0.1:9659' method='POST' target='client_hidden'>";
$xml .= '<textarea rows="20" cols="50" name="DOWNLOAD">';
$xml .= '{';
$xml .= '"UserID" : "musicdn",';
$xml .= '"UserPW" : "0b098eb49cb4e6f7b2e30f0957d13c3b6acd14f092bddc4f938a3d5c40002437",';
$xml .= '"TYPE"   : "0",';
$xml .= '"IDX"    : "'.$idx.'",';
$xml .= '"IDX_"   : "82977612",';
$xml .= '"FREE"   : "FN",';
$xml .= '"FLAG"   : "1",';
$xml .= '"COUNT"  : "0"';
$xml .= "}";
$xml .= "</textarea>";
$xml .= "</form>";
$xml .= '"<iframe name="client_hidden" width="0px" height="0px"></iframe>';
$xml .= "<script>document.frm.submit();/*setTimeout(function(){ top.parent.location.reload(); }, 3000);*/</script>";
$xml .= "</div>";

header('Content-type: text/html');
echo $xml;




