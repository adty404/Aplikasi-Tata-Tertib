<?php
	include '../../config/database.php';

	$nis 		=	$_GET['nis'];

	$qry_del_siswa	=	"DELETE FROM tbl_siswa WHERE nis = '$nis'";
	$exe_del_siswa	=	mysqli_query($db, $qry_del_siswa);

	if($exe_del_siswa){
		echo "<script>window.location = '../data_siswa.php?alert=berhasil_hapus'</script>";
	}
?>