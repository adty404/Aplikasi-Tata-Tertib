<?php
include '../../config/database.php';

$jenis_tatib					=	$_POST['jenis_tatib'];
$isi_tatib						=	$_POST['isi_tatib'];

$qry_cek	=	"SELECT * FROM isi_tatib WHERE isi = '$isi_tatib'";
$exe_cek	=	mysqli_query($db, $qry_cek);
$cr_cek		=	mysqli_num_rows($exe_cek);

if($cr_cek>0){
	echo "<script>window.location = '../add_isi_tatib.php?alert=gagal'</script>";
}else{
	$qry_input 	=	"INSERT INTO isi_tatib VALUES ('', '$jenis_tatib', '$isi_tatib')";
	$exe_input	=	mysqli_query($db, $qry_input);

	echo "<script>window.location = '../add_isi_tatib.php?alert=berhasil'</script>";
}
?>