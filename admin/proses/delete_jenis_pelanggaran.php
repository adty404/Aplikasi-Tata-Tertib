<?php
	include '../../config/database.php';

	$nama_pelanggaran 		=	$_GET['nama_pelanggaran'];

	$qry_del_jenis_pelanggaran	=	"DELETE FROM jenis_pelanggaran WHERE nama_pelanggaran = '$nama_pelanggaran'";
	$exe_del_jenis_pelanggaran	=	mysqli_query($db, $qry_del_jenis_pelanggaran);

	if($exe_del_jenis_pelanggaran){
		echo "<script>window.location = '../jenis_pelanggaran.php?alert=berhasil_hapus'</script>";
	}
?>