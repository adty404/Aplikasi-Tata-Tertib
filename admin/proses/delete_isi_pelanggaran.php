<?php
	include '../../config/database.php';

	$id 		=	$_GET['id'];

	$qry_del_isi_pelanggaran	=	"DELETE FROM isi_pelanggaran WHERE id = '$id'";
	$exe_del_isi_pelanggaran	=	mysqli_query($db, $qry_del_isi_pelanggaran);

	if($exe_del_isi_pelanggaran){
		echo "<script>window.location = '../pilih_isi_pelanggaran.php?alert=berhasil_hapus'</script>";
	}
?>