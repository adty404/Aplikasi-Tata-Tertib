<?php
	include '../../config/database.php';

	$nis				=	$_POST['nis'];
	$nama 				=	$_POST['nama'];
	$kelas 				=	$_POST['kelas'];
	$jurusan 			=	$_POST['jurusan'];

	$qry_update	=	"UPDATE tbl_siswa SET nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE nis='$nis'";
	$exe_update	=	mysqli_query($db, $qry_update);

	if($exe_update){
		echo "<script>window.location = '../data_siswa.php?alert=berhasil_edit'</script>";
	}else{
		echo "<script>window.location = '../data_siswa.php?alert=gagal_edit'</script>";
	}
?>