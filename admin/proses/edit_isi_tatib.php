<?php
	include '../../config/database.php';

	$id							=	$_GET['id'];
	$isi_tatib					=	$_POST['isi_tatib'];

	$qry_update	=	"UPDATE isi_tatib SET isi = '$isi_tatib' WHERE id = '$id'";
	$exe_update	=	mysqli_query($db, $qry_update);

	if($exe_update){
		echo "<script>window.location = '../pilih_isi_tatib.php?alert=berhasil_edit'</script>";
	}else{
		echo "<script>window.location = '../edit_isi_tatib.php?alert=gagal_edit'</script>";
	}
?>