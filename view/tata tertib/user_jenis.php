<?php
session_start();

$dbhost = 'localhost'; 
$dbuser = 'root';     
$dbpass = '';         
$dbname = 'tata_tertib';

$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($db->connect_error) {
	die('Maaf koneksi gagal: '. $db->connect_error);
}



$nama_pelanggaran = $_POST['jenis_pelanggaran'];

$_SESSION['nama_pelanggaran'] = $nama_pelanggaran;

$sql = mysqli_query($db,"SELECT * FROM isi_pelanggaran WHERE nama_pelanggaran = '$nama_pelanggaran' ");

$sql1 = mysqli_query($db,"SELECT * FROM isi_pelanggaran WHERE nama_pelanggaran = '$nama_pelanggaran' ");

$q = mysqli_fetch_array($sql);
$a = $q['isi'];

	if (empty($q)) {
		echo "<option>-- Tidak ada isi pelanggaran dari  " .$nama_pelanggaran. " --</option>";
	}else{
		echo "<option>-- Pilih isi pelanggaran --</option>";

		while ($row = mysqli_fetch_array($sql1)) {
			?>
				<option style="background-color: #aab7f7; color: white;"><?php echo $row['isi']; ?></option>
			<?php
		}
	}
?>	