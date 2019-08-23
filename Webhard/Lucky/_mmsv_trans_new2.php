<?php
$mmsv_file_no = $_POST[mmsv_file_no];
$mmsv_files = $_POST[mmsv_files];
$mmsv_files = "mmsv_bbs_download_item( '".$mmsv_files."', '0','1' );";
$mmsv_files = str_replace("mmsv_bbs_download_item( '||", "mmsv_bbs_download_item( '", $mmsv_files);
$mmsv_files = str_replace("<>||", "', '0','1' ); mmsv_bbs_download_item( '", $mmsv_files);
$mmsv_files = str_replace("/||", "/", $mmsv_files);
$mmsv_files = str_replace("||", "', '", $mmsv_files);
$mmsv_files = str_replace("<>", "', '0','1' ); mmsv_bbs_download_item( '", $mmsv_files);

$xml = "<script language='javascript' src='/include/mmsv_new2_test.js'></script>";
$xml .= "<script language='javascript'>";
$xml .= "mmsv_bbs_download_init( '".$mmsv_file_no."', 'TVRjd056Yz1iVzkyYVdWa2JnPT1NVFEzTVRBNE56TTNNQT09TUdNd05ESTFabVEwTldWaFl6SXpZUT09TkRFNE16QT0=', 'MTQ3MTA4NzM3MA==', '1.0.0.0.3' );";
$xml .= $mmsv_files;
$xml .= "mmsv_bbs_download_end('TVRjd056Yz1iVzkyYVdWa2JnPT1NVFEzTVRBNE56TTNNQT09TUdNd05ESTFabVEwTldWaFl6SXpZUT09TkRFNE16QT0=', 'MTQ3MTA4NzM3MA==');";
$xml .= '</script>';
header('Content-Type: text/html');
echo $xml;