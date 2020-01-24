<?php
	include '../../config/database.php';

	$nama_tatib 		=	$_GET['nama_tatib'];

	$qry_del_jenis_tatib	=	"DELETE FROM jenis_tatib WHERE nama_tatib = '$nama_tatib'";
	$exe_del_jenis_tatib	=	mysqli_query($db, $qry_del_jenis_tatib);

	if($exe_del_jenis_tatib){
		$qry_del_jenis_pelanggaran	=	"DELETE FROM jenis_pelanggaran WHERE nama_pelanggaran = '$nama_tatib'";
		$exe_del_jenis_pelanggaran	=	mysqli_query($db, $qry_del_jenis_pelanggaran);

		echo "<script>window.location = '../jenis_tatib.php?alert=berhasil_hapus'</script>";
	}
?>