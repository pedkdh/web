<?php
$num = $_GET[book];
$xml .= '<root>';
$xml .= '<row user_num="" order_num="" book_num="'.$num.'" title="" subtitle="" split_num="00" file_type="A" name="" author="" publisher="" service_type="buy" expire_date="" isbn="" fixed_price="0" series_num="" view_yn="Y" />';
$xml .= "</root>";
header('Content-type: text/xml');
echo $xml;



