<?
$serial_num = $_GET[serial_num];
$split_num = $_GET[split_num];
$url = 'bookcubeshelf://pedkdh.dothome.co.kr/Book/Certificate.php?serial=Y&booknum='.$serial_num.$split_num;



echo "<script> 
document.location.href='$url'; 
</script>"; 
?>