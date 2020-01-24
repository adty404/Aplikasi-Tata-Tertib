<?php
include '../../config/database.php';

$status 	=	$_GET['status'];

if ($status == 'N') {
	echo "<script>window.location='belum/belum.php'</script>";
}else if ($status == 'P') {
	echo "<script>window.location='sedang/sedang.php'</script>";
}else if ($status == 'Y') {
	echo "<script>window.location='sudah/sudah.php'</script>";
}

?>