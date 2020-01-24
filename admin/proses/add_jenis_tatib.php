<?php
include '../../config/database.php';

$nama_tatib 			=	$_POST['nama_tatib'];

$qry_cek	=	"SELECT * FROM jenis_tatib WHERE nama_tatib = '$nama_tatib'";
$exe_cek	=	mysqli_query($db, $qry_cek);
$cr_cek		=	mysqli_num_rows($exe_cek);

if($cr_cek>0){
	echo "<script>window.location = '../add_jenis_tatib.php?alert=gagal'</script>";
}else{
	$qry_input 	=	"INSERT INTO jenis_tatib VALUES ('$nama_tatib')";
	$exe_input	=	mysqli_query($db, $qry_input);

	$qry_input_pelanggaran 	=	"INSERT INTO jenis_pelanggaran VALUES ('$nama_tatib')";
	$exe_input_pelanggaran	=	mysqli_query($db, $qry_input_pelanggaran);
			
	echo "<script>window.location = '../add_jenis_tatib.php?alert=berhasil'</script>";
}
?>