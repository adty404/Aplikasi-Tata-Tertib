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



$nama_pelanggaran = $_POST['nama_pelanggaran'];

  $_SESSION['nama_pelanggaran'] = $nama_pelanggaran;

  $sql = mysqli_query($db,"SELECT * FROM isi_pelanggaran WHERE nama_pelanggaran = '$nama_pelanggaran'");

    ?>
    <option>-------Pilih isi pelanggaran-------</option>

  <?php
  while ($row = mysqli_fetch_array($sql)) {
    ?>


    <option style="background-color: #aab7f7; color: white;"><?php echo $row['isi']; ?></option>


    <?php
  }

?>