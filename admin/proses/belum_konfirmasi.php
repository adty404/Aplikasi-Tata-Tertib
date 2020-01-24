<?php
	include '../../config/database.php';
	date_default_timezone_set('Asia/Jakarta');

	$no_pelanggaran				=	$_GET['no_pelanggaran'];
	$waktu						=	date('d-m-Y H:i:s');

	$qry_update	=	"UPDATE data_pelanggaran SET status='P' WHERE no_pelanggaran='$no_pelanggaran'";
	$exe_update	=	mysqli_query($db, $qry_update);

	if($exe_update){
		$qry_input	=	"UPDATE data_pelanggaran SET waktu_konfirmasi = '$waktu', status2 = 'Belum Dikonfirmasi' WHERE no_pelanggaran = '$no_pelanggaran'";
		$exe_input	=	mysqli_query($db, $qry_input);

		echo "<script>window.location = '../konfirmasi_pelanggaran2.php?alert=berhasil_edit'</script>";
	}else{
		echo "<script>window.location = '../konfirmasi_pelanggaran2.php?alert=gagal_edit'</script>";
	}
?>