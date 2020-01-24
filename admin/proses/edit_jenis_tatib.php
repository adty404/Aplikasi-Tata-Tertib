<?php
	include '../../config/database.php';

	$gnama_tatib				=	$_GET['nama_tatib'];
	$nama_tatib					=	$_POST['nama_tatib'];

	$qry_update	=	"UPDATE jenis_tatib SET nama_tatib = '$nama_tatib' WHERE nama_tatib = '$gnama_tatib'";
	$exe_update	=	mysqli_query($db, $qry_update);

	if($exe_update){
		$qry_update	=	"UPDATE jenis_pelanggaran SET nama_pelanggaran = '$nama_tatib' WHERE nama_pelanggaran = '$gnama_tatib'";
		$exe_update	=	mysqli_query($db, $qry_update);

		echo "<script>window.location = '../jenis_tatib.php?alert=berhasil_edit'</script>";
	}else{
		echo "<script>window.location = '../jenis_tatib.php?alert=gagal_edit'</script>";
	}
?>