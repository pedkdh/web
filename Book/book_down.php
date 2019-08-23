<?
$book = $_GET[book_num];
if ($book == "buy") {
	$book = $_GET[series_num];
	$url = 'bookcubeshelf://pedkdh.dothome.co.kr/Book/Certificate.php?serial=N&booknum='.$book;
} else {
	$url = 'bookcubeshelf://pedkdh.dothome.co.kr/Book/Certificate.php?serial=N&booknum='.$book;
}


echo "<script> 
document.location.href='$url'; 
</script>"; 
?>