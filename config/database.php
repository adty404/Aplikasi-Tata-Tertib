<?php
/**
 * Namafile : database.php 
 * ----------------------------*/

$dbhost = 'localhost'; 
$dbuser = 'root';     // ini berlaku di xampp
$dbpass = '';         // ini berlaku di xampp
$dbname = 'tata_tertib';

// melakukan koneksi ke database
$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

// cek koneksi yang kita lakukan berhasil atau tidak
if ($db->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
	die('Maaf koneksi gagal: '. $db->connect_error);
}

?>