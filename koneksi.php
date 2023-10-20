<?php
	$host = 'prognet.localnet';
	$user = '2205551144';
	$pass = '2205551144';
	$db = 'db_2205551144';

	$conn = new mysqli($host, $user, $pass, $db);
	
	if($conn){
		//echo "Koneksi Berhasil";
	}

	mysqli_select_db($conn, $db);
?>
