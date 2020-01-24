<?php
	include '../../config/database.php';

	$gnama_pelanggaran					=	$_GET['nama_pelanggaran'];
	$nama_pelanggaran					=	$_POST['nama_pelanggaran'];

	$qry_update	=	"UPDATE jenis_pelanggaran SET nama_pelanggaran = '$nama_pelanggaran' WHERE nama_pelanggaran = '$gnama_pelanggaran'";
	$exe_update	=	mysqli_query($db, $qry_update);

	if($exe_update){
		echo "<script>window.location = '../jenis_pelanggaran.php?alert=berhasil_edit'</script>";
	}else{
		echo "<script>window.location = '../jenis_pelanggaran.php?alert=gagal_edit'</script>";
	}
?>