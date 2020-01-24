<?php
include '../../config/database.php';

$jenis_tatib							=	$_POST['jenis_tatib'];
$isi_pelanggaran						=	$_POST['isi_pelanggaran'];

$qry_cek	=	"SELECT * FROM isi_pelanggaran WHERE isi = '$isi_pelanggaran'";
$exe_cek	=	mysqli_query($db, $qry_cek);
$cr_cek		=	mysqli_num_rows($exe_cek);

if($cr_cek>0){
	echo "<script>window.location = '../add_isi_pelanggaran.php?alert=gagal'</script>";
}else{
	$qry_input 	=	"INSERT INTO isi_pelanggaran VALUES ('', '$jenis_tatib', '$isi_pelanggaran')";
	$exe_input	=	mysqli_query($db, $qry_input);

	echo "<script>window.location = '../add_isi_pelanggaran.php?alert=berhasil'</script>";
}
?>