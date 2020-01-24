<?php
include '../../config/database.php';

$nama_pelanggaran 			=	$_POST['nama_pelanggaran'];

$qry_cek	=	"SELECT * FROM jenis_pelanggaran WHERE nama_pelanggaran = '$nama_pelanggaran'";
$exe_cek	=	mysqli_query($db, $qry_cek);
$cr_cek		=	mysqli_num_rows($exe_cek);

if($cr_cek>0){
	echo "<script>window.location = '../add_jenis_pelanggaran.php?alert=gagal'</script>";
}else{
	$qry_input 	=	"INSERT INTO jenis_pelanggaran VALUES ('$nama_pelanggaran')";
	$exe_input	=	mysqli_query($db, $qry_input);
			
	echo "<script>window.location = '../add_jenis_pelanggaran.php?alert=berhasil'</script>";
}
?>