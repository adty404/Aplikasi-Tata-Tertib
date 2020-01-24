<?php
include '../../config/database.php';

$nis 			=	$_POST['nis'];
$nama 			=	$_POST['nama'];
$kelas 			=	$_POST['kelas'];
$jurusan 		=	$_POST['jurusan'];

$qry_cek	=	"SELECT * FROM tbl_siswa WHERE nis = '$nis'";
$exe_cek	=	mysqli_query($db, $qry_cek);
$cr_cek		=	mysqli_num_rows($exe_cek);

if($cr_cek>0){
	echo "<script>window.location = '../add_data_siswa.php?alert=gagal'</script>";
}else{
	$qry_input 	=	"INSERT INTO tbl_siswa (nis, nama, kelas, jurusan) VALUES ('$nis', '$nama', '$kelas', '$jurusan')";
	$exe_input	=	mysqli_query($db, $qry_input);
			
	echo "<script>window.location = '../add_data_siswa.php?alert=berhasil'</script>";
}
?>