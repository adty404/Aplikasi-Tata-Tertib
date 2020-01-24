<?php
include '../../config/database.php';

if (isset($_POST['login_admin'])) {
	
	$username			     	=	$db->real_escape_string(addslashes(trim($_POST['username'])));
	$password	         		=	$db->real_escape_string(sha1($_POST['password']));

	$q = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	// eksekusi query
	$e = mysqli_query($db, $q);
	// hitung hasil dan cek ada atau tidaknya data
	$is_exist = mysqli_num_rows($e);
	
	if($is_exist>0){
	// keluarkan hasil
		session_start();
		$r = mysqli_fetch_assoc($e);
		$_SESSION['nama_lengkap'] 	= $r['nama']; // set session untuk nama
		$_SESSION['username'] 		= $r['username']; // set session untuk username
		$_SESSION['password'] 		= $r['password']; // set session untuk password

		echo "<script>window.location = '../index.php'</script>";
	}else{
		echo "<script>window.location = '../login.php?alert=gagal_ditemukan'</script>";
	}
}
?>