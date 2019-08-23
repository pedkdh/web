<?php
$clubid = $_POST[clubid];
$bbscode = $_POST[bbscode];
$idx = $_POST[idx];
$mmsv_files = $_POST[mmsv_files];
$mmsv_trans_file = $_POST[mmsv_trans_file];

$xml = "<form name='mmsvFormTrans' method='post' action='/file_share/basic/bbs.php'>";
$xml .= "<input type='hidden' name='clubid' value='".$clubid."'>";
$xml .= "<input type='hidden' name='bbscode' value='".$bbscode."'>";
$xml .= "<input type='hidden' name='idx' value='".$idx."'>";
$xml .= "<input type='hidden' name='dval' value='".$idx."'>";
$xml .= "<input type='hidden' name='pg_mode' value='mmsv_down'>";
$xml .= "<input type='hidden' name='mmsv_mode' value=''>";
$xml .= "<input type='hidden' name='mmsv_files' value='".$mmsv_files."'>";
$xml .= "<input type='hidden' name='mmsv_folders' value=''>";
$xml .= "<input type='hidden' name='mmsv_trans_folder' value=''>";
$xml .= "<input type='hidden' name='mmsv_trans_file' value='".$mmsv_trans_file."'>";

$xml .= "</form>";
$xml .= "<script language='javascript'>";
$xml .= "document.forms['mmsvFormTrans'].submit();";
$xml .= "</script>";
header('Content-Type: text/html; charset=euc-kr');
echo $xml;

