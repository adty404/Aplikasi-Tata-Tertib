<?php
	include '../../config/database.php';

	$id									=	$_GET['id'];
	$isi_pelanggaran					=	$_POST['isi_pelanggaran'];

	$qry_update	=	"UPDATE isi_pelanggaran SET isi = '$isi_pelanggaran' WHERE id = '$id'";
	$exe_update	=	mysqli_query($db, $qry_update);

	if($exe_update){
		echo "<script>window.location = '../pilih_isi_pelanggaran.php?alert=berhasil_edit'</script>";
	}else{
		echo "<script>window.location = '../edit_isi_pelanggaran.php?alert=gagal_edit'</script>";
	}
?>