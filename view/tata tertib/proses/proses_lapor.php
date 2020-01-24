<?php 

include("../../../config/database.php");
date_default_timezone_set('Asia/Jakarta');

function nomor() {

	include("../../../config/database.php");

	$sql = "SELECT no_pelanggaran FROM data_pelanggaran ORDER BY no_pelanggaran DESC LIMIT 0,3";
	$query = mysqli_query($db, $sql);
	list ($no_temp) = mysqli_fetch_row($query);

	if ($no_temp == '') {
		$no_urut = 'LPR001';
		
	} else {
		$jum = substr($no_temp,3,6);
		$jum++;
		if($jum <= 9) {
			$no_urut = 'LPR00' . $jum;
		} elseif ($jum <= 99) {
			$no_urut = 'LPR0' . $jum;
		} elseif ($jum <= 999) {
			$no_urut = 'LPR' . $jum;
		} elseif ($jum <= 9999) {
			$no_urut = 'LP' . $jum;
		} elseif ($jum <= 99999) {
			$no_urut = 'L' . $jum; 	
		} else {
			die("Nomor urut melebih batas");		
		}
	}
	return $no_urut;
}

$nomor = nomor();


$nis 					=	$_POST['nis'];
$nama 					=	$_POST['nama'];
$kelas 					=	$_POST['kelas'];
$isi_pelanggaran		=	$_POST['isi_pelanggaran'];
$jenis_pelanggaran		=	$_POST['jenis_pelanggaran'];
$tanggal_kejadian		=	$_POST['tanggal_kejadian'];
$tempat_kejadian		=	$_POST['tempat_kejadian'];
$nama_saksi				=	$_POST['nama_saksi'];
$nis_pelapor			=	$_POST['nis_pelapor'];
$nama_pelapor			=	$_POST['nama_pelapor'];
$kelas_pelapor			=	$_POST['kelas_pelapor'];
$waktu					=	date('d-m-Y H:i:s');
$status					=	'N';

$qry_input = "INSERT INTO data_pelanggaran VALUES ('', '$nomor', '$nis', '$nama', '$kelas', '$isi_pelanggaran', '$jenis_pelanggaran', '$tanggal_kejadian', '$tempat_kejadian', '$nama_saksi', '$nis_pelapor', '$nama_pelapor', '$kelas_pelapor', '$waktu', '', '$status', '')";
$exe_input = mysqli_query($db, $qry_input);

if (!$qry_input){
	echo "<script>window.location = '../lapor.php?alert=gagal'</script>";
} else {
	echo "<script>window.location = '../no_pelanggaran.php?no_pelanggaran=$nomor'</script>";
}

?>