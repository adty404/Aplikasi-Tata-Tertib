<?php
	include '../../config/database.php';

	$id 		=	$_GET['id'];

	$qry_del_isi_tatib	=	"DELETE FROM isi_tatib WHERE id = '$id'";
	$exe_del_isi_tatib	=	mysqli_query($db, $qry_del_isi_tatib);

	if($exe_del_isi_tatib){
		echo "<script>window.location = '../pilih_isi_tatib.php?alert=berhasil_hapus'</script>";
	}
?>